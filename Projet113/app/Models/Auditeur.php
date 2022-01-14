<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditeur extends Model
{
    use HasFactory;

    protected $fillable =['nomAud','prenAud','mailAud','contactAud','maFormation','payAud',];

    public function formations(){
        $this->hasMany('App\Models\Formation','audit_id');
    }
}
