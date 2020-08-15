
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="macss/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

 <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
  <footer class="container-fluid text-center">
    <h3><p class="text-center">YOUTH GROUP REGISTRATION SYSTEM</p></h3>
    <h1><p class="text-center">Changamoto zitupelekee kupata fursa</p></h1>
</footer>
 <nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   
    <h3>WELCOME MR ADMIN</h3>   
   
  </div>
  <ul class="navbar-nav" style="float: right;">
      <li class="nav-item">
        <a class="nav-link" href="logoutHandler.php">SIGHN OUT</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">LOG IN</a>
      </li>-->
    </ul>
</nav> 
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">View Members </a></p>
  <!--   <p><a href="groupRegistration.php">Group Registration</a></p> -->
      <p><a href="viewGroups.php">View Groups</a></p>
    <!--   <p><a href="editFormGroups.php">Edit Groups</a></p> -->
    <!--   <p><a href="membersReg.php">Register Members </a></p> -->
      <p><a href="ViewMembers.php">View Members </a></p>
     <!--  <p><a href="editFormGroups.php">Edit Members</a></p> -->
     <!--  <p><a href="#">Contact us</a></p -->
       <p><a href="viewProjects.php">View Projects </a></p>
    </div>
    
    </div>

     
    
 

<footer class="container-fluid text-center" style="position: fixed;bottom: 0px;">
  <p>Copy Right By Abdul Mussa</p>
</footer>

</body>
</html>

