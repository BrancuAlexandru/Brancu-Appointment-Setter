<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Log In</title>
</head>
<body>
  <main>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #eee;">
      <div class="container d-flex justify-content-between">
        <button type="button" class="btn btn-primary navbar-btn m-1" onclick="goToAppointmentPage()">Make Appointment</button>
        <button type="button" class="btn btn-success navbar-btn m-1" onclick="goToRegisterPage()">Sign Up</button>
      </div>
    </nav>
  </main>
  <script>
    let goToRegisterPage = () => window.location.href = 'register';
    let goToAppointmentPage = () => window.location.href = '/';
  </script>
</body>
</html>