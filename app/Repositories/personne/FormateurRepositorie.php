<?php

namespace App\Repositories\personne;

use App\Repositories\BaseRepositorie;
use App\Models\Formateur\Formateur;

class FormateurRepositorie extends BaseRepositorie
{
    public function __construct(Formateur $formateur){
        parent::__construct($formateur);
    }

    public function paginate($perPage = 3, $type = 'formateur'){
        return parent::paginate($perPage, $type);
    }
    
    public function searchformateur($search){
        return Formateur::where('type', 'formateur')->where(function($query) use ($search) {
            $query->where('nom', 'like', '%' . $search . '%')
                  ->orWhere('prenom', 'like', '%' . $search . '%');
        })->paginate();
    }
}