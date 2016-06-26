<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	// attributes that are mass assignable
    protected $fillable = ['name'];
    
    // get the user that owns the task
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}