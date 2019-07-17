<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Contract;
use App\Invoice;
use App\User;
use App\Contact;
class ContractTableSeeder extends Seeder
{
  /**
  * Auto generated seed file.
  *
  * @return void
  */
  public function run()
  {
    $user= User::where('id', '1')->firstOrFail();

    $contract1=Contract::create([
      'contractAmount'          => '100000',
      'contractState'          => 'DRAFT',
      'startingDate'          => '10/10/10',
      'signatureDate'          => 'jcp',
      'endingDate'          => 'jcp',
      'type'       => '12345678',
      'comment' => 'c est cool',
    ]);
    $user->Contracts()->save($contract1);
    $contact1= Contact::where('id', '1')->firstOrFail();
    $contact1->Contracts()->save($contract1);







  }
}
