<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>

<?php

/** collect the intended ID */
$id = $_GET['id'];



/** communicate with datasource and get data for that id */
$sliderjason = file_get_contents($frontenddatasource . "slider.json");
$slideritems = json_decode($sliderjason);

$slide;
foreach ($slideritems as $aslide) {
	if ($aslide->id == $id) {
		$slide = $aslide;
		break;
	}
}


// dd($slide);
// $slideIndex = $_GET['slideIndex'];
// $slide = $slides[$slideIndex];

/**
 * @TODO
 * handle edge case
 * security: untrust user input
 */
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
                    <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Create a Slide for the Slider</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="slider_edit_processor.php" method="post" >
									<div class="form-group">
										<label>Title</label>
										<input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?=$slide->id?>" >
									</div>

									<div class="form-group">
										<label>Caption</label>
										<input name="caption" type="text" class="form-control" placeholder="Enter Caption">
									</div>

									<div class="form-group">
										<label>Alt</label>
										<input name="alt" type="text" class="form-control" placeholder="Alter">
									</div>

                                    <div class="form-group">
										<label>URL</label>
										<input name="url" type="url" class="form-control" placeholder="Enter url">
									</div>

                                    <div class="form-group">
										<label>Upload Picture</label>
										<input type="file" class="form-control" placeholder="Upload Picture">
									</div>

									<div class="d-flex justify-content-start align-items-center">
										<button type="submit" class="btn btn-light legitRipple">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3 legitRipple">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
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