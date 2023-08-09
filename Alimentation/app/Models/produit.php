<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prix',
        'photo',
        'categorie_id',
        'users_id',
        'description',
    ];



    public function categorie(){
        return $this->belongsTo(category::class,'categorie_id');
    }

    public function users(){
        return $this->belongsTo(User::class);
        }
}



