<?php
require("../php/custom.php");
check();
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
    <link href="assets/css/datatables.css" rel="stylesheet">

    <link href="assets/css/shards.min.css" rel="stylesheet">

  </head>

  <body class="bg-light">

  <div id="nav-admin"></div>

    <main role="main" class="container pt-4">
      <div class="row">
       <div class="col-md-12">
          <div class="my-3 p-3 bg-white rounded box-shadow">
            <h5 class="card-title p-2">Yetenek Listesi <a class="h5 ml-4" href="yetenek-ekle.php">+ Yeni Yetenek</a></h5>
            <div class="table-responsive">
         <table class="table dataTable table-bordered table-condensed datatable-pagination" width="100%" cellspacing="0">
           <thead>
             <tr>
               <th>#</th>
               <th>Yetenek Adı</th>
               <th>Eylem</th>
             </tr>
           </thead>

           <tbody>
		<?php
			$result= select("Skills");
			while($row=mysql_fetch_array($result))
				echo '
			<tr>
			       <td>'.$row['id'].'</td>
			       <td>'.$row['name'].'</td>
			       <td>
				 <div class="btn-group btn-group-sm">
				   <a href="yetenek-duzenle.php?id='.$row['id'].'" class="btn btn-icon btn-light">İNCELE</a>

				 </div>
				 </td>
			</tr>';
             
		?>
           </tbody>
         </table>
       </div>

          </div>
        </div>

      </div>

    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/iea-admin.js"></script>
    <script src="assets/js/datatables/datatables.min.js"></script>
    <script type="text/javascript">
    $('.datatable-pagination').DataTable({
      pagingType: "simple",
      "language": {
              "url": "assets/js/turkish.json"
          }
    });
    </script>

  </body>
</html>
<?php mysql_close($con)?>
