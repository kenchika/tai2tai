<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .text-right {
            text-align: right;
        }
        .text-left{
            text-align: left;
        }
        .resize {
          max-width:60%;
          max-height:60%;
        }
    </style>

</head>
<body class="login-page" style="background: white">

    <div>
        <div class="row">
            <div class="col-xs-7">
                <h4>From:</h4>
                <strong>{{$contract->User->name}}</strong><br>
                with<br>
                <strong>TAI2</strong><br>
                F3097,Building 1, No.5500,Yuanjiang Rd,<br>
                Minhang District, Shanghai <br>
                E: gregoire.giroux@tai2tai.com
                <br>
            </div>

            <div class="col-xs-4">
              <!--<img class="resize" src="{{url('/img/logoTai2.png')}}" alt="logo">-->
            </div>
        </div>

        <div style="margin-bottom: 0px">&nbsp;</div>

        <div class="row">
            <div class="col-xs-6">
                <h4>To:</h4>
                <address>
                    <strong>{{$contract->Contact->name}}</strong><br>
                    <span>{{$contract->Contact->Company->english_name}}</span> <br>
                    <span>P : {{$contract->Contact->phone_number}}</span> <br>
                    <span>{{$contract->Contact->Company->adress}}</span> <br>
                </address>
            </div>

            <div class="col-xs-5">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th>Invoice Num:</th>
                            <td class="text-right">{{$invoice->invoiceNumber}}</td>
                        </tr>
                        <tr>
                            <th> Invoice Date: </th>
                            <td class="text-right">{{$invoice->invoiceDate}}</td>
                        </tr>
                        @if($contract->Contact->Company->tax_number)
                        <tr>
                            <th>Company Tax Number: </th>
                            <td class="text-right">{{$contract->Contact->Company->tax_number}}</td>
                        </tr>
                        @endif
                        @if($invoice->supplierNumber)
                        <tr>
                            <th>Supplier Number: </th>
                            <td class="text-right">{{$invoice->supplierNumber}}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>

                <div style="margin-bottom: 0px">&nbsp;</div>

                <table style="width: 100%; margin-bottom: 20px">
                    <!--    <tbody>
                        <tr class="well" style="padding: 5px">
                            <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                            <td style="padding: 5px" class="text-right"><strong> $600 </strong></td>
                        </tr>
                    </tbody>  -->
                </table>
            </div>
        </div>

        <table class="table">
            <thead style="background: #F5F5F5;">
              <tr>
                <th>Service List</th>
                <th>type</th>
                <th>unit</th>
                <th>per&nbsp;unit&nbsp;price</th>
                <th class="text-right">Price</th>
              </tr>
            </thead>
            <tbody>
                @foreach($invoice->Service as $service)
                  <tr>
                    <td><strong>{{$service->name}}</strong></td>
                    <td>{{$service->type}}</td>
                    <td>{{$service->unitNumber}}</td>
                    <td>{{$service->pricePerUnit}}</td>
                    <td class="text-right">{{$service->total}}</td>
                  </tr>
                @endforeach
                <tr>
                </tr>
            </tbody>
        </table>

            <div class="row">
                <div class="col-xs-6"></div>
                <div class="col-xs-5">
                    <table style="width: 100%">
                        <tbody>
                          @if($invoice->discount>0)
                          <tr class="well" style="padding: 5px">
                              <th style="padding: 5px"><div> Total ({{$invoice->currency}})</div></th>
                              <td style="padding: 5px" class="text-right"><strong>{{$invoice->initialAmount}}</strong></td>
                          </tr>
                          <tr style="padding: 5px">
                              <th style="padding: 4px"><div> Discount ({{$invoice->currency}})</div></th>
                              <td style="padding: 5px" class="text-right">{{$invoice->discount}}</td>
                          </tr>
                          @endif
                          <tr class="well" style="padding: 5px">
                              <th style="padding: 5px"><div> Balance Due Tax Free ({{$invoice->currency}})</div></th>
                              <td style="padding: 5px" class="text-right"><strong>{{$invoice->finalAmount}}</strong></td>
                          </tr>
                          <tr style="padding: 5px">
                              <th style="padding: 4px"><div> VAT (6%) ({{$invoice->currency}})</div></th>                                          <!-- TAX IS HERE FOR THE FACTURATION-->
                              <td style="padding: 5px" class="text-right">{{$invoice->finalAmount*0.06}}</td>
                          </tr>
                          <tr class="well" style="padding: 5px">
                              <th style="padding: 5px"><div> Balance Due With VAT({{$invoice->currency}})</div></th>
                              <td style="padding: 5px" class="text-right"><strong>{{$invoice->finalAmount+$invoice->finalAmount*0.06}}</strong></td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="margin-bottom: 0px">&nbsp;</div>

            <div class="row">
                <div class="col-xs-8 invbody-terms">
                  <strong>Payment Term :</strong><br>
                  {{$invoice->paymentTerm}}.<br>
                  <br>
                  <strong>Bank Information</strong>
                  account name :{{$contract->User->Bank->account_name}}<br>
                  account number :{{$contract->User->Bank->account_number}}<br>
                  <br>
                  @foreach ( explode("\n",$invoice->comment) as $ligne)         <!-- affichage des commentaires   -->
                  {{$ligne}}
                  <br>
                  @endforeach
                </div>
            </div>
        </div>

    </body>
    </html>
