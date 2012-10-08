<?php
	require_once 'db_connect.php';
?>
<!doctype html>
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <?php include 'includes.php'; ?>
</head>
<body>

	<div id="container">
    	<!--Header Start-->
        <?php include 'header.php'?>
        <!--Header End-->
        
        <div class="clearfix"></div>
        
        <!--Breadcrumbs Start-->
        <section class="breadcrumb-box">
        	<div class="border-thick"></div>
            <div class="breadcrumb-left">
            	<h1><?php
					$res=mysql_query("SELECT * FROM categories where category_id='$_REQUEST[cat]'",$con);
					$row=mysql_fetch_array($res);
					$cat_name=$row['category_name'];
					echo $cat_name;
				?></h1>
            </div>
            <div class="breadcrumb-right">
            	Home <a href="#"><?php global $cat_name; echo $cat_name; ?></a>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--Breadcrumbs End-->
                
        <!--Body Content Start-->
        <div id="body-content">
			
            <!--Sidebar Start-->        
            <div id="side-container-right">
            	<!--Widget Start--><br/><br/>
                <div class="widget">
                	<div class="border-thin">&nbsp;</div>
                	<h3><span>Book This Service</span></h3>
                    <style type="text/css">
table {
    width:199px;
    border:0px solid #888;    
    border-collapse:collapse;
}
 
td {
    width:27px;
	font-family: Arial, sans-serif;
    border-collapse:collapse;
    border:1px solid #888;
    text-align:center;
}
 
.calblock{
	float:none;
}
 
.onecal{
	vertical-align:top;
    background-color: #E9ECEF;
 
}
.cal{
	border-style:solid;
	border-width:thin;
	border-color:#E9ECEF;
	float:left;
	padding:3px;
}
 
.days{
    background-color: #F1F3F5;
}
 
.hasday{
    background-color: #FFFFDE;
}
.noday{
    background-color: #E9ECEF;
}
 
th {
	font-family: Arial, sans-serif;
    border-collapse:collapse;
    border:1px solid #888;
    background-color: #E9ECEF;
}
</style>
 
 
<?PHP
FUNCTION showCalendar( $monthToShow = NULL  , $yearToShow = NULL , $firstDayOfWeek = 0 ){
	IF (($monthToShow === NULL) OR ($yearToShow === NULL)) {
		$today = GETDATE();
		$monthToShow = $today['mon'];
		$yearToShow = $today['year'];
	}
	ELSE {
		$today = GETDATE(MKTIME(0,0,0,$monthToShow,1,$yearToShow));
	}
	// get first and last days of the month
    $firstDay = GETDATE(MKTIME(0,0,0,$monthToShow,1,$yearToShow));
    $lastDay  = GETDATE(MKTIME(0,0,0,$monthToShow+1,0,$yearToShow)); //trick! day = 0
 
    // Create a table with the necessary header information
    ECHO '<div class = cal><table>';
    ECHO '  <tr><th colspan="7">'.$today['month']."&nbsp;&nbsp;&nbsp;".$today['year']."</th></tr>";
    ECHO '<tr class="days">';
	$dayText = ARRAY ( // this array is used to simplify the display of calendar headers
		// the entries just specify the text to show for the days in the header
		0 => 'Su','Mo','Tu','We','Th','Fr','Sa',
		// duplicate the first 6 entries to simplify display of calendar headers in a loop
		'Su','Mo','Tu','We','Th','Fr'
	);
	FOR ($i=0;$i<7;$i++){ // put 7 days in header, starting at appropriate day ($firstDayOfWeek)
		ECHO '<td>'.$dayText[$firstDayOfWeek + $i].'</td>';
    }
	ECHO '</tr><tr>';
    // Display the first calendar row with correct start of week
	IF ( $firstDayOfWeek <= $firstDay['wday'] ) {
		$blanks = $firstDay['wday'] - $firstDayOfWeek; 
	} 
	ELSE {
		$blanks = $firstDay['wday'] - $firstDayOfWeek + 7; 
	}
	FOR($i=1;$i<=$blanks;$i++){
        ECHO '<td class="noday">- </td>';
    }
    $actday = 0; // used to count and represent each day
	// Note: loop below starts using the residual value of $i from loop above 
    FOR( /* use value of $i resulting from last loop*/ ;$i<=7;$i++){
        ECHO '<td class=hasday>'.++$actday.'</td>';
    }
    ECHO '</tr>';
 
    // Get how many complete weeks are in the actual month
    $fullWeeks = FLOOR(($lastDay['mday']-$actday)/7);
    FOR ($i=0;$i<$fullWeeks;$i++){
		ECHO '<tr>';
        FOR ($j=0;$j<7;$j++){
				$linq=$actday+1;
               ECHO "<td class=hasday><a href=eventcalendar.php?day=$linq&month=$today[month]&year=$today[year]&cat=$_REQUEST[cat]&id=$_REQUEST[id]>".++$actday."</a></td>";
        }
        ECHO '</tr>';
    }
 
    //Now display the partial last week of the month (if there is one)
    IF ($actday < $lastDay['mday']){
        ECHO '<tr>';
        $actday++;
        FOR ($i=0;$i<7;$i++){
            IF ($actday <= $lastDay['mday']){
                ECHO '<td class=hasday>'.$actday++.'</td>';
            }
            ELSE {
                ECHO '<td class="noday"> </td>';
            }
        }
        ECHO '</tr>';
    }
    ECHO '</table></div>';
}
 
