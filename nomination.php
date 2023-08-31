<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Candidates</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>
  </head>
  <body>
	
	<div class="container">
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand headerFont text-lg"><strong>Online Voting System</strong></a>
        </div>
        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
             <li><a href="nomination.php"><span class="subFont"><strong>Candidates</strong></span></a></li>
            <li><a href="changePassword.php"><span class="subFont"><strong>Change Password</strong></span></a></li>
            <li><a href="users.php"><span class=""><strong>Voters</strong></span></a></li> 
          </ul>
          <span class="normalFont"><a href="index.php" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-3">
          <img src="images/modi.jpeg" class="img img-thumbnail" style="width:200px;height:200px;" alt="">
          <h4 class="normalFont text-center">Narendra Modi</h4>
          <h5 class="normalFont text-center">Modi, a leader of the Bharatiya Janata Party, was the Chief Minister of Gujarat from 2001 to 2014 and is the Member of Parliament from Varanasi.</h5>
          <hr>
          <ul class="normalFont text-left">
            <li>Born: September 17, 1950 (age 64), Vadnagar</li>
            <li>Spouse: Jashodaben Modi</li>
            <li>Education: Gujarat University (1983), University of Delhi (1978)</li>
            <li>Parents: Heeraben Modi, Damodardas Mulchand Modi</li>
            <li>Awards: CNN-IBN Indian of the Year</li>
          </ul>
        </div>
        <div class="col-sm-3">
          <img src="images/rahul.jpeg" class="img img-thumbnail" style="width:200px;height:200px;" alt="">
          <h4 class="normalFont text-center">Rahul Gandhi</h4>
          <h5 class="normalFont text-center">Rahul Gandhi; is the Vice-President of the Indian National Congress party and the Chairperson of the Indian Youth Congress and the National Students Union of India.
            <hr>
            <ul class="text-left">
              <li>Born: June 19, 1970 (age 44), New Delhi</li>
              <li>Full name: Rahul Gandhi</li>
              <li>Parents: Sonia Gandhi, Rajiv Gandhi</li>
              <li>Siblings: Priyanka Gandhi</li>
              <li>Education: Trinity College, Cambridge (1994–1995)</li>
              <li>Awards: CNN-IBN Indian of the Year in Politics</li>
            </ul>
            
          </h5>
        </div>
        <div class="col-sm-3">
          <img src="images/kejriwal.jpg" class="img img-thumbnail" style="width:200px;height:200px;" alt="">
          <h4 class="normalFont text-center">Arvind kejriwal</h4>
          <h5 class="text-center normalFont">Arvind kejriwal is an Indian politician, who is the current CM of Dehli Since 2015.</h5>
          <hr>
          <ul class="text-left">
            <li>Born: August 16, 1968 (age 54), Siwani</li>
            <li>Awards: Ramon Magsaysay Award for Emergent Leadership</li>
           
          </ul>
        </div>
        <div class="col-sm-3">
          <img src="images/mamta.jpg" class="img img-thumbnail" style="width:200px;height:200px;" alt="">
          <h4 class="normalFont text-center">Mamata Banerjee</h4>
          <h5 class="normalFont text-center">Mamata Banerjee is an Indian politician, who serving as the eighth current CM of the Indian state of West Bengal since 2011</h5>
          <hr>
          <ul class="text-left normalFont">
            <li>Born: january 05, 1965 (age 67),</li>
            <li>Nick name: Didi </li>
            <li>height: 1.63m</li>
          </ul>
        </div>
      </div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>