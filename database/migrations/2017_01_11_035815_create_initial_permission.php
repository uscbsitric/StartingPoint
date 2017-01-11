<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Permission;

class CreateInitialPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $ninjaPermission = new Permission();
        $ninjaPermission->name = 'can-do-everything';
        $ninjaPermission->display_name = 'The PHP Ninja does not need pemission.';
        $ninjaPermission->description = 'The PHP Ninja is unrestricted.';
        $ninjaPermission->save();
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
