<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            //$table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Migraciones

            // Commune
                //Se debe declarar con anterioridad el atributo para guardar el id del rol
            $table->integer("commune_id")->unsigned();
                // Debemos tener en cuenta que los metodos 'ondelete' y 'onupdate', son para poder eliminar registros sin necesidad de eliminar
                // sus relaciones con anterioridad. 
            $table->foreign("commune_id")->references("id")->on("communes")->onDelete("cascade")->onUpdate("cascade");

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
