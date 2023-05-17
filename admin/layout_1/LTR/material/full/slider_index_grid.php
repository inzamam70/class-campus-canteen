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
					<div class="col-xl-6">

						<!-- Bordered table -->
						<div class="row">
						<?php 
						
						foreach($slideritems as $slideritem){
						?>
							<div class="col-xl-3 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="card-img-actions">
											<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
												<img src="<?=$slideritem->src?>" class="card-img" width="96" alt="">
												<span class="card-img-actions-overlay card-img">
													<i class="icon-plus3 icon-2x"></i>
												</span>
											</a>
										</div>
									</div>

									<div class="card-body bg-light text-center">
										<div class="mb-2">
											<h6 class="font-weight-semibold mb-0">
												<a href="#" class="text-default"><?=$slideritem->tittle?></a>
											</h6>

											<a href="#" class="text-muted"><?=$slideritem->caption?></a>
										</div>

										<h3 class="mb-0 font-weight-semibold">$49.99</h3>

										<div>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
										</div>

										<div class="text-muted mb-3">85 reviews</div>

										<div class="d-flex flex-wrap align-items-center">
							
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-eye"></i></a>
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-pencil"></i></a>
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2 legitRipple"><i class="icon-trash"></i></a>
								</div>
									</div>
								</div>
							</div>
							<?php
							}
							?>
						
				
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



