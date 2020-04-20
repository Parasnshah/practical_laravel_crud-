<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
	public function companies()
    {
        return $this->belongsTo(Company::class,'company');
    }
}
