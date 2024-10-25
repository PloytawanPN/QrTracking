<?php

namespace App\Livewire\Admin;

use Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;
    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect()->route('admin.QrCode');
        }
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
