<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function updated($validatedFields)
    {
        $this->validateOnly($validatedFields);
    }

    public function login()
    {

        $login = $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($login)) {



            $this->email = '';
            $this->password = '';

            sleep(2);

            session()->flash('type', 0);
            session()->flash('alert', 'Credentials Invalid');

            return;
        }

        sleep(3);

        return redirect()->route('PrøxïmïtyUI');


    }

    public function render()
    {
        return view('livewire.login');
    }
}
