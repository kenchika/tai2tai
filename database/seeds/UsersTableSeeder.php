<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\User;
use App\IdCard;
use App\Bank;
use TCG\Voyager\Models\Role;


class UsersTableSeeder extends Seeder
{
  /**
  * Auto generated seed file.
  *
  * @return void
  */
  public function run()
  {
    if (User::count() == 0) {
      $role = Role::where('name', 'admin')->firstOrFail();

      $user=User::create([
        'name'           => 'Gregoire Giroux',
        'email'          => 'gastaud.laurent@live.fr',
        'password'       => bcrypt('password'),
        'remember_token' => Str::random(60),
        'role_id'        => $role->id,
        'birth_date'     => '23/04/1999',
        'phone_number'   => '0614576809',
        'nationality'    => 'français',
        'wechat_id'      => '123456WF_1',

      ]);

      $user->Bank()->create([

        'account_number' => '12345678',
        'account_name' => 'test',
        'bank_branch' => 'test',

      ]);

      $user->IdCard()->create([
        'id_card_number' =>'1234567890',
        'expiration_date' => 'test',

      ]);
      $user->save();

    }
  }
}
