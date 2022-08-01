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
        Schema::create('student_admission_fees', function (Blueprint $table) {
            $table->id();
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
            $table->unsignedBigInteger('StudentBasicInfo_id');
            $table->foreign('StudentBasicInfo_id')->references('id')->on('student_basic_infos');
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
        Schema::dropIfExists('student_admission_fees');
    }
};
