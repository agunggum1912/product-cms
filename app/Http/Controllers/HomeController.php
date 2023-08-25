<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('landing.index', compact('products'));
    }

    public function register(Request $request) {
        $rule = [
            'nama'          => 'required',
            'nomor_telepon' => 'required|numeric',
            '_email'        => 'required|email|unique:App\Models\User,email',
        ];

        $validate = Validator::make($request->all(), $rule);

        if($validate->fails())
            return $this->json400($validate->errors()->first());

        DB::beginTransaction();
        try {
            $pswd = Str::random(6);
            $insert = new User();
            $insert->name       = $request->nama;
            $insert->phone      = $request->nomor_telepon;
            $insert->email      = $request->email;
            $insert->password   = Hash::make($pswd);
            $insert->role       = 2;
            $insert->save();

            $data = (object)[
                'name'      => $insert->name,
                'password'  => $pswd,
            ];

            Mail::to($insert->email, $insert->name)->send(new RegisterMail($data));

            DB::commit();
            return $this->json200([],'Berhasil daftar, silahkan lihat email untuk mendapatkan password Anda.');
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->json400($e->getMessage());
        }
    }

    public function login(Request $request) {
        $rule = [
            'email'    => 'required|email',
            'password'  => 'required',
        ];

        $validate = Validator::make($request->all(), $rule);

        if($validate->fails())
            return $this->json400($validate->errors()->first());

        $request->merge(['role' => 2]);
        $credentials = $request->only('email', 'password', 'role');
        if (Auth::attempt($credentials)) {
            return $this->json200($credentials, "Yeayy, Login berhasil.");
        }

        return $this->json400("Email atau password tidak sesuai.");
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
