<?php
	include_once('dbinc.php');
	$ID = $_GET['id'];
	$sql = "SELECT * FROM courses where course_id='$ID';";
	$result = mysqli_query($conn, $sql) or die("Bad Query:$sql");
	$row = mysqli_fetch_array($result);
	
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Courser | Course Details</title>

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
.button {
  background-color: #e7e7e7; 
  color: black;
  border: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button:hover {
  background-color: #01bafd;
  color: white;
}

</style>
  </head>
  <body>
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
           <h2>Course Detail</h2>
           <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>            
            <li class="active">Course Detail</li>
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
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-course-details">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img">
                          <a href="#"><img src="<?php echo $row['course_img']?>" alt="img" height="300"></a>
                          <figcaption class="mu-latest-course-imgcaption">
                          </figcaption>
							</figure>
							<div class="mu-latest-course-single-content">
							  <h2><a href="#"><?php echo $row['course_name']?></a></h2>
							  <h4>Course Description</h4>
							  <ul>
								<li> <span>Field</span> <span><?php echo $row['course_type']?></span></li>
								<li> <span>Cost</span> <span><?php echo $row['course_cost']?></span></li>
								<li> <span>Program Length</span> <span><?php echo $row['course_length']?></span></li>
								<li> <span>Number of Courses</span> <span><?php echo $row['course_classes']?></span></li>
								<li> <span>Provided By</span> <span><?php echo $row['course_prov']?></span></li>
							  
							  </ul>
							  <h4>Description</h4>
							  <p><?php echo $row['course_desc']?></p>
							  <h4>Additional Info</h4>
							  <p><?php echo $row['course_info']?></p>
							  <h4>Courses</h4>
							  <div class="table-responsive">
								<table class="table">
								<thead>
								  <tr>
									<th> Course Title </th>
									<th> Description </th>						
									<th> Credit Hours</th>
									<th> Fees </th>
								  </tr>
								</thead>
								<tbody>
								<?php
								 $stmt = "SELECT * FROM classes WHERE course_id='$ID';";
								 $result2 = mysqli_query($conn, $stmt) or die("Bad Query:$stmt");
							  
								while($row2 = mysqli_fetch_array($result2))
								{
								?>
								  <tr>
									<td><?php echo $row2['class_name']?></td>
									<td><?php echo $row2['class_desc']?></td>                               
									<td><?php echo $row2['class_cred']?></td>
									<td><?php echo $row2['class_fee']?></td>
								  </tr>
								  <?php
								}
								?>
								</tbody>
							  </table>
							  </div>
							  <h4>Reviews <a href="review.php"><button class="button">Leave Review</button></a> </h4>
							<div class="col-md-9">
							<!-- start course content container -->
							<div class="mu-course-container mu-blog-archive">
							  <div class="row">
							  <?php
							  $ID = $_GET['id'];
							  $sql = "SELECT * FROM reviews where course_id='$ID';";				  
							  $result = mysqli_query($conn, $sql) or die("Bad Query:$sql");
							  
							  while($row = mysqli_fetch_array($result))
							  {
								  ?>
								<div class="col-md-6 col-sm-6">
								  <article class="mu-blog-single-item">
									<figure class="mu-blog-single-img">
									<?php
									  $courseid = $row['course_id'];
									  $sql2 = "SELECT * FROM courses where course_id='$courseid';";
									  $result2 = mysqli_query($conn, $sql2) or die("Bad Query:$sql2");
									  $row2 = mysqli_fetch_array($result2);
									  ?>
									  <a href="reviewsingle.php?id=<?php echo $row['review_id']?>"><img src="<?php echo $row2['course_img']?>" alt="img" width="331.75" height = "176.38"></a>
									  <figcaption class="mu-blog-caption">
										<h4><a href="reviewsingle.php?id=<?php echo $row['review_id']?>"><?php echo $row2['course_name']?></a></h3>
									  </figcaption>                      
									</figure>
									<div class="mu-blog-meta">
									  <a><?php echo $row['review_title']?></a>  
									  <br>
									  <a>By <?php echo $row['review_name']?></a>                          
									  <a><?php echo $row['review_rating']?>★</a>
									</div>
									<div class="mu-blog-description">
									  <p class="elipsis"><?php echo $row['review_text']?></p>
									  <a class="mu-read-more-btn" href="reviewsingle.php?id=<?php echo $row['review_id']?>">Read More</a>
									</div>
								  </article> 
								</div>
								<?php
							  }
							  ?>
							  </div>
							</div>
							<!-- end course content container -->           
						  </div>
                        </div>
                      </div> 
                    </div>                                   
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start related course item -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
                  <h3>Related Courses</h3>
                  <div class="mu-related-item-area">
                    <div id="mu-related-item-slide">
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
						<?php
						     $related = "SELECT * FROM courses WHERE course_id='1';";
						     $result3 = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row3 = mysqli_fetch_array($result3);
							?>
                          <figure class="mu-latest-course-img">
                            <a href="course-detail.php?id=1"><img alt="img" src="<?php echo $row3['course_img']?>"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                             <?php echo $row3['course_type']?>
                              <span><i class="fa fa-clock-o"></i><?php echo $row3['course_length']?></span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="course-detail.php?id=1"><?php echo $row3['course_name']?></a></h4>
                            <div class="mu-latest-course-single-contbottom">
                              <span class="mu-course-price"><?php echo $row3['course_cost']?></span>
                            </div>
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="mu-latest-course-single">
						<?php
						     $related = "SELECT * FROM courses WHERE course_id='2';";
						     $result3 = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row3 = mysqli_fetch_array($result3);
							?>
                          <figure class="mu-latest-course-img">
                            <a href="course-detail.php?id=2"><img alt="img" src="<?php echo $row3['course_img']?>"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                             <?php echo $row3['course_type']?>
                              <span><i class="fa fa-clock-o"></i><?php echo $row3['course_length']?></span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="course-detail.php?id=2"><?php echo $row3['course_name']?></a></h4>
                            <div class="mu-latest-course-single-contbottom">
                              <span class="mu-course-price"><?php echo $row3['course_cost']?></span>
                            </div>
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="mu-latest-course-single">
						<?php
						     $related = "SELECT * FROM courses WHERE course_id='3';";
						     $result3 = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row3 = mysqli_fetch_array($result3);
							?>
                          <figure class="mu-latest-course-img">
                            <a href="course-detail.php?id=3"><img alt="img" src="<?php echo $row3['course_img']?>"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                             <?php echo $row3['course_type']?>
                              <span><i class="fa fa-clock-o"></i><?php echo $row3['course_length']?></span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="course-detail.php?id=3"><?php echo $row3['course_name']?></a></h4>
                            <div class="mu-latest-course-single-contbottom">
                              <span class="mu-course-price"><?php echo $row3['course_cost']?></span>
                            </div>
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="mu-latest-course-single">
						<?php
						     $related = "SELECT * FROM courses WHERE course_id='6';";
						     $result3 = mysqli_query($conn, $related) or die("Bad Query:$related");
						  
							 $row3 = mysqli_fetch_array($result3);
							?>
                          <figure class="mu-latest-course-img">
                            <a href="course-detail.php?id=6"><img alt="img" src="<?php echo $row3['course_img']?>"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                             <?php echo $row3['course_type']?>
                              <span><i class="fa fa-clock-o"></i><?php echo $row3['course_length']?></span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="course-detail.php?id=6"><?php echo $row3['course_name']?></a></h4>
                            <div class="mu-latest-course-single-contbottom">
                              <span class="mu-course-price"><?php echo $row3['course_cost']?></span>
                            </div>
                          </div>
                        </div>
                      </div>
					 </div>
                  </div>
                </div>
                  </div>
                </div>
                <!-- end start related course item -->
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