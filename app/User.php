<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use TCG\Voyager\Models\Post;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','birth_date','phone_number','nationality','wechat_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function IdCard(){
      return $this->hasOne(IdCard::class);
    }
    public function Bank(){
      return $this->hasOne(Bank::class);
    }
    public function Skills(){
      return $this->belongsToMany(Skill::class);
    }
    public function Contracts(){
      return $this->hasMany(Contract::class);
    }
    public function Posts(){
      return $this->hasMany(Post::class);
    }

}
