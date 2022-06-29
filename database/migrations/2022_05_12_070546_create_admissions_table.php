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
            $table->string('std_id')->nullable();;
            $table->string('std_first_name');
            $table->string('std_last_name');
            $table->string('cnic')->unique();
            $table->date('dob');
            $table->string('gender');
            $table->text('picture')->nullable();
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('father_cnic');
            $table->string('gaurdian_name');
            $table->string('f_contact_number');
            $table->string('s_contact_number')->nullable();
            $table->string('email');
            $table->string('address');
            $table->string('tehsil');
            $table->string('district');
            $table->string('campus');
            $table->string('class');
            $table->string('section');
            $table->string('obtained_marks')->nullable();
            $table->string('total_marks')->nullable();
            $table->string('pre_school')->nullable();
            $table->string('pre_school_reg')->nullable();
            $table->text('b_form_pic');
            $table->text('f_cnic_pic');
            $table->string('tution_fee');
            $table->string('admission_fee')->nullable();
            $table->string('exam_fee')->nullable();
            $table->string('sports_fee')->nullable();
            $table->string('library_fee')->nullable();
            $table->string('lab_fee')->nullable();
            $table->string('other_fee')->nullable();
            $table->string('total_fee');
            $table->string('discount')->nullable();
            $table->string('fee_payable')->nullable();
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
