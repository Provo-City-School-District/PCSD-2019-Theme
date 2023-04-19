<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h3>
			<?php
		}	
	?>
		<ul>
			
			<li class="int"><a href="https://sunrise.provo.edu/school-information/calendar/">Sunrise Preschool Calendar</a></li>
			<li class="int"><a href="https://sunrise.provo.edu/school-information/district-school-year-calendar/">District Events Calendar</a></li>
					
		</ul>
		
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://sunrise.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Sunrise Preschool</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://sunrise.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Sunrise Preschool</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://sunrise.provo.edu/school-information/contact-our-school/">Contact Our School</a></li>
			<li class="int"><a href="https://sunrise.provo.edu/school-information/school-profile/">School Profile</a></li>
            <li class="int"><a href="https://sunrise.provo.edu/school-information/school-hours/">Hours of Operation</a></li>
            <li class="int"><a href="https://sunrise.provo.edu/school-information/registration/">Tuition Registration</a></li>
			<li class="int"><a href="https://sunrise.provo.edu/school-information/special-education-registration/">Special Education Registration</a></li>
            <li class="int"><a href="https://sunrise.provo.edu/school-information/special-education-services-referral-information/">Special Education Services Referral Information</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://sunrise.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://sunrise.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="ext"><a href="https://grades.provo.edu/public/">PowerSchool (Grades & Attendance)</a></li>
			<li class="int"><a href="https://sunrise.provo.edu/faculty-staff/teachers-directory/">Classrooms</a></li>
		</ul>
</div>
