<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Premises|Profile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Premise Licensing</a>

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
          <a class="dropdown-item" href="busia.php">MOUNT KENYA</a>
          <a class="dropdown-item" href="#">SOUTH RIFT</a>
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
          <li class="breadcrumb-item active">Profile</li>
        </ol>

        <!-- Page Content -->
        <div class="container-fluid">
          <div class="container emp-profile">
            <form method="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="profile-img">
                    <img src="images/user.png" alt="" />
                    <div class="file btn btn-lg btn-primary">
                      Change Photo
                      <input type="file" name="file" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="profile-head">
                    <h5>
                      Person Name
                    </h5>
                    <h6>
                      Pharmacist
                    </h6>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                      </li>
                      <!--<li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>-->
                    </ul>
                  </div>
                </div>
                <div class="col-md-2">
                  <input type="submit" class="btn btn-primary" name="btnAddMore" value="Edit Profile" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Company Name</a><br />
                    <a href="">Location</a><br />
                    <a href="">Telephone</a>
                    <p>SERVICES</p>
                    <a href="">Service 1</a><br />
                    <a href="">Service 2</a><br />
                    <a href="">Service 3</a><br />
                    <a href="">Service 4</a><br />
                    <a href="">Service 5</a><br />
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row">
                        <div class="col-md-6">
                          <label>User Id</label>
                        </div>
                        <div class="col-md-6">
                          <p>Pre#004</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Name</label>
                        </div>
                        <div class="col-md-6">
                          <p>Person Name</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Email</label>
                        </div>
                        <div class="col-md-6">
                          <p>someone@gmail.com</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Phone</label>
                        </div>
                        <div class="col-md-6">
                          <p>123 456 7890</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Profession</label>
                        </div>
                        <div class="col-md-6">
                          <p>Pharmacist</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Experience</label>
                        </div>
                        <div class="col-md-6">
                          <p>Expert</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Hourly Rate</label>
                        </div>
                        <div class="col-md-6">
                          <p>10$/hr</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Total Projects</label>
                        </div>
                        <div class="col-md-6">
                          <p>230</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>English Level</label>
                        </div>
                        <div class="col-md-6">
                          <p>Expert</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Availability</label>
                        </div>
                        <div class="col-md-6">
                          <p>6 months</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Your Bio</label><br />
                          <p>Your detail description</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

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