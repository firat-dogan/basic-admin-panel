<?php
require("../php/custom.php");
check();
$id=$_GET['id'];
$result=select("Skills", "WHERE id={$id}");
$row= mysql_fetch_array($result);
if(isset($_POST['save']))
{
	$name=$_POST['name'];
	$db = update("Skills","name='{$name}'", "id={$id}");
	if($db)
		header("Location:yeteneklerimiz.php");
}
if(isset($_POST['delete']))
{
	$db= del("Skills",$id);
	if($db)
		header("Location:yeteneklerimiz.php");
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
            <h5 class="card-title p-2">Yetenek Ekle</h5>
            <div class="row">
              <div class="col-md-6">
                <form class=""  method="post">
                <div class="form-group">
                  <label for="">Yetenek Adı</label>
		  <input type="text" value="<?=$row['name']?>" name="name" class="form-control" id="" placeholder="">
                </div>
              </div>

              <div class="col-md-12">
                  <button type="submit" name="save" class="btn btn-success">Kaydet</button>
                <a href="yeteneklerimiz.php" class="btn btn-light">İptal</a>
                <button type="submit" name="delete"  class="btn btn-light">Sil</button>

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