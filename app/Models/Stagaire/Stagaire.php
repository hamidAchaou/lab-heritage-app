<?php

namespace App\Models\Stagaire;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Personne;
use App\Traits\MorphType;

class Stagaire extends Personne
{
    use HasFactory, MorphType;
}
