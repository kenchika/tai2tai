<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
  protected $table='contract';
  protected $fillable = [
    'contractAmount',
    'contractState',
    'startingDate',
    'signatureDate',
    'endingDate',
    'type',
    'missionType',
    'missionDetails',
    'payementDate',
    'payementHour',
    'payementMonthly',
    'payementDelay',
    'generationDate',
    'comment'
  ];
  public function Invoice()
  {
    return $this->hasMany('App\Invoice');
  }
  public function User()
  {
    return $this->belongsTo('App\User');
  }
  public function Contact()
  {
    return $this->belongsTo('App\Contact');
  }

}
