<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login(){
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return $this->addError('email', 'These credentials do not match our records.');
        }

        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }
}
