<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Priority Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  </head>
  <style>
    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    .title {
    margin-bottom: 650px;
  }

  .title h2 {
    padding-left:60px;
    font-size: 2rem;
    font-weight: 600;
    color: #333;
  }
    body {
      display: flex;
      align-items: center;
      padding: 0 10px;
      justify-content: center;
      min-height: 100vh;
      background: #FBF9F1;
      padding-right:50px;
      margin-left:12%;
    }
    .wrapper {
      width: 850px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }
    .wrapper header {
      display: flex;
      align-items: center;
      padding: 25px 30px 10px;
      justify-content: space-between;
    }
    header .icons {
      display: flex;
    }
    header .icons span {
      height: 38px;
      width: 38px;
      margin: 0 1px;
      cursor: pointer;
      color:#AAD7D9;
      text-align: center;
      line-height: 38px;
      font-size: 1.9rem;
      user-select: none;
      border-radius: 50%;
    }
    header .icons span:last-child {
      margin-right: -10px;
    }
    header .icons span:hover {
      background: #f2f2f2;
    }
    header .current-date {
      font-size: 1.45rem;
      font-weight: 500;
    }
    .calendar {
      padding: 20px;
    }
    .calendar ul {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      text-align: center;
    }
    .calendar .days {
      margin-bottom: 20px;
    }
    .calendar li {
      color: #333;
      width: calc(100% / 7);
      font-size: 1.07rem;
    }
    .calendar .weeks li {
      font-weight: 500;
      cursor: default;
    }
    .calendar .days li {
      z-index: 1;
      cursor: pointer;
      position: relative;
      margin-top: 30px;
    }
    .days li.inactive {
      color: #aaa;
    }
    .days li::before {
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 60px; /* Increased from 40px to 60px */
  width: 60px;  /* Increased from 40px to 60px */
  z-index: -1;
  border-radius: 50%;
  transform: translate(-50%, -50%);
}

    /* Task priority styles */
    .priority-high::before {
      background-color: #fc4025;
    }
    .priority-medium::before {
      background-color: #fae31b;
    }
    .priority-low::before {
      background-color: #92C7CF;
    }
  </style>
  <body>
  <?php include 'dashboard.php';?>
<div class="title">
  <h2>Calendar:</h2>
  </div>
    <div class="wrapper">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>

    <script>
      const daysTag = document.querySelector(".days"),
            currentDate = document.querySelector(".current-date"),
            prevNextIcon = document.querySelectorAll(".icons span");

      let date = new Date(),
          currYear = date.getFullYear(),
          currMonth = date.getMonth();

      const months = ["January", "February", "March", "April", "May", "June", "July",
                      "August", "September", "October", "November", "December"];

      const renderCalendar = () => {
          let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
              lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
              lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
              lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
          let liTag = "";

          for (let i = firstDayofMonth; i > 0; i--) {
              liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
          }

          for (let i = 1; i <= lastDateofMonth; i++) {
              // Pre-set priorities and tasks for specific dates
              if (currYear === 2024 && currMonth === 9) { // October 2024
                  if (i === 28) {
                      liTag += `<li class="priority-high">${i}<br><small>hw1</small></li>`;
                  } else if (i === 29) {
                      liTag += `<li class="priority-medium">${i}<br><small>hw2</small></li>`;
                  } else if (i === 30) {
                      liTag += `<li class="priority-low">${i}<br><small>hw3</small></li>`;
                  } else {
                      liTag += `<li>${i}</li>`;
                  }
              } else {
                  liTag += `<li>${i}</li>`;
              }
          }

          for (let i = lastDayofMonth; i < 6; i++) {
              liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
          }
          currentDate.innerText = `${months[currMonth]} ${currYear}`;
          daysTag.innerHTML = liTag;
      }

      renderCalendar();

      prevNextIcon.forEach(icon => {
          icon.addEventListener("click", () => {
              currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

              if (currMonth < 0 || currMonth > 11) {
                  date = new Date(currYear, currMonth, new Date().getDate());
                  currYear = date.getFullYear();
                  currMonth = date.getMonth();
              } else {
                  date = new Date();
              }
              renderCalendar();
          });
      });
    </script>
  </body>
</html>
