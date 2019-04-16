<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Khóa học HTML cơ bản</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= $publicFolder?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= $publicFolder?>/css/learning/css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-center">
        <img src="<?= $publicFolder?>/img/logo_black.png" width="135px" height="auto" data-retina="true" alt="">
      </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Bài 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Bài 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Bài 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Bài 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Bài 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Bài 1</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Danh sách bài học</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            <a class="nav-link btn btn-danger text-white" href="#"><i class="fas fa-sign-out-alt"></i>  Quay về F-LMS <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?= $publicFolder?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= $publicFolder?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
