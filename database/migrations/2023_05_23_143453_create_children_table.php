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
       Schema::create('children', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('image')->nullable();
    $table->unsignedBigInteger('daycare_id');
    $table->foreign('daycare_id')->references('id')->on('daycares')->onDelete('cascade');
    $table->unsignedBigInteger('dad_id');
    $table->foreign('dad_id')->references('id')->on('dads')->onDelete('cascade');
    $table->unsignedBigInteger('teacher_id');
    $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
    $table->unsignedBigInteger('classroom_id');
    $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
    $table->timestamps();
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
