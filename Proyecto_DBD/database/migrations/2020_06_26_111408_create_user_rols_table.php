<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_rols', function (Blueprint $table) {
             $table->id();

                // Realizando relacion de muchos a muchos 
             //e Se debe realizar al declaracion de los atributos que almacenar los valores de los id de las tablas
             $table->unsignedBigInteger('id_user');
             $table->unsignedBigInteger('id_role');

             // Se realiza la relacion muchos a muchos
             $table->foreign('id_user')->references('id')->on('users')->onDelete("cascade")->onUpdate("cascade");
             $table->foreign('id_role')->references('id')->on('rols')->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('user_rols');
    }
}
