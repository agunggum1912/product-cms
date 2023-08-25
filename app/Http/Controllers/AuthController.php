<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request) {
        $rule = [
            'email_nomor_telpon'    => 'required',
            'password'              => 'required',
        ];

        $validate = Validator::make($request->all(), $rule);
        if($validate->fails())
            return $this->json400($validate->errors()->first());

        $user = User::where('role', 1)
            ->where(function($q) use($request) {
                $q->where('email', $request->email_nomor_telpon)
                    ->orWhere('phone', $request->email_nomor_telpon);
            })->first();

        if(!$user)
            return $this->json400('Email atau Nomor Telpon atau Password salah.');

        if(!Hash::check($request->password, $user->password))
            return $this->json400('Email atau Nomor Telpon atau Password salah.');

        Auth::login($user);

        return $this->json200($user, 'Login berhasil.');
    }
}