/*	demo execution starts here
	This demo example uses showCalendar to package 12 months into 3 rows.
	It defaults to start in the current month.
*/
	$useDefault = TRUE;  // to always start in a particular month, set this false and see (A) below
	IF ($useDefault) { // start at current month
		$thisDay    = GETDATE(); 
		$startMonth = $thisDay['mon'];
		$startYear = $thisDay['year'];
	}
	ELSE {
		$startMonth = 1;   // (A) start at specified month ... January, 2011 in this case
		$startYear = 2011; 
	}
 
	// there are 3 blocks 
		ECHO '<div class = "calblock"><table><tr>';
			ECHO '<td class = "onecal">';
			showCalendar( $startMonth++,$startYear, 1 /* start all weeks on Monday (1) */);  
			ECHO '</td>';
		ECHO '</tr></table></div>';
		 //echo "<a href="#" class="more-link">more</a>;
	
?> <font color="red">*You can book for current month only</font><br/>
	
<a href="book.php" class="more-link">Book Now</a>
	
                </div>
                <!--Widget End-->
                
                 <!--Widget Start-->
                <div class="widget">
                	<div class="border-thin">&nbsp;</div>
                	<h3><span>Recent Post</span></h3>
                    <ul class="sidebar-post">
                    	<li>
                            <div class="imgborder">
                                <a href="services.php?cat=7"><img alt="" src="images/post_2.png"></a>
                            </div>
                            <div class="recent_txt">
                                <h4><a href="services.php?cat=7">Beauty Salons and Spa</a></h4>
                                <p>To beautyfy yourself get this service to look gorgeous. Flaunt yourself get looked by others.</p>
                                <a href="services.php?cat=7" class="post-link">read more</a>
                            </div><br/>
                            <div class="clearfix"></div>
                      </li>
                      	<li>
                            <div class="imgborder">
                                <a href="services.php?cat=12"><img alt="" src="images/post_1.png"></a>
                            </div>
                            <div class="recent_txt">
                                <h4><a href="services.php?cat=12">Clubs and Societies</a></h4>
                                <p>Get all the hapening Clubs in your city and visit them, also this category provides details about Societies.</p>
                                <a href="services.php?cat=12" class="post-link">read more</a>
                            </div><br/>
                            <div class="clearfix"></div>
                      </li>
                 	</ul>
                </div>
                <!--Widget End-->
                
                <!--Widget Start-->
                <div class="widget">
                	<div class="border-thin">&nbsp;</div>
                	<h3><span>Testimonials</span></h3>
                    <p>Just service is a Great service provided by "Sajeel Irkal", It solves all my problems for any required service. </p>
                    <div class="author">Mr. HEHEHE</div>
                </div>
                <!--Widget End-->
            </div>
            <!--Sidebar End-->
            
            <!--Welcome Box Start-->
            <p>&nbsp;</p>            
            <!--Welcome Box End-->
            
            <!--Our Works Start-->
            <section class="box-wrap box-pad-right">
            	<div class="border-thick"></div>
				<?php
		if(isset($_GET['log']))
		{
			echo "<center><font color=\"red\">".$_GET['log']."</font></center><br/>";
		}
	?>
				<?php
						$res=mysql_query("select * from service_provider where sp_id='$_REQUEST[id]'",$con);
						$row=mysql_fetch_array($res);
						{
							if(!empty($row))
							{
					?>
                <h2 class="home-head"><a href="#"><?php echo $row['sp_name']; ?></a></h2>
                <div class="posted-txt grid_1 alpha">
                    Posted by <a href="#"><?php echo $row['sp_name']; ?></a>
                    <span class="date-box">16 <span>May</span></span>
                    Posted in <a href="#">Just Services</a>
                </div>
					
                <div class="blog-img">
                	<div class="hover-img">
                        <a rel="prettyPhoto" class="zoom fade-img" href="images/large_image.png" title="Title goes here"></a>
                        <a href="portfolio_details.html" class="fade-img"></a>
                        <img src="images/blog-img1.jpg" alt="Home Portfolio">
                        <i style="opacity: 0;"></i>
                    </div>
                    <h3><?php 
								echo "Name: ".$row["sp_name"]."<br/>";
								echo "Contact: ".$row["sp_contact"]."<br/>";
								echo "Address: ".$row["sp_address"]."<br/>";
								echo "City: ".$row["sp_city"]."<br/>";
								echo "State: ".$row["sp_state"]."<br/>";
								echo "Email: ".$row["sp_email"]."</b>";
						?></h3>
                    <a href="#" class="more-link">more</a>
                </div>
				<?php
					}
						
						else
						{
							echo "<h3> No such Service provider.</h3>";
						}
					}
				?>                
                <div class="clearfix">&nbsp;</div>
                
                <div class="comment-wrap">
				<h3>Comments</h3>
				<?php
				//echo $_REQUEST['id'];
					$result=mysql_query("SELECT * FROM comments WHERE sp_id='$_REQUEST[id]' AND category_id='$_REQUEST[cat]'",$con);
					//$result=mysql_query("SELECT * from comments",$con);
					if($result)
					{
						while($row = mysql_fetch_array($result))
						{
							if(!empty($row))
							{
				?>
                        
                        <div class="comment-box">
                            <div class="comment-thumb"><img alt="" src="images/comment_author.jpg"></div>
                            <div class="comment-txt">
                                <div class="arrow-right"><img alt="" src="images/arrow_right.html"></div>
                                <h4><?php echo $row["comment_name"]; ?><span class="post-date"><?php echo " ".$row["comment_date"] ?></span></h4>
                                <p><?php echo $row["comment_desc"]; ?></p>
                            </div>
                        </div>
				<?php
							}
							else
							{
								echo "No comments Yet be the first too comment :)";
							}
						}
					}

					
				?>
                </div>
                     
   	  				<div class="post-comment">
                        <h3 class="add-icon">Add Comment</h3>
                        <p>Your email address will not be published.</p>
                        <form action='comment.php?cat=<?php echo $_REQUEST['cat']; ?>&id=<?php echo $_REQUEST['id'] ?>' method='post'>
                        <div class="form-row">
                                <label>Name</label>
                                <input type="text" style="border:none; background:#e0e0dd; padding:0 10px; font-size:11px; color:#000; padding:10px 5px; width:98%; font-family: 'RobotoRegular';" placeholder="Full Name..." name="name">
                            </div>  
                            <div class="form-row">
                                <label>Email</label>
                                <input type="text" name="email" style="border:none; background:#e0e0dd; padding:0 10px; font-size:11px; color:#000; padding:10px 5px; width:98%; font-family: 'RobotoRegular';" placeholder="Email..." id="email">
                            </div>                              
                            
                            <div class="clearfix"></div>
                            <div class="form-row">
                                <label>Your Comments</label>
                                <textarea name="comment" style="border:none; background:#e0e0dd; padding:0 10px; font-size:11px; color:#000; padding:10px 5px; width:98%; font-family:'RobotoRegular'; height:100px;" placeholder="Your comments..."></textarea>
                            </div>
                            <div class="clearfix"></div>
							<br/>
                            <div class="form-row">
                                <input type="submit" class="newsletter-btn" value="Add Comment">
                            </div>
                        </form>
                     </div>
            </section>
            <!--Our Works End-->
            
        </div>
        <!--Body Content End-->
        
        <!--Footer Start-->
        <?php include 'footer.php'; ?>
	</div>
</body>
</html>