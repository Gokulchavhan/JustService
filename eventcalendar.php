<!doctype html>
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
            	Home <a href="#">Event Calendar</a>
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
                <h2>Fill in the Form Below</h2>
                <div class="testimonial2">
                    <blockquote>
                        <p>We provide you with the best service which can be used to sove your problems.<br/> So fill in the form below to register for the service.</p>
                    </blockquote>
    <form name="eventRecord" method="post" action="RecordSave.php">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="box">
            <tr>
              <td>
              	
				<table width='778' height='418' border='0' cellspacing='0' align='center'>
				<tr>
					<td width='387' height='57'><strong>Title</strong></td>
					<td width='381'><input type='text' name='etitle' value=''/>
					</td>
					<td width='150'></td></tr><tr>
					<td height='50'><strong>Starting Date</strong></td>
					<td>
						<select name='syear' id='syear' selected="">
							<option value="<?php echo $_REQUEST['year']; ?>" selected><?php echo $_REQUEST['year']; ?></option>
							<option>Year</option>
							<option value='2007'>2007</option>
							<option value='2008'>2008</option>
							<option value='2009'>2009</option>
							<option value='2010'>2010</option>
							<option value='2011'>2011</option>
							<option value='2012'>2012</option>
							<option value='2013'>2013</option>
							<option value='2014'>2014</option>
							<option value='2015'>2015</option>
							<option value='2016'>2016</option>
							<option value='2017'>2017</option>
							<option value='2018'>2018</option>
							<option value='2019'>2019</option>
							<option value='2020'>2020</option>
							</select>
				
						<select name='smonth' id='smonth'>
						<option value="<?php echo $_REQUEST['month']; ?>" selected><?php echo $_REQUEST['month']; ?></option>
						<option>Month</option>
						<option value='01'>Jan</option>
						<option value='02'>Feb</option>
						<option value='03'>Mar</option>
						<option value='04'>Apr</option>
						<option value='05'>May</option>
						<option value='06'>Jun</option>
						<option value='07'>Jul</option>
						<option value='08'>Aug</option>
						<option value='09'>Sep</option>
						<option value='10'>Act</option>
						<option value='11'>Nov</option>
						<option value='12'>Dec</option></select>
				
					<select name='sday' id='sday'>
					<option value="<?php echo $_REQUEST['day']; ?>" selected><?php echo $_REQUEST['day']; ?></option>
						<option>Day</option>
						<option value='01'>01</option>
						<option value='02'>02</option>
						<option value='03'>03</option>
						<option value='04'>04</option>
						<option value='05'>05</option>
						<option value='06'>06</option>
						<option value='07'>07</option>
						<option value='08'>08</option>
						<option value='09'>09</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
						<option value='13'>13</option>
						<option value='14'>14</option>
						<option value='15'>15</option>
						<option value='16'>16</option>
						<option value='17'>17</option>
						<option value='18'>18</option>
						<option value='19'>19</option>
						<option value='20'>20</option>
						<option value='21'>21</option>
						<option value='22'>22</option>
						<option value='23'>23</option>
						<option value='24'>24</option>
						<option value='25'>25</option>
						<option value='26'>26</option>
						<option value='27'>27</option>
						<option value='28'>28</option>
						<option value='29'>29</option>
						<option value='30'>30</option>
						<option value='31'>31</option>
					</select>
				</td>
				<td></td>
			</tr>
			<tr height = '50'>
				<td height='57'><strong>End Date</strong></td>
				<td>
					<select name='eyear' id='eyear'>
					<option value="<?php echo $_REQUEST['year']; ?>" selected><?php echo $_REQUEST['year']; ?></option>
						<option>Year</option>
						<option value='2007'>2007</option>
						<option value='2008'>2008</option>
						<option value='2009'>2009</option>
						<option value='2010'>2010</option>
						<option value='2011'>2011</option>
						<option value='2012'>2012</option>
						<option value='2013'>2013</option>
						<option value='2014'>2014</option>
						<option value='2015'>2015</option>
						<option value='2016'>2016</option>
						<option value='2017'>2017</option>
						<option value='2018'>2018</option>
						<option value='2019'>2019</option>
						<option value='2020'>2020</option>
					</select>
				
				<select name='emonth' id='emonth'>
				<option value="<?php echo $_REQUEST['month']; ?>" selected><?php echo $_REQUEST['month']; ?></option>
					<option>Month</option>
					<option value='01'>Jan</option>
					<option value='02'>Feb</option>
					<option value='03'>Mar</option>
					<option value='04'>Apr</option>
					<option value='05'>May</option>
					<option value='06'>Jun</option>
					<option value='07'>Jul</option>
					<option value='08'>Aug</option>
					<option value='09'>Sep</option>
					<option value='10'>Act</option>
					<option value='11'>Nov</option>
					<option value='12'>Dec</option>
				</select>
			   
			   <select name='eday' id='eday'>
			   <option value="<?php echo $_REQUEST['day']; ?>" selected><?php echo $_REQUEST['day']; ?></option>
				<option>Day</option>
				<option value='01'>01</option>
				<option value='02'>02</option>
				<option value='03'>03</option>
				<option value='04'>04</option>
				<option value='05'>05</option>
				<option value='06'>06</option>
				<option value='07'>07</option>
				<option value='08'>08</option>
				<option value='09'>09</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				<option value='13'>13</option>
				<option value='14'>14</option>
				<option value='15'>15</option>
				<option value='16'>16</option>
				<option value='17'>17</option>
				<option value='18'>18</option>
				<option value='19'>19</option>
				<option value='20'>20</option>
				<option value='21'>21</option>
				<option value='22'>22</option>
				<option value='23'>23</option>
				<option value='24'>24</option>
				<option value='25'>25</option>
				<option value='26'>26</option>
				<option value='27'>27</option>
				<option value='28'>28</option>
				<option value='29'>29</option>
				<option value='30'>30</option>
				<option value='31'>31</option>
			</select></td>
			<td></td>
		</tr>
		 
     	<tr>
			<td><strong>Start Time</strong></td>
			<td>
			<select name='shour' id='shour'>
				<option>HH</option>
				<option value='01'>01</option>
				<option value='02'>02</option>
				<option value='03'>03</option>
				<option value='04'>04</option>
				<option value='05'>05</option>
				<option value='06'>06</option>
				<option value='07'>07</option>
				<option value='08'>08</option>
				<option value='09'>09</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				<option value='13'>13</option>
				<option value='14'>14</option>
				<option value='15'>15</option>
				<option value='16'>16</option>
				<option value='17'>17</option>
				<option value='18'>18</option>
				<option value='19'>19</option>
				<option value='20'>20</option>
				<option value='21'>21</option>
				<option value='22'>22</option>
				<option value='23'>23</option>
				<option value='24'>24</option>
			</select>
		
			<select name='sminute' id='sminute'>
				<option>MM</option>
				<option value='00'>00</option>
				<option value='01'>01</option>
				<option value='02'>02</option>
				<option value='03'>03</option>
				<option value='04'>04</option>
				<option value='05'>05</option>
				<option value='06'>06</option>
				<option value='07'>07</option>
				<option value='08'>08</option>
				<option value='09'>09</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				<option value='13'>13</option>
				<option value='14'>14</option>
				<option value='15'>15</option>
				<option value='16'>16</option>
				<option value='17'>17</option>
				<option value='18'>18</option>
				<option value='19'>19</option>
				<option value='20'>20</option>
				<option value='21'>21</option>
				<option value='22'>22</option>
				<option value='23'>23</option>
				<option value='24'>24</option>
				<option value='25'>25</option>
				<option value='26'>26</option>
				<option value='27'>27</option>
				<option value='28'>28</option>
				<option value='29'>29</option>
				<option value='30'>30</option>
				<option value='31'>31</option>
				<option value='32'>32</option>
				<option value='33'>33</option>
				<option value='34'>34</option>
				<option value='35'>35</option>
				<option value='36'>36</option>
				<option value='37'>37</option>
				<option value='38'>38</option>
				<option value='39'>39</option>
				<option value='40'>40</option>
				<option value='41'>41</option>
				<option value='42'>42</option>
				<option value='43'>43</option>
				<option value='44'>44</option>
				<option value='45'>45</option>
				<option value='46'>46</option>
				<option value='47'>47</option>
				<option value='48'>48</option>
				<option value='49'>49</option>
				<option value='50'>50</option>
				<option value='51'>51</option>
				<option value='52'>52</option>
				<option value='53'>53</option>
				<option value='54'>54</option>
				<option value='55'>55</option>
				<option value='56'>56</option>
				<option value='57'>57</option>
				<option value='58'>58</option>
				<option value='59'>59</option>
			</select>
	   
			<select name='ssecond' id='ssecond'>
				<option>SS</option>
				<option value='00'>00</option>
				<option value='01'>01</option>
				<option value='02'>02</option>
				<option value='03'>03</option>
				<option value='04'>04</option>
				<option value='05'>05</option>
				<option value='06'>06</option>
				<option value='07'>07</option>
				<option value='08'>08</option>
				<option value='09'>09</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				<option value='13'>13</option>
				<option value='14'>14</option>
				<option value='15'>15</option>
				<option value='16'>16</option>
				<option value='17'>17</option>
				<option value='18'>18</option>
				<option value='19'>19</option>
				<option value='20'>20</option>
				<option value='21'>21</option>
				<option value='22'>22</option>
				<option value='23'>23</option>
				<option value='24'>24</option>
				<option value='25'>25</option>
				<option value='26'>26</option>
				<option value='27'>27</option>
				<option value='28'>28</option>
				<option value='29'>29</option>
				<option value='30'>30</option>
				<option value='31'>31</option>
				<option value='32'>32</option>
				<option value='33'>33</option>
				<option value='34'>34</option>
				<option value='35'>35</option>
				<option value='36'>36</option>
				<option value='37'>37</option>
				<option value='38'>38</option>
				<option value='39'>39</option>
				<option value='40'>40</option>
				<option value='41'>41</option>
				<option value='42'>42</option>
				<option value='43'>43</option>
				<option value='44'>44</option>
				<option value='45'>45</option>
				<option value='46'>46</option>
				<option value='47'>47</option>
				<option value='48'>48</option>
				<option value='49'>49</option>
				<option value='50'>50</option>
				<option value='51'>51</option>
				<option value='52'>52</option>
				<option value='53'>53</option>
				<option value='54'>54</option>
				<option value='55'>55</option>
				<option value='56'>56</option>
				<option value='57'>57</option>
				<option value='58'>58</option>
				<option value='59'>59</option>
			</select>
		</td>
		<td></td>
		</tr>
		<tr height = '80'>
		   <td><strong>End Time</strong></td>
		   <td><select name='ehour' id='ehour'>
				<option>HH</option>
				<option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option></select>
			
			<select name='eminute' id='eminute'><option>MM</option><option value='00'>00</option><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option></select>
		   
		   <select name='esecond' id='esecond'><option>SS</option><option value='00'>00</option><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option></select></td>
		   <td></td></tr></tr>
		   <tr height = '50'><td><strong>Service Provider No</strong></td>
			   <td><input type='text' name='pno' size='5' value="<?php echo $_REQUEST['id'];?>" readonly /></td><td></td></tr><tr height = '50'>
			   <td><strong>Event Place</strong></td>
			   <td><input type='text' name='evtPlace' size='30' value=''/></td>
			   <td></td>
			</tr>
		  <tr height= '50'>
			<td><strong>Contact Url</strong></td>
			<td><input type='text' name='evtUrl' size='40' value=''></td>
			<td></td>
		</tr>
		<tr height='50'>
		  <td><strong>Contact Person</strong></td>
		  <td><input type='text' name='evtPerson' id='evtPerson' value=''></td>
		  <td></td>
		</tr>
		  <tr height='50'>
		  <td><strong>Contact Number</strong></td>
		  <td><input type='text' name='phone1' id='phone1' size='3' maxlength='3' value=''>-<input type='text' name='phone2' id='phone2' size='3' maxlength='3' value=''>-<input type='text' name='phone3' id='phone3' size='4' maxlength='4' value=''></td>
		  <td></td>
		</tr>
		<tr>
			<td height='191'><strong>Event Description</strong></td>
			<td><textarea name='edesc' cols='40' rows='8'></textarea></td>
			
		</tr>
		<tr height='50'>
			<td colspan = '3' align = 'center'><input type='submit' value='Register for Service'></td>
		</tr>
		<input type="hidden" name="category" value=<?php echo $_REQUEST['cat']?> />
	</table>
					
			
			</table></form>
                </div>
            </div>
            <!-- Contact Content End -->
            
            <div class="clearfix"></div>
        </section>
        
        <div class="clearfix">&nbsp;</div>
       <?php include 'footer.php'; ?>
</body>
</html>