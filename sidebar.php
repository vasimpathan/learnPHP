<div class="col-sm-2 sidenav">
    <?php 
        $arrFiles = array();
        $dirPath = "./";
        $files = glob($dirPath . "/*");
        foreach ($files as $file) {
            if(!in_array(basename($file),array('sidebar.php','header.php','section.php','footer.php','request_info.php','get_info.php','post_info.php')))
            {
                if (is_file($file)) {
                    echo '<p><a href="?page='.basename($file).'">'.basename($file).'</a></p>';
                }
            }
        }
    ?>
</div>