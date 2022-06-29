<?php

namespace App\Http\Controllers;
use App\Models\teacher_hiring;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
   function teacher_hiring(){
      
         return view('Faculty.teacher_hiring');
     }
     function save   (Request $req){
 
         // dd('test');
 
         // $req->validate([
         //     'name'=>'required|max:20',
         //     'email'=>'required|email|unique:admins',
         //     'password'=>'required|min:5|max:20',
         // ]);
   
         //insert into databsae
         $hiring= new teacher_hiring;
        $hiring->first_name = $req->first_name;
        $hiring->last_name = $req->last_name;
        $hiring->dob = $req->dob;
        $hiring->father_name = $req->father_name;
        
        $hiring->cnic = $req->cnic; 
        $hiring->gender = $req->gender;
         if($req->hasfile('profile_picture')){
             $file= $req->file('profile_picture');
             $extention =$file->getClientOriginalExtension();
             $filename=time().'.'.$extention;
             $file->move('Teacher/ProfilePictures',$filename); 
            $hiring->picture=$filename;
         }
         //$hiring->picture = $req->profile_picture;
         $hiring->email = $req->email;
         $hiring->f_contact_number= $req->f_contact_number;
         $hiring->s_contact_number = $req->s_contact_number;
         $hiring->address = $req->address;
        $hiring->tehsil = $req->tehsil;
        $hiring->district = $req->district;
       
        $hiring->latest_degree = $req->latest_degree;
        $hiring->subject_specialist = $req->subject_specialist;
        $hiring->aditional_skill_subjects= json_encode($req->additional_skill_subjects);
       
        $hiring->teaching_experience= $req->teaching_experience;
     
        $hiring->pre_institution = $req->pre_institution_name;
        $hiring->joining_leaving_date = $req->joining_leaving_date; 
      

        if($req->hasFile('cnic_pic')){
         $file= $req->file('cnic_pic');
         $extention = $file->getClientOriginalExtension();
         $filename=time().'.'.$extention;
         $file->move('Teacher/CnicPictures',$filename);
        $hiring->cnic_pic=$filename;
     }
    
     if($req->hasFile('cv_pic')){
      $file= $req->file('cv_pic');
      $extention = $file->getClientOriginalExtension();
      $filename=time().'.'.$extention;
      $file->move('Teaher/CvPictures',$filename);
     $hiring->cv_pic=$filename;
  }
 

  if($req->hasFile('latest_degree_pic')){
   $file= $req->file('latest_degree_pic');
   $extention = $file->getClientOriginalExtension();
   $filename=time().'.'.$extention;
   $file->move('Teacher/LatestDegreePictures',$filename);
  $hiring->latest_degree_pic=$filename;
}

        
      
        
      
        $hiring->basic_pay = $req->basic_pay;
        $hiring->conveyance_allowance = $req->conveyance_allowance;
        $hiring->heath_allowance = $req->heath_allowance;
        $hiring->total_pay = $req->total_pay;

        $hiring->	tester_name = $req->	tester_name;
        $hiring->	tester_designation = $req->	tester_designation;
        $hiring->tester_remarks = $req->tester_remarks;
        $hiring->test_date = $req->test_date;

        $hiring->f_interviewer_name = $req->f_interviewer_name;
       
        $hiring->f_interviewer_designation = $req->f_interviewer_designation;
        
        $hiring->f_interviewer_remarks = $req->f_interviewer_remarks;
       
        $hiring->f_interviewer_date = $req->f_interviewer_date;
        
        $hiring->s_interviewer_name = $req->s_interviewer_name;
        $hiring->s_interviewer_designation = $req->s_interviewer_designation;
        $hiring->s_interviewer_remarks = $req->s_interviewer_remarks;
        $hiring->s_interviewer_date = $req->s_interviewer_date;

        $hiring->t_interviewer_name = $req->t_interviewer_name;
        $hiring->t_interviewer_designation = $req->t_interviewer_designation;
        $hiring->t_interviewer_remarks = $req->t_interviewer_remarks;
        $hiring->t_interviewer_date = $req->t_interviewer_date;

        $hiring->selector_name = $req->	selector_name;
        $hiring->selector_designation = $req->selector_designation;
        $hiring->selector_remarks = $req->selector_remarks;
        $hiring->selection_date = $req->selection_date;

        
         
        
         $save =$hiring->save();

         if($save){
             return redirect('hiring')->with('success','new user has been added into Database!');
   
         } else
         {
             return back()->with('fail','something went wrong try again later!');
         }
 
        
     } 

   }

