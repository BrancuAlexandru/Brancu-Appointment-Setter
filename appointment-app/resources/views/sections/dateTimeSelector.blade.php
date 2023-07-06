<form action="/" method="post" style="max-width: max-content; margin: 100px auto; background-color: #efefef; padding: 20px 12px; border-radius: 20px;" class="d-flex flex-column justify-center align-items-center">
  @csrf
  <h2>Set Appointment</h2>
  <div class="d-flex flex-row justify-content-evenly" style="width: 100%; margin: 15px 0;">
    <select name="selectedMonth" id="selectedMonth" class="form-select border-2" aria-label="selectedMonth" required style="width: max-content;">
      <option value="">Select Month</option>
      <option value="">this month</option>
      <option value="">next month</option>
    </select>
    <!-- don't forget to put in an input with display none that gets its information filled in by clicking a day button -->
    <select name="selectedTime" id="selectedTime" class="form-select border-2" aria-label="selectedTime" required style="width: max-content;">
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
  <div id="daySelection" class="container d-flex flex-column justify-center align-items-center">
    <input type="text" id="selectedDay" name="selectedDay" value="" style="display: none;" required>
    <div id="daysOfTheWeek" class="row row-cols-10 flex-row justify-content-center align-items-center">
      <p class="m-1 col-sm-1"  style="width: max-content;" >Su</p>
      <p class="m-1 col-sm-1"  style="width: max-content;" >Mo</p>
      <p class="m-1 col-sm-1"  style="width: max-content; padding-left: 4px; padding-right: 12px;" >Tu</p>
      <p class="m-1 col-sm-1"  style="width: max-content;" >We</p>
      <p class="m-1 col-sm-1"  style="width: max-content;" >Th</p>
      <p class="m-1 col-sm-1"  style="width: max-content;" >Fr</p>
      <p class="m-1 col-sm-1"  style="width: max-content; padding-left: 17px;" >Sa</p>
    </div>
    <div  class="container d-flex flex-column justify-center align-items-center">
      <div id="week1" class="row row-cols-10 flex-row justify-content-center align-items-center">
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">1</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">2</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">3</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">4</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">5</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">6</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">7</p>
      </div>
      <div id="week2" class="row row-cols-10 flex-row justify-content-center align-items-center">
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">8</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content; padding-left: 16px; padding-right: 16px;" onclick="selectDay()">9</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">10</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">11</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">12</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">13</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">14</p>
      </div>
      <div id="week3" class="row row-cols-10 flex-row justify-content-center align-items-center">
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">15</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">16</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">17</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">18</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">19</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">20</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">21</p>
      </div>
      <div id="week4" class="row row-cols-10 flex-row justify-content-center align-items-center">
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">22</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">23</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">24</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">25</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">26</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">27</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">28</p>
      </div>
      <div id="week5" class="row row-cols-7 flex-row justify-content-start align-items-center">
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">29</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">30</p>
        <p class="btn btn-secondary m-1 col-sm-1"  style="width: max-content;" onclick="selectDay()">31</p>
        <p class="m-1 col-sm-1" id="spaceFiller" style="width: 43px"></p>
        <p class="m-1 col-sm-1" id="spaceFiller" style="width: 43px"></p>
        <p class="m-1 col-sm-1" id="spaceFiller" style="width: 43px"></p>
        <p class="m-1 col-sm-1" id="spaceFiller" style="width: 43px"></p>
      </div>
    </div>
  </div>
  <input type="submit" value="Submit" class="btn btn-primary" style="margin-top: 15px">
</form>
<script>
  const selectDay = () => {
    document.getElementById('selectedDay').setAttribute('value', event.target.textContent);
  }

  const monthData = {
    January: {
      index: 1,
      daysToRemove: 0
    },
    February: {
      index: 2,
      daysToRemove: {
        leapYear: 2,
        nonLeapYear: 3
      }
    },
    March: {
      index: 3,
      daysToRemove: 0
    },
    April: {
      index: 4,
      daysToRemove: 1
    },
    May: {
      index: 5,
      daysToRemove: 0
    },
    June: {
      index: 6,
      daysToRemove: 1
    },
    July: {
      index: 7,
      daysToRemove: 0
    },
    August: {
      index: 8,
      daysToRemove: 0
    },
    September: {
      index: 9,
      daysToRemove: 1
    },
    October: {
      index: 10,
      daysToRemove: 0
    },
    November: {
      index: 11,
      daysToRemove: 1
    },
    December: {
      index: 13,
      daysToRemove: 0
    }
  }

  const createDayButtons = (selectedMonth, monthData) => {



    // create day element and parent row

    if (selectedMonth === 'February') {

    }

    // gray out days that have passed, remove click handler
  }

  const positionWeekDaysCorrectly = () => {
    let weekDayValues = ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'];

    // create week day element and parent row
  }

  const createTimeslots = (selectedDay, selectedMonth) => {
    // query db for unavailable timeslots

    // create the rest as an option in the timeslot select input
  }
</script>