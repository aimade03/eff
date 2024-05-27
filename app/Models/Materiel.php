<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    public function employes(){
        return $this->belongsToMany(Employe::class,'affectations')->withPivot(['dateDebutAffectation','dateFinAffectation']);
    }
}
