<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Manage Appointments</title>
</head>
<body>
  <main>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #eee;">
      <div class="container d-flex justify-content-between">
        <button type="button" class="btn btn-success navbar-btn m-1" onclick="toggleAddAppointmentModal()">Add Appointment</button>
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button type="submit" class="btn btn-danger navbar-btn m-1">Log Out</button>
        </form>
      </div>
    </nav>
    <div id="afterElement" style="display: none;" onclick="toggleAddAppointmentModal()"></div>
    @include('sections.managedTable')
    <div id="modalParent" style="display: none;">
      @include('sections.modalDateTimeSelector')
    </div>
  </main>
  <script>
    const toggleAddAppointmentModal = () => {
      let form = document.getElementById('appointmentMakerForm');
      let after = document.getElementById('afterElement');
      let formParent = document.getElementById('modalParent');

      if (form.getAttribute('style') === 'display: none !important; max-width: max-content; margin: 100px auto; background-color: #efefef; padding: 20px 12px; border-radius: 20px;') {
        form.setAttribute('style', 'display: flex !important; position: fixed; z-index: 3; max-width: max-content; background-color: #efefef; padding: 20px 12px; border-radius: 20px;');
        after.setAttribute('style', 'display: block; background-color: #000000; opacity: .6; z-index: 2; width: 100%; height: 100%; position: absolute; left: 0; top: 0;');
        formParent.setAttribute('style', 'width: 100%; height: 100%; top: 0; left: 0; position: absolute; display: flex; justify-content: center; align-items: center;');
      } else {
        form.setAttribute('style', 'display: none !important; max-width: max-content; margin: 100px auto; background-color: #efefef; padding: 20px 12px; border-radius: 20px;');
        after.setAttribute('style', 'display: none;');
        formParent.setAttribute('style', 'display: none;')
      }
    }
  </script>
</body>
</html>