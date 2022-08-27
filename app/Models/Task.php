<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = "tasks";

    public function employee(){
        return $this->belongsToMany(Employee::class);
    }

    public function user(){
        return $this->hasManyThrough(User::class, Employee::class);
    }
}
