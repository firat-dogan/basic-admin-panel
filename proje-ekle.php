<?php
require("../php/custom.php");
check();
if(isset($_POST['save']))
{
	$image1= uploadProjectImage("image1");
	$image2= uploadProjectImage("image2");
	$header= $_POST['header']; 
	$category= $_POST['category']; 
	$text1= $_POST['text1'];
	$text2= $_POST['text2'];
	$text3= $_POST['text3'];
	$text4 = $_POST['text4'];
	$db= create("Projects","header, category, text1, text2, text3, text4, image1Url, image2Url","'".$header."','".$category."','".$text1."','".$text2."','".$text3."','".$text4."','".$image1."','".$image2."'");
	if($db)
		header("Location:index.php");
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
            <h5 class="card-title p-2">Proje Ekle</h5>
            <div class="row">
              <div class="col-md-6">
                <form class=""  method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Proje Adı</label>
                  <input name="header" type="text" class="form-control" id="" placeholder="">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Kategori</label>
                  <input type="text" name="category" class="form-control" >
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Kapak Fotoğrafı</label>
                  <input type="file" name="image1"  class="form-control" >
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">İkincil Fotoğraf</label>
                  <input type="file" name="image2" class="form-control" >
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Giriş Metni</label>
                  <textarea class="form-control" name="text1" rows="4"></textarea>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Alt Başlık (Sarı)</label>
                  <textarea class="form-control" name="text2" rows="4"></textarea>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Alt Metin</label>
                  <textarea class="form-control" name="text3" rows="4"></textarea>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Alt Metin 2</label>
                  <textarea class="form-control"name="text4" rows="4"></textarea>
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
