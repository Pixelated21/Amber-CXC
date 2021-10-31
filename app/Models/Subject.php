<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
      'subject_nm',
      'cost_amt'
    ];

    public function payment(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Payment::class,'subject_id','id');
    }
    public function subject_choice(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SubjectChoice::class,'subject_id','id');
    }
}
