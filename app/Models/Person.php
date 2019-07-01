<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
    	'ci','firstname','lastname','birthdate','phone','address'
    ];

    public function user()
    {
    	return $this->hasOne(User::class);
    }
}
