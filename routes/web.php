<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/* HOME → redirect ke login */
Route::get('/', function () {
    return redirect('/login');
});

/* ================= LOGIN ================= */
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {

    if ($request->email == 'admin@gmail.com' && $request->password == '123') {

        // SESSION
        session([
            'login' => true,
            'email' => $request->email
        ]);

        // COOKIE
        if ($request->has('remember')) {
            cookie()->queue('email', $request->email, 60);
        }

        return redirect('/dashboard');
    }

    return back()->with('error', 'Email / Password salah!');
});

/* ================= DASHBOARD ================= */
Route::get('/dashboard', function () {

    if (!session('login')) {
        return redirect('/login');
    }

    return view('dashboard');
});

/* ================= LOGOUT ================= */
Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
});