<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
  protected $table='adress';
  protected $fillable = [
    'id',
    'number',
    'name',
    'city',
    'country',
    'zip_code',
    'contract_id'
  ];
  public function Contact(){
    return $this->belongsTo(Contact::class);
  }

}
