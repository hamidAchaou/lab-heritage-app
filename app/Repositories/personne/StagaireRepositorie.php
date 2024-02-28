<?php

namespace App\Repositories\personne;

use App\Repositories\BaseRepositorie;
use App\Models\Stagaire\Stagaire;

class StagaireRepositorie extends BaseRepositorie
{
    public function __construct(Stagaire $stagaire){
        parent::__construct($stagaire);
    }

    public function paginate($perPage = 3, $type = 'stagaire'){
        return parent::paginate($perPage, $type);
    }
    

    public function searchstagaire($search){
        return Stagaire::where('type', 'stagaire')->where(function($query) use ($search) {
            $query->where('nom', 'like', '%' . $search . '%')
                  ->orWhere('prenom', 'like', '%' . $search . '%');
        })->paginate();
    }
}
