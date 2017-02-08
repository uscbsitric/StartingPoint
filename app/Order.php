<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	// attributes that are mass assignable
    protected $fillable = ['order_name'];
}