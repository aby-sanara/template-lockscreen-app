<?php 

$title = "Lock Screen - Dashboard";

require "template/header.php";
require "template/navbar.php";
require "template/sidebar.php";

?>
    <div class="frame-timer" hidden>
      <div class="timer-center" id="timer"></div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h1 class="h2">Dashboard</h1>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
  
<?php 

require "template/footer.php";

?>