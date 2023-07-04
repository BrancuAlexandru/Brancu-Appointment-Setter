<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Set Appointment</title>
</head>
<body>
  <main>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #eee;">
      <div class="container d-flex justify-content-end">
        <button type="button" class="btn btn-success navbar-btn m-1">Sign Up</button>
        <button type="button" class="btn btn-primary navbar-btn m-1">Log In</button>
      </div>
    </nav>
    <form action="" style="max-width: 24%; margin: 100px auto; background-color: #efefef; padding: 20px 12px; border-radius: 20px;" class="d-flex flex-column justify-center align-items-center">
      <h2>Set Appointment</h2>
      <div class="d-flex flex-row justify-content-evenly" style="width: 100%; margin: 15px 0;">
        <select name="selectedMonth" id="selectedMonth" class="form-select" aria-label="selectedMonth" required style="width: max-content;">
          <option value="">Select Month</option>
          <option value="">this month</option>
          <option value="">next month</option>
        </select>
        <select name="selectedTime" id="selectedTime" class="form-select" aria-label="selectedTime" required style="width: max-content;">
          <option value="">Select Time</option>
          <option value="9:00-10:00">9:00 - 10:00</option>
          <option value="10:30-11:30">10:30 - 11:30</option>
          <option value="12:00-13:00">12:00 - 13:00</option>
          <option value="15:30-16:30">15:30 - 16:30</option>
          <option value="17:00-18:00">17:00 - 18:00</option>
          <option value="18:30-19:30">18:30 - 19:30</option>
          <option value="20:00-21:00">20:00 - 21:00</option>
        </select>
      </div>
      <div id="selectedDay">
        <div id="week1" class="container d-flex flex-column justify-center align-items-center">
          <div class="row row-cols-10 flex-row justify-content-center align-items-center">
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">1</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">2</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">3</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">4</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">5</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">6</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">7</p>
          </div>
          <div class="row row-cols-10 flex-row justify-content-center align-items-center">
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">8</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;">9</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">10</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">11</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">12</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">13</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">14</p>
          </div>
          <div class="row row-cols-10 flex-row justify-content-center align-items-center">
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">15</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">16</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">17</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">18</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">19</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">20</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">21</p>
          </div>
          <div class="row row-cols-10 flex-row justify-content-center align-items-center">
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">22</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">23</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">24</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">25</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">26</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">27</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">28</p>
          </div>
          <div class="row row-cols-7 flex-row justify-content-start align-items-center">
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">29</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">30</p>
            <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;">31</p>
            <p class="m-1 col-sm-1" style="width: 43px"></p>
            <p class="m-1 col-sm-1" style="width: 43px"></p>
            <p class="m-1 col-sm-1" style="width: 43px"></p>
            <p class="m-1 col-sm-1" style="width: 43px"></p>
          </div>
        </div>
      </div>
      <input type="submit" value="Submit" class="btn btn-primary" style="margin-top: 15px">
    </form>
  </main>
</body>
</html>