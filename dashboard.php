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

					<!-- breadcrumb -->
<?php
include "breadcrumb.php";

    // <!-- /breadcrumb -->

    // <!-- first row -->

    include "atAglance.php";

    include "chart.php";
    include "recent.php";
    include "tables.php";
    ?>

					<!-- /row -->
				</div>
				<!-- /Container -->
			</div>
			<!-- /main-content -->

			<!-- Sidebar-right-->
<?php
include "rightSidebar.php";
    include "MessageModal.php";
    include "videoModal.php";
    include "audioModal.php";
    include "footer.php";

} else {

    $msg = "Please, log in First!";
    header("Location: login.php?msg=" . $msg);
}