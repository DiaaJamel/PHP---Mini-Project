<?php
include './data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./trainee.css"/>
    <title>Home</title>
</head>
<body>
<div class="container">
<?php include './navbar.php' ?>

<?php 
// include 'trainee.css';
$id = isset($_GET["id"]);
function findItem ($profile, $id){
    return $profile["id"] == $id ? $profile : false;
}
foreach($data as $k=>$v){
    // var_dump(array_filter($data, findItem($profile, $id)));
    // $key = array_search($id , array_column($data, 'id'));
    // $userData = $data[$key];
    // print_r($userData['id']);
echo "

<div class='container'>
    <div class='row profile'>
		<div class='col-md-3'>
			<div class='profile-sidebar'>
				<div class='profile-userpic'>
					<img src={$v['image']} class='img-responsive' alt=''>
				</div>
				<div class='profile-usertitle'>
					<div class='profile-usertitle-name'>
                    {$v['name']}
					</div>
					<div class='profile-usertitle-job'>
                    <i class='fas fa-birthday-cake'>{$v['birthday']}</i>
					</div>
                </div>
				<div class='profile-userbuttons'>
					<button type='button' class='btn btn-success btn-sm'>Follow</button>
					<button type='button' class='btn btn-danger btn-sm'>Message</button>
				</div>
				
        <div class='portlet light bordered'>
                <div class='row list-separated profile-stat'>
                    <div class='col-md-4 col-sm-4 col-xs-6'>
                        <div class='uppercase profile-stat-title'> 37 </div>
                        <div class='uppercase profile-stat-text'> Projects </div>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-6'>
                        <div class='uppercase profile-stat-title'> 51 </div>
                        <div class='uppercase profile-stat-text'> Tasks </div>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-6'>
                        <div class='uppercase profile-stat-title'> 61 </div>
                        <div class='uppercase profile-stat-text'> Uploads </div>
                    </div>
                </div>
                <div>
                    <h4 class='profile-desc-title'>About {$v['name']}</h4>
                    <span class='profile-desc-text'> {$v['About']} </span>
                    <div class='margin-top-20 profile-desc-link'>
                    <i class='fab fa-linkedin'></i>
                        <a href='{$v['linkedin']}'>{$v['linkedin']}</a>
                    </div>
                    <div class='margin-top-20 profile-desc-link'>
                    <i class='fab fa-github'></i>
                        <a href='{$v['github account']}'>{$v['github account']}</a>
                    </div></div></div>                   
        
			</div>
		</div>
		<div class='col-md-9'>
            <div class='profile-content'>
                
            </div>
		</div>
	</div>
</div>";} ?>

        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
