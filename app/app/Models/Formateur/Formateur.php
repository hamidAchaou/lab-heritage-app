<?php

namespace App\Models\Formateur;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Personne;
use App\Traits\MorphType;

class Formateur extends Personne
{
    use HasFactory, MorphType;
}
