<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('Apis', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('curso');
            $table->integer('carga_horaria');
            $table->decimal('valor', 8, 2);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        //
    }
};
