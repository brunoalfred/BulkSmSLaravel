<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_representatives', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 25);
            $table->string('last_name', 25);
            $table->unsignedBigInteger('registration_number', 25)->unique();
            $table->integer('year_of_study');
            $table->string('programme', 30);
            $table->enum('gender', ['male', 'female']);
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
        Schema::dropIfExists('class_representatives');
    }
}
