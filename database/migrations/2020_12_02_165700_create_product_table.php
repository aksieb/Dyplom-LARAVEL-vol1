<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration {
    public function up() {
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id_product');
            $table->primary('id_product');

            $table->string('name', 50);
            $table->string('description', 150)->nullable()->default(null);

            $table->integer('id_product_group')->nullable()->default(null);
            $table->foreign('id_product_group')->references('id_product_group')->on('product_group');
        });
    }

    public function down() {
        Schema::dropIfExists('product');
    }
}
