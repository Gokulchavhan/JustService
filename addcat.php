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
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">Buttons &amp; Tables</a></li>
                        <li><a href="#">List &amp; Blockquotes</a></li>
                        <li><a href="#">Images &amp; Dropcaps</a></li>
                        <li><a href="#">Tabs &amp; Toggles</a></li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar End -->
                
            <!-- Contact Content Start -->
            <div class="shortcode-right">
    			
                <div class="medium-bg-spacer">&nbsp;</div>
                <h2>Add Category Below:</h2>
                <div class="testimonial2">
				<form method="POST" action="add_cat.php">
					<table>
						<tr>
							<td>Category Name</td><td><input type="text" id="cat" name="cat"></td>
						</tr>
						<tr>
							<td>Category Description</td><td><textarea name="desc" id="desc" col=15 rows=4></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" value="Add Category"></td>
							<td><input type="reset" value="Reset"></td>
						</tr>
					</table>
				</form>
                </div>
            </div>
            <!-- Contact Content End -->
            
            <div class="clearfix"></div>
        </section>
        
        <div class="clearfix">&nbsp;</div>
       <?php include 'footer.php'; ?>
</body>
</html>