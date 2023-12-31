<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function __invoke()
  {
    return view('authentication.login');
  }

  public function authenticate(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (!auth()->attempt($request->only('email', 'password'))) {
      return back()->with('status', 'Invalid login details.');
    }
    
    $appointments = Appointment::get();

    return view('back-office.management', ['appointments' => $appointments]);
  }
}
