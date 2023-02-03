<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="peace.jpg">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #252B39;
  padding: 1px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 600px; /* only for demonstration, should be removed */
  background: #445597;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
 
  background-image: url("me.JPG") ;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
  position: fixed;
  width: 300px;
  height: 200px;
}

/* Style the footer */
footer {
  background-color: #c0d3ff;
  padding: 10px;
  text-align: center;
  color: white;
  position: fixed;
  bottom: 0;
  height: 8%;
  width: 100%;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>
  <h2>Introduction</h2>
</header>

<section>
  <nav>
    <ul>
      <li><img src="SPT.gif" alt="Description of image" width="170" height="150"></a></li>

      <h4>1st JavaScript</h4>
      <button type="button"
      onclick="document.getElementById('demo').innerHTML = Date()">
      Click to display Date and Time.</button>
      <p id="demo"></p>

      <h4>2nd JavaScript</h4>
      <p id="demo1"></p>

      <script>
      let x = 5;      // Declare x, give it the value of 5
      let y = x + 2;  // Declare y, give it the value of x + 2 

      // Write y to demo:
      document.getElementById("demo1").innerHTML = y;
      </script>
      
      <h4>3rd JavaScript if statement</h4>

      <p>Display "Good day!" if the hour is less than 18:00:</p>

      <p id="demo3">Good Evening!</p>

      <script>
      if (new Date().getHours() < 18) {
      document.getElementById("demo3").innerHTML = "Good day!";
      }
      </script>
      
      <h4>4th JavaScript Switch Case statement</h4>
<p id="demo4"></p>

<script>
let day;
switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case  6:
    day = "Saturday";
}
document.getElementById("demo4").innerHTML = "Today is " + day;
</script>

      <li></a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Nickname: klang</h1>
    <p>Senior High School Graduate From? Asia Pacific College</p>
    <p>Course: Bachelor of Science in Information Technology</p>
    <p>Scholarship? Yes, 35%</p>
    <p>Transferee? No.</p>
    <p>Second Course? Police</p>
    <p>Did you choose this course? Yes, I am interested in computer technology system. </p>
    <p>I.T Experience: Yes, I am interested in computer technology system.</p>
    <p>Hobbies / Interest / Libangan: Cycling, Football, Basketball, Bowling, Badminton, and etc. </p>
    <p>Goals in life/ Pangarap sa buhay: To be happy, contented, and love what I’m doing </p>
    <p>What do you expect to learn from this course? (Web Programming)? All the basics that would help me move forward to keep on learning. </p>
    <p>What do you want to learn to help you in your chosen Major? Most especially is applications or a software that I could create to help most company and software’s to prevent Cyber Attack.</p>
    <p>Any other interesting aspects of your life that you would like to share? None</p>
    
  </article>
</section>

<footer>
  <p>
    <a href="https://r.mtdv.me/ClickHere" target="_blank">not a virus Click me</a>
  </p>
</footer>

</body>
</html>

