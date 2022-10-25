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
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div><a href="post-list.php"class="btn btn-success">All Post List</a></div><br>

									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Add Post</h4>
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
    $query = "SELECT * FROM posts WHERE id=$id";

    $result = getAllData($query);

    $rows = mysqli_fetch_assoc($result);

    ?>

								<form action="postUpdate.php" method="POST">
													<div class="form-group">

                                                    <input class="form-control" type="number" value="<?php echo $rows['id'] ?>" name="id" hidden>



														<label>Post Title</label>
                                                        <input class="form-control" type="text" name="title" value="<?php echo $rows['title']; ?>" required>
													</div>
                                                    <div class="form-group">

														<label>Post Short Description</label>
                                                        <input class="form-control" type="text" name="short_description" value="<?php echo $rows['short_description']; ?>" required>
													</div>

                                                    <div class="form-group">

														<label>Description</label>
                                                        <textarea class="form-control" type="text" rows="4" name="description" value="" required><?php echo $rows['description']; ?></textarea>
													</div>




<div class="row">

<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
											<input type="file" class="dropify" data-default-file="assets/img/photos/1.jpg" data-height="100"  />
										</div>



	<div class="form-group col-md-4">

														<!-- <label>Select Category</label>
                                                        <select class="form-control" type="text" name="category_id" required>
<?php
$category = "SELECT * FROM category";

    $categoryResult = getAllData($category);

    while ($rowsCate = mysqli_fetch_assoc($categoryResult)) {

        ?>
															<option value="<?php echo $rowsCate['id'] ?>">
																<?php echo $rowsCate['name'] ?>
															</option>
<?php
}
    ?>

                                                        </select> -->


														<select class="form-control" type="text" name="category_id" required>
<?php
$category = "SELECT posts.category_id, category.name as 'CategoryName', category.id as 'CategoryID' FROM posts JOIN category on posts.category_id=category.id";

    $categoryResult = getAllData($category);

    $rowsCate = mysqli_fetch_assoc($categoryResult)

    ?>
															<option value="<?php echo $rowsCate['CategoryID'] ?>">
																<?php echo $rowsCate['CategoryName'] ?>
															</option>
<?php
$category = "SELECT * FROM category";

    $categoryResult = getAllData($category);

    while ($rowsCate = mysqli_fetch_assoc($categoryResult)) {

        ?>
															<option value="<?php echo $rowsCate['id'] ?>">
																<?php echo $rowsCate['name'] ?>
															</option>
<?php
}
    ?>



                                                        </select>




													</div>
	<div class="form-group col-md-4">

														<label>Post Status</label>
                                                        <select class="form-control" type="text" name="status" required>
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </select>
													</div>


</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


                                                    <button class="btn btn-main-primary btn-block mg-t-10 mg-sm-t-0">Update Post</button>

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