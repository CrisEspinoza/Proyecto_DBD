<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            // De todas maneras se crea automatico con el php artisan migrate
            $table->id();
            //$table->increments('id');
            // Se puede indicar el tamaño que se desea tener.
            $table->string('name',255);
            $table->timestamps();

            // Migraciones
                //Se debe declarar con anterioridad el atributo para guardar el id del rol
                    // ->unsigned() => Setea al integer como unsigned, lo cual es importante y obligatorio para las declaraciones de id que realicen.
            $table->integer("id_permissions")->unsigned();
            // Debemos tener en cuenta que los metodos 'ondelete' y 'onupdate', son para poder eliminar registros sin necesidad de eliminar
            // sus relaciones con anterioridad. 
            $table->foreign("id_permissions")->references("id")->on("permissions")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rols');
    }
}
