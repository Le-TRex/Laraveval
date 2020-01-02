<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Breed extends Model
{
    protected $fillable = ['name', 'mainColor'];

    public function duck()
    {
        return $this->hasmany('App\Duck');
    }
}
