<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->string('Doctor_ID');
            $table->string('Doctor_Name');
            $table->string('Doctor_Password');
            $table->string('Specialization');
            $table->string('Doctor_Email');
            $table->string('Doctor_Address');
            $table->integer('Doctor_Mobile');
            $table->string('Doctor_DOB');
            $table->string('Doctor');
            $table->string('Gender');
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
        Schema::dropIfExists('_doctor');
    }
}
