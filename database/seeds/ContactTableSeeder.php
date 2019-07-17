<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Contact::create([

        'name'                  => 'alexia',
        'fonction'              => 'pdg',
        'phone_number'          => '10/10/10',

      ],[

        'name'                  => 'bonjour',
        'fonction'              => 'oui',
        'phone_number'          => '13/10/10',

      ],[

        'name'                  => 'test',
        'fonction'              => 'nul',
        'phone_number'          => '13/10/10',

      ]);
    }
}
