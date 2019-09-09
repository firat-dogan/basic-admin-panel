<?php
require("../php/custom.php");
check();
if(isset($_POST['save']))
{
	$name=$_POST['name'];
	$job = $_POST['job'];
	$db = create("Crew","name,job","'{$name}', '{$job}'");
	if($db)
		header("Location:ekibimiz.php");
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
            <h5 class="card-title p-2">Kişi Ekle</h5>
            <div class="row">
              <div class="col-md-6">
                <form class="" method="post">
                <div class="form-group">
                  <label for="">Kişi Adı</label>
                  <input type="text" class="form-control" id="" placeholder="" name = "name">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Ünvanı</label>
                  <input name="job" type="text" class="form-control" >
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
