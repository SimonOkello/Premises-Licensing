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
          <li class="breadcrumb-item active">Home</li>
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
                    <a class="dropdown-item" href="busia.php">MOUNT KENYA</a>
                    <a class="dropdown-item" href="#">SOUTH RIFT</a>
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
                    <a class="dropdown-item" href="busia.php">MOUNT KENYA</a>
                    <a class="dropdown-item" href="#">SOUTH RIFT</a>
                  </div>
                </div>
              </div>
            </div>
            <br><br><br><br><br><br>
            <!--Add Premise-->
            <div class="container">
              <h2>Add Premise</h2>
              <form action="/action_page.php">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="premise_no">Premise Number:</label>
                    <input type="text" class="form-control"  placeholder="PMK0000.." name="email">
                  </div>
                  <div class="col-sm-6">
                    <label for="premise_name">Premise Name:</label>
                    <input type="text" class="form-control" placeholder="Name of company/business" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="premise_type">Premise Type:</label>
                    <select class="form-control">
                      <option>Retail</option>
                      <option>Storage & Use</option>
                      <option>Wholesale/Retail</option>
                      <option>Distribution/Wholesale/Retail</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="tel_no">Tel No.:</label>
                    <input type="text" class="form-control"  placeholder="Tel" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                  </div>
                  <div class="col-md-6">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" placeholder="P.O. Box...." name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="county">County:</label>
                    <select class="form-control">
                      <option>Mombasa</option>
                      <option>Nairobi</option>
                      <option>Busia</option>
                      <option>Naivasha</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="subcoutny">SubCounty:</label>
                    <select class="form-control">
                      <option>Kisauni</option>
                      <option>Starehe</option>
                      <option>Butula</option>
                      <option>Naivasha</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="ward">Ward:</label>
                    <input type="text" class="form-control"  placeholder="ward" name="email">
                  </div>
                  <div class="col-md-6">
                    <label for="town">Town:</label>
                    <input type="text" class="form-control"  placeholder="town" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="street">Street:</label>
                    <input type="text" class="form-control"  placeholder="street" name="email">
                  </div>
                  <div class="col-md-6">
                    <label for="plot_no">Plot No.:</label>
                    <input type="text" class="form-control"  placeholder="0000/000" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="license_no">License No.:</label>
                    <input type="text" class="form-control"  placeholder="1234" name="email">
                  </div>
                  <div class="col-md-6">
                    <label for="status">Status.:</label>
                    <select class="form-control">
                      <option>Active</option>
                      <option>Inactive</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <input type="submit" value="Submit" class="btn btn-primary">
              </form>
            </div>
          </div>
        </div>
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
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
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
    
</body>


</html>