<?php
    include('includes/config.php');
	include('includes/commonfun.php');
	include('class/clsDB.php');
	include('class/clsGames.php');
	include('class/clsCategories.php');
	
	$objCategories = new clsCategories();
	$objGames = new clsGames();
	
	//Get all Categories
	$allCategories =$objCategories->GetAllActiveCategories();
	
	
?>

<!doctype html>
<html lang="en">
<?php
include"websiteincludes/header.php";
?>
<body>
    <!-----------Navigation Bar---------->

    <?php
include"websiteincludes/navbar.php";
?>
    <!---------------Navigation Bar Ends------------>

    <!-------------------Banner Section------------->


    <div class="banner">
        <div class="container-fluid">
            <div class="row">

                <!-- <img src="websiteassets/Images//banner123.jpeg " class="img-fluid "> -->
                <div class="caption">
                    <h1>Welcome to
                        <br>
                        <span style="color: #FF4B2D">i-life Games</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>


    <!-------------------Banner Section Ends------------->
 <!----
	<section>
    <div class="container">
        <div class="row">
            <img src="websiteassets/Images//image 11.png " class="banner2 img-fluid">
        </div>
    </div>
</section>
------------->
    <!--------------------About Section------------->
	<!--------------------get catgories------------->
	<?php
												
	if ($allCategories != "") 
	{
	while($row = mysqli_fetch_array($allCategories))
	{
		$categorieId = $row['categorieId'];	  
		$categorieName = $row['categorieName'];	  

	?>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <figure class="figure1"> <img src="websiteassets/Images/logo1.png" class="logo1">
                        <figcaption class="text"><?php echo ($categorieName);?></figcaption>
                    </figure>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn view">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	    <section>
        <div class="container">
            <div class="row">
				<?php
				//Get all games
				$allGames =$objGames->GetAllActiveGames($categorieId);
				
				if ($allGames != "") 
				{
				while($row = mysqli_fetch_array($allGames))
				{
					$gameId  = $row['gameId'];	  
					$title = $row['title'];	  
					$company = $row['company'];	  
					$description = $row['description'];
					$status  = $row['status'];	  
					$url  = $row['url'];	  
					$categoryId  = $row['categoryId'];	  
					$imageName  = $row['thumblineImage']; 
					
					//get image path
					$imagePath = GetThumbnailImage($gameId,$imageName);
					
					$string ='<a target="blank" href="event-details/'.$description.'">Read More</a>';
					
					$stringCut = substr($description, 0, 100);
					$endPoint = strrpos($stringCut, ' ');
				?>
                <!---------Image1------>
                <div class="col-md-6 col-lg-3">
                    <div class="card ">
                        <img src="<?php echo ($imagePath);?>" class="card-img-top" alt="<?php echo($title);?>">
                        <div class="card-body card-bg">
                            <h5 class="card-title"><?php echo($title);?></h5>
                            <p class="card-text"><?php echo($stringCut);?></p>
                        </div>
                    </div>
                </div>
                <!---------Image2------>
				<?php 
				}
				}
				?>
                
            </div>

        </div>
    </section>
	
<?php 
	}
	}
	?>
												


    <!----------------About Section Ends------------->


    <!---------------------------------------->

    <!---------------------------------------->



    <section class="about">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-9">
                    <figure class="figure1"> <img src="websiteassets/Images//planet-earth 1.png" class="logo1">
                        <figcaption class="text">Social Science Game</figcaption>
                    </figure>
                </div>
                <div class="col-3">
                    <button type="button" class="btn view">View More</button>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <!---------Image1------>
                <div class="col-md-6 col-lg-3">
                    <div class="card ">
                        <img src="websiteassets/Images//image 3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image2------>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="websiteassets/Images//image 4.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image3------>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="websiteassets/Images//image 5.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image4------>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="websiteassets/Images//image 6.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <!---------Image5------>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="websiteassets/Images//image 7.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image6------>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="websiteassets/Images//image 8.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image7------>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="websiteassets/Images//image 9.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image8------>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="websiteassets/Images//image 10.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!----------------About Section Ends------------->
    <!----------------About Section------------->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <figure class="figure1"> <img src="websiteassets/Images//numbers 1.png" class="logo1">
                        <figcaption class="text">Numbers Game</figcaption>
                    </figure>
                </div>
                <div class="col-3">
                    <button type="button" class="btn view">View More</button>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <!---------Image1------>
                <div class="col-md-6 col-lg-3 col-sm-12">
                    <div class="card ">
                        <img src="websiteassets/Images//image 3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image2------>
                <div class="col-md-6 col-lg-3 col-sm-12">
                    <div class="card">
                        <img src="websiteassets/Images//image 4.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image3------>
                <div class="col-md-6 col-lg-3 col-sm-12">
                    <div class="card">
                        <img src="websiteassets/Images//image 5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image4------>
                <div class="col-md-6 col-lg-3 col-sm-12">
                    <div class="card">
                        <img src="websiteassets/Images//image 6.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
            </div>
            <!---------Image5------>

            <div class="row">


                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card">
                        <img src="websiteassets/Images//image 7.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image6------>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card">
                        <img src="websiteassets/Images//image 8.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image7------>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card">
                        <img src="websiteassets/Images//image 9.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <!---------Image8------>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card">
                        <img src="websiteassets/Images//image 10.png" class="card-img-top" alt="...">
                        <div class="card-body card-bg">
                            <h5 class="card-title">Star Wars Kid's Game</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!----------------About Section Ends------------->

    <!--------------Footer Section------------>
  <?php
  include"websiteincludes/footer.php";
  ?>
    <!---------------Footer Ends-------------->
</body>

</html>