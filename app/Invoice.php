<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $table='invoice';
  protected $fillable = [
      'invoiceStatus',
      'payementStatus',
      'supplierNumber',
      'companyTaxNumber',
      'initialAmount',
      'discount',
      'finalAmount',
      'invoiceDate',
      'invoiceNumber',
      'comment',
      'paymentTerm',
      'currency',
  ];
  public function Contract(){
    return  $this->belongsTo(Contract::class);
  }

  public function Service(){
    return $this->hasMany(Service::class);
  }
}
