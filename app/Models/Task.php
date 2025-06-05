<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Task extends Model
{
    use HasFactory;

    //Para especificar que campos se pueden modificar al mismo tiempo
    protected $fillable = ['title', 'description', 'long_description'];

    public function toggleComplete(){
        $this -> completed = !$this -> completed;
        $this -> save();
    }


}
