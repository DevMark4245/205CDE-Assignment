<?php
	include_once('dbinc.php');
	$sql = "SELECT * FROM courses;";
	$result = mysqli_query($conn, $sql) or die("Bad Query:$sql");

	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Courser | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    
  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

 <?php include 'header.html';
 ?>
 
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/image/slider/1.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To Courser</h4>
        <span></span>
        <h2>Discover Online Courses</h2>
        <p>Navigate the world of online courses on Computer Science, Business, Design, Data Science, Humanities and more through thousands of student reviews</p>
        <a href="about.php" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/image/slider/2.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Variety of Courses</h4>
        <span></span>
        <h2>Kickstart Your Career</h2>
        <p>Build skills with courses, certificates, and degrees online from world-class universities and companies.</p>
        <a href="about.php" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/image/slider/3.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Exclusively For Education</h4>
        <span></span>
        <h2>Education For Everyone</h2>
        <p>Choose from many options including free courses and university degrees. Learn at your own pace, 100% online.</p>
        <a href="about.php" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>100% Online</h3>
              <p>Learn at your own pace, in the comfort of your home</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Student Reviews</h3>
              <p>Browse through reviews to find the right course for you</p>
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Certified Courses</h3>
              <p>Top notch educations is the top priority for all students.</p>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Latest Courses</h2>
              <p>Take a look at some of the latest courses</p>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
			<?php
						     $related = "SELECT * FROM courses WHERE course_id='1';";
						     $result = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row = mysqli_fetch_array($result);
							?>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="course-detail.php?id=<?php echo $row['course_id']?>"><img src="<?php echo $row['course_img']?>" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <?php echo $row['course_type']?>
                      <span><i class="fa fa-clock-o"></i><?php echo $row['course_length']?></span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="course-detail.php?id=5"><?php echo $row['course_name']?></a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="course-detail.php?id=<?php echo $row['course_id']?>"><?php echo $row['course_cost']?></span>
                    </div>
                  </div>
                </div>
              </div>
			<?php
						     $related = "SELECT * FROM courses WHERE course_id='2';";
						     $result = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row = mysqli_fetch_array($result);
							?>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="course-detail.php?id=<?php echo $row['course_id']?>"><img src="<?php echo $row['course_img']?>" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <?php echo $row['course_type']?>
                      <span><i class="fa fa-clock-o"></i><?php echo $row['course_length']?></span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="course-detail.php?id=5"><?php echo $row['course_name']?></a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="course-detail.php?id=<?php echo $row['course_id']?>"><?php echo $row['course_cost']?></span>
                    </div>
                  </div>
                </div>
              </div>
			<?php
						     $related = "SELECT * FROM courses WHERE course_id='3';";
						     $result = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row = mysqli_fetch_array($result);
							?>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="course-detail.php?id=<?php echo $row['course_id']?>"><img src="<?php echo $row['course_img']?>" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <?php echo $row['course_type']?>
                      <span><i class="fa fa-clock-o"></i><?php echo $row['course_length']?></span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="course-detail.php?id=5"><?php echo $row['course_name']?></a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="course-detail.php?id=<?php echo $row['course_id']?>"><?php echo $row['course_cost']?></span>
                    </div>
                  </div>
                </div>
              </div>
			  <?php
						     $related = "SELECT * FROM courses WHERE course_id='4';";
						     $result = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row = mysqli_fetch_array($result);
							?>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="course-detail.php?id=<?php echo $row['course_id']?>"><img src="<?php echo $row['course_img']?>" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <?php echo $row['course_type']?>
                      <span><i class="fa fa-clock-o"></i><?php echo $row['course_length']?></span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="course-detail.php?id=5"><?php echo $row['course_name']?></a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="course-detail.php?id=<?php echo $row['course_id']?>"><?php echo $row['course_cost']?></span>
                    </div>
                  </div>
                </div>
              </div>
			  <?php
						     $related = "SELECT * FROM courses WHERE course_id='6';";
						     $result = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row = mysqli_fetch_array($result);
							?>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="course-detail.php?id=<?php echo $row['course_id']?>"><img src="<?php echo $row['course_img']?>" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <?php echo $row['course_type']?>
                      <span><i class="fa fa-clock-o"></i><?php echo $row['course_length']?></span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="course-detail.php?id=5"><?php echo $row['course_name']?></a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="course-detail.php?id=<?php echo $row['course_id']?>"><?php echo $row['course_cost']?></span>
                    </div>
                  </div>
                </div>
              </div>
			  <?php
						     $related = "SELECT * FROM courses WHERE course_id='5';";
						     $result = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row = mysqli_fetch_array($result);
							?>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="course-detail.php?id=<?php echo $row['course_id']?>"><img src="<?php echo $row['course_img']?>" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <?php echo $row['course_type']?>
                      <span><i class="fa fa-clock-o"></i><?php echo $row['course_length']?></span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="course-detail.php?id=5"><?php echo $row['course_name']?></a></h4>                    
                    <div class="mu-latest-course-single-contbottom">                      
                      <span class="mu-course-price" href="course-detail.php?id=<?php echo $row['course_id']?>"><?php echo $row['course_cost']?></span>
                    </div>
                  </div>
                </div>
              </div>
			  
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->

 



  <!-- Start from blog -->
  <section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2>Your Future Is Our Mission </h2>
              <p>Education is one of the most powerful things in life. It allows us to find the meaning behind everything and helps improve lives in a massive way. Education gives us an understanding of the world around us and offers us an opportunity to use that knowledge wisely. Irrespective of race, creed, and gender, education makes it possible for people to stand out as equal with all the other persons from different walks of life. Overall, education is the platform that makes it possible to defeat all barriers.

</p>
            </div>
            <!-- end title -->             
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog -->

  <?php include 'footer.html';
 ?>
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>