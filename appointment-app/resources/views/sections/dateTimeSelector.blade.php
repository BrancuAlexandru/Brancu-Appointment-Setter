<form action="{{ route('clientMakeAppointment') }}" method="post" style="max-width: max-content; margin: 100px auto; background-color: #efefef; padding: 20px 12px; border-radius: 20px;" class="d-flex flex-column justify-center align-items-center">
  @csrf
  <h2>Set Appointment</h2>
  <label for="email" style="margin-top: 20px; display: block">Email</label>
  <input type="text" name="email" id="email" required style="display: block;" class="form-control border-2" placeholder="example@gmail.com">
  <div class="d-flex flex-row justify-content-evenly" style="width: 100%; margin: 15px 0;">
    <select name="selectedMonth" id="selectedMonth" class="form-select border-2" onchange="selectMonth()" aria-label="selectedMonth" required style="width: max-content;">
      <option value="">Select Month</option>
    </select>
    <select name="selectedTime" id="selectedTime" class="form-select border-2" aria-label="selectedTime" required style="width: max-content;">
      <option value="">Select Time</option>
      <option value="9:00">9:00</option>
      <option value="10:30">10:30</option>
      <option value="12:00">12:00</option>
      <option value="15:30">15:30</option>
      <option value="17:00">17:00</option>
      <option value="18:30">18:30</option>
      <option value="20:00">20:00</option>
    </select>
  </div>
  <div id="daySelection" class="container d-flex flex-column justify-center align-items-center">
    <input type="textarea" id="selectedDay" name="selectedDay" style="display: none;" required>
  </div>
  <input type="submit" value="Submit" class="btn btn-primary" style="margin-top: 15px">
