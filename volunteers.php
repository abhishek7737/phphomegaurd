<?php
// Initialize the session
session_start();

?>

<!Doctype html>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Rajasthan Home Guards </title>

    <!-- Bootstrap CSS CDN -->
    <style type="text/css">
	

    </style>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
	<link rel="stylesheet" href="volunteers.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Bootstrap NavBar -->
<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-custom">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="Homeguards_img.jpeg" width="54" height="54" class="d-inline-block align-top logo" alt="">
        <span class="sm title-web"><b>RAJASTHAN HOME GUARDS TRAINING CENTER, BHILWARA</b></span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active home">
				
                <a class="nav-link" href="Dashboard.html"><i class="fa fa-home" style="font-size: 19px;" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
				
            </li>
			<li class="nav-item active home">
				<a class="nav-link" href="VolunteerRegistration.html"><i class="fa fa-user-plus" style="font-size: 19px;" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
				
			</li>	
			<li class="nav-item active home">
				<a class="nav-link" href="#top"><i class="fas fa-filter" style="font-size: 19px;" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
			</li>	
			<li class="nav-item">
				<div class="search-container">
						<form action="/action_page.php">
						  <input type="text" placeholder="Search.." name="search">
						  <button type="submit"><i class="fa fa-search"></i></button>
						</form>
			</div>
			</li>
        </ul>
    </div>
</nav><!-- NavBar END -->
    
<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-sm-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <a href="#top" data-toggle="sidebar-colapse" class="bg-custom list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed"></span>
                </div>
            </a>
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN &nbsp; MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="FinalAttendance.php" class="bg-custom list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="mr-0"></span>
                    <img src="usercheck3.png" style="width: 20px; height: 20px;">
                    <span class="menu-collapsed ml-3">Attendance Record</span>
                </div>
            </a>
            <a href="volunteers.php" class="bg-custom list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="mr-0"></span>
                    <img src="Vol_list.png" style="width: 20px; height: 20px;">
                    <span class="menu-collapsed ml-3">Volunteers List</span>
                </div>
            </a>
            <a href="CheckPointList.php" class="bg-custom list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="mr-0"></span>
                    <img src="checkpoint2.png" style="width: 20px; height: 20px;">
                    <span class="menu-collapsed ml-3">Checkpoint</span>
                </div>
            </a>
            
            <a href="#" class="bg-custom list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="mr-0"></span>
                    <img src="Trash.png" style="width: 20px; height: 20px;">
                    <span class="menu-collapsed ml-3">Trash</span>
                </div>
            </a>
            <a href="#" class="bg-custom list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="mr-0"></span>
                    <img src="Profile.png" style="width: 20px; height: 20px;">
                    <span class="menu-collapsed ml-3">My Profile</span>
                </div>
            </a>
            <a href="#" class="bg-custom list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="mr-0"></span>
                    <img src="directory.png" style="width: 20px; height: 20px;">
                    <span class="menu-collapsed ml-3">Contact Directory</span>
                </div>
            </a>
            <a href="#" class="bg-custom list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="mr-0"></span>
                    <img src="bug.png" style="width: 20px; height: 20px;">
                    <span class="menu-collapsed ml-3">Bug Report</span>
                </div>
            </a>
            <a href="logout.php" class="bg-custom list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="mr-0"></span>
                    <img src="Logout.png" style="width: 20px; height: 20px;">
                    <span class="menu-collapsed ml-3">Logout</span>
                </div>
            </a>
            
            
            
            
            
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
    
    <!-- MAIN -->
    <div class="col p-4 d-none d-sm-block">
        
        <div class="header row" style="height: 50px; background-color: #f4f2f2; margin-top: -23px;">
            <span class="col-6" style="font-size: 20px; margin: 1% 0% 1% 0%; display:flex; justify-content: flex-end;"><b>Volunteers List</b></span>
            <span  class="col-6" style="display:flex; justify-content: flex-end; margin: 1% 0% 1% 0%;">
                
            </span>
        </div>
    
            
            <div class="container edit" id="makeEditable" >
        <table class="table table-striped table-hover" style="margin-top: 5%;">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Belt_No</th>
					<th scope="col">Name_English</th>
					<th scope="col">Name_Hindi</th>
					<th scope="col">Gender</th>
					<th scope="col">DOB</th>
					<th scope="col">Permanent_Address</th>
					<th scope="col">Current_Address</th>
					<th scope="col">Sub-Center</th>
					<th scope="col">Rank</th>
					<th scope="col">Father_Name</th>
					<th scope="col">Joining_Date</th>
					<th scope="col">Retirement_Date</th>
					<th scope="col">Renewal_Date</th>
					<th scope="col">Created_At</th>
					<th scope="col">Mobile No</th>
					<th scope="col">Mail_Address</th>
					<th scope="col">Category</th>
					<th scope="col">Training-Done</th>
					
                </tr>
              </thead>
              <tbody>
			 <?php  
 
$curl_handle=curl_init();
		  curl_setopt($curl_handle,CURLOPT_URL,'http://54.255.237.71/api/v1/volunteers/volunteerlist');
		  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		  $buffer = curl_exec($curl_handle);
		  curl_close($curl_handle);
		  if (empty($buffer)){
			  print "Nothing returned from url.<p>";
		  }
		  else{
			//  echo '<pre>'; print_r(json_decode($buffer));die;
			$data =  json_decode($buffer);
			
			//echo '<pre>'; print_r($data);die;
    if (count($data)) {
        
        // Cycle through the array
        foreach ($data as $stand) {

            // Output a row
            echo "<tr>";
            echo "<td>$stand->BELT_NO</td>";
            echo "<td>$stand->NAME_ENGLISH</td>";
            echo "<td>$stand->NAME_HINDI</td>";
            echo "<td>$stand->GENDER</td>";
            echo "<td>$stand->DOB</td>";
            echo "<td>$stand->PERMANENT_ADDRESS</td>";
            echo "<td>$stand->CURRENT_ADDRESS</td>";
            echo "<td>$stand->SUBCENTER</td>";
            echo "<td>$stand->RANKS</td>";
            echo "<td>$stand->FATHER_NAME</td>";
            echo "<td>$stand->JOINING_DATE</td>";
            echo "<td>$stand->RETIREMENT_DATE</td>";
            echo "<td>$stand->RENEWAL_DATE</td>";
            echo "<td>$stand->created_at</td>";
            echo "<td>$stand->MOBILE_NO</td>";
            echo "<td>$stand->MAIL_ADDRESS</td>";
            echo "<td>$stand->CATEGORY</td>";
            echo "<td>$stand->TRAININGS</td>";
                        echo "</tr>";
        }

        // Close the table
        //echo "</table>";
   } ?>
   </tbody>
        </table>
		<?php  } ?>
			    
        </div>
    </div> 
</div><!-- body-row END -->

    <!-- jQuery CDN - Slim version (=without AJAX) -->
	<script defer="" src="volunteers.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    
    
    <script type="text/javascript">
      
    </script>
</body>
</html>