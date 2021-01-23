<?php include './data1.php';
$nav = array("Trainees", "Trainee", "Attendance Report","Dashboard","Academy Gallery"); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./"> <?php   echo $nav[0]  ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./trainee.php"> <?php echo  $nav[1]  ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./attendance.php"> <?php echo  $nav[2]  ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./dashboard.php"> <?php echo  $nav[3]  ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./ocaphotos.php"> <?php echo  $nav[4]  ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>