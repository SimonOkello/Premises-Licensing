<?php
session_start();
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
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>

                <!-- Page Content -->
                <div class="user-dashboard">

                    <div class="row">

                        <br><br><br><br><br><br>
                        <!--Add Premise-->
                        <div class="container">
                            <h3 style="color:dodgerblue">Edit Premise</h3>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "premises");
                            if (!$conn) {
                                echo "Database connection failed...";
                            }

                            $pr_id = $_SESSION['view_id'];
                            $query = "SELECT * FROM southrift where pr_id= '$pr_id' ";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);


                            ?>
                            <form action="edit_southrift.php" method="POST" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="premise_no"><strong>Premise Number:</strong></label>
                                        <input type="text" class="form-control" readonly="readonly" name="premise_no" value="<?php echo $row['premise_no']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="premise_name"><strong>Premise Name:</strong></label>
                                        <input type="text" class="form-control" value="<?php echo $row['premise_name']; ?>" name="premise_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="premise_type"><strong>Premise Type:</strong></label>
                                        <input type="text" value="<?php echo $row['premise_type']; ?>" class="form-control" name="premise">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tel_no"><strong>Telephone Number.:</strong></label>
                                        <input type="text" value="<?php echo $row['tel_no']; ?>" class="form-control" name="tel_no">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="email"><strong>Email:</strong></label>
                                        <input type="email" value="<?php echo $row['email']; ?>" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="address"><strong>Address:</strong></label>
                                        <input type="text" value="<?php echo $row['address']; ?>" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="county"><strong>County:</strong></label>
                                        <select class="form-control">
                                            <option value="<?php echo $row['county']; ?>"><?php echo $row['county']; ?></option>
                                            <option value="Makindu">Nairobi</option>
                                            <option value="Emali">Emali</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sub_county"><strong>SubCounty:</strong></label>
                                        <select class="form-control">
                                            <option value="<?php echo $row['sub_county']; ?>"><?php echo $row['sub_county']; ?></option>
                                            <option value="Makindu">Makindu</option>
                                            <option value="Emali">Emali</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="ward"><strong>Ward:</strong></label>
                                        <input type="text" value="<?php echo $row['ward']; ?>" class="form-control" name="ward">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="town"><strong>Town:</strong></label>
                                        <input type="text" value="<?php echo $row['town']; ?>" class="form-control" name="town">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="street"><strong>Street:</strong></label>
                                        <input type="text" value="<?php echo $row['street']; ?>" class="form-control" name="street">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="plot_no"><strong>Plot Number.:</strong></label>
                                        <input type="text" value="<?php echo $row['plot_no']; ?>" class="form-control" name="plot_no">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="license_no"><strong>License Number.:</strong></label>
                                        <input type="text" value="<?php echo $row['license_no']; ?>" class="form-control" name="license_no">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email"><strong>Registered On.:</strong></label>
                                        <input type="text" value="<?php echo $row['reg_date']; ?>" class="form-control" name="reg_date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="expiry"><strong>Valid Until.:</strong></label>
                                        <input type="text" value="<?php echo $row['expiry']; ?>" class="form-control" name="expiry">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email"><strong>Status.:</strong></label>
                                        <select class="form-control">
                                            <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                            <option value="Active">Active</option>
                                            <option value="Expired">Expired</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="submit" name="update" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright ©2019 PCPB. All rights resrved.</span>
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
<script>
    //pagination
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

</html>