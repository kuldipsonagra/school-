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
       // In a migration file
Schema::create('batches', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->unsignedBigInteger('course_id'); // Make sure 'course_id' is defined
    $table->date('start_date');
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
        Schema::dropIfExists('batches');
    }
};
