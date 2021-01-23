<?php include './data1.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Dashboard</title>
</head>
<body>
<div class="container">
<?php include './navbar.php' ?>

<?php
$i = 0;
$j = 0;
foreach ($data as $k => $v){
$i++;
    if (isset( $v["projects"])){
        foreach ( $v["projects"] as $pro){
            if ($pro["is_compleated"] == "yes") {
                $j++;
            };
        }}}
            ?>
            <p>Total Trainees: <?php echo $i ?></p>
            <p>Completed projects: <?php echo $j ?></p>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  <?php
$i = 0;
$j = 0;
foreach ($data as $k => $v){
       echo '<tr>           
                <td>'.$v["name"].'</td>
        </tr>';}
            ?>
   
</tbody>
</table></div>
</body>
</html>