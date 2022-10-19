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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('edad');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('type', ['ADMIN', 'DOCENTE', 'AUXILIAR', 'DIRECTOR', 'GENERAL'])->default('ADMIN');
            $table->string('password');
            $table->string('especialidad');
            $table->string('semestre');
            $table->string('uc');
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
};
