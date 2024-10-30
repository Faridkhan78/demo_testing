{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Filter Button</title>
<style>
  .filter-button {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #4CAF50; /* Green color */
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
    display: inline-flex;
    align-items: center;
  }

  .filter-button:hover {
    background-color: #45a049;
    transform: scale(1.05);
  }

  .filter-button:active {
    background-color: #3d8b41;
  }

  /* Optional icon styling */
  .filter-button svg {
    width: 18px;
    height: 18px;
    margin-right: 8px;
    fill: #fff;
  }
</style>
</head>
<body>

<button class="filter-button">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path d="M3 5h18v2H3V5zm4 7h10v2H7v-2zm6 7h-4v-2h4v2z"/>
  </svg>
  Filter
</button>

</body>
</html> --}}

{{-- start date and end date formate --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Date Picker</title>
<style>
  /* General Styles */
  body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
  }

  .date-picker-container {
    display: flex;
    gap: 15px;
    align-items: center;
  }

  .date-input {
    position: relative;
    display: flex;
    flex-direction: column;
    font-size: 14px;
  }

  .date-input label {
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
  }

  .date-input input[type="date"] {
    padding: 10px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    color: #333;
    outline: none;
    transition: border-color 0.3s ease;
  }

  .date-input input[type="date"]:hover {
    border-color: #4CAF50; /* Green color for hover */
  }

  .date-input input[type="date"]:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
  }
</style>
</head>
<body>

<div class="date-picker-container">
  <div class="date-input">
    <label for="start-date">Start Date</label>
    <input type="date" id="start-date" name="start-date">
  </div>
  <div class="date-input">
    <label for="end-date">End Date</label>
    <input type="date" id="end-date" name="end-date">
  </div>
</div>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Date Picker</title>
<style>
  /* General Styles */
  body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f2f5;
  }

  .date-picker-container {
    display: flex;
    gap: 20px;
    align-items: center;
    background-color: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  }

  .date-input {
    position: relative;
    display: flex;
    flex-direction: column;
    font-size: 16px;
  }

  .date-input label {
    margin-bottom: 5px;
    font-weight: 600;
    color: #444;
  }

  .date-input input[type="date"] {
    padding: 12px 16px 12px 40px; /* Added padding for icon space */
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 15px;
    color: #333;
    outline: none;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
  }

  .date-input input[type="date"]:hover {
    border-color: #3b82f6; /* Interactive blue color on hover */
  }

  .date-input input[type="date"]:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 5px rgba(59, 130, 246, 0.3);
  }

  /* Calendar Icon */
  .date-input .calendar-icon {
    position: absolute;
    left: 10px;
    top: 35px;
    width: 20px;
    height: 20px;
    fill: #aaa;
    pointer-events: none;
    transition: fill 0.3s ease;
  }

  .date-input input[type="date"]:hover ~ .calendar-icon,
  .date-input input[type="date"]:focus ~ .calendar-icon {
    fill: #3b82f6;
  }
</style>
</head>
<body>

<div class="date-picker-container">
  <div class="date-input">
    <label for="start-date">Start Date</label>
    <input type="date" id="start-date" name="start-date">
    <svg class="calendar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11zM7 11h5v5H7v-5z"/>
    </svg>
  </div>
  <div class="date-input">
    <label for="end-date">End Date</label>
    <input type="date" id="end-date" name="end-date">
    <svg class="calendar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11zM7 11h5v5H7v-5z"/>
    </svg>
  </div>
</div>

</body>
</html>
