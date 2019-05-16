<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTutorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigoPost',20)->unique();
            $table->string('titulo');
            $table->string('nombreTutor',100);
            $table->string('materia',50);
            $table->decimal('costo', 4, 2)->unsigned();
            $table->string('ubicacion');
            $table->text('descripcion');
            $table->string('imagen')->default('post-placeholder.jpg');
            $table->string('celular',9);
            $table->string('nombre',30);
            $table->string('email',100);
            $table->string('estadoPost',25)->default('En Moderación');
            $table->timestamps();

            //Foreing Keys
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorias');
    }
}
