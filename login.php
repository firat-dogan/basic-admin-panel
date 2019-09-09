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

  <body class="bg-dark">

    <main role="main" class="container pt-4">
      <div class="row justify-content-center">
     <div class="col-md-4 mt-4 ">
       <div class="card">
         <div class="card-body text-center">
           <form action="index.php" method = "POST">
             <p class="navbar-brand">SİTE YÖNETİM PANELİ</p>
             <div class="form-group text-left">
               <label>Kullanıcı Adı</label>
               <input name="username" type="text" class="form-control">
             </div>
             <div class="form-group   text-left">
               <label >Şifre</label>
               <input type="password" name="password" class="form-control">
             </div>
             <button type="submit" name="send" class="btn btn-primary">GİRİŞ YAP</button>
           </form>
         </div>
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