 <style>
            #container {
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 200px;
            }
            .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }
        </style>

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
// $id = $_GET['id'];

//     include 'crud.php';
//     $query = "SELECT * FROM category";

//     $result = getAllData($query);

//     $rows = mysqli_fetch_assoc($result);

    ?>

								<form action="post-save.php" method="POST">
													<div class="form-group">

														<label>Post Title</label>
                                                        <input class="form-control" type="text" name="title" required>
													</div>
                                                    <div class="form-group">

														<label>Post Short Description</label>
                                                        <input class="form-control" type="text" name="short_description" required>
													</div>

                                                    <!-- <div class="form-group">

														<label>Description</label>
                                                        <textarea class="form-control" type="text" rows="4" name="description" required></textarea>
													</div> -->


<input id="editor" class="form-control"  name="description"  >
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<br>


<div class="row">

<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
											<input type="file" class="dropify" data-default-file="assets/img/photos/1.jpg" data-height="100"  />
										</div>



	<div class="form-group col-md-4">

														<label>Select Category</label>
                                                        <select class="form-control" type="text" name="category_id" required>
<?php include "crud.php";
    $query = "SELECT * FROM category";
    $result = getAllData($query);

    $serial = 1;
    while ($row = mysqli_fetch_assoc($result)) {

        ?>
															<option value="<?php echo $row['id'] ?>">
																<?php echo $row['name'] ?>
															</option>

															<?php
$serial++;

    }
    ?>
                                                        </select>
													</div>
	<div class="form-group col-md-4">

														<label>Post Status</label>
                                                        <select class="form-control" type="text" name="status" required>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
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


                                                    <button class="btn btn-main-primary btn-block mg-t-10 mg-sm-t-0">Add Category</button>

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

?>

