<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

                // Realizando relacion de muchos a muchos 
             //e Se debe realizar al declaracion de los atributos que almacenar los valores de los id de las tablas
             $table->unsignedBigInteger('id_user');
             $table->unsignedBigInteger('id_test');

             // Se realiza la relacion muchos a muchos
             $table->foreign('id_user')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
             $table->foreign('id_test')->references('id')->on('tests')->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tests');
    }
}
