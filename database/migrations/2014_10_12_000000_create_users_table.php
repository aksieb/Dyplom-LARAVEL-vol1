<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_users');
            $table->primary('id_users');

            $table->string('login', 20);
            $table->string('password', 100);
            $table->string('first_name', 20);
            $table->string('surname', 20);

            $table->date('date_of_entry');

            $table->string('email', 45);
        });
    }

    public function down() {
        Schema::dropIfExists('users');
    }
}
