<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$sliderjason = file_get_contents($frontenddatasource . "slider.json");
$slideritems = json_decode($sliderjason);
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once($partials . 'head.php') ?>

<body>

	<?php include_once($partials . 'nav.php') ?>


	<!-- Page content -->
	<div class="page-content">

		<?php include_once($partials . 'sidebar.php') ?>



		<!-- Main content -->
		<div class="content-wrapper">


			<?php include_once($partials . 'pageHeader.php') ?>


			<!-- Content area -->
			<div class="content">

				<?php //include_once($partials.'chart.php') 
				?>



				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-12">

						<!-- Bordered table -->
						<div class="card-body">
			                	<form action="#">
									<div class="form-group">
										<label>Title</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Caption:</label>
										<input type="text" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Image</label>
										<input type="file" class="form-control">
									</div>

									<div class="d-flex justify-content-start align-items-center">
										<button type="submit" class="btn btn-light legitRipple">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3 legitRipple">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>



					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


			<?php include_once($partials . 'footer.php') ?>


		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

</html>