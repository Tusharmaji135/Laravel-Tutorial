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
        Schema::create('student', function (Blueprint $table) {
            $table->integer('student_id')->autoIncrement();
            $table->string('name',30);
            $table->string('email')->unique()->nullable();
            $table->float('percentage',3,2)->comment('percentage of Students');
            $table->primary('student_id');
            $table->string('city')->default('No City');
            $table->integer('age')->unsigned();
            
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
