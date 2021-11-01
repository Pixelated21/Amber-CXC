<?php

namespace App\Http\Livewire;

use App\Mail\TeacherAdded;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Mail;

class Teacher extends Component
{
    use WithPagination;

    public $search;

    public $first_nm;
    public $last_nm;
    public $email;
    public $subject_id;
    public $password;


    protected $rules = [
        'first_nm' => 'required|min:2',
        'last_nm' => 'required|min:2',
        'email' => 'required|email|unique:users',
        'subject_id' => 'required|unique:teachers',
        'password' => 'required',
    ];

    protected $messages = [
        'subject_id' => 'Subject Already Taken'
    ];

    public function updated($validatedFields)
    {
        $this->validateOnly($validatedFields);
    }

    public function authorizeTeacher($teacher){
        User::find($teacher['user']['id'])->update([
            'status' => 1
        ]);
    }

    public function declineTeacher($teacher){
        User::find($teacher['user']['id'])->update([
            'status' => 0
        ]);
    }

    public function addTeacher()
    {

        $this->validate([
            'first_nm' => 'required|min:2',
            'last_nm' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'subject_id' => 'required|unique:teachers',
            'password' => 'required',

        ]);

        sleep(1);


        $user = User::create([
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'status' => 3,
            'role_id' => 2,
        ]);



        \App\Models\Teacher::create([
            'user_id' => $user->id,
            'first_nm' => $this->first_nm,
            'last_nm' => $this->last_nm,
            'subject_id' => $this->subject_id,

        ]);

        Mail::to($this->email)->send(new TeacherAdded($this->first_nm,$this->last_nm,$this->subject_id,$this->email,$this->password));



    }

    public function render()
    {
        return view('livewire.teacher', [
            'subjects' => \App\Models\Subject::all(),
            'teachers' => \App\Models\Teacher::where(function ($query){
                $query->where('first_nm','like','%'.$this->search.'%')
                ->orWhere('last_nm','like','%'.$this->search.'%');
            })
                ->paginate(5)
        ]);
    }
}
