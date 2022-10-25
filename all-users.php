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
									<p class="tx-12 tx-gray-500 mb-2"> <?php
if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
    ?></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0">Serial</th>
													<th class="border-bottom-0">User Name</th>
													<th class="border-bottom-0">Email Address</th>
													<th class="border-bottom-0">Email Address</th>
													<th class="border-bottom-0">Action</th>
													<th></th>

												</tr>
											</thead>
											<tbody>
	<?php include "crud.php";
    $query = "SELECT * FROM user";
    $result = getAllData($query);

    $serial = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        ?>
												<tr>
													<td class="border-bottom-0"><?php echo $serial ?></td>
													<td class="border-bottom-0"><?php echo $row['username']; ?></td>
													<td class="border-bottom-0"><?php echo $row['email'] ?></td>
													<td class="border-bottom-0"><?php echo $row['email'] ?></td>
													<td class="border-bottom-0"><a href="user-update.php?id=<?php echo $row['id'] ?>">Edit   </a> || <a href="./user/delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');"> Delete</a></td>



													<td></td>

												</tr>
<?php
$serial++;

    }
    ?>
											</tbody>
										</table>
									</div>
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