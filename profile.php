<!DOCTYPE html>
<html lang="en">
<head>
<title>CSE GHOULS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="profile.css" rel="stylesheet" type="text/css" />
</head>
<body>
<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="profile.php" >CseGhoul</a>
				</div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar">
			
					<ul class="nav navbar-nav">
						<li> <a href="#p_info">Personal Info</a></li>
						<li> <a href="#c_obj">Career Objective</a></li>
						<li> <a href="#a_qual">Academic Qualification</a></li>
						<li> <a href="#training">Training</a></li>
						<li> <a href="#c_profi">Proficiency</a></li>
						
						
						
						<li> <a href="#achievement">Achievement</a></li>
						<li> <a href="#e-activities">Extra curriculum activities</a></li>
						<li> <a href="#p_details">Personal Details</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="signup.php">
						
						
						
						<span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="#signin" data-toggle="modal" data-target="#signin">
						<span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<div class="modal" id="signin" role="dialog">
						<div class="modal-dialog">
						<!--Modal content -->
						<div class="modal-content">
							<div class="modal-header"> <h4><span class="glyphicon glyphicon-lock"></span> Login</h4></div>
							<div class="modal-body">
							<form role="form">
								<div class="form-group">
									<label for="usrname"><span class="glyphicon glyphicon-user">
									</span> Username</label>
									<input type="text" class="form-control" id="usrname" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label for="psw"><span class="glyphicon glyphicon-eye-open">
									</span> Password</label>
									<input type="text" class="form-control" id="psw" placeholder="Enter password">
								</div>
            
								<button type="submit" class="btn btn-success btn-block">
								<span class="glyphicon glyphicon-off"></span> Login</button>
							</form>
							
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
							<span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<p>Not a member? <a href="signup.php">Sign Up</a></p>
							<p>Forgot <a href="#">Password?</a></p>
						</div>
					</div>
				</div>
						
					</ul>
					 	
				</div>
			</div>
		</div>
		</nav>



<!-- Main Div -->

<div>

	<!-- Jumbotron For The Header -->

		
		
		
			<div class="dp"><img src="dpstudio.jpg" style="height:200px; width:150px;"></div>
		
			
	
	<!-- Content Part -->
	
