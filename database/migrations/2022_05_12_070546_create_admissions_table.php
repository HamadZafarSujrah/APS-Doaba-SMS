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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('std_id')->nullable();
            $table->string('AdmissionNumber');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Cnic')->unique();
            $table->string('DOB');
            $table->string('Gender');
            $table->text('ProfilePicture')->nullable();
            $table->string('Castt')->nullable();
            $table->string('Religion');
            $table->string('FatherName');
            $table->string('FatherOccupation');
            $table->string('FatherCnic');
            $table->string('GaurdianName');
            $table->string('GaurdianCnic');
            $table->string('ContactNumber');
            $table->string('OtherContactNumber')->nullable();
            $table->string('Email');
            $table->string('Address');
            $table->string('Tehsil');
            $table->string('District');
            $table->string('Campus');
            $table->string('Class');
            $table->string('Section');
            $table->string('ObtainedMarks')->nullable();
            $table->string('TotalMarks')->nullable();
            $table->string('PreviousSchoolName')->nullable();
            $table->string('PreviousSchoolRegistrationNumber')->nullable();
            $table->text('B_FormPicture')->nullable();
            $table->text('GaurdianCnicPicture');
            $table->text('FatherDeathCertificate')->nullable();
            $table->text('PreviousSchoolCertificate')->nullable();
            $table->string('TutionFee')->nullable();
            $table->string('AdmissionFee');
            $table->string('ExaminationFee')->nullable();
            $table->string('SportsFee')->nullable();
            $table->string('LibraryFee')->nullable();
            $table->string('LabFee')->nullable();
            $table->string('OtherFee')->nullable();
            $table->string('TotalFee');
            $table->string('Discount')->nullable();
            $table->string('FeePayable')->nullable();
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
        Schema::dropIfExists('admissions');
    }
};