</form>
<script>
  let lastSelectedDay = null;

  const selectDay = (n) => {

    document.getElementById('selectedDay').setAttribute('value', `${n}`);
    let day = document.getElementById(`day${n}`);
    
    if (lastSelectedDay) {

      lastSelectedDay.setAttribute('style', 'width: max-content; background-color: #6c757d; border-color: #6c757d');
    
      if (Number(lastSelectedDay.textContent) < 10) {

        lastSelectedDay.setAttribute('style', 'width: max-content; background-color: #6c757d; border-color: #6c757d; padding-left: 16px; padding-right: 16px;');
      }
    }
    
    if (Number(day.textContent) < 10) {

      day.setAttribute('style', 'width: max-content; background-color: #1fcf54; border-color: #1fcf54; padding-left: 16px; padding-right: 16px;');
    } else {

      day.setAttribute('style', 'width: max-content; background-color: #1fcf54; border-color: #1fcf54');
    }

    lastSelectedDay = day;
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

  const createMonthSelectorOptions = () => {

    const monthNames = [
      "January", 
      "February", 
      "March", 
      "April", 
      "May", 
      "June", 
      "July", 
      "August", 
      "September", 
      "October", 
      "November", 
      "December"
    ];
    const currentMonth = monthNames[(new Date).getMonth()];
    const nextMonth = monthNames[(new Date).getMonth()+1];

    // create option
    let option1 = document.createElement('option');
    let option2 = document.createElement('option');

    option1.textContent = currentMonth;
    option1.setAttribute('value', currentMonth);
    option1.id = 'currentMonth';
    
    option2.textContent = nextMonth;
    option2.setAttribute('value', nextMonth);
    option2.id = 'nextMonth';

    let parentSelector = document.getElementById('selectedMonth');

    parentSelector.appendChild(option1);
    parentSelector.appendChild(option2);
  }

  createMonthSelectorOptions();

  const createDayButtons = () => {

    let selectedMonth = document.getElementById('selectedMonth').value;

    let daysToRemove;
    monthData[selectedMonth] === 'February' ? daysToRemove = monthData.February.nonLeapYear.daysToRemove : daysToRemove = monthData[selectedMonth].daysToRemove;
    
    let numberOfRowsToMake = daysToRemove === 3 ? 4 : 5;
    let dayCounter = 1;
    let rowContainer = document.createElement('div');
    rowContainer.className = 'container d-flex flex-column justify-center align-items-center';
    rowContainer.id = 'dayContainer';

    for(let i = 0; i < numberOfRowsToMake; i++) {

      let row = document.createElement('div');
      row.id = `week${i+1}`;

      if (numberOfRowsToMake === 5) {
        row.className = 'row row-cols-10 flex-row justify-content-center align-items-center';        
      } else {
        row.className = 'row row-cols-7 flex-row justify-content-start align-items-center'
      }

      for(let j = 0; j < 7; j++) {

        let day = document.createElement('p');

        if (i === 4 && j > 2) {

          day.className = 'm-1 col-sm-1';
          day.id = 'spaceFiller';
          day.setAttribute('style', 'width: 43px;');
        } else {

          day.className = 'btn btn-secondary m-1 col-sm-1';
          day.setAttribute('style', 'width: max-content;');
          dayCounter < 10 ? day.setAttribute('style', 'width: max-content; padding-left: 16px; padding-right: 16px;') : day.setAttribute('style', 'width: max-content;');
          
          let currentDay = (new Date).getDate();

          day.textContent = `${dayCounter}`;

          let reformattedDay = dayCounter > 10 ? dayCounter : `0${dayCounter}`;
          let newDate = new Date(`${selectedMonth} ${reformattedDay}, ${(new Date).getFullYear()}, 02:02:00`);
          let daysOfTheWeek = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
          let dayOfWeekOfIteration = daysOfTheWeek[newDate.getDay()];

          if (dayOfWeekOfIteration === 'Sunday' || dayOfWeekOfIteration === 'Saturday') {

            day.setAttribute('style', 'border-color: #bebebe; background-color: #bebebe; width: max-content;');

            if (currentDay > dayCounter && monthData[selectedMonth].index === (new Date).getMonth() + 1) {

              day.setAttribute('style', 'border-color: #bebebe; background-color: #bebebe; width: max-content;');
            }

            if (dayCounter < 10) {
              day.setAttribute('style', 'border-color: #bebebe; background-color: #bebebe; width: max-content; padding-right: 16px; padding-left: 16px;')
            }
          } else {

            if (currentDay > dayCounter && monthData[selectedMonth].index === (new Date).getMonth() + 1) {

              day.setAttribute('style', 'border-color: #bebebe; background-color: #bebebe; width: max-content;');

              if (dayCounter < 10) {
                day.setAttribute('style', 'border-color: #bebebe; background-color: #bebebe; width: max-content; padding-right: 16px; padding-left: 16px;')
              }
            } else {

              day.setAttribute('onclick', `selectDay(${dayCounter})`);
            }
          }

          day.id = `day${dayCounter}`;

          dayCounter++;
        }

        row.appendChild(day);
      }

      rowContainer.appendChild(row);
    }

    let parentToWeekRows = document.getElementById('daySelection');

    parentToWeekRows.appendChild(rowContainer);

    let newFillerDay1 = document.createElement('p');
    newFillerDay1.className = 'm-1 col-sm-1';
    newFillerDay1.id = 'spaceFiller';
    newFillerDay1.setAttribute('style', 'width: 43px;');

    if (daysToRemove === 1) {

      document.getElementById('day31').remove();
      rowContainer.lastElementChild.appendChild(newFillerDay1);
    } else if (daysToRemove === 2) {

      let newFillerDay2 = document.createElement('p');
      newFillerDay2.className = 'm-1 col-sm-1';
      newFillerDay2.id = 'spaceFiller';
      newFillerDay2.setAttribute('style', 'width: 43px;');

      document.getElementById('day30').remove();
      document.getElementById('day31').remove();

      rowContainer.lastElementChild.appendChild(newFillerDay1);
      rowContainer.lastElementChild.appendChild(newFillerDay2);
    }
  }

  const selectMonth = () => {

    if (document.getElementById('dayContainer')) {

      document.getElementById('dayContainer').remove();
      createDayButtons();
    } else {

      createDayButtons();
    }
  }

  const createTimeslots = (selectedDay, selectedMonth) => {

    // query db for unavailable timeslots

    // create the rest as an option in the timeslot select input
  }
</script>