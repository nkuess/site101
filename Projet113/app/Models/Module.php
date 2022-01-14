<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable=['nomModule','form_id',];

    public function formation(){
        return $this->belongsTo('App\Models\Formation');
    }
}
