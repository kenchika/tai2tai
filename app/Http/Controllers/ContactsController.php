<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Barryvdh\DomPDF\Facade as PDF;
class ContactsController extends Controller
{
  function fetch(Request $request)
  {

    if($request->ajax()) {
      $data = Contact::where('name', 'LIKE', $request->contact.'%')
      ->get()->take(6);


      $output = '';
      if (count($data)>0) {

        foreach ($data as $row){
          $output .= '	<li class="mdc-list-item" role="menuitem" >'.$row->name.' '.$row->fonction.' '.$row->company->english_name.' '.$row->id.'</li>';

        }

      }
      else {
        $output .= '	<li class="mdc-list-item" role="menuitem" >'.'No results'.'</li>';
      }
      return $output;
    }

  }
}
