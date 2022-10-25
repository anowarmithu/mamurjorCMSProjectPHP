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
									<div><a href="category-list.php"class="btn btn-success">All Category List</a></div><br>

									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Update a Category</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">
<?php
if (isset($_GET['msg'])) {
        echo $_GET['msg'];
    }
    ?>
                                </p>
								</div>
								<div class="card-body">
								<form action="blog/update.php" method="POST">

                            <?php $id = $_GET['id'];

    include "crud.php";
    $query = "SELECT * FROM category WHERE id=$id";

    $result = getAllData($query);


    $rows = mysqli_fetch_assoc($result);
    ?>
													<div class="form-group">

														<input class="form-control" type="number" value="<?php echo $rows['id'] ?>" name="id" hidden>

                                                        <label>Category Name</label>
                                                        <input class="form-control" type="text" value="<?php echo $rows['name']; ?>" name="name" required>
													</div>
													<div class="form-group">
														<label>Category Code</label>
                                                        <input class="form-control"  type="text" name="code" value="<?php echo $rows['code']; ?>" required>
													</div>
                                                    <button class="btn btn-main-primary btn-block">Update Category</button>

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