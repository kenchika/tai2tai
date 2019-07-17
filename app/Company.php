<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

  protected $table='company';
  protected $fillable = [
    'english_name',
    'chinese_name',
    'country',
    'phone_number',
    'tax_number',
    'adress',
    'registration_number',
    'registration_area',
    'capital_number'
  ];

  public function Contact(){
    return $this->belongsTo(Contact::class);
  }
}
