<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
    public function materiels(){
        return $this->belongsToMany(Materiel::class,'affectations')->withPivot(['dateDebutAffectation','dateFinAffectation']);
    }
}
