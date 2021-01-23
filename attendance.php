<?php include './data1.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Attendance</title>
</head>
<body>
<div class="container">
<?php include './navbar.php' ?>



  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Check-in</th>
      <th scope="col">Check-out</th>
    </tr>
  </thead>
  <tbody>


  <?php
foreach ($data as $k => $v){
$style = '';
    if (isset( $v["attendance"])){
        foreach ( $v["attendance"] as $check){
            $checkIn =  explode( ' ', $check["check_in"]);
            $checkIn = explode (':', $checkIn[3]);
            $checkOut =  explode( ' ',  $check["check_out"]);
            $checkOut = explode (':', $checkOut[3]);
            if ( ($checkOut [0]  - $checkIn [0] )< 8 ){
                  $style = "table-danger";}     
            elseif (($checkOut [0] - $checkIn [0]) == 8 ){
                if ($checkOut [1] < $checkIn [1] ){
                        $style = "table-danger";}
                        else { $style = "table-success";}  }

            else { $style = "table-success";}
            echo ' <tr class="'.$style.'">
            <th scope="row">'.$v["id"].'</th>
            <td>'.$v["name"].'</td>
            <td>'.$check["check_in"].'</td>
            <td>'.$check["check_out"].'</td> </tr>';}}}
?>
</tbody></table>
</div>
</body>
</html>