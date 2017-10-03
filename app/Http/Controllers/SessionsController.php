<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{
    //
    public function __construct() {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create() {
        return view('sessions.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->has('remember'))) {
            session()->flash('success', 'Welcome!');
            return redirect()->intended(route('users.show', [Auth::user()]));
        } else {
            session()->flash('danger', 'Sorry, E-mail and password don`t match.');
            return redirect()->back();
        }
        return;
    }

    public function destroy() {
        Auth::logout();
        session()->flash('success', 'You have logout.');
        return redirect('/');
    }
}
