<?php

namespace App\Models\Stagiaire;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Personne;
use App\Traits\MorphType;

class Stagiaire extends Personne
{
    use HasFactory, MorphType;
}
