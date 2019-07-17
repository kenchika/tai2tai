<?php

namespace App\Http\Controllers;
use App\User;
use App\Skill;

use Validator;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],

    ]);
  }


  protected function submit(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'skill' => ['required','string'],
    ]);
    $nbSkill=\Auth::User()->Skills->count();
    if ($nbSkill==15) {
      return Redirect('/profile/'.\Auth::id())->withErrors(['Limit reached','add']);;
    }





    foreach ($request->all() as $key => $value) {
      if ($nbSkill==15) {
        return Redirect('/profile/'.\Auth::id())->withErrors(['Limit reached','add',]);;
      }
      $skill = Skill::where('name',$value)->first();
      if ($skill==null) {
        $skill=Skill::create(['name' =>$value]);
      }
      if ( !$skill->users->contains(\Auth::user())) {
        $skill->users()->attach(\Auth::User());
      }

      $nbSkill++;
    }
    return redirect('/profile/'.\Auth::id());

  }

  public function destroy(Request $request)
  {
    $skill = Skill::where('id', $request->skill_id)->first();
    $uid=\Auth::User()->id;
    $skill->users()->detach($uid);
    return redirect('/profile/'.$uid);
  }
  public function edit(Request $request)
  {


    foreach (array_keys($request->all()) as $key ) {
      if ($key=='wechat') {
        User::find(1)->update(['wechat_id' => $request->wechat]);

      }
    }




    $uid=\Auth::id();
    return redirect('/profile/'.$uid);
  }

  function fetch(Request $request)
  {

    if($request->ajax()) {
      $data = Skill::where('name', 'LIKE', $request->skill.'%')
      ->get()->take(6);
      $output = '';
      if (count($data)>0) {

        foreach ($data as $row){
          $output .= '	<li class="mdc-list-item" role="menuitem" >'.$row->name.'</li>';
        }

      }
      else {
        $output .= '	<li class="mdc-list-item" role="menuitem" >'.'No results'.'</li>';
      }
      return $output;
    }

  }
}
