<?php

namespace Tests\Feature;

use App\Models\Stagiaire\Stagiaire;
use App\Repositories\personne\StagiaireRepositorie;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StagiaireTest extends TestCase
{
        use DatabaseTransactions;
    
        public function test_index(): void
        {
            $response = new StagiaireRepositorie(new Stagiaire());
            $response->paginate();
            $this->assertNotNull($response);
        }
    
        public function test_store(): void{
            $response = new StagiaireRepositorie(new Stagiaire);
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
            $response = new StagiaireRepositorie(new Stagiaire);
            $response->find(1);
            $this->assertNotNull($response);
        }
    
        public function test_update(): void{
            $response = new StagiaireRepositorie(new Stagiaire);
            $now = \Carbon\Carbon::now();
            $input = [
                'nom' => 'Ahlam',
                'prenom' => 'Saidi',
                'email' => 'ahlam@gmail.com',
                'created_at' => $now,
                'updated_at' => $now,
            ];
    
            $Stagiaire = Stagiaire::create($input);
    
            $response->find($Stagiaire->id);
            
            $inputUpdate = [
                'email' => 'ahlam2024@gmail.com' 
            ];
            $response->update($Stagiaire->id,$inputUpdate);
            $this->assertDatabaseHas('personnes', $inputUpdate);
        }
    
        public function test_show(): void{
            $response = new StagiaireRepositorie(new Stagiaire);
            $response->find(1);
            $this->assertNotNull($response);
        }
    
        public function test_delete(): void{
            $response = new StagiaireRepositorie(new Stagiaire);
            $now = \Carbon\Carbon::now();
            $input = [
                'nom' => 'Ahlam',
                'prenom' => 'Saidi',
                'email' => 'ahlam@gmail.com',
                'created_at' => $now,
                'updated_at' => $now,
            ];
    
            $Stagiaire = Stagiaire::create($input);
            $response->find($Stagiaire->id);
            $this->assertNotNull($response);
            $response->delete($Stagiaire->id);
            $this->assertDatabaseMissing('personnes', $input);
        }
    
        public function test_search(): void{
            $response = new StagiaireRepositorie(new Stagiaire);
            $input = 'a';
            $response->searchStagiaire($input);
            $this->assertNotNull($response);
        }
}