<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','nbre_like'];


    //qui a rapport avec la table commantaires
    public function commentaires(){
    	return $this->hasMany('App\Models\Commantaire');
    }

}
