<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductGroupTable extends Migration {
    public function up() {
        Schema::create('product_group', function (Blueprint $table) {
            $table->integer('id_product_group');
            $table->primary('id_product_group');

            $table->string('name', 50);
            $table->string('description', 150)->nullable()->default(null);

            $table->integer('id_category')->nullable()->default(null);
            $table->foreign('id_category')->references('id_category')->on('category');
        });
    }

    public function down() {
        Schema::dropIfExists('product_group');
    }
}
