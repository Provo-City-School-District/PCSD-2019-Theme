<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h3>
			<?php
		}	
	?>
		<ul>
			
			<li class="int"><a href="https://wasatch.provo.edu/calendar/">Wasatch Calendar</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/district-school-year-calendar/">District Events Calendar</a></li>
					
		</ul>
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h3>
			<?php
		}	
	?>
		<ul>
			<li class="ext"><a href="https://grades.provo.edu/public/">PowerSchool (Grades & Attendance)</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/faculty-staff/teachers-directory/">Classrooms</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/registration/">Registration</a></li>
		</ul>	
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Extracurricular</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Extracurricular</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/the-satch-patch/">The Satch Patch</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/student-clubs/">Student Clubs</a></li>
		</ul>
	
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Wasatch</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Wasatch</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/contact-our-school/">Contact Our School</a></li>
            <li class="int"><a href="https://wasatch.provo.edu/school-information/school-hours/">Hours of Operation &amp; Daily Schedule</a></li>
        <!--    <li class="pdf"><a href="https://wasatch.provo.edu/wp-content/uploads/2018/11/WasatchAchievemntData.pdf">Achievement Data</a></li> -->
            <li class="int"><a href="https://wasatch.provo.edu/community-council/">Community Council</a></li>
            <li class="int"><a href="https://provo.edu/transportation/find-your-bus-route/">Bus Routes</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/volunteer-opportunities/">Volunteer Opportunities</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/chinese-immersion/">Chinese Immersion</a></li>
			<li class="pdf"><a href="https://wasatch.provo.edu/wp-content/uploads/2018/11/Wasatch-Boundaries.pdf">Boundary Map</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/student-drop-off-and-pick-up-procedures/">Student Drop Off and Pick Up Procedures</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/paws/">PAWS</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/typing/">Keyboarding</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h3>
			<?php
		}	
	?>
		<ul>
			<?php
				$cnmenuhandle = curl_init();
				$cnmenuurl = "https://globalassets.provo.edu/globalpages/childNutritionMenu.php";
				// Set the url
				curl_setopt($cnmenuhandle, CURLOPT_URL, $cnmenuurl);
				// Set the result output to be a string.
				curl_setopt($cnmenuhandle, CURLOPT_RETURNTRANSFER, true);
				$cnmenuoutput = curl_exec($cnmenuhandle);
				// close the curl connection
				curl_close($cnmenuhandle); 
				echo $cnmenuoutput;
			?>
		</ul>
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Media Center</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Media Center</h3>
			<?php
		}	
	?>
		<ul>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/media-center/">Media Center</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/media-center/s-t-a-r-students-thrilled-about-reading-reading-challenge/">S.T.A.R. Reading Challenge</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/satchs-caldecott-challenge/">Satch’s Caldecott Challenge</a></li>
			<li class="int"><a href="https://wasatch.provo.edu/school-information/media-center/great-brain-projects/">Great Brain</a></li>
			<li class="ext"><a href="https://provo.follettdestiny.com">Wasatch Library Catalog</a></li>
		</ul>
</div>