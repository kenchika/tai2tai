<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

  protected $table='contact';
  protected $fillable = [
    'name',
    'fonction',
    'phone_number',
    'adress_id',
    'bank_id'
  ];
  public function Contracts(){
    return $this->hasMany(Contract::class);
  }
  public function Bank()
  {
    return $this->hasOne(Bank::class);
  }
  public function Adress(){
    return $this->hasOne(Adress::class);
  }
  public function Company()
  {
    return $this->hasOne(Company::class);
  }
}
