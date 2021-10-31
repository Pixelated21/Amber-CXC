<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;

    protected $fillable = [
      'student_id',
      'amount_paid',
      'amount_paid'
    ];

    public function student(){
        return $this->belongsTo(Student::class,'student_id','id');
    }
}

