<?php 
    $navgroups = ['Main','Forms','Components','Layout', 'Data Visualization','Extension','Table','Page Kits'];
    $mainnavitems = ['Dashboard','Layouts','Themes','Starter Kits','Change Log',' RTL version'];
    
?>

        <!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">




			<!-- Sidebar content -->
			<div class="sidebar-content">

            <?php //include_once($partials."profile.php"); ?>


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">


<?php
    foreach($navgroups as $key=>$navgroup){
        echo '<li class="nav-item-header">
                <div class="text-uppercase font-size-xs line-height-xs">'
                .$key.$navgroup.
                '</div> <i class="icon-menu" title="Main"></i></li>';
            if($key === 0){
                foreach($mainnavitems as $mainnavitem){
                    echo '<li class="nav-item">
                    <a href="index.html" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            '.$mainnavitem.'
                        </span>
                    </a>
                </li>';
                }
            }
            
    }


?>
					



					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->