<?php include('header.php');?>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <?php include('sidebar.php');?>
    <div class="col-sm-10 text-left"> 
        <h1><?=ucwords($page);?> </h1><hr>

        <div class="col-md-6" style="text-align:left">
            <h4>Code</h4>
            <pre>
                <?php 
                    $fileContent = file_get_contents($page);
                    echo htmlspecialchars($fileContent);
                ?>
            </pre>
        </div>

        <div class="col-md-6">
            <h4>Output</h4>
            <?php 
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
</div>
<?php //include('footer.php');?>