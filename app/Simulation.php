<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
	 protected $table='simulation';
    protected $fillable = [
      'name',
      'email',
      'degree',
  ];
}
