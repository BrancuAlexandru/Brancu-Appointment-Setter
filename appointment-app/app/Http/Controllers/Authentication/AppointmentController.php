<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __invoke(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'selectedDay' => 'required',
        'selectedMonth' => 'required',
        'selectedTime' => 'required'
      ]);

      Appointment::create([
        'email' => $request->email,
        'day' => $request->selectedDay,
        'month' => $request->selectedMonth,
        'time' => $request->selectedTime
      ]);

      return redirect()->route('home');
    }

    public function addedByManagement(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'selectedDay' => 'required',
        'selectedMonth' => 'required',
        'selectedTime' => 'required'
      ]);

      Appointment::create([
        'email' => $request->email,
        'day' => $request->selectedDay,
        'month' => $request->selectedMonth,
        'time' => $request->selectedTime
      ]);

      return redirect()->route('appointmentManagement');
    }

    public function edit(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'selectedDay' => 'required',
        'selectedMonth' => 'required',
        'selectedTime' => 'required'
      ]);

      // update table row

      return redirect()->route('appointmentManagement');
    }
}
