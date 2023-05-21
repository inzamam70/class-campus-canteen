<?php

use function PHPSTORM_META\map;

include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$navItemsInJson = file_get_contents($mainnavitems . "navitems.json");
$navItems = json_decode($navItemsInJson);




?>

<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">




    <!-- Sidebar content -->
    <div class="sidebar-content">

        <?php //include_once($partials."profile.php"); 
        ?>


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">


               
          
            <?php foreach($navItems as $ket=>$slide):?>
    <li class="nav-item nav-item-submenu">
    <a href="" class="nav-link">
        <i class="icon-copy"></i> 
        <span><?=$slide->name?></span>
    </a>

    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
        <li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
        <li class="nav-item"><a href="../../../../layout_2/LTR/material/full/index.html" class="nav-link">Layout 2</a></li>
        <li class="nav-item"><a href="../../../../layout_3/LTR/material/full/index.html" class="nav-link">Layout 3</a></li>
        <li class="nav-item"><a href="../../../../layout_4/LTR/material/full/index.html" class="nav-link">Layout 4</a></li>
        <li class="nav-item"><a href="../../../../layout_5/LTR/material/full/index.html" class="nav-link">Layout 5</a></li>
        <li class="nav-item"><a href="../../../../layout_6/LTR/material/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
    </ul>
</li>
<?php endforeach ?>


             
 



        




            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->