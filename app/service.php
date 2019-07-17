<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
  protected $table='service';
  protected $fillable = [
      'name',
      'type',
      'pricePerUnit',
      'unitNumber',
      'total',
  ];
  public function Invoice(){
    return  $this->belongsTo(Invoice::class);
  }
}
