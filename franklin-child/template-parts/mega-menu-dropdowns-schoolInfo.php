<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h3>
			<?php
		}	
	?>
		<ul>
			
			<li class="int"><a href="https://franklin.provo.edu/calendar/">Franklin Calendar</a></li>
			<li class="int"><a href="https://franklin.provo.edu/district-school-year-calendar/">District Events Calendar</a></li>
						
		</ul>
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h3>
			<?php
		}	
	?>	
		<ul>
			<li class="ext"><a href="https://grades.provo.edu/public/">PowerSchool (Grades & Attendance)</a></li>
			
			<li class="int"><a href="https://franklin.provo.edu/faculty-staff/teachers-directory/">Classrooms</a></li>
			<li class="int"><a href="https://franklin.provo.edu/school-information/parent-teacher-association/">PTA</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Franklin</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Franklin</h3>
			<?php
		}	
	?>
		<ul>
			<li class="int"><a href="https://franklin.provo.edu/school-information/contact-our-school/">Contact Our School</a></li>
            <li class="int"><a href="https://franklin.provo.edu/school-information/school-hours/">Hours of Operation</a></li>
            <li class="int"><a href="https://franklin.provo.edu/school-information/school-profile/">School Profile</a></li>
         <!--   <li class="pdf"><a href="https://franklin.provo.edu/wp-content/uploads/2018/11/Franklin.pdf">Achievement Data</a></li> -->
			
            <li class="int"><a href="https://franklin.provo.edu/community-council/">Community Council</a></li>
            <li class="int"><a href="https://provo.edu/transportation/find-your-bus-route/">Bus Routes</a></li>
			<li class="int"><a href="https://franklin.provo.edu/school-information/volunteer-opportunities/">Volunteer Opportunities</a></li>
			<li class="int"><a href="https://franklin.provo.edu/school-information/get-to-school-safe/">Get To School Safe</a></li>
			<li class="int"><a href="https://franklin.provo.edu/school-information/after-school-program/">After School Program</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h3>
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
			<h2><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Media Center</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://franklin.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Media Center</h3>
			<?php
		}	
	?>
		<ul>
			<li class="int"><a href="https://franklin.provo.edu/school-information/media-center/">Media Center</a></li>
		</ul>
</div>