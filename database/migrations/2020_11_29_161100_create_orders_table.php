<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id_orders');
            $table->primary('id_orders');

            $table->dateTime('creation_order_date');
            $table->dateTime('finish_order_date');

            $table->integer('id_users');
            $table->foreign('id_users')->references('id_users')->on('users');
        });
    }

    public function down() {
        Schema::dropIfExists('orders');
    }
}
