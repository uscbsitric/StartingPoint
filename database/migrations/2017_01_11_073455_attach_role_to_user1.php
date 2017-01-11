<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\Role;

class AttachRoleToUser1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user1 = User::where('id', '=', 1)->first();
        $ninjaRole = Role::where('name', '=', 'Ninja')->first();
        $user1->attachRole($ninjaRole);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
