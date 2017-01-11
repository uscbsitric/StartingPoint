<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Permission;
use App\Role;

class AddPermissionToRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $canDoEverythingPermission = Permission::where('name', '=', 'can-do-everything')->first();
        $ninjaRole = Role::where('name', '=', 'Ninja')->first();
		$ninjaRole->attachPermission($canDoEverythingPermission);
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
