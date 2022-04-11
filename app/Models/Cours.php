<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
       protected $guarded = []; //To protect all the field within the table

        public function user(){
        return $this->hasOne(User::class,'id','cours_author');

    }
}
