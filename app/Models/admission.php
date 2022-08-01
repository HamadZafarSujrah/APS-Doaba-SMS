<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admission extends Model
{
    use HasFactory;
    public function setStdFirstNameAttribute($value)
    {
        $this->attributes['std_first_name'] =ucwords($value);
    }
    public function setStdLastNameAttribute($value)
    {
        $this->attributes['std_last_name'] =ucwords($value);
    }

  


    public function getDiscountAttribute($value)
    {
        $Disc =$this->attributes['discount'] ;
        switch ($Disc) {
            case 'zero':
             return '0%';
              break;
            case 'twenty_five':
                return '25%';
              break;
            case 'fifty':
                return '50%';
              break;
            case 'seventy_five':
                return '75%';
              break;
            case 'hundred':
                return '100%';
              break;
    }

   
}
}
