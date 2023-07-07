<form action="{{ route('managementMakeAppointment') }}" method="post" style="max-width: 70%; margin-top: 2px; margin-left: auto; margin-right: auto;">
  @csrf
  <div class="container text-center d-flex flex-row align-items-start justify-content-center" style="width: 80%; margin: 0 auto;">
    @if ($appointments->count())
      <div id="column1" class="d-flex flex-column align-items-center justify-content-center" style="background-color: #efefef; max-width: max-content;">
        <p style="margin-bottom: 0; padding: 10px 20px; border-right: 2px solid white; width: 100%;">Email</p>
        @foreach ($appointments as $appointment)
          <p style="margin-bottom: 0; padding: 10px 20px; border-right: 2px solid white; width: 100%;">{{ $appointment->email }}</p>
        @endforeach
      </div>
      <div id="column2" class="d-flex flex-column align-items-center justify-content-center" style="background-color: #efefef; max-width: max-content;">
        <p style="margin-bottom: 0; padding: 10px 20px; border-right: 2px solid white; width: 100%;">Month</p>
        @foreach ($appointments as $appointment)
          <p style="margin-bottom: 0; padding: 10px 20px; border-right: 2px solid white; width: 100%;">{{ $appointment->month }}</p>
        @endforeach
      </div>
      <div id="column2" class="d-flex flex-column align-items-center justify-content-center" style="background-color: #efefef; max-width: max-content;">
        <p style="margin-bottom: 0; padding: 10px 20px; border-right: 2px solid white; width: 100%;">Day</p>
        @foreach ($appointments as $appointment)
          <p style="margin-bottom: 0; padding: 10px 20px; border-right: 2px solid white; width: 100%;">{{ $appointment->day }}</p>
        @endforeach
      </div>
      <div id="column3" class="d-flex flex-column align-items-center justify-content-center" style="background-color: #efefef; max-width: max-content;">
        <p style="margin-bottom: 0; padding: 10px 20px; border-right: 2px solid white; width: 100%;">Time</p>
        @foreach ($appointments as $appointment)
          <p style="margin-bottom: 0; padding: 10px 20px; border-right: 2px solid white; width: 100%;">{{ $appointment->time }}</p>
        @endforeach
      </div>
      <div id="column4" class="d-flex flex-column align-items-center justify-content-center" style="background-color: #efefef; max-width: max-content;">
        <p style="margin-bottom: 0; padding: 10px 20px; width: 100%;">Actions</p>
        @foreach ($appointments as $appointment)
          <div style="margin-bottom: 0; width: 100%; margin-left: 0.125rem; margin-right: 0.125rem;">
            <button class="btn btn-primary m-1" style="padding-top: 0.31rem; padding-bottom: 0.31rem;">Edit</button>
            <button class="btn btn-danger m-1" style="padding-top: 0.31rem; padding-bottom: 0.31rem;">Delete</button>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</form>