<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
  public function __invoke()
  {
    return view('authentication.register');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email|max:255',
      'password' => 'required|max:255'
    ]);

    User::create([
      'email' => $request->email,
      'password' => Hash::make($request->password)
    ]);

    auth()->attempt($request->only('email', 'password'));

    return redirect()->route('makeAppointmentManagement');
  }
}
