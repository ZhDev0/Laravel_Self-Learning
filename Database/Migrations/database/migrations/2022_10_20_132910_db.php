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
    
    Schema::create('Students', function (Blueprint $table) {
        $table->increments("Id_student");
        $table->string('First_name')->nullable();
        $table->string('Last_name')->nullable();
        $table->string('Email')->nullable();
        $table->timestamps();

    });
    Schema::create('Promotion', function (Blueprint $table) {
        $table->increments("Id_promotion")->nullable();
        $table->string('Name_promotion')->nullable();
        $table->unsignedInteger('StudentID')->nullable();
        $table->foreign('StudentID')
        ->references('Id_student')
        ->on('Students')
        ->onDelete('cascade');
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
        //
    }
};
