<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use App\Models\SubjectChoice;
use Livewire\Component;

class Payments extends Component
{

    public function render()
    {
        return view('livewire.payments',[
            'payments' => SubjectChoice::where(function ($query){
              $query
                    ->where('status','=',1);
            })->paginate(5)
        ]);
    }
}