<div class="content">
										<!-- Providing Personal Info-->
			<div id="p_info" style="text-align:center;" class="container-fluid">
			.
			<div class="row" >
					<div class="col-sm-12"><label><u>Personal Info</u></label></div>						
			</div>
			<div class="personal-info" >
			<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-3">Name:</div>
					<div class="col-sm-3">Abhishek Kumar</div>
					<div class="col-sm-3"></div>				
			</div>
			<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-3">Address:</div>
					<div class="col-sm-3">Daltonganj (Jharkhand)</div>
					<div class="col-sm-3"></div>				
			</div>
			<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-3">Contact Number:</div>
					<div class="col-sm-3">+(91)7250786565</div>
					<div class="col-sm-3"></div>				
			</div>
			<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-3">E-Mail ID:</div>
					<div class="col-sm-3">iabhi_chaurasia@ymail.com</div>
					<div class="col-sm-3"></div>				
			</div>
			
			</div>
			</div>
			
										<!-- Carrer Objective -->
			<div id="c_obj" style="text-align:center;" class="container-fluid" >
			.
			<div class="row">
					<div class="col-sm-12"><label><u>Career Objective</u></label></div>
									
			</div>
			<div class="personal-info" >
			<div class="row">
			
					<div class="col-sm-2"></div>	
					<div class="col-sm-8">
						
						<h5><i>"I persue to work in learning and challenging the environment, utilizing my skills and knowledge to be
						the best of my abilities and contribute positively to my personal growth as well as growth
						of the organization."</i></h5>
						
					</div>
					<div class="col-sm-2"></div>
									
			</div>
			</div>
			</div>
			
												<!-- Academic Qualification -->
			<div id="a_qual" style="text-align:center;" class="container-fluid">
			.
			<div class="row">
					<div class="col-sm-12"><label><u>Academic Qualification</u></label></div>
									
			</div>
			
	<div class="container" >
		<table class="table">
			<thead>
				<tr>
						<th>Degree/Certificate</th>
						<th>Qualification</th>
						<th>Board/University</th>
						<th>Institute</th>
						<th>Year</th>
						<th>%/CGPA</th>
				</tr>
			</thead>
			<tbody>
				<tr>
						<td>Graduation</td>
						<td>Bachelor Of Technology</td>
						<td>MAKAUT(Formerly known as WBUT)</td>
						<td>Neotia Institute Of Technology, Management & Science</td>
						<td>(2013-17)</td>
						<td>6.75</td>
        
				</tr>
				<tr>
						<td>XII</td>
						<td>AISSCE</td>
						<td>CBSE</td>
						<td>Central Academy, Ranchi</td>
						<td>2012</td>
						<td>58%</td>
				</tr>
				<tr>
						<td>X</td>
						<td>AISCE</td>
						<td>CBSE</td>
						<td>Heritage International school, Daltonganj</td>
						<td>2010</td>
						<td>60.8%</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
											<!-- Training And Projects -->
		<div id="training" style="text-align:center;" class="container-fluid">
			.
		<div class="row">
					<div class="col-sm-12"><label><u>Training/Projects Undertaken</u></label></div>
									
			</div>
			
	<div class="container" >
		<table class="table">
			<thead>
				<tr>
						<th>Name Of Institute/Organization</th>
						<th>Project Title</th>
						<th>Duration</th>
						<th>Certificate</th>
						<th>Link</th>
				</tr>
			</thead>
			<tbody>
				<tr>
						<td>Ardent Computech PVT. LTD.</td>
						<td>Android Quiz/Test Application</td>
						<td>04 july 2016 - 06 August 2016</td>
						<td>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal"
						data-target="#myModal">Certificate</button>
						<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
						<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Ardent Computech Private Limited</h4>
								  </div>
								  <div class="modal-body">
									<img class="img-responsive"src="cerficate1.jpg">
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  </div>
								</div>

							  </div>
							</div>
						</td>
						<td>
							
									<a href="https://drive.google.com/open?id=1dNzK1CzmLbkkww_4v-qoUBv8FGa47kDm" 
									class="btn btn-info" role="button" target="_blank">Project</a>
								  					
						</td>
        
				</tr>
				<tr>
						<td>Excel Data Services</td>
						<td>Certificate In PHP</td>
						<td>December 2015 - January 2016</td>
						<td></td>
						<td></td>
				</tr>
				<tr>
						<td>Fourth Year Project</td>
						<td>Live Cricket Scoreboard</td>
						<td>2016-2017</td>
						<td>----</td>
						<td></td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
								<!-- Computer proficiecy -->
			<div id="c_profi" style="text-align:center;" class="container-fluid">
			.
			<div class="row">
					<div class="col-sm-12"><label><u>Computer Proficiency</u></label></div>					
			</div>
			<div class="container" >
			<table class="table">
			<tr><td>PHP</td>
			<td>HTML</td>
			<td>CSS</td>
			<td>JAVASCRIPT</td>
			<td>JQUERY</td>
			<td>BOOTSTRAP</td>
			<td>WORDPRESS</td>
			<td>DBMS/SQL/MYSQLI/SQLITE</td>
			<td>Android</td>
			<td>Ajax</td></tr>
			</table>
			</div>
			</div>
			
									<!-- Additional  Qualification/ Achievement /Certificate -->
			<div id="achievement" style="text-align:center;" class="container-fluid">
			.
			<div class="row">
					<div class="col-sm-12"><label><u>Additional Qualification / Achievement / Certificate
					</u></label></div>					
			</div>
			<div class="container" >
			<table class="table">
			<tr><td>Qualified for finals of canyon Rush Event During Robotics In Kshitiz 2014</td></tr>
			<tr><td>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal"
						data-target="#myModal1">Certificate</button>
						<div class="modal fade" id="myModal1" role="dialog">
						<div class="modal-dialog">
						<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">IIT Kharagpur</h4>
								  </div>
								  <div class="modal-body">
									<img class="img-responsive"src="robotics.jpg">
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  </div>
								</div>

							  </div>
							</div>
			
			</td></tr>
			</table>
			</div>
			</div>
			
									<!-- Extra Curriculum Activities -->
			<div id="e-activities" style="text-align:center;" class="container-fluid">
			.					
			<div class="row">
					<div class="col-sm-12"><label><u>Extra Curriculum Activities
					</u></label></div>					
			</div>
			
			<div class="container" >
					<table class="table">
						<tr>
							<td>Table Tennis</td>
							<td>----</td>
						</tr>
						<tr>
							<td>Cricket</td>
							<td>----</td>
						</tr>
						<tr>
							<td>Photography/Photoshop</td>
							<td>----</td>
						</tr>
						<tr>
							<td>Videography/Video Editing</td>
							<td><a href="https://www.youtube.com/abhishekkumar0095" 
									class="btn btn-info" role="button" target="_blank">View Work</a></td>
						</tr>
						<tr>
							<td>Blogging</td>
							<td><a href="http://panipurii.blogspot.in/" 
									class="btn btn-info" role="button" target="_blank">View Work</a></td>
						</tr>
					</table>
			</div>
			</div>
			
									<!-- Personal Details -->
			<div id="p_details" style="text-align:center;" class="container-fluid">
			.
			<div class="row">
					<div class="col-sm-12"><label><u>Personal Details
					</u></label></div>					
			</div>	
			
			<div class="container" >
					<table class="table">
						<tr>
							<td><b>Date Of Birth<b></td>
							<td>14th june, 1995</td>
						</tr>
						<tr>
							<td><b>Gender<b></td>
							<td>Male</td>
						</tr>
						<tr>
							<td><b>Hobies<b></td>
							
								<td>
								Amateur Astronomy
								</td>
								<td>
								Playing Table Tennis
								</td>
								<td>
								Listening Music
								</td>
							
						</tr>
						<tr>
							<td><b>Languages Known<b></td>
							<td>Hindi</td>
							<td>English</td>
						</tr>
						
					</table>
			</div>
			</div>
									<!--Additional Space -->
			
			<div class="space">
			<h3>___</h3>
			</div>
			
									<!-- Content div closed -->
</div>
	
												<!-- footer -->
	
	<div class="footer">
	<div class="Container">
	<h3>Contact</h3></br>
	<h4>E-mail:</h4><h5><span class="glyphicon glyphicon-inbox">
	abchaurasia.nfs@gmail.com, abhi_chaurasia@live.com, iabhi_chaurasia@ymail.com </span></h5></br>
	<h4>Phone Number:</h4><h5><span class="glyphicon glyphicon-phone-alt"> 9538411734, 7250786565</span></h5></br>
	<h4>Blog:</h4><h5><span class="glyphicon glyphicon-globe"> www.panipurii.blogspot.com</span></h5></br>
	<h4>Website:</h4><h5><span class="glyphicon glyphicon-link">
	 cseghouls.ml/cseghouls , cseghoul.tk/portfolio/profile.php</span></h5></br>
	 
	</div>
					
	</div>
</div>	
</body>
</html>
