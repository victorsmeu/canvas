<?php

namespace App\Plugins\Users;

use App\PluginMigrationInterface;

class Migration implements PluginMigrationInterface
{
    public static function build()
    {
        $migrations_path = database_path()."/migrations";
        $filename = '2016_03_01_000000_create_users_table.php';

        $file = <<<'STOP'
<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
STOP;
        file_put_contents($migrations_path.'/'.$filename, $file);

    }
}