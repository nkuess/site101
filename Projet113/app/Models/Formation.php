<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = ['intitule','dateform','datefin','heure',
                            'lieu','prix','audit_id',];

    public function auditeurs(){
        return $this->belongsTo('App\Models\Auditeur');
    }
    public function modules(){
        return $this->hasMany('App\Models\Module');
    }
}
