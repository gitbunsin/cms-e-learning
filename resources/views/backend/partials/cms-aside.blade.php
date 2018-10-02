<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="img/avatars/sunny.png" alt="me" class="online" />
							 @if( auth()->check() )
								 <span>
									 {{ auth()->user()->name }}
								 </span>
							@endif
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive-->
			<nav>
				<ul>
					<li class="active">
						<a href="index.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
					</li>
					<li>
						<a href="http://localhost:8000/home"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Articles1</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Admin</span></a>
						<ul>
							<li>
								<a href="#">User management</a>
								<ul>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Users</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Job</a>
								<ul>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Job Title</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Pay Grades</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Employee Status</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Job Categories</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Work Shifts</a>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Organization</a>
								<ul>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>General Information</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Locations</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Strature</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Qualifications </a>
								<ul>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Skills</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Education</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Licenses</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Language</a>
									</li>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Memberships</a>
									</li>
								</ul>

							</li>
							<li>
								<a href="#">Nationalities<span class="badge pull-right inbox-badge bg-color-yellow"></span></a>
							</li>
							<li>
								<a href="#">Configuration<span class="badge pull-right inbox-badge bg-color-yellow"></span></a>
								<ul>
									<li>
										<a href="fa.html"><i class=""></i>Email Configuration</a>
									</li>
									<li>
										<a href="fa.html"><i class=""></i>Email Subscription</a>
									</li>
									<li>
										<a href="fa.html"><i class=""></i>Localization </a>
									</li>
									<li>
										<a href="fa.html"><i class=""></i>Modules</a>
									</li>
									<li>
										<a href="fa.html"><i class=""></i>Socia Media Authentication</a>
									</li>
									<li>
										<a href="fa.html"><i class=""></i>Register OAuth Client</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">PIM</span></a>
						<ul>
							<li>
								<a href="table.html">Configuration</a>
							</li>
							<li>
								<a href="datatables.html">Employee List<span class="badge inbox-badge bg-color-greenLight"></span></a>
							</li>
							<li>
								<a href="jqgrid.html">Add Employee</a>
							</li>
							<li>
								<a href="jqgrid.html">Reports</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-comment-o"></i> <span class="menu-item-parent">Leave</span></a>
						<ul>
							<li>
								<a href="form-elements.html">Leave requests</a>
							</li>
							<li>
								<a href="form-templates.html">Leave balance</a>
							</li>
							<li>
								<a href="validation.html">Reports</a>
							</li>
							<li>
								<a href="bootstrap-forms.html">List of types</a>
							</li>
							<li>
								<a href="bootstrap-validator.html">Organaztion</a>
							</li>
							<li>
								<a href="plugins.html">List of employees</a>
							</li>
							<li>
								<a href="wizard.html">Calendars</a>
							</li>
							<li>
								<a href="other-editors.html">Approval</a>
							</li>
							<li>
								<a href="dropzone.html">List of postions </a>
							</li>
							<li>
								<a href="image-editor.html">List of contracts <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Time</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Recruitment</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">My Info</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Performance</span></a>
						<ul>
							<li>
								<a href="#">Configure</a>
								<ul>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>KPIs</a>
									</li>
									<li>
										<a href="glyph.html"><i class="glyphicon glyphicon-plane"></i>Trackers</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Manage Reviews</a>
								<ul>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i>Manage Review</a>
									</li>	
									<li>
										<a href="glyph.html"><i class="glyphicon glyphicon-plane"></i>My Reviews</a>
									</li>	
									<li>
										<a href="flags.html"><i class="fa fa-flag"></i>Review List</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="grid.html">My Trackers</a>
							</li>
							<li>
								<a href="treeview.html">Employee Trackers</a>
							</li>
						</ul>
					</li>
				
					<li>
						<a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i> <span class="menu-item-parent">Directory</span></a>
					</li>
					<li>
						<a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span></a>
						<ul>
							<li>
								<a href="projects.html"><i class="fa fa-file-text-o"></i> Projects</a>
							</li>
							<li>
								<a href="blog.html"><i class="fa fa-paragraph"></i> Blog</a>
							</li>
							<li>
								<a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery</a>
							</li>

							<li>
								<a href="#"><i class="fa fa-comments"></i> Forum Layout</a>
								<ul>
									<li><a href="forum.html">General View</a></li>
									<li><a href="forum-topic.html">Topic View</a></li>
									<li><a href="forum-post.html">Post View</a></li>
								</ul>
							</li>
							<li>
								<a href="profile.html"><i class="fa fa-group"></i> Profile</a>
							</li>
							<li>
								<a href="timeline.html"><i class="fa fa-clock-o"></i> Timeline</a>
							</li>
						</ul>		
					</li>
					<li>
						<a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">GMap Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span></a>
						<ul>
							<li>
								<a href="http://bootstraphunter.com/smartadmin-landing/" target="_blank">Landing Page <i class="fa fa-external-link"></i></a>
							</li>
							<li>
								<a href="pricing-table.html">Pricing Tables</a>
							</li>
							<li>
								<a href="invoice.html">Invoice</a>
							</li>
							<li>
								<a href="login.html" target="_top">Login</a>
							</li>
							<li>
								<a href="register.html" target="_top">Register</a>
							</li>
							<li>
								<a href="lock.html" target="_top">Locked Screen</a>
							</li>
							<li>
								<a href="error404.html">Error 404</a>
							</li>
							<li>
								<a href="error500.html">Error 500</a>
							</li>
							<li>
								<a href="blank_.html">Blank Page</a>
							</li>
							<li>
								<a href="email-template.html">Email Template</a>
							</li>
							<li>
								<a href="search.html">Search Page</a>
							</li>
							<li>
								<a href="ckeditor.html">CK Editor</a>
							</li>
						</ul>
					</li>
					<li class="chat-users top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span></a>
						<ul>
							<li>
								<!-- DISPLAY USERS -->
								<div class="display-users">

									<input class="form-control chat-user-filter" placeholder="Filter" type="text">
									
								  	<a href="#" class="usr" 
									  	data-chat-id="cha1" 
									  	data-chat-fname="Sadi" 
									  	data-chat-lname="Orlaf" 
									  	data-chat-status="busy" 
									  	data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" 
									  	data-chat-alertshow="true" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/5.png' alt='Sadi Orlaf'>
												<div class='usr-card-content'>
													<h3>Sadi Orlaf</h3>
													<p>Marketing Executive</p>
												</div>
											</div>
										"> 
									  	<i></i>Sadi Orlaf
								  	</a>
								  
									<a href="#" class="usr" 
										data-chat-id="cha2" 
									  	data-chat-fname="Jessica" 
									  	data-chat-lname="Dolof" 
									  	data-chat-status="online" 
									  	data-chat-alertmsg="" 
									  	data-chat-alertshow="false" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/1.png' alt='Jessica Dolof'>
												<div class='usr-card-content'>
													<h3>Jessica Dolof</h3>
													<p>Sales Administrator</p>
												</div>
											</div>
										"> 
									  	<i></i>Jessica Dolof
									</a>
								  
									<a href="#" class="usr" 
									  	data-chat-id="cha3" 
									  	data-chat-fname="Zekarburg" 
									  	data-chat-lname="Almandalie" 
									  	data-chat-status="online" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/3.png' alt='Zekarburg Almandalie'>
												<div class='usr-card-content'>
													<h3>Zekarburg Almandalie</h3>
													<p>Sales Admin</p>
												</div>
											</div>
										"> 
									  	<i></i>Zekarburg Almandalie
									</a>
								 
									<a href="#" class="usr" 
									  	data-chat-id="cha4" 
									  	data-chat-fname="Barley" 
									  	data-chat-lname="Krazurkth" 
									  	data-chat-status="away" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/4.png' alt='Barley Krazurkth'>
												<div class='usr-card-content'>
													<h3>Barley Krazurkth</h3>
													<p>Sales Director</p>
												</div>
											</div>
										"> 
									  	<i></i>Barley Krazurkth
									</a>
								  
									<a href="#" class="usr offline" 
									  	data-chat-id="cha5" 
									  	data-chat-fname="Farhana" 
									  	data-chat-lname="Amrin" 
									  	data-chat-status="incognito" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/female.png' alt='Farhana Amrin'>
												<div class='usr-card-content'>
													<h3>Farhana Amrin</h3>
													<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
												</div>
											</div>
										"> 
									  	<i></i>Farhana Amrin (offline)
									</a>
								  
									<a href="#" class="usr offline" 
										data-chat-id="cha6" 
									  	data-chat-fname="Lezley" 
									  	data-chat-lname="Jacob" 
									  	data-chat-status="incognito" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/male.png' alt='Lezley Jacob'>
												<div class='usr-card-content'>
													<h3>Lezley Jacob</h3>
													<p>Sales Director</p>
												</div>
											</div>
										"> 
									  	<i></i>Lezley Jacob (offline)
									</a>
									
									<a href="ajax/chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

								</div>
								<!-- END DISPLAY USERS -->
							</li>
						</ul>	
					</li>
					
				</ul>
			</nav>
		</aside>