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
    <input type="textarea" id="selectedDay" name="selectedDay" style="display: none;" required>
  </div>
  <input type="submit" value="Submit" class="btn btn-primary" style="margin-top: 15px">
</form>
<script>
  const selectDay = (n) => {
    document.getElementById('selectedDay').setAttribute('value', `${n}`);
    let day = document.getElementById(`day${n}`);
    day.setAttribute('style', 'width: max-content; background-color: #1fcf54; border-color: #1fcf54')
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
    let daysToRemove;
    monthData[selectedMonth] === 'February' ? daysToRemove = monthData.February.nonLeapYear.daysToRemove : daysToRemove = monthData[selectedMonth].daysToRemove;
    
    let numberOfRowsToMake = daysToRemove === 3 ? 4 : 5;
    let dayCounter = 1;
    let rowContainer = document.createElement('div');
    rowContainer.className = 'container d-flex flex-column justify-center align-items-center';

    for(let i = 0; i < numberOfRowsToMake; i++) {
      let row = document.createElement('div');
      row.id = `week${i+1}`;
      numberOfRowsToMake === 5 ? (row.className = 'row row-cols-10 flex-row justify-content-center align-items-center') : (row.className = 'row row-cols-7 flex-row justify-content-start align-items-center');

      for(let j = 0; j < 7; j++) {
        let day = document.createElement('p');

        if (i === 4 && j > 2) { /* Switch these magic numbers to variables */
          day.className = 'm-1 col-sm-1';
          day.id = 'spaceFiller';
          day.setAttribute('style', 'width: 43px;');
        } else {
          day.className = 'btn btn-secondary m-1 col-sm-1';
          day.setAttribute('style', 'width: max-content;');
          dayCounter < 10 ? day.setAttribute('style', 'width: max-content; padding-left: 16px; padding-right: 16px;') : day.setAttribute('style', 'width: max-content;');
          
          let currentDay = (new Date).getDate();

          day.textContent = `${dayCounter}`;
          currentDay > Number(day.textContent) ? day.setAttribute('style', 'border-color: #bebebe; background-color: #bebebe; width: max-content; padding-left: 16px; padding-right: 16px;') : day.setAttribute('onclick', `selectDay(${dayCounter})`);
          day.id = `day${dayCounter}`;

          dayCounter++;
        }

        row.appendChild(day);
      }

      rowContainer.appendChild(row);
    }

    let parentToWeekRows = document.getElementById('daySelection');

    parentToWeekRows.appendChild(rowContainer);
  }

  /* Input selected month dynamically here */
  createDayButtons('July', monthData);

  const createTimeslots = (selectedDay, selectedMonth) => {
    // query db for unavailable timeslots

    // create the rest as an option in the timeslot select input
  }
</script>