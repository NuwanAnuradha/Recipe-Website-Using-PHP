<?php   include_once('header.php'); ?>
<?php   include_once('functions.php'); ?>
<?php   $responseArray = convertIntoArray(); ?>

    <div class="container-lg" class="main">
        <h2 class="my-title mt-3 text-center"></h2>
        <div class="row mt-4">
            
            <?php  foreach($responseArray['meals'] as $object){ ?>
            
            <div class="col-lg-3 col-md-12 col-sm-12 text-center mb-3">
                <div class="card single-card">
                    <img src="<?php echo $object['strMealThumb']; ?>" class="single-card-img"/>
                    <div class="card-body">
                        <div class="card-title" style="font-weight: bold;"></div>
                        
                        <?php echo $object['strMeal']; ?>
                        
                        <div class="card-text single-card-text"></div>
                    </div>
                </div>
            </div>
        
            <?php } ?>
            
        </div>
     </div>
      
<?php   include_once('footer.php'); ?>    
    
    
    
    
    
        
        

