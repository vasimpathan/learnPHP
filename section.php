<?php include('header.php');?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <?php include('sidebar.php');?>
    <div class="col-sm-10 text-left"> 
        <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : '';
            if($page=='')
            {
                include('introduction.php');
            }else{
                include($page);
            }
        ?>
    </div>
  </div>
</div>
<?php //include('footer.php');?>