<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Skill;
use App\Contract;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {

  }
  public function update(Request $request,$id)
  {
    $user=User::find($id);
    $user->update(
      [
        'name'=>$request->name,
        'email' => $request['email'],
        'password' => Hash::make($request['password']),


      ]);
      if ($request->wechat_id) {
          $user->update([  'wechat_id' => $request['wechat_id']]);
      }
      if ($request->nationality) {
          $user->update([  'nationality' => $request['nationality']]);
      }
      if ($request->phone_number) {
          $user->update([  'phone_number' => $request['phone_number']]);
      }
      if ($request->birth_date) {
          $user->update([  'birth_date' => $request['birth_date']]);
      }
      if ($request->id_bank_number) {
          $user->Bank()->update([  'account_number' => $request['id_bank_number']]);
      }
      if ($request->account_name) {
          $user->Bank()->update([    'account_name' => $request['bank_name']]);
      }
      if ($request->bank_branch) {
          $user->Bank()->update([  'bank_branch' => $request['bank_branch'] ]);
      }


      return redirect('/admin/users');

    }
    public function register(Request $request)
    {


      $user=User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'birth_date' => $request['birth_date'],
        'phone_number' => $request['phone_number'],
        'nationality' => $request['nationality'],
        'wechat_id' => $request['wechat_id'],
      ]);





      $user->Bank()->create([

        'account_number' => $request['id_bank_number'],
        'account_name' => $request['bank_name'],
        'bank_branch' => $request['bank_branch'],

      ]);
      $user->IdCard()->create([
        'id_card_number' => $request['id_card_number'],
        'expiration_date' => $request['expiration_date'],

      ]);
      return redirect('/admin/users');

    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {

      return view('home');
    }
    public function show()
    {



      // $initial=explode (" ",$user->name);
      // $initial=$initial[0][0].$initial[1][0];

      $contracts=  \Auth::user()->Contracts()->get();

      $hardSkills=  \Auth::user()->skills()->get();


      return view('profile',['hardSkills' => $hardSkills,'contracts' => $contracts]);




    }
    public function edit(Request $request)
    {

      $uid=\Auth::User()->id;

      foreach (array_keys($request->all()) as $key ) {
        switch ($key) {
          case 'wechat':
          \Auth::User()->update(['wechat_id' => $request->wechat]);
          return $this->show();
          break;
          case 'number':

          \Auth::User()->update(['phone_number' => "(+".$request->phone.")".$request->number]);
          return $this->show();
          break;
        }
        //if ($key=='wechat') {
        //  User::find(1)->update(['wechat_id' => $request->wechat]);
        //}
      }

    }

    public function showPost($post)
    {
      $post= Post::find($post);
      return view('post',['post' => $post]);

    }
    public function searchPost(Request $request)
    {
      if($request->ajax())
      {
        $output='';
        $posts=Post::where('title','LIKE','%'.$request->search."%")->take(9)->get();


        if($posts)
        {
          foreach ($posts as $key => $post) {

            $output.='<a href="'.route('post.show', ['post' => $post->id]).'" class="text-decoration-none text-dark">
            <div class="col-md-4 col-sm-12 mt-5">
            <div class="mdc-card my-card mdc-card--outlined">

            <div class="mdc-card__primary-action">

            <div class="mdc-card__media mdc-card__media--square" style="background-image:url(../storage/'.str_replace('\\', '/', $post->image).'">

            </div>

            </div>

            <div class="demo-card__primary" style="padding: 1rem;">
            <h2 class="demo-card__title mdc-typography mdc-typography--headline6">
            '.$post->title.'
            </h2>
            <div class="row">
            <div class="col-6">
            <h3 class=" mdc-typography mdc-typography--subtitle2">'.$post->authorId->name.'
            </h3>
            </div>
            <div class="col-6 text-right">
            <h3 class=" mdc-typography mdc-typography--subtitle2">
            '. explode(" ",$post->created_at)[0].'
            </h3>

            </div>
            </div>
            </div>

            </div>

            </div>
            </a>';




          }

          return Response($output);
        }

      }
    }
  }
