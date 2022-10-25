<?php
session_start();
if (isset($_SESSION['username'])) {

    include "header.php";

    ?>
	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<!-- main-sidebar -->

			<!-- main-sidebar -->

			<?php
include "sidebar.php";
    ?>
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header -->
<?php
include "topbar.php";
    ?>
				<!-- /main-header -->

				<!-- container -->
				<div class="container-fluid">




<!-- Table start -->
<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Bordered Table</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2"><?php
if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
    ?></p>
								</div>
								<div class="card-body">
<?php
$id = $_GET['id'];
    include 'crud.php';
    $query = "SELECT * FROM user WHERE id=$id";

    $result = getAllData($query);

    $rows = mysqli_fetch_assoc($result);

    ?>

								<form action="./user/update.php" method="POST">
													<div class="form-group">
														<input class="form-control" value="<?php echo $rows['id'] ?>" type="text" name="id" hidden>
														<label>User Name</label>
                                                        <input class="form-control" value="<?php echo $rows['username'] ?>" type="text" name="username" required>
													</div>
													<div class="form-group">
														<label>Email</label>
                                                        <input class="form-control"  value="<?php echo $rows['email'] ?>" type="email" name="email" required>
													</div>
													<div class="form-group">
														<label>Password</label>
                                                        <input class="form-control" value="<?php echo $rows['password'] ?>"  type="password" name="password" required>
													</div><button class="btn btn-main-primary btn-block">Update Account</button>

												</form>

								</div>
							</div>
						</div>
						<!--/div-->
<!-- table end -->



				</div>
				<!-- /Container -->
			</div>
			<!-- /main-content -->

			<!-- Sidebar-right-->
<?php
include "footer.php";

} else {

    $msg = "Please, log in First!";
    header("Location: login.php?msg=" . $msg);
}