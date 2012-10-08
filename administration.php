<?php

require_once 'db_connect.php';
session_start();
if($_SESSION['name']=="" || $_SESSION['name']==null)
{
	header("Location:login_page.php");
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<?php include 'includes.php'; ?>
</head>
<body>

	<div id="container">
    	<!--Header Start-->
        <?php include'header.php'; ?>
        <!--Header End-->
        
        <div class="clearfix"></div>
        
        
        
        <!--Body Content Start-->
        <div id="body-content">
			
            <!--Sidebar Start-->        
            <div id="side-container">
            	<!--Widget Start-->
                <div class="widget">
                	<div class="border-thin">&nbsp;</div>
                	<h3><span>Login</span></h3>
					<?php 
						echo "Welcome to just service <b>".$_SESSION['name']."</b><br/>";
						echo "<a href=\"logout.php\">Logout</a><br/><br/>";
						echo "Change Account <a href=\"settings.php\">Settings";
					?>
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
                
                
            </div>
            <!--Sidebar End-->
            
            <!--Welcome Box Start-->
            <article class="welcome-box welcome-pad">
            	<h1>Welcome To JUST SERVICES<br/>Administration Dashboard</h1>
            </article><br/><br/>
            <!--Welcome Box End-->
            
            <!--Our Services Start-->
            <section class="box-wrap box-pad-left">
            	<div class="border-thick"></div>
                <h2 class="home-head">Your Regestered Services</h2>
            	<div class="hservice-box">
                	<h3>
					<?php
						$result=mysql_query("SELECT service_provider.sp_id, sp_category.category_name  FROM service_provider INNER JOIN sp_category ON service_provider.sp_id=sp_category.sp_id WHERE service_provider.sp_username ='$_SESSION[name]'", $con);
							while($row = mysql_fetch_array($result))	
							{
								echo "<li><a href=\"services.php?cat=".$row['category_name']."\">".$row['category_name']."</a></li>";
							}
					?></h3>
                    
                </div>
                <div class="clearfix"></div>
            </section>
            <!--Our Services End-->
            
			<!--Our Services Start-->
            <section class="box-wrap box-pad-left">
            	<div class="border-thick"></div>
                <h2 class="home-head">Services Requested by users</h2>
            	<div class="">
                    <h3>
					<table border=1>
					<form method="POST" action="done.php">
						<tr>
							<td>Title</td><td>Date</td><td>time</td><td>Person</td><td>Contact</td><td>Area</td><td>Desc</td><td>Status</td>
						</tr>
						
					<?php
						$result=mysql_query("SELECT service_provider.sp_id, eventcalender.evt_id,eventcalender.evt_title,eventcalender.evt_title, eventcalender.evt_date, eventcalender.evt_stime, eventcalender.evt_person,	eventcalender.evt_phone, eventcalender.evt_place,eventcalender.evt_desc, eventcalender.status FROM service_provider INNER JOIN eventcalender ON service_provider.sp_id=eventcalender.evt_provider WHERE service_provider.sp_username ='$_SESSION[name]'", $con);
							while($row = mysql_fetch_array($result))	
							{
								if ($row[10]=="Wait")
								{
									echo "<td>$row[2]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td><input type=\"submit\" value=\"Done\"></td></tr>";
									echo"<input type=\"hidden\" value=\"$row[1]\" name=\"pro\">";
								}
								elseif(count($row)==0)
							{
								echo "No services requested";
							}
							}
							
					?>
					
					</form>
					</table>
					</h3>
                </div>
                
                <a href="services" class="more-link">more requests</a>
                <div class="clearfix"></div>
            </section>
			
            <!--Our Works Start-->
            <section class="box-wrap box-pad-left">
            	<div class="border-thick"></div>
                <h2 class="home-head">Recent Services</h2>
            	<div class="hwork-box">
                	<div class="hover-img">
                        <a rel="prettyPhoto" class="zoom fade-img" href="images/large_image.png" title="Title goes here"></a>
                        <a href="portfolio_details.html" class="fade-img"></a>
                        <img src="images/portfolio1.jpg" alt="Home Portfolio">
                        <i style="opacity: 0;"></i>
                    </div>
                	<h3>Hotels and Resorts</h3>
                    <p>This service provides you all the details of the Hotels and Resorts and let you book your suite and enjoy holidays.</p>
                    <a href="services.php?cat=5" class="more-link">more</a>
                </div>
                <div class="hwork-box">
                	<div class="hover-img">
                        <a rel="prettyPhoto" class="zoom fade-img" href="images/large_image.png" title="Title goes here"></a>
                        <a href="portfolio_details.html" class="fade-img"></a>
                        <img src="images/portfolio2.jpg" alt="Home Portfolio">
                        <i style="opacity: 0;"></i>
                    </div>
                	<h3>Beauty Salons and Spa</h3>
                    <p>To beautyfy yourself get this service to look gorgeous. Flaunt yourself get looked by others, makes you feel beautiful.</p>
                    <a href="services.php?cat=7" class="more-link">more</a>
                </div>
                <div class="hwork-box last">
                	<div class="hover-img">
                        <a rel="prettyPhoto" class="zoom fade-img" href="images/large_image.png" title="Title goes here"></a>
                        <a href="portfolio_details.html" class="fade-img"></a>
                        <img src="images/portfolio3.jpg" alt="Home Portfolio">
                        <i style="opacity: 0;"></i>
                    </div>
                	<h3>Icecream Parlours</h3>
                    <p>This service provide you with details of all yummy Icecream parlours in your place and free you from summer hotness.</p>
                    <a href="#" class="more-link">more</a>
                </div>
                <div class="clearfix"></div>
            </section>
            <!--Our Works End-->
        </div>
        <!--Body Content End-->

        <!--Footer Start-->
       <?php include 'footer.php'; ?>

</body>
</html>