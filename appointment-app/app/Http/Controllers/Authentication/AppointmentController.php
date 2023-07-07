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

      $apppointments = Appointment::get();

      return view('back-office.management', [
        'appointments' => $apppointments
      ]);
    }

    public function delete(Request $request)
    {
      Appointment::destroy($request->id);

      $apppointments = Appointment::get();

      return view('back-office.management', [
        'appointments' => $apppointments
      ]);
    }

    public function update(Request $request)
    {
      Appointment::where('email', $request->email)->update([
        'email' => $request->email,
        'day' => $request->day,
        'month' => $request->day,
        'time' => $request->day
      ]);

      $apppointments = Appointment::get();

      return view('back-office.management', [
        'appointments' => $apppointments
      ]);
    }
}
