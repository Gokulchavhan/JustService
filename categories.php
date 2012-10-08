<!doctype html>
<?php require_once 'db_connect.php'; ?>
<head>
    <?php include 'includes.php'; ?>	
</head>
<body>

	<div id="container">
        <!--Header Start-->
        <?php include 'header.php'; ?>
        <!--Header End-->
        
        <div class="clearfix"></div>
        
        <!--Breadcrumbs Start-->
        <section class="breadcrumb-box">
        	<div class="border-thick"></div>
            <div class="breadcrumb-left">
            	<h1>Event Calendar</h1>
            </div>
            <div class="breadcrumb-right">
            	Home <a href="#">Categories</a>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--Breadcrumbs End-->
        <section class="box-wrap box-pad-equal">
        	<div class="border-thick"></div>
                
            <!-- Sidebar Start -->
            <div class="shortcode-left">
                <h2>See Services</h2>
                <div class="pages-bg">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
						<li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar End -->
                
            <!-- Contact Content Start -->
            <div class="shortcode-right">
    			
                <div class="medium-bg-spacer">&nbsp;</div>
                <h2>Following are the categories:</h2>
                <div class="testimonial2">
                    <blockquote>
                        <p>We provide you with the best service which can be used to sove your problems.<br/>Following are the regestered Services.</p>
                    </blockquote>
				<?php
					$sql= "SELECT * from categories";
							$result=mysql_query($sql,$con);
							if(!is_null($result))
							{
										while($row=mysql_fetch_array($result))
										{
											$val= $row["category_id"];
											echo "<font size=4>";
											echo "<a href='services.php?cat=$val'>".$row["category_name"]."</a>";
											echo "</font><br/>";
										}
								echo "</td>";
							}
							else
							{
								echo "No categories add new category";
							}
				?>
                </div>
            </div>
            <!-- Contact Content End -->
            
            <div class="clearfix"></div>
        </section>
        
        <div class="clearfix">&nbsp;</div>
       <?php include 'footer.php'; ?>
</body>
</html>