<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration {
    public function up() {
        Schema::create('category', function (Blueprint $table) {
            $table->integer('id_category');
            $table->primary('id_category');

            $table->string('name', 45)->nullable()->default(null);

            $table->integer('id_users');
            $table->foreign('id_users')->references('id_users')->on('users');
        });
    }

    public function down() {
        Schema::dropIfExists('category');
    }
}
