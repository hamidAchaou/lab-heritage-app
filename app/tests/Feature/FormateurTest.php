<?php

namespace Tests\Feature;

use App\Models\Formateur\Formateur;
use App\Repositories\personne\FormateurRepositorie;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class FormateurTest extends TestCase
{
    use DatabaseTransactions;

    public function test_index(): void
    {
        $response = new FormateurRepositorie(new Formateur());
        $response->paginate();
        $this->assertNotNull($response);
    }

    public function test_store(): void{
        $response = new FormateurRepositorie(new Formateur);
        $now = \Carbon\Carbon::now();
        $input = [
            'nom' => 'Ahlam',
            'prenom' => 'Saidi',
            'email' => 'ahlam@gmail.com',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        $response->create($input);
        $this->assertDatabaseHas('personnes', $input);
    }


    public function test_edit(): void{
        $response = new FormateurRepositorie(new Formateur);
        $response->find(1);
        $this->assertNotNull($response);
    }

    public function test_update(): void{
        $response = new FormateurRepositorie(new Formateur);
        $now = \Carbon\Carbon::now();
        $input = [
            'nom' => 'Ahlam',
            'prenom' => 'Saidi',
            'email' => 'ahlam@gmail.com',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $Formateur = Formateur::create($input);

        $response->find($Formateur->id);
        
        $inputUpdate = [
            'email' => 'ahlam2024@gmail.com' 
        ];
        $response->update($Formateur->id,$inputUpdate);
        $this->assertDatabaseHas('personnes', $inputUpdate);
    }

    public function test_show(): void{
        $response = new FormateurRepositorie(new Formateur);
        $response->find(1);
        $this->assertNotNull($response);
    }

    public function test_delete(): void{
        $response = new FormateurRepositorie(new Formateur);
        $now = \Carbon\Carbon::now();
        $input = [
            'nom' => 'Ahlam',
            'prenom' => 'Saidi',
            'email' => 'ahlam@gmail.com',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        $Formateur = Formateur::create($input);
        $response->find($Formateur->id);
        $this->assertNotNull($response);
        $response->delete($Formateur->id);
        $this->assertDatabaseMissing('personnes', $input);
    }

    public function test_search(): void{
        $response = new FormateurRepositorie(new Formateur);
        $input = 'a';
        $response->searchFormateur($input);
        $this->assertNotNull($response);
    }
}