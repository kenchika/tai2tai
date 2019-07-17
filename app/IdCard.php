<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdCard extends Model
{
  protected $table='id_card';
  protected $fillable = [
      'id_card_number',
      'expiration_date'
  ];
  public function user(){
    return  $this->belongsTo(User::class);
  }
}
