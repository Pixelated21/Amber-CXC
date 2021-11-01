<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use App\Models\SubjectChoice;
use App\Models\Transaction;
use Livewire\Component;

class StudentChoice extends Component
{

    public $student;
    public $subject;
    public $yearOfExam;

    protected $rules = [
        'student' => 'required',
        'subject' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function acceptStudent($choiceID)
    {
//        dd($choiceID['student_id']);
        SubjectChoice::find($choiceID['id'])->update([
            'status' => 1
        ]);

        Payment::create([
            'student_id' => $choiceID['student_id'],
            'subject_id' => $choiceID['subject_id'],
            'balance_amt' => $choiceID['subject']['cost_amt'],
            'date_paid' => now()
        ]);

        $transaction = Transaction::where('student_id', $choiceID['student_id'])
            ->where('year_of_exam', $choiceID['year_of_exam'])->first();


        if (!$transaction) {
            Transaction::create([
                'student_id' => $choiceID['student_id'],
                'amount_due' => $choiceID['subject']['cost_amt'],
                'balance_amt' => $choiceID['subject']['cost_amt'],
                'year_of_exam' => $choiceID['year_of_exam']
            ]);
        } else {
            $transaction->update(
                ['amount_due' => $transaction->amount_due + $choiceID['subject']['cost_amt'],
                    'balance_amt' => $transaction->balance_amt + $choiceID['subject']['cost_amt']
                ],
            );
        }


    }

    public function rejectStudent($choiceID)
    {
        SubjectChoice::find($choiceID['id'])->update([
            'status' => 0
        ]);
    }

    public function addStudentChoice()
    {

        $this->validate([
            'student' => 'required',
            'subject' => 'required'
        ]);


        SubjectChoice::create([
            'student_id' => $this->student,
            'subject_id' => $this->subject,
            'year_of_exam' => $this->yearOfExam,
        ]);

        sleep(1);


        $this->subject = '';
        $this->student = '';
        $this->yearOfExam = '';

    }

    public function render()
    {
        return view('livewire.student-choice', [
            'subjects' => \App\Models\Subject::all(),
            'students' => \App\Models\Student::orderBy('first_nm')->get(),
            'studentChoices' => SubjectChoice::orderBy('status', 'desc')
                ->paginate(5)
        ]);
    }
}
