<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeUserTable extends Migration
{
    public function up()
    {
        Schema::create('type_users', function (Blueprint $table) {
            $table->id();
            $table->string('libelle', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_users');
    }
}
