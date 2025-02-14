<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <?php include_once("includes/head.php")?>
    
</head>
<body id="thankyoupages-kobo">
<?php include_once("includes/header.php")?>
<section class="banner bannimg" style="min-height:65vh">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0 text-center">
                
            <?php if(isset($_REQUEST['thanksMsg'])):?>
                          
                          <h1 class="title wow fadeInLeft" data-wow-delay="0.5s" style="color: #fff; width: 70%;"> <?=$_REQUEST['thanksMsg'];?></h1>
                    <?php elseif(isset($_REQUEST['successMsg'])):?>
                        
                        <h1 class="title wow fadeInLeft" data-wow-delay="0.5s" style="color: #fff;"> <?=$_REQUEST['successMsg'];?></h1>                              
              
                    <?php endif;?>
           
            </div>
            
        </div>
    </div>
</section>


<?php include_once("includes/footer.php")?>
</body>
</html>