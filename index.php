<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

  </head>
  <body>

    <div>
      <p>Hi Jide. It&#39;s been 4 hours since you&#39;ve been using your laptop.Why not take 5 minutes out to stretch? </p>
    </div>

    <div class="time">
      <?php
      date_default_timezone_set('Africa/Lagos');
      // echo $time = date('Y-m-d');
      echo "\n"."<br>";
      echo $date = date('H:i:s A');
      ?>
    </div>


  </body>
</html>
