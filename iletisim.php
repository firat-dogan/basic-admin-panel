<?php
require("../php/custom.php");
check();
$result = select("Contact", "WHERE id=1");
$row = mysql_fetch_array($result);
if(isset($_POST['save']))
{
	$phone= $_POST['phone'];
	$email =$_POST['email'];
	$address = $_POST['address'];
	$link1 = $_POST['link1'];
	$link2 = $_POST['link2'];
	$link3 = $_POST['link3'];
	$db = update("Contact", "phone= '{$phone}', email='{$email}', address='{$address}', link1 = '{$link1}',link2 = '{$link2}',link3 = '{$link3}'", "id = 1");
	if($db)
		header("Location:iletisim.php");
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
            <h5 class="card-title p-2">İletişim</h5>
            <div class="row">
              <div class="col-md-6">
                <form class=""  method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Telefon</label>
		  <input name="phone" value="<?= $row['phone'] ?>" type="text" class="form-control" id="" placeholder="">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" value="<?= $row['email'] ?>" class="form-control" >
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Behance</label>
                  <input name="link1" type = "text" value="<?= $row['link1'] ?>" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Instagram</label>
                  <input type="text" name="link2" value="<?= $row['link2'] ?>" class="form-control" >
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Linkedin</label>
                  <input type="text" name="link3" value="<?= $row['link3'] ?>" class="form-control" >
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Adres</label>
                  <textarea class="form-control" name="address" rows="4"><?= $row['address'] ?></textarea>
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
