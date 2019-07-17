<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\User;
use App\Contact;
use App\Adress;
use App\Bank;
use App\Company;
use App\Invoice;
use Barryvdh\DomPDF\Facade as PDF;
class ContractsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
  public function  add(request $request){
    $uid=\Auth::id();

    $contact=Contact::find($request->contactId);
    if ($contact==null) {


      $validatedData = $request->validate([
        'amount' => ['string','max:255'],
        'type' => ['required','string','max:255'],
        'state' => ['required','string','max:255'],



        'number' => ['required','string'], //adress
        'name' => ['required','string'],
        'city' => ['required','string'],
        'zip_code' => ['required','string'],
        'country' => ['required','string'],
        'account_name'=> ['required','string'], // bank
        'account_number' =>['required','string'],
        'bank_branch' =>['required','string']
      ]);
      $contact=Contact::create([
        'name' => $request->contactName,
        'fonction' => $request->fonction,
        'phone_number' => "(+".$request->phone.")".$request->phoneNumber,
      ]);
      $adress=Adress::create([
        'number'=>$request->number,
        'name'=>$request->name,
        'city'=>$request->city,
        'zip_code'=>$request->zip_code,
        'country'=>$request->country,
      ]);
      $bank=Bank::create([
        'account_name'=> $request->account_name,
        'account_number' => $request->account_number,
        'bank_branch' => $request->bank_branch
      ]);

      $company=Company::create([  //ajout d'une company
        'english_name'=> $request->english_name,
        'country'=> $request->company_country,
      ]);



      $contact->Bank()->save($bank);
      $contact->Adress()->save($adress);
      $contact->Company()->save($company);


    }
    else{
      $validatedData = $request->validate([
        'amount' => ['string','max:255'],
        'type' => ['required','string','max:255'],
        'state' => ['required','string','max:255'],

    ]);

    }
    $contract=\Auth::User()->Contracts()->create([
      'contractAmount'          => $request->amount,
      'contractState'          => $request->state,
      'endingDate'     => $request->endingDate,
      'type'        => $request->type,
      'comment'   => $request->comment,
      'missionType' => $request->missionType
    ]);
    $contact->Contracts()->save($contract);
    $contact->save();



    return redirect('/profile/'.$uid);
  }

  public function  addInvoice(request $request){
     $uid=\Auth::id();
     $contract = Contract::find($request->id);
     $invoice=Invoice::create([
       'finalAmount' => $request->amountInvoice
     ]);
     $contract->Invoice()->save($invoice);
     return redirect('/profile/'.$uid.'/contracts/'.$contract->id);
   }

   public function destroy(request $request){

     foreach (Contract::find($request->contract_id)->Invoice as $invoice) {
       foreach ($invoice->Service as $service) {
         $service->delete();
       }
       $invoice->delete();
     }
     Contract::destroy($request->contract_id);
     $uid=\Auth::id();
     return redirect('/profile/'.$uid);
   }

   public function show($user_id,$contract_id){
     if (\Auth::check()){
       if (\Auth::id()==$user_id ){
         $contract = Contract::find($contract_id);
         if (empty($contract)) {
           return view('home',['user' => $user_id]);
         }
         return view('contract',['user' => $user_id,'contract' => $contract]);
       }
       else{
         return view('home',['user' => $user_id]);
       }
     }
   }

   public function pdf($user_id,$contract_id){
     if (\Auth::check()){
       $contract = Contract::find($contract_id);
       if (\Auth::id()==$user_id && \Auth::id()==$contract->User->id){
         $pdf = PDF::loadView('pdf', ['contract' => $contract]);
         return $pdf->download('contract '.$contract_id.'.pdf');
       }
     }
     return view('home',['user' => $user_id]);
   }

   public function generation($user_id,$contract_id){
     if(\Auth::check()){
       $contract = Contract::find($contract_id);
       if(\Auth::id()==$user_id && \Auth::id()==$contract->User->id){
         return view('contractGenerate', [ 'contract' => $contract]);
       }
     }
     return view('home');
   }

   public function save(request $request,$user_id, $contract_id){
     $contract = Contract::find($contract_id);
     if(\Auth::id()==$user_id && \Auth::id()==$contract->User->id){
       $contract->update([ 'missionDetails' => $request->missionDetails,
                           'startingDate'=> $request->startingDate,
                           'endingDate' =>$request->endingDate,
                           'generationDate' =>$request->generationDate
                         ]);
       $contract->Contact->update([ 'name' => $request->contactname ]);
       $contract->Contact->Company->update(['adress' => $request->adress,
                                            'registration_number' => $request->registration_number,
                                            'registration_area' => $request->registration_area,
                                            'capital_number'=> $request->capital_number
                                           ]);
       if($contract->type=="perTime"){
         $contract->update([
               'payementHour' => $request->payementHour,
               'payementMonthly' => $request->payementMonthly,
               'payementDelay' => $request->payementDelay
           ]);
       }
       else{
         $contract->update([
               'contractAmount' => $request->contractAmount,
               'payementDate' => $request->payementDate
           ]);
       }

       $contract->save();
       $pdf = PDF::loadView('pdf', ['contract' => $contract]);
       return $pdf->download('contract '.$contract->Contact->name.' ('.date("Y/m/d").').pdf');
     }
     return view('home');
   }

   public function showInvoice($user_id,$contract_id,$invoice_id){
     if (\Auth::check()){
       if (\Auth::id()==$user_id ){
         $contract = Contract::find($contract_id);
         $invoice = Invoice::find($invoice_id);
         if (empty($invoice)) {
           return view('home',['user' => $user_id]);
         }
         return view('invoice',['user' => $user_id,'contract' => $contract, 'invoice' => $invoice]);
       }
       else{
         return view('home',['user' => $user_id]);
       }
     }
   }


}
