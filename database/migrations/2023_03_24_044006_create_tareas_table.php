<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            //in this case is a string called name and 60 of long
            $table->string('nombre',60);
            //if you don put long of the string for default is 250
            //if you want indicated tha field is null you write "->nullable()"
            $table->string('descripcion')->nullable();
            //this indicate if the list is resolved or not
            //and i want indicated for default, have in the value of 0
            $table->tinyInteger('finalizado')->deafault(0);
            $table->timestamp('fecha_limite');
            //in this case, the comment is information what you watch in the databases
            $table->tinyInteger('urgencia')->comment('0: No es urgente, 1: urgencia normal, 2: Muy urgente');
            //in something cases in the companies dont want delete all the information, so the best way is only hide the datas, in this cases we uses softdeletes
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
