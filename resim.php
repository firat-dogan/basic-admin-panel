<?php
require("../php/custom.php");
check();
$result = select("Image", "WHERE id=1");
$row = mysql_fetch_array($result);
	$queryString="";
if(isset($_POST['save']))
{
	if($_FILES['image1']['size']!=0 )
	{
		if(file_exists("../img/".$row['image1']))
		unlink("../img/".$row['image1']);
		$image1= uploadImage("image1");
		$queryString = $queryString.",image1 = '".$image1."'";
		echo substr($queryString,1);
	}
	if($_FILES['image2']['size']!=0 )
	{
		if(file_exists("../img/".$row['image1']))
		unlink("../img/".$row['image2']);
		$image2= uploadImage("image2");
		$queryString = $queryString.",image2 = '".$image2."'";
	}
	if($_FILES['image3']['size']!=0 )
	{
		if(file_exists("../img/".$row['image1']))
		unlink("../img/".$row['image3']);
		$image3= uploadImage("image3");
		$queryString = $queryString.",image3 = '".$image3."'";
	}
	if($_FILES['image4']['size']!=0 )
	{
		if(file_exists("../img/".$row['image1']))
		unlink("../img/".$row['image4']);
		$image4= uploadImage("image4");
		$queryString = $queryString.",image4 = '".$image4."'";
	}
	if($_FILES['image5']['size']!=0 )
	{
		if(file_exists("../img/".$row['image1']))
		unlink("../img/".$row['image5']);
		$image5= uploadImage("image5", "footer.jpg");
		$queryString = $queryString.",image5 = '".$image5."'";
	}
	$db = update("Image",substr($queryString, 1) , "id = 1");
	if($db)
		header("Location:resim.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Yönetim</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/fonts/icomoon/styles.css" rel="stylesheet">
    <link href="assets/fonts/ubuntu/ubuntu.css" rel="stylesheet">
    <link href="assets/css/iea-admin.css" rel="stylesheet">
    <link href="assets/css/shards.min.css" rel="stylesheet">
  </head>

  <body class="bg-light">

  <div id="nav-admin"></div>

    <main role="main" class="container pt-4">
      <div class="row">
       <div class="col-md-12">
          <div class="my-3 p-3 bg-white rounded box-shadow">
            <h5 class="card-title p-2">Resimler</h5>
            <div class="row">
              <div class="col-md-6">
                <form class=""  method="post" enctype="multipart/form-data">
                <div class="form-group">
		<img src="../img/<?=$row['image1']?>" class="img-thumbnail">
                  <input type="file" name="image1"  class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
		<img src="../img/<?=$row['image2']?>" class="img-thumbnail">
                  <input type="file" name="image2"  class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
		<img src="../img/<?=$row['image3']?>" class="img-thumbnail">
                  <input type="file" name="image3"  class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
		<img src="../img/<?=$row['image4']?>" class="img-thumbnail">
                  <input type="file" name="image4"  class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
		<img src="../img/<?=$row['image5']?>" class="img-thumbnail">
                  <input type="file" name="image5"  class="form-control" >
                </div>
              </div>

              <div class="col-md-12">
                  <button type="submit" name= "save" class="btn btn-success">Kaydet</button>
              </div>


            </div>
          </form>
          </div>
        </div>

      </div>

    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/iea-admin.js"></script>


  </body>
</html>
<?php mysql_close($con)?>
