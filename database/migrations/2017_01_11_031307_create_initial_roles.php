<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Role;

class CreateInitialRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $ninjaRole = new Role();
        $ninjaRole->name = 'Ninja';
        $ninjaRole->display_name = 'The PHP Ninja';
        $ninjaRole->description = 'The PHP Ninja';
        $ninjaRole->save();
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
