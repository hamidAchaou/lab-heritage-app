<?php

namespace App\Repositories\personne;

use App\Repositories\BaseRepositorie;
use App\Models\Stagiaire\Stagiaire;

class StagiaireRepositorie extends BaseRepositorie
{
    public function __construct(Stagiaire $stagiaire){
        parent::__construct($stagiaire);
    }

    public function paginate($perPage = 3, $type = 'stagiaire'){
        return parent::paginate($perPage, $type);
    }
    

    public function searchstagiaire($search){
        return Stagiaire::where('type', 'stagiaire')->where(function($query) use ($search) {
            $query->where('nom', 'like', '%' . $search . '%')
                  ->orWhere('prenom', 'like', '%' . $search . '%');
        })->paginate();
    }
}
