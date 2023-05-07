<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releves', function (Blueprint $table) {
            $table->id();
            $table->string('matiere_id');
            $table->string('classe_id');
            $table->string('promotion_id');
            $table->string('specialite_id');
            $table->string('devoir');
            $table->string('examen');
            $table->string('semestre');
            $table->string('credit');
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
        Schema::dropIfExists('releves');
    }
};
