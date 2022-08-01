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
        Schema::create('student_attachments', function (Blueprint $table) {
            $table->id();
            $table->text('B_FormPicture')->nullable();
            $table->text('GuardianCnicPicture');
            $table->text('FatherDeathCertificate')->nullable();
            $table->text('PreviousSchoolCertificate')->nullable();
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
        Schema::dropIfExists('student_attachments');
    }
};
