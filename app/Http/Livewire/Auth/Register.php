<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function register(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        // auth()->login($user);

        return redirect()->to('/login');
    }
    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content');
    }
}
