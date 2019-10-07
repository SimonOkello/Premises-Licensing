<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "premises");

if (!$conn) {
  echo "Database connection failed...";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Premises|Home</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Premises Licensing</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="profile.php">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-map-marked-alt"></i>
          <span>Regions</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="mombasa.php">COAST</a>
          <a class="dropdown-item" href="nairobi.php">NAIROBI</a>
          <a class="dropdown-item" href="mountkenya.php">MOUNT KENYA</a>
          <a class="dropdown-item" href="southrift.php">SOUTH RIFT</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="report.php">
          <i class="far fa-file-alt"></i>
          <span>Reports</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="home.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">South Rift</li>
        </ol>

        <!-- Page Content -->
        <div class="user-dashboard">

          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 gutter">

              <div class="sales">
                <h5>Recent License</h5>

                <div class="btn-group">
                  <button class="btn btn-secondary btn-md dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Region:</span> County
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="mombasa.php">COAST</a>
                    <a class="dropdown-item" href="nairobi.php">NAIROBI</a>
                    <a class="dropdown-item" href="mountkenya.php">MOUNT KENYA</a>
                    <a class="dropdown-item" href="southrift.php">SOUTH RIFT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gutter">

              <div class="sales report">
                <h5>Active Status</h5>
                <div class="btn-group">
                  <button class="btn btn-secondary btn-md dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Region:</span> County
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="mombasa.php">COAST</a>
                    <a class="dropdown-item" href="nairobi.php">NAIROBI</a>
                    <a class="dropdown-item" href="mountkenya.php">MOUNT KENYA</a>
                    <a class="dropdown-item" href="southrift.php">SOUTH RIFT</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 gutter">

              <div class="sales report">
                <h5>Inactive Status</h5>
                <div class="btn-group">
                  <button class="btn btn-secondary btn-md dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Region:</span> County
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="mombasa.php">COAST</a>
                    <a class="dropdown-item" href="nairobi.php">NAIROBI</a>
                    <a class="dropdown-item" href="mountkenya.php">MOUNT KENYA</a>
                    <a class="dropdown-item" href="southrift.php">SOUTH RIFT</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br><br><br>
          <?php

          $sql = 'SELECT * FROM southrift';
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<table class='table table-striped table-bordered table-sm'>
<tr>
  <th>Premise No.</th>
      <th>Name</th>
      <th>County</th>
      <th>License No.</th>
      <th>Status</th>
      <th>Expiry</th>
      <th>Action</th>
  </tr>";
        while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['premise_no'] . "</td>";
                echo "<td>" . $row['premise_name'] . "</td>";
                echo "<td>" . $row['county'] . "</td>";
                echo "<td>" . $row['license_no'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['expiry'] . "</td>";
                echo '<td><div align="center"><a rel="facebox" href="?id=' . $row['s/no'] . '"><i class="fas fa-eye"></i></a> | <a href="? id="' . $row['s/no'] . '" class="delbutton" title="Click To Delete"><i class="fas fa-trash"></i></a></div></td>';
                echo "</tr>";
              }
              echo "</table>";
            }
          }
          ?>






          <!-- /.container-fluid -->

          <!-- Sticky Footer -->
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy;2019 PCPB. All rights resrved.</span>
              </div>
            </div>
          </footer>
        </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
  </div>
  <!-- /#wrapper -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">�</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>