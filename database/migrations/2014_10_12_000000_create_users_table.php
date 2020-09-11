<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('password');
            $table->string('email')->unique(); 
            $table->string('prenom')->nullable(); 
            $table->string('nom')->nullable(); 
            $table->date('datenaissance')->nullable(); 
            $table->bigInteger('telephone')->nullable();   
            $table->string('image')->nullable(); 
            $table->string('role')->default('User');    
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
