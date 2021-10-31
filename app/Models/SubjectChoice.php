<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubjectChoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'subject_choices';

    protected $fillable = [
        'student_id',
        'subject_id',
        'status',
        'year_of_exam'
    ];

    public function student(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Student::class,'student_id');
    }

    public function subject(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
