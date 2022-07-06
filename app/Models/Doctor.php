<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hash;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ["name","email","contact","password","address"];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
}
