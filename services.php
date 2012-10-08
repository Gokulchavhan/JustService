<?php
	require_once 'db_connect.php';
?>
<!doctype html>
<head>
   <?php include 'includes.php'; ?>
</head>
<body>

	<div id="container">
    	<!--Header Start-->
        <?php include'header.php'; ?>
        </header>
        <!--Header End-->
        
        <div class="clearfix"></div>
        
        <!--Breadcrumbs Start-->
        <section class="breadcrumb-box">
        	<div class="border-thick"></div>
            <div class="breadcrumb-left">
            	<h1><?php 
				$res=mysql_query("select * from sp_category where category_id='$_REQUEST[cat]'",$con);
				$row=mysql_fetch_array($res);
				echo $row["category_name"]; 
				?></h1>
            </div>
            <div class="breadcrumb-right">
            	Home <a href="#"><?php 
				$res=mysql_query("select * from sp_category where category_id='$_REQUEST[cat]'",$con);
				$row=mysql_fetch_array($res);
				echo $row["category_name"]; 
				?></a>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--Breadcrumbs End-->
                
        <!--Body Content Start-->
        <div id="body-content">
			
            <!--Sidebar Start-->        
            <div id="side-container-right">
            	<!--Widget Start-->
                <div class="widget">
                	<div class="border-thin">&nbsp;</div>
                	<h3><span>Contact Us</span></h3>
                    <p>JUST SERVICES</p>
                    <ul class="contact-details">
                    	<li><span>Phone :</span> +91 (0) 9730991177</li>
                        <li><span>Fax :</span> +44 (0) 1234567890</li>
                        <li><span>Email :</span><a href="mailto:sajeel.irkal@gmail.com"> sajeel.irkal@gmail.com</a></li>
                        <li><span>Address :</span> SICSR, Model colony, Pune - 411016 </li>
                   	</ul>
                </div>
                <!--Widget End-->
            </div>
            <!--Sidebar End-->
            
            <!--Welcome Box Start-->
            <p>&nbsp;</p>            
            <!--Welcome Box End-->
            
            <!--Our Works Start-->
			
			<?php 
				//$result=mysql_query("SELECT service_provider.sp_name, service_provider.sp_id FROM service_provider INNER JOIN sp_category ON service_provider.sp_id=sp_category.sp_id WHERE sp_category.category_name='$_REQUEST[cat]'", $con);
				$result=mysql_query("SELECT service_provider.sp_name, service_provider.sp_id FROM service_provider INNER JOIN sp_category ON service_provider.sp_id=sp_category.sp_id WHERE sp_category.category_id='$_REQUEST[cat]'",$con);
				if(!empty($result))
				{
					while($row = mysql_fetch_array($result))
					{
						$cat=$_REQUEST['cat'];
						$sp_id=$row["sp_id"];
						$name=$row["sp_name"];
						
						//echo $row["sp_address"];
					
			?>
            <section class="box-wrap box-pad-right">
            	<div class="border-thick"></div>
                <h2 class="home-head">
				<?php 
					echo "<a href=\"provider.php?cat=$cat&id=$sp_id\">".$name; 
				?></a></h2>
                <div class="port-img">
                	<div class="hover-img">
                        <a rel="prettyPhoto" class="zoom fade-img" href="images/large_image.png" title="Title goes here"></a>
                        <a href="portfolio_details.html" class="fade-img"></a>
                        <img src="images/portfolio1.png" alt="Home Portfolio">
                        <i style="opacity: 0;"></i>
                    </div>
                </div>
                <div class="port-txt">
                	<p><?php 
							global $name;
							echo "<b>Name: ".$name."<br/>";
							$qry=mysql_query("SELECT * from service_provider WHERE sp_name='$name'",$con);
							while($row=mysql_fetch_array($qry))
							{
								echo "Contact: ".$row["sp_contact"]."<br/>";
								echo "Address: ".$row["sp_address"]."<br/>";
								echo "City: ".$row["sp_city"]."<br/>";
								echo "State: ".$row["sp_state"]."<br/>";
								echo "Email: ".$row["sp_email"]."</b>";
							}
						?></p>                    
                    <?php echo "<a class=\"more-link\" href=\"provider.php?cat=$cat&id=$sp_id\">more</a>";
					?>
					
                </div>
                <div class="clearfix"></div>
            </section>
			<?php 
					}
				}
				else
				{
			?>
				<section class="box-wrap box-pad-right">
					<div class="border-thick"></div>
					<h2 class="home-head">NO registered services in this category.</h2>
					<div class="clearfix"></div>
				</section>
			<?php
				}
			?>
            <!--Our Works End-->
            
        <!--Body Content End-->
        
        <!--Footer Start-->
        <?php include 'footer.php'; ?>
</body>
</html>