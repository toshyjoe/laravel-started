<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // tableau avec la liste des relations qu'il faut précharger :
    //protected $with = ['tasks'];

    //protected $fillable = ['name'];

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
