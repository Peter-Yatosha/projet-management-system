<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    public function user(){
        return $this->belongsTo(User::class);
     }

     public function leaves(){
        return $this->belongsToMany(Leave::class);
     }

     public function task(){
      return $this->belongsToMany(Task::class);
     }
}
