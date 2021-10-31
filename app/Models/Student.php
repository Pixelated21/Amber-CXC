<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    use HasFactory,SoftDeletes;

    protected $fillable = [
      'first_nm',
      'last_nm',
      'dob',
      'class',
      'phone_nbr',
      'email_addr',
      'gender',
    ];

    public function payment(){
        return $this->hasMany(Payment::class,'student_id','id')->with('subject');
    }

    public function subject_choice() {
        return $this->hasMany(SubjectChoice::class,'student_id','id');
    }
    public function subject_choice_subject() {
        return $this->hasMany(SubjectChoice::class,'student_id','id')->with('subject');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class,'student_id','id');
    }

    public function payment_history(){
        return $this->hasMany(PaymentHistory::class,'student_id','id');
    }
}
