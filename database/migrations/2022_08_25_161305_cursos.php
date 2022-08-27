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
        Schema::create('cursos', function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->text('descripcion');
            $table->string('categoria', 100);
            $table->timestamps();   // created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};

// php artisan migrate:rollback , es como re-hacer pero con las tablas