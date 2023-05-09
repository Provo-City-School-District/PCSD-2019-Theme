<aside id="mainSidebar">
				
			<section class="calendar-agenda">
				<h1>Today’s Events</h1>				
				<?php echo do_shortcode('[calendar id="172"]'); ?>
				<a href="<?php echo get_home_url(); ?>/calendar/">View All School Events Calendar</a>
			</section>
			<section>
				<h1>Parent Resources</h1>
				<ul class="imagelist">
					<li>
						<a href="https://grades.provo.edu/public/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/power-school.png" alt="" />
							<span>PowerSchool (Grades & Attendance)</span>
						</a>
					</li>
					<li>
						<a href="https://canvas.provo.edu">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pcsd-canvas-logo-white.png" alt="" />
							<span>Canvas Login</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-your-teacher.svg" alt="" />
							<span>Classrooms</span>
						</a>
					</li>
					<li>
						<a href="https://search.follettsoftware.com/metasearch/ui/67389">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/school-info-lt.svg" alt="" />
							<span>Wasatch Library Catalog</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/all-events-calendar/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/all-events-calendar.svg" alt="" />
							<span>All Events Calendar</span>
						</a>
					</li>
					
					<?php 
					//call in Child Nutrition items
					echo do_shortcode( '[cn-sidebar]' ); 
					?>
					
					<li>
						<a href="<?php echo get_home_url(); ?>/school-information/volunteer-opportunities/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/apply-for-free-meals.svg" alt="" />
							<span>Volunteer Opportunities</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/school-information/registration/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/apply-for-free-meals.svg" alt="" />
							<span>Registration</span>
						</a>
					</li>
				</ul>
				<a href="https://www.peachjar.com/index.php?region=33082&a=28&b=138"><img src="https://wasatch.provo.edu/wp-content/uploads/2019/05/button-orange-eflyers_202x46.png" alt="Link to PeachJar Fliers"></a>
				<a href="https://safeut.med.utah.edu/"><img src="https://wasatch.provo.edu/wp-content/uploads/2019/02/safeUTcrisisline.jpg" alt="Link to SafeUT information"></a>
				<a href="https://www.saferoutesutahmap.com/organization/schools/map"><img src="https://provo.edu/wp-content/uploads/2020/03/saferoutesutah.jpg" alt="Link to Safe Routes UT information"></a>
			</section>
		</aside>