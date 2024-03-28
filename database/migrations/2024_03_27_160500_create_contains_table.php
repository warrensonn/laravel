<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainsTable extends Migration
{
    public function up()
    {
        Schema::create('contains', function (Blueprint $table) {
            $table->integer('idOrder')->references('id')->on('orders');
            $table->integer('idProduct')->references('id')->on('products');
            $table->integer('quantity');
            $table->primary(['idOrder', 'idProduct']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('contains');
    }
}
