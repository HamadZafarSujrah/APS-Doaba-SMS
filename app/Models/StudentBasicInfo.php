<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentAcademicInfo;
class StudentBasicInfo extends Model
{
    use HasFactory;
    public function studentAcademicInfos(){
        return $this->hasMany('App\Models\StudentAcademicInfo','StudentBasicInfo_id', 'id');
    }
    public function studentAttachments(){
        return $this->hasMany('App\Models\StudentAttachment','StudentBasicInfo_id', 'id');
    }
    public function studentAdmissionFees(){
        return $this->hasMany('App\Models\StudentAdmissionFee','StudentBasicInfo_id', 'id');
    }
    public function GetLatestClass(){
        $id= $this->StudentBasicInfo_id;
        $class =  StudentAcademicInfo::where('StudentBasicInfo_id',$id)->orderby('StudentBasicInfo_id','DESC')->first();
        return $class;
        
    }
}
 