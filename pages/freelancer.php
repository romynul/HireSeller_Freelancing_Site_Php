
<?php 

$a='pac';
if (isset($_SESSION['loggedUser'])) {
	

    if ($_SESSION['loggedUserType'] =='client') {
      echo "<nav class='navbar navbar-expand-lg navbar-dark bg-white '>
      <div class='container'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav ml-auto'>
            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='postjob.php'>Post Job</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showcjob(1)'>Bidded Job</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showcjob(2)'>Active Jobs</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showcjob(3)'>Delivered</a>
            </li>

            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showcjob(4)'>Completed Jobs</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>";
    }

    elseif ($_SESSION['loggedUserType'] =='freelancer') {
      echo "<nav class='navbar navbar-expand-lg navbar-dark bg-white '>
      <div class='container'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav ml-auto'>

           <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showpjob(1)'>Bidded Job</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showpjob(2)'>Active Jobs</a>
            </li>

            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showpjob(3)'>Delivered</a>
            </li>

            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showpjob(4)'>Job Done</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>";
    }

    elseif ($_SESSION['loggedUserType']=='admin') {
      echo "<nav class='navbar navbar-expand-lg navbar-dark bg-white '>
      <div class='container'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav ml-auto'>
            
            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showemp(4)'>Dispute</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showemp(1)'>Freelancer</a>
            </li>

            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showemp(2)'>Client</a>
            </li>

            <li class='nav-item'>
              <a class='nav-link rs_menu text-success' href='#' onclick='showemp(3)'>All Jobs</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>";
    }


  }
 ?>