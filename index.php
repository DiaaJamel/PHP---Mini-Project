<?php
include './data1.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <title>Home</title>
</head>
<body>
<div class="container">
<?php include './navbar.php' ?>



<!-- Cards -->
<div class="row">
<?php
include './data.php';

foreach($data as $trainees){

    echo "
    <div class='card' style='width: 18rem;'>
    <img src={$trainees['image']} class='card-img-top' alt='...'>
    <div class='card-body' style='width: 18rem; text-align: center; text-decoration:none;'>
    <h5 class='card-title'>{$trainees['name']}</h5>
    <p class='card-text'> {$trainees['About']}</p>
    
    <i class='fas fa-birthday-cake'></i>{$trainees['birthday']}<br/>
    <a href='https://www.linkedin.com/'> <i class='fab fa-linkedin'></i>{$trainees['linkedin']}</a> <br/>
    <a href='https://github.com/' style='text-decoration:none;'><i class='fab fa-github'></i> {$trainees['github account']}</a><br/>
    <a href=# class='btn btn-dark' 'text-decoration:none;'>View Profile</a>
    </div>
    </div>";
};
    ?>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg></script>
</body>
</html>