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
    <title>Courser | Courses</title>

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
    
	
<style>
p.elipsis {
display: -webkit-box;
-webkit-line-clamp: 5;
-webkit-box-orient: vertical;
overflow: hidden;
text-overflow: ellipsis;
}
</style>

  </head>
  <body>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <?php include 'header.html';
 ?>
 
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Courses</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>            
            <li class="active">Courses</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9" float="center">
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
				  <?php
				  while($row = mysqli_fetch_array($result))
				  {
					  ?>
				  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="course-detail.php?id=<?php echo $row['course_id']?>">
						<img src="<?php echo $row['course_img']?>" alt="img" width="331.75" height = "176.38"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                        
                          
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="course-detail.php?id=<?php echo $row['course_id']?>"><?php echo $row['course_name']?></a></h4>
                        <p class="elipsis"><?php echo $row['course_desc']?></p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="course-detail.php?id=<?php echo $row['course_id']?>">Details</a>
                          
                        </div>
                      </div>
                    </div> 
                  </div>                  
					  
					  <?php
				  }
				  ?>
                    
                  </div>
                </div>
                <!-- end course content container -->
                
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Course Types</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="search.php?search=IT&submit-search=true">IT</a></li>
                      <li><a href="search.php?search=Business&submit-search=true">Business</a></li>
                      <li><a href="search.php?search=Engineering&submit-search=true">Engineering</a></li>
                      <li><a href="search.php?search=Media&submit-search=true">Media</a></li>
                      <li><a href="search.php?search=Science&submit-search=true">Science</a></li>
                      <li><a href="search.php?search=Finance&submit-search=true">Finance</a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
				  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Popular Courses</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
						<?php
						     $related = "SELECT * FROM courses WHERE course_id='4';";
						     $result3 = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row3 = mysqli_fetch_array($result3);
							?>
                          <a href="course-detail.php?id=4">
                            <img class="media-object" src="<?php echo $row3['course_img']?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="course-detail.php?id=4"><?php echo $row3['course_name']?></a></h4>                      
                          
                        </div>
                      </div>
                        <div class="media">
                        <div class="media-left">
						<?php
						     $related = "SELECT * FROM courses WHERE course_id='3';";
						     $result3 = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row3 = mysqli_fetch_array($result3);
							?>
                          <a href="course-detail.php?id=3">
                            <img class="media-object" src="<?php echo $row3['course_img']?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="course-detail.php?id=3"><?php echo $row3['course_name']?></a></h4>                      
                          
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
						<?php
						     $related = "SELECT * FROM courses WHERE course_id='1';";
						     $result3 = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row3 = mysqli_fetch_array($result3);
							?>
                          <a href="course-detail.php?id=1">
                            <img class="media-object" src="<?php echo $row3['course_img']?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="course-detail.php?id=1"><?php echo $row3['course_name']?></a></h4>                      
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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