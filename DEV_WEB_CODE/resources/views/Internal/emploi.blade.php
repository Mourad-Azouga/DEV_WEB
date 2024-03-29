<!DOCTYPE html>
<html>
<head>
  <title>Timetable</title>
  <link rel="stylesheet" type="text/css" href="{{ asset ('css/emploi.css')}}">
</head>
<body>

<!-- Header with Links -->
<header>
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#timetable">Timetable</a></li>
      <li><a href="#events">Events</a></li>
      <li><a href="#contact">Contact Us</a></li>
    </ul>
  </nav>
</header>

<!-- Home -->
<section id="home">
  <h1>Welcome to Timetable</h1>
  <p>Here you will find the schedule for all events.</p>
</section>

<!-- Timetable -->
<section id="timetable">
  <h2>Timetable</h2>
  <table>

    <!-- 1st row -->
    <tr>
      <th>Time</th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
    </tr>

    <!-- 2nd row -->
    <tr>
      <td>9:00am</td>
      <td>Event 1</td>
      <td>Event 2</td>
      <td>Event 3</td>
      <td>Event 4</td>
      <td>Event 5</td>
    </tr>

    <!-- 3rd row -->
    <tr>
      <td>10:00am</td>
      <td>Event 6</td>
      <td>Event 7</td>
      <td>Event 8</td>
      <td>Event 9</td>
      <td>Event 10</td>
    </tr>

    <!-- 4th row -->
    <tr>
      <td>11:00am</td>
      <td>Event 11</td>
      <td>Event 12</td>
      <td>Event 13</td>
      <td>Event 14</td>
      <td>Event 15</td>
    </tr>

    <!-- 5th row -->
    <tr>
      <td>12:00pm</td>
      <td>Event 16</td>
      <td>Event 17</td>
      <td>Event 18</td>
      <td>Event 19</td>
      <td>Event 20</td>
    </tr>

  </table>
</section>

<!-- Events -->
<section id="events">
  <h2>Upcoming Events</h2>
  <ul>
    <li>Event 1 - Date and Time</li>
    <li>Event 2 - Date and Time</li>
    <li>Event 3 - Date and Time</li>
    <li>Event 4 - Date and Time</li>
    <li>Event 5 - Date and Time</li>
  </ul>
</section>

<!-- Contact -->
<section id="contact">
  <h2>Contact Us</h2>
  <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message"></textarea><br>
    <input type="submit" value="Submit"> <br
      </form>
    </section>

    <footer>
      <p><a href="https://github.com/Marschi47" style="color: white;">GitHub/Marschi47</a></p>
    </footer>
    </body>
    </html>