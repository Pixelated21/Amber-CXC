<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Student extends Component
{
    use WithPagination;

    public $search;

    public $detailsView;

    public $firstName;
    public $lastName;
    public $class;
    public $date;
    public $phone_nbr;
    public $gender;
    public $email_addr;

    protected $rules = [
        'firstName' => 'required|min:2',
        'lastName' => 'required|min:2',
        'class' => 'required|min:2',
        'date' => 'required|min:2',
        'phone_nbr' => 'required|min:2|unique:students',
        'gender' => 'required|min:2',
        'email_addr' => 'required|min:2|email|unique:students',
    ];

    protected $listeners = ['viewDetails','closeViewDetails'];

    public function viewDetails($studentID){
        $this->detailsView = \App\Models\Student::where('id',$studentID)->first();
        $this->dispatchBrowserEvent('view');
    }

    public function closeViewDetails(){
        $this->detailsView = null;
        $this->dispatchBrowserEvent('closeView');
    }
    public function updated($validatedFields)
    {
        $this->validateOnly($validatedFields);
    }



    public function updatedSearch()
    {
        if (strlen($this->search) < 2) {
            return;
        }

        $this->resetPage();
    }

    public function addStudent()
    {

        $this->validate([
            'firstName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'class' => 'required|min:2',
            'date' => 'required|min:2',
            'phone_nbr' => 'required|min:2',
            'gender' => 'required|min:2',
            'email_addr' => 'required|min:2|email',
        ]);

        \App\Models\Student::create([
            'first_nm' => $this->firstName,
            'last_nm' => $this->lastName,
            'dob' => $this->date,
            'class' => $this->class,
            'phone_nbr' => $this->phone_nbr,
            'email_addr' => $this->email_addr,
            'gender' => $this->gender

        ]);

        sleep(1);


        $this->firstName = '';
        $this->lastName = '';
        $this->date = '';
        $this->class = '';
        $this->phone_nbr = '';
        $this->email_addr = '';
        $this->gender = '';


    }

    public function render()
    {
        return view('livewire.student', [
            'students' => \App\Models\Student::where(function ($query) {
                $query->where('first_nm', 'like', '%' . $this->search . '%')
                    ->orwhere('last_nm', 'like', '%' . $this->search . '%')
                    ->orwhere('email_addr', 'like', '%' . $this->search . '%')
                    ->orwhere('phone_nbr', 'like', '%' . $this->search . '%');
            })->orderBy('updated_at', 'desc')
                ->paginate(5)
        ]);
    }
}
