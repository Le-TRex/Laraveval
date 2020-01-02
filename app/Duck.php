<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duck extends Model
{
    protected $fillable = ['name', 'gender', 'age', 'breed_id'];
    
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
}