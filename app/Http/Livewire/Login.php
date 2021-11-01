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

//            dd(Auth::id());

            $this->email = '';
            $this->password = '';

            sleep(2);

            session()->flash('alert', 'Credentials Invalid');

        } else {

//            dd(Auth::id());

            if (Auth::user()->status === 3) {
                session()->flash('alert', 'Account Pending Admin Review');
            } elseif (Auth::user()->status === 0) {
                session()->flash('alert', 'Account Rejected');
            } else {
                sleep(1);

                if (Auth::user()->role_id === 2) {
                    return redirect()->route('teacher-dashboard');
                }

                if (Auth::user()->role_id === 1) {
                    return redirect()->route('dashboard');
                }

            }

        }


    }

    public function render()
    {
        return view('livewire.login');
    }
}
