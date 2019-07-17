<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }
        .bg-grey {
            background: #F3F3F3;
        }
        .text-right {
            text-align: right;
        }
        .w-full {
            width: 100%;
        }
        .small-width {
            width: 15%;
        }
        .resize {
          max-width:50%;
          max-height:50%;
        }
        .invoice {
            background: white;
            border: 1px solid #CCC;
            font-size: 14px;
            padding: 48px;
            margin: 20px 0;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body class="bg-grey">
  <form action="{{ route('invoice.save',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id , 'invoice_id' => $invoice->id])}}" method="get" name="contractpdf">
  @method('GET')
  <div class="container container-smaller">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1" style="margin-top:20px; text-align: right">
        <div class="btn-group mb-4">
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
          <div class="invoice">
            <div class="row">
              <div class="col-sm-6">
                <h4>From:</h4>
                <address>
                  <strong>{{$contract->User->name}}</strong><br>
                  with<br>
                  <strong>TAI2</strong><br>
                  F3097,Building 1, No.5500,Yuanjiang Rd,<br>
                  Minhang District, Shanghai <br>
                  E: gregoire.giroux@tai2tai.com
                </address>
              </div>
              <div class="col-sm-6 text-right">
                <img class="resize" src="/img/logoTai2.png" alt="logo">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <h4>To:</h4>
                <address>
                  {{$contract->Contact->Company->english_name}}<br>
                  {{$contract->Contact->name}}<br>
                  {{$contract->Contact->Company->adress}}<br>
                  P : {{$contract->Contact->phone_number}}
                </address>
              </div>
              <div class="col-sm-5 text-right">
                <table class="w-full">
                  <tbody>
                    <tr>
                      @if($invoice->invoiceNumber)
                      <th>Invoice Num:</th>
                      <td><input  class="border rounded" type="number" placeholder="invoice num" value="{{$invoice->invoiceNumber}}" name="invoiceNumber" required></td>
                      @else
                      <th>Invoice Num:</th>
                      <td><input  class="border rounded" type="number" placeholder="invoice num" value="{{count($contract->Invoice)}}" name="invoiceNumber" required></td>
                      @endif
                    </tr>
                    <tr>
                      <th>Invoice Date:</th>
                      <td><input  class="border rounded" type="date" value="{{date("Y-m-j")}}" placeholder="date YYYY/MM/DD" name="invoiceDate" required></td>
                    </tr>
                    <tr>
                      <th>Supplier Number: </th>
                      <td><input  class="border rounded" type="input" placeholder="client supplierNumber (optional)" value="{{$invoice->supplierNumber}}" name="supplierNumber"></td>
                    </tr>
                    <tr>
                      <th>Company Tax Number:</th>
                      <td><input  class="border rounded" type="input" placeholder="client Tax Number (optional)" value="{{$contract->Contact->Company->tax_number}}" name="companyTaxNumber"></td>
                    </tr>
                  </tbody>
                </table>

                <div style="margin-bottom: 0px">&nbsp;</div>

                <table class="w-full">
                  <tbody>
                    <tr class="well" style="padding: 5px">
                      <th style="padding: 5px"><div> Balance Due (YUAN) </div></th>
                      <td style="padding: 5px"><strong> ---- </strong></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table invoice-table">
                <thead style="background: #F5F5F5;">
                  <tr>
                    <th>Service List <div class="btn border rounded addService"> + </div>  <div class="btn border rounded rmService"> - </div></th>
                    <th>type</th>
                    <th>unit</th>
                    <th>per&nbsp;unit&nbsp;price</th>
                    <th class="text-right">Currency
                      <select  name="currency" required>
                        <option value="{{$invoice->currency}}" selected> {{$invoice->currency}}</option>     <!-- Payement Terms-->
                        <option value="CNY">CNY</option>
                        <option value="EUR">EUR</option>
                        <option value="USD">USD</option>
                      </select>
                    </th>
                  </tr>
                </thead>
                @php
                  $nb=0;
                @endphp
                <tbody class="service">
                  @foreach ($invoice->Service as $service)
                    @php
                      $nb++;
                    @endphp
                    <tr id="service{{$nb}}">
                      <td><strong><input class="border rounded" placeholder="name of the services" value="{{$service->name}}" type="input" name="serviceName{{$nb}}"></strong></td>
                      <td><select name="serviceType{{$nb}}">
                        <option value="{{$service->type}}" selected> {{$service->type}}</option>
                        <option value="Package">Package</option>
                        <option value="Days">Days</option>
                        <option value="Hours">Hours</option>
                      </select></td>
                      <td><input class="border rounded" value="{{$service->unitNumber}}" placeholder="number of unit" type="number" name="serviceUnitNumber{{$nb}}"></td>
                      <td><input class="border rounded" value="{{$service->pricePerUnit}}" placeholder="unit price" type="number" name="servicePerUnit{{$nb}}"></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div><!-- /table-responsive -->
              <table class="table invoice-total">
                <tbody>
                  <tr>
                    <td class="text-right"> discount (use positive value & optionall)</td>
                    <td class="text-right small-width"><input  class="border rounded" type="number" placeholder="potential discount" value="{{$invoice->discount}}" name="discount"></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Balance Due :</strong></td>
                    <td class="text-right small-width">---</td>
                  </tr>
                </tbody>
              </table>

              <hr>
              <div class="nb">
                <input type="hidden" name="nb" id="nb" value="{{$nb}}">
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="invbody-terms">
                    <select  name="paymentTerm" required>
                      <option value="{{$invoice->paymentTerm}}" selected> {{$invoice->paymentTerm}}</option>     <!-- Payement Terms-->
                      <option value="IP">Immediate Payment</option>
                      <option value="DOR">Due On Receipt</option>
                      <option value="EOM">End Of Month</option>
                      <option value="Net7">7 days after the invoice date</option>
                      <option value="Net10">10 days after the invoice date</option>
                      <option value="Net15">15 days after the invoice date</option>
                      <option value="Net30">30 days after the invoice date</option>
                      <option value="Net60">60 days after the invoice date</option>
                    </select>
                  </div>
                  <div class="invbody-terms">
                    <textarea name="comment" class="form-control border border-warning" rows="5" placeholder="optional comment area. Ex:Thank you for your business.">{{$invoice->comment}}</textarea>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </form>
  <script type="text/javascript">
  var nb = parseInt(document.getElementById("nb").value);
  $(".addService").click(function(evt){
    nb=nb+1;
    $(".service").append('<tr id="service'+nb+'"><td><strong><input class="border rounded" placeholder="name of the services" type="input" name="serviceName'+nb+'"></strong></td><td><select name="serviceType'+nb+'"><option value="Package">Package</option><option value="Days">Days</option><option value="Hours">Hours</option></select></td><td><input class="border rounded" placeholder="number of unit" type="number" name="serviceUnitNumber'+nb+'"></td><td><input class="border rounded" placeholder="unit price" type="number" name="servicePerUnit'+nb+'"></td></tr>');
    $(".nb").html('<input type="hidden" name="nb" id="nb" value="'+nb+'">');
  });
  $(".rmService").click(function(evt){
    if(nb>0){
      $('#service'+nb).remove();
      nb=nb-1;
      $(".nb").html('<input type="hidden" name="nb" id="nb" value="'+nb+'">');
    }
  });
  </script>
  </body>
</html>
