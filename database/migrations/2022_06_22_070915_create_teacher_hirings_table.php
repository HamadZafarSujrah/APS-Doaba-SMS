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
        Schema::create('teacher_hirings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('father_name');
            $table->string('cnic');
            $table->string('gender');
            $table->text('picture')->nullable();
            $table->string('email')->nullable();
            $table->string('f_contact_number');
            $table->string('s_contact_number')->nullable();
            $table->string('address');
            $table->string('tehsil');
            $table->string('district');
            $table->string('latest_degree');
            $table->string('subject_specialist');
            $table->string('aditional_skill_subjects')->nullable();
            $table->string('teaching_experience');
            $table->string('pre_institution');
            $table->string('joining_leaving_date');
            $table->text('cnic_pic');
            $table->text('cv_pic');
            $table->text('latest_degree_pic')->nullable();
            $table->text('basic_pay');
            $table->string('conveyance_allowance')->nullable();
            $table->string('heath_allowance')->nullable();
            $table->string('total_pay');
            $table->string('tester_name');
            $table->string('tester_designation');
            $table->string('tester_remarks');
            $table->string('test_date');
            $table->string('f_interviewer_name');
            $table->string('f_interviewer_designation');
            $table->string('f_interviewer_remarks');
            $table->string('f_interviewer_date');
            $table->string('s_interviewer_name')->nullable();
            $table->string('s_interviewer_designation')->nullable();
            $table->string('s_interviewer_remarks')->nullable();
            $table->string('s_interviewer_date')->nullable();
            $table->string('t_interviewer_name')->nullable();
            $table->string('t_interviewer_designation')->nullable();
            $table->string('t_interviewer_remarks')->nullable();
            $table->string('t_interviewer_date')->nullable();
            $table->string('selector_name');
            $table->string('selector_designation');
            $table->string('selector_remarks');
            $table->string('selection_date');
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
        Schema::dropIfExists('teacher_hirings');
    }
};
