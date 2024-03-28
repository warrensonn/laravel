<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteTable extends Migration
{
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('login', 20)->unique();
            $table->string('pwd', 255);
            $table->string('address', 32);
            $table->string('cp', 5);
            $table->string('city', 32);
            $table->string('mail', 50);
            $table->integer('idTypeUser')->references('id')->on('type_users');;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
