<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use function Livewire\str;

class Subject extends Component
{

    use WithPagination;

    public $search;

    public $toast;

    public $subjectName;
    public $costAmt;


    protected $rules = [
      'subjectName' => 'required|min:2'  ,
        'costAmt' => 'required|numeric|min:1'
    ];

    protected $messages = [
        'subjectName.min' => 'The subject name must be at least 2 characters.',
        'costAmt.required' => 'The price field is required.',
        'costAmt.numeric' => 'The price must be a numeric value.',
        'costAmt.min' => 'The price must be at least 1 character'
    ];

    public function addSubject(){

        $this->validate([
            'subjectName' => 'required|min:2'  ,
            'costAmt' => 'required|numeric|min:1'
        ],
        [
            'subjectName.min' => 'The subject name must be at least 2 characters.',
            'costAmt.required' => 'The price field is required.',
            'costAmt.numeric' => 'The price must be a numeric value.',
            'costAmt.min' => 'The price must be at least 1 character'
        ]);

        \App\Models\Subject::create([
           'subject_nm' => $this->subjectName,
            'cost_amt' => $this->costAmt,
        ]);

//        $this->emit('toast');
        $this->toast = true;

        sleep(1);

        $this->subjectName = '';
        $this->costAmt = '';

    }


    public function updatedSearch(){

        $this->resetPage();
    }

    public function updated($validatedFields)
    {
        $this->validateOnly($validatedFields);
    }


    public function render()
    {
        return view('livewire.subject',[
            'subjects' => \App\Models\Subject::where('subject_nm','like','%'.$this->search.'%')
                ->orderBy('updated_at','desc')
            ->paginate(5)
        ]);
    }
}
