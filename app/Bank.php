<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

  protected $table='bank_account';
  protected $fillable = [

      'account_number',
      'account_name',
      'bank_branch'
  ];
  public function User(){
    return $this->belongsTo(User::class);
  }
  public function Contact(){
    return $this->belongsTo(Contact::class);
  }
}
