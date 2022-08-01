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
        Schema::create('student_basic_infos', function (Blueprint $table) {
            $table->id();
            $table->string('std_id')->nullable();
            $table->string('AdmissionNumber');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Cnic')->unique();
            $table->string('DOB');
            $table->string('Gender');
            $table->text('ProfilePicture')->nullable();
            $table->string('Cast')->nullable();
            $table->string('Religion');
            $table->string('FatherName');
            $table->string('FatherOccupation');
            $table->string('FatherCnic');
            $table->string('GuardianName');
            $table->string('GaurdianCnic');
            $table->string('ContactNumber');
            $table->string('OtherContactNumber')->nullable();
            $table->string('Email');
            $table->string('Address');
            $table->string('Tehsil');
            $table->string('District');
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
        Schema::dropIfExists('student_basic_infos');
    }
};
