<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

?>

<?php
$sliderjason = file_get_contents($frontenddatasource . "slider.json");
$slideritems = json_decode($sliderjason);

$id = $_GET['id'];
$slide = null;
foreach($slideritems as $aslide){
    if($aslide->id == $id){
        $slide = $aslide;
        break;
    }
}

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
			
                        <div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="<?=$aslide->src?>" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round legitRipple" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2 legitRipple">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2"><?=$aslide->tittle?></div>
										<span class="font-size-sm text-muted">Size: 432kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
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