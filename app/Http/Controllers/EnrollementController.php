<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentBasicInfo;
use App\Models\StudentAcademicInfo;
use App\Models\StudentAttachment;
use App\Models\StudentAdmissionFee;

class EnrollementController extends Controller
{
    function AdmissionForm(){
        return view('Student.enrollement');
    }
    function SaveAdmissionForm(Request $req){
    $BasicInfo = new StudentBasicInfo;

        $max_id = StudentBasicInfo::orderBy('id', 'desc')->first();
        if($max_id == null)
        { $id=1;  }
        else{$id = $max_id->id + 1;}

        $BasicInfo->std_id='APS-'.$req->campus.'-'.$id;;
        $BasicInfo->AdmissionNumber=$req->std_admission_number;
        $BasicInfo->FirstName=$req->std_first_name;
        $BasicInfo->LastName=$req->std_last_name;
        $BasicInfo->Cnic=$req->cnic;
        $BasicInfo->DOB=$req->dob;
        $BasicInfo->Gender=$req->gender;

        if($req->hasfile('profile_picture')){
            $file= $req->file('profile_picture');
            $extention =$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/Profile_Pictures',$filename);
            $BasicInfo->ProfilePicture=$req->$filename;
        }
        $BasicInfo->Cast=$req->cast;
        $BasicInfo->Religion=$req->religion;
        $BasicInfo->FatherName=$req->father_name;
        $BasicInfo->FatherOccupation=$req->father_occupation;
        $BasicInfo->FatherCnic=$req->father_cnic;
        $BasicInfo->GuardianName=$req->guardian_name;
        $BasicInfo->GaurdianCnic=$req->guardian_cnic;
        $BasicInfo->ContactNumber=$req->contact_number;
        $BasicInfo->OtherContactNumber=$req->other_contact_number;
        $BasicInfo->Email=$req->email;
        $BasicInfo->Address=$req->address;
        $BasicInfo->Tehsil=$req->tehsil;
        $BasicInfo->District=$req->district;
        $BasicInfo->save();
   
    $AcademicInfo=new StudentAcademicInfo;

            $AcademicInfo->Campus=$req->campus;
            $AcademicInfo->Class=$req->class;
            $AcademicInfo->Section=$req->section;
            $AcademicInfo->ObtainedMarks=$req->obtained_marks;
            $AcademicInfo->TotalMarks==$req->total_marks;
            $AcademicInfo->PreviousSchoolName=$req->previous_school_name;
            $AcademicInfo->PreviousSchoolRegistrationNumber=$req->previous_school_registration_number;
            $AcademicInfo->StudentBasicInfo_id=$BasicInfo->id;
            $AcademicInfo->save();
           // $BasicInfo->student_academic_infos->save($AcademicInfo);
    

        $Attachment= new StudentAttachment;

        if($req->hasFile('b_form_pic')){
            $file= $req->file('b_form_picture');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/Bform_Pictures',$filename);
            $Attachment->B_FormPicture=$filename;
        }
        if($req->hasfile('guardian_cnic_picture')){
            $file= $req->file('guardian_cnic_picture');
            $extention= $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/GuardiancnicPictures',$filename);
            $Attachment->GuardianCnicPicture= $filename;
        }

        if($req->hasfile('father_death_certificate')){
            $file= $req->file('father_death_certificate');
            $extention= $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/FatherDeathCertificate',$filename);
            $Attachment->FatherDeathCertificate= $filename;
        }
        if($req->hasfile('previous_school_certificate')){
            $file= $req->file('previous_school_certificate');
            $extention= $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/PreviousSchoolCertificate',$filename);
            $Attachment->PreviousSchoolCertificate= $filename;
        }
      
            
        $Attachment->StudentBasicInfo_id=$BasicInfo->id;
            $Attachment->save();
       
    $AdmissionFee=new StudentAdmissionFee;

        $AdmissionFee->TutionFee=$req->tution_fee;
        $AdmissionFee->AdmissionFee=$req->admission_fee;
        $AdmissionFee->ExaminationFee=$req->examination_fee;
        $AdmissionFee->SportsFee=$req->sports_fee;
        $AdmissionFee->LibraryFee=$req->library_fee;
        $AdmissionFee->LabFee=$req->lab_fee;
        $AdmissionFee->OtherFee=$req->other_fee;
        $AdmissionFee->TotalFee=$req->total_fee;
        $AdmissionFee->Discount=$req->discount;
        $AdmissionFee->FeePayable=$req->fee_payable; 
        $AdmissionFee->StudentBasicInfo_id=$BasicInfo->id;
        $save=$AdmissionFee->save();

        if($save){
            return redirect('enrollement_record')->with('success','new user has been added into Database!');
  
        } else
        {
            return back()->with('fail','something went wrong try again later!');
        }


    }
    function fetch_data(){
        $student= StudentBasicInfo::all();
    //    $academic= $student->studentAcademicInfos;
    //     $attachment= $student->studentAttachments;
    //     $fee= $student->studentAdmissionFees;
    //    $Data= [$student,$academic, $attachment,$fee];
        //return $student;
       
        return view('Student.enrollement_record', ['items'=>$student]);
    }
    function profile_data($id){
        $data= StudentBasicInfo::findOrFail($id);
       // return view('admission', ['items'=>$data]);
       // $data = DB::select('select * from admissions');
       return view('Student.profile', ['profile'=>$data]);
    }
    function edit_data($id){
        $students =StudentBasicInfo::findOrFail($id);
        return view('Student.edit_student',['student'=>$students]);
    }
}
