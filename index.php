<?php 
	require_once 'db_connect.php';
	session_start();
 ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include 'includes.php'; ?>
</head>
<body>

	<div id="container">
    	<?php include 'header.php'?>
        
        <!--Home Slider Start-->
        <section class="slider">
        	<div class="flexslider">
          		<ul class="slides">
                    <li>
                      <img src="images/11.jpg" align="Slider"/>
                      <div class="flex-caption">
                      	<h2>Just Services</h2>
                      	<p>To provide fast, free, reliable and comprehensive information to our users and connect buyers to sellers.</p>
                        <a href="#">read more</a>
                      </div>
                    </li>
                    <li>
                      <img src="images/2.jpg" align="Slider"/>
                      <div class="flex-caption">
                      	<h2>How to find Services?</h2>
                      	<p>Confused of how to find services in your area? here is the answer "JUST SERVICES" we provide the details of all the service prociders of your needs.</p>
                        <a href="#">read more</a>
                      </div>
                    </li>
                    <li>
                      <img src="images/3.jpg" align="Slider"/>
                      <div class="flex-caption">
                      	<h2>Get all your needs completed</h2>
                      	<p>Get details of all the required service providers names and contact details and fix your appointments so that you get your job done in seconds without going to shops for finding services. </p>
                        <a href="#">read more</a>
                      </div>
                    </li>
                  <li>
                      <img src="images/4.jpg" align="Slider"/>
                      <div class="flex-caption">
                      	<h2>Win this world with Services</h2>
                      	<p>We provide you with all the services with categories and details so go and pick your needed services and win this world.</p>
                        <a href="#">read more</a>
                      </div>
                    </li>
          		</ul>
            </div>
      	</section>
        <!--Home Slider End-->
        
        <!--Body Content Start-->
        <div id="body-content">
			
            <!--Sidebar Start-->        
            <div id="side-container">
            	<!--Widget Start-->
                <div class="widget">
                	<div class="border-thin">&nbsp;</div>
					<?php 
						if(isset($_SESSION['name']))
						{
							echo "Welcome to just service <b>".$_SESSION['name']."</b><br/>";
							echo "<a href=\"logout.php\">Logout</a><br/><br/>";
							echo "Change Account <a href=\"settings.php\">Settings</a><br/><br/>";
							echo "Go back to <a href=\"administration.php\">Administration Panel</a>";
						}
						else
						{
					?>
                	<h3><span>Login</span></h3>
					<form method="post" action="login.php">
						<p>Please login into the system for your service</p>
						<table>
						<tr>
							<td>User Name:</td>
							<td><input type="text" name="user_nm" id="user_nm"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="password" id="password"></td>
						</tr>
						<tr>
						
							<td><input type="submit" value="Login"></td>
							<td><input type="button" value="Reset"></td>
						<tr>
						<?php
						if(isset($_GET['log']))
						{
						echo "<tr>";
						echo "<td colspan=\"2\"><font color=\"red\">".$_GET['log']."</font></td>";
						echo "</tr>";
						}
						?>
							<td colspan="2"><a href="forgot_pass.php">Forgot password?</a></td>
						</tr>
						<tr>
							<td colspan="2">Not a registered user <a href="register.php">Register here..</a></td>
						</tr>
						</tr>
						</table>
					</form>
					<?php }?>
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
                
                <!--Widget Start--><br/><br/><br/>
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
            <article class="welcome-box welcome-pad">
            	<h1>Welcome To JUST SERVICES</h1>
                <p><b>Mission:</b> <br/>To provide fast, free, reliable and comprehensive information to our users and connect buyers to sellers.
				<br/><br/><b>Corporate Information:</b><br/>
				The company started offering local search services in 2012 under the Justservices brand and we believe that it is a leading player in a rapidly growing local search market in India.<br/>
				Our search service is available to users across multiple platforms, such as the Internet, mobile Internet, over the telephone (voice) and text (SMS).
		</p>
				<br/>
            </article>
            <!--Welcome Box End-->
            
            <!--Our Services Start-->
            <section class="box-wrap box-pad-left">
            	<div class="border-thick"></div>
                <h2 class="home-head">Our Services</h2>
            	<div class="hservice-box">
                	<h3><img src="images/web_design.png" alt="">Web &amp; <span>Service register</span></h3>
                    <p>To provide fast, free, reliable and comprehensive information to our users and connect buyers to sellers. </p>
                    <a href="#" class="more-link">more</a>
                </div>
                <div class="hservice-box">
                	<h3><img src="images/web_develop.png" alt="">Contact <span>Details</span></h3>
                    <p>Pellentesque enim purus, blandit vel pellentesque vitae, semper sit amet metus. Duis eleifend mi nec enim pretium aliquet. </p>
                    <a href="#" class="more-link">more</a>
                </div>
                <div class="hservice-box last">
                	<h3><img src="images/mobile_develope.png" alt="">Search <span>Services</span></h3>
                    <p>Pellentesque enim purus, blandit vel pellentesque vitae, semper sit amet metus. Duis eleifend mi nec enim pretium aliquet. </p>
                    <a href="#" class="more-link">more</a>
                </div>
                <div class="clearfix"></div>
            </section>
            <!--Our Services End-->
            
			<!--Our Services Start-->
            <section class="box-wrap box-pad-left">
            	<div class="border-thick"></div>
                <h2 class="home-head">Categories</h2>
            	<div class="hservice-box">
                    <h3>
					<?php
						$result=mysql_query("SELECT * FROM categories LIMIT 0, 4", $con);
							while($row = mysql_fetch_array($result))	
							{
								echo "<li><a href=\"services.php?cat=".$row['category_id']."\">".$row['category_name']."</a></li>";
							}
					?>
					
					</h3>
                </div>
                <div class="hservice-box">
                	 <h3> 
					 <?php
						$result=mysql_query("SELECT * FROM categories LIMIT 4, 4", $con);
							while($row = mysql_fetch_array($result))	
							{
								echo "<li><a href=\"services.php?cat=".$row['category_id']."\">".$row['category_name']."</a></li>";
							}
					?>
					</h3>
                </div>
                <div class="hservice-box last">
                	 <h3> 
					 <?php
						$result=mysql_query("SELECT * FROM categories LIMIT 8, 4", $con);
							while($row = mysql_fetch_array($result))
							{
								echo "<li><a href=\"services.php?cat=".$row['category_id']."\">".$row['category_name']."</a></li>";
							}
					?>
					</h3>
                </div><a href="categories.php" class="more-link">more Services</a>
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