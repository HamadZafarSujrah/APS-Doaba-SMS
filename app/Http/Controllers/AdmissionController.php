<?php

namespace App\Http\Controllers;
use App\Models\admission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\file;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    function admission(){
        return view('Student.enrollement');
    }
    function save(Request $req){

        // dd('test');

        // $req->validate([
        //     'name'=>'required|max:20',
        //     'email'=>'required|email|unique:admins',
        //     'password'=>'required|min:5|max:20',
        // ]);
  
        //insert into databsae
        $admission= new admission;
        $max_idd = admission::orderBy('id', 'desc')->first();
        if($max_idd == null)
        { $id=1;  }
        else{$id = $max_idd->id + 1;}


        $admission->std_id = 'APS-'.$req->campus.'-'.$id;
        $admission->std_first_name = $req->std_first_name;
        $admission->std_last_name = $req->std_last_name;
        $admission->cnic = $req->cnic;
        $admission->dob = $req->dob;
        $admission->gender = $req->gender;
        if($req->hasfile('profile_picture')){
            $file= $req->file('profile_picture');
            $extention =$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/Profile_Pictures',$filename);
            $admission->picture=$filename;
        }
        // $admission->picture = $req->profile_picture;
        $admission->father_name = $req->father_name;
        $admission->father_occupation = $req->father_occupation;
        $admission->father_cnic = $req->father_cnic;
        $admission->gaurdian_name= $req->guardian_name;
        $admission->f_contact_number= $req->f_contact_number;
        $admission->s_contact_number = $req->s_contact_number;
        $admission->email = $req->email_address;
        $admission->address = $req->address;
        $admission->tehsil = $req->tehsil;
        $admission->district = $req->district;
        $admission->campus = $req->campus;
        $admission->class = $req->class;
        $admission->section = $req->section;
        $admission->obtained_marks = $req->o_marks;
        $admission->total_marks = $req->t_marks;
        $admission->pre_school = $req->p_school;
        $admission->pre_school_reg = $req->p_school_reg;
        if($req->hasFile('b_form_pic')){
            $file= $req->file('b_form_pic');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/Bform_Pictures',$filename);
            $admission->b_form_pic=$filename;
        }
        // $admission->b_form_pic = $req->b_form_pic;
        if($req->hasfile('f_cnic_pic')){
            $file= $req->file('f_cnic_pic');
            $extention= $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/Fcnic_Pictures',$filename);
            $admission->f_cnic_pic = $filename;
        }
        // $admission->f_cnic_pic = $req->f_cnic_pic;
        $admission->tution_fee = $req->tution_fee;
        $admission->admission_fee = $req->admission_fee;
        $admission->exam_fee = $req->exam_fee;
        $admission->sports_fee = $req->sports_fee;
        $admission->library_fee = $req->library_fee;
        $admission->lab_fee = $req->lab_fee;
        $admission->other_fee = $req->other_fee;
        $admission->total_fee = $req->total_fee;
        $admission->discount = $req->discount;
        $admission->fee_payable = $req->fee_payable;
        
       
        $save = $admission->save();

        if($save){
            return redirect('enrollement')->with('success','new user has been added into Database!');
  
        } else
        {
            return back()->with('fail','something went wrong try again later!');
        }

       
    } 
    

    function fetch_data(){
        $users= admission::all();
        // return view('admission', ['items'=>$data]);

        // $users = DB::select('select * from admissions');
        return view('Student.enrollement_record', ['items'=>$users]);

    }

    function profile_data($id){
         $data= admission::findOrFail($id);
        // return view('admission', ['items'=>$data]);
        // $data = DB::select('select * from admissions');
        return view('Student.profile', ['profile'=>$data]);

    }

    
    function edit_data($id){
        $students = admission::findOrFail($id);
        return view('Student.edit_student',['student'=>$students]);
    }


    function update_record(Request $req, $id)
    {
        $update= admission::findOrFail($id);
        $update->std_first_name = $req->std_first_name;
        $update->std_last_name = $req->std_last_name;
        $update->cnic = $req->cnic;
        $update->dob = $req->dob;
        $update->gender = $req->gender;
        if($req->hasfile('profile_picture'))
        {
            $destination = 'Students/Profile_Pictures/'. $update->picture;
            if(File::exists($destination))
            {
                File::delete($destination);
            }


            $file= $req->file('profile_picture');
            $extention =$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/Profile_Pictures',$filename);
            $update->picture=$filename;
        }
        // $update->picture = $req->profile_picture;
        $update->father_name = $req->father_name;
        $update->father_occupation = $req->father_occupation;
        $update->father_cnic = $req->father_cnic;
        $update->gaurdian_name= $req->guardian_name;
        $update->f_contact_number= $req->f_contact_number;
        $update->s_contact_number = $req->s_contact_number;
        $update->email = $req->email_address;
        $update->address = $req->address;
        $update->tehsil = $req->tehsil;
        $update->district = $req->district;
        $update->class = $req->class;
        $update->obtained_marks = $req->o_marks;
        $update->total_marks = $req->t_marks;
        $update->pre_school = $req->p_school;
        $update->pre_school_reg = $req->p_school_reg;
        if($req->hasFile('b_form_pic'))
        {
            $destination = 'Students/Bform_Pictures/'. $update->b_form_pic;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file= $req->file('b_form_pic');
            $extention = $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/Bform_Pictures',$filename);
            $update->b_form_pic=$filename;
        }
        // $update->b_form_pic = $req->b_form_pic;
        if($req->hasfile('f_cnic_pic'))
        {
            $destination = 'Students/Fcnic_Pictures/'. $update->f_cnic_pic;
            if(File::exists($destination))
                {
                File::delete($destination);
            }

            $file= $req->file('f_cnic_pic');
            $extention= $file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('Students/Fcnic_Pictures',$filename);
            $update->f_cnic_pic = $filename;
        }
        // $update->f_cnic_pic = $req->f_cnic_pic;
        $update->tution_fee = $req->tution_fee;
        $update->admission_fee = $req->admission_fee;
        $update->exam_fee = $req->exam_fee;
        $update->sports_fee = $req->sports_fee;
        $update->library_fee = $req->library_fee;
        $update->lab_fee = $req->lab_fee;
        $update->total_fee = $req->total_fee;
       
        $save = $update->update();
        
        if($save){
            return redirect('enrollement')->with('success','Data is Updated Successfully');
  
        } else
        {
            return back()->with('fail','something went wrong try again later!');
        }

    }
    function delete_record($id)
    {
        $data= admission::findOrFail($id);

        $destination = 'Students/Profile_Pictures/'.$data->picture;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $destination = 'Students/Bform_Pictures/'.$data->b_form_pic;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $destination = 'Students/Fcnic_Pictures/'.$data->f_cnic_pic;
            if(File::exists($destination))
                {
                File::delete($destination);
            }



        $data->delete(); 
        return redirect('enrollement')->with('success','Data is Deleted Successfully');
    }

}
