<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title','description','skill','user_id','salary','deadline','posted','drafted'];

    //Job has one User
    public function user(){
    	return $this->belongsTo(User::class);
    }
    //A job has  many user
    public function many_user(){
    	return $this->belongsToMany(User::class)->withTimestamps();
    }
   
}
