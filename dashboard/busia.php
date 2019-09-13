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
                <a class="nav-link" href="index.html">
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
                    <a class="dropdown-item" href="mombasa.php">Mombasa</a>
                    <a class="dropdown-item" href="nairobi.php">Nairobi</a>
                    <a class="dropdown-item" href="busia.php">Busia</a>
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
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>

                <!-- Page Content -->
                <div class="user-dashboard">

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 gutter">

                            <div class="sales">
                                <h2>Recent License</h2>

                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Region:</span> County
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Mombasa</a>
                                        <a class="dropdown-item" href="#">Nairobi</a>
                                        <a class="dropdown-item" href="#">Western</a>
                                        <a class="dropdown-item" href="#">Naivasha</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 gutter">

                            <div class="sales report">
                                <h2>Active Status</h2>
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Region:</span> County
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Mombasa</a>
                                        <a class="dropdown-item" href="#">Nairobi</a>
                                        <a class="dropdown-item" href="#">Western</a>
                                        <a class="dropdown-item" href="#">Naivasha</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 gutter">

                            <div class="sales report">
                                <h2>Inactive Status</h2>
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Region:</span> County
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Mombasa</a>
                                        <a class="dropdown-item" href="#">Nairobi</a>
                                        <a class="dropdown-item" href="#">Western</a>
                                        <a class="dropdown-item" href="#">Naivasha</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br><br><br>
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm w-auto table-responsive" cellspacing="0" width="100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="th-sm">Premise No.</th>
                                    <th class="th-sm">Name</th>
                                    <th class="th-sm">Type</th>
                                    <th class="th-sm">Tel.</th>
                                    <th class="th-sm">Email</th>
                                    <th class="th-sm">Address</th>
                                    <th class="th-sm">County</th>
                                    <th class="th-sm">Street</th>
                                    <th class="th-sm">Plot No.</th>
                                    <th class="th-sm">License No.</th>
                                    <th class="th-sm">Reg Date</th>
                                    <th class="th-sm">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PMK0001</td>
                                    <td>Galilee Agrovet</td>
                                    <td>Retail</td>
                                    <td>1234567890</td>
                                    <td>galilee@gmail.com</td>
                                    <td>P.O Box 1084,Embu</td>
                                    <td>Embu</td>
                                    <td>Muthatari</td>
                                    <td>PLT002</td>
                                    <td>30225</td>
                                    <td>13/09/2019</td>
                                    <td>Active</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- /.container-fluid -->

                    <!-- Sticky Footer -->
                    <footer class="sticky-footer">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright �2019 PCPB. All rights resrved.</span>
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

</body>
<script>
    //pagination
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

</html>