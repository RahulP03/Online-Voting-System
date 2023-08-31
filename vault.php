<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Voting Panel</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a href="index.php" class="navbar-brand headerFont text-lg"><--Go Back</a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--
             <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li> 
          -->
          </ul>
          

        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Choose Your Candidate.</h2>
            <p class="normalFont">Prove Your Authencity of being correct voter.</p>
          </div>
          
          <form action="saveVote.php" method="POST">
          <div class="form-group">
            <label>Voter's Name :</label><br>
            
            <input type="text" name="voterName"  title="Enter Your Full Name" placeholder="Enter Your Full Name" class="form-control" required/><br>

            <label>Voter's Registered Email ID :</label><br>
            <input type="email" name="voterEmail" placeholder="Enter Your Email ID" class="form-control" pattern=".+@gmail.com" required/><br>

            <label>Voter's Card No. :</label><br>
            <input id="phone" type="tel" name="voterID" placeholder="Enter Your Voter Uniquie ID" class="form-control" pattern="[A-Z][A-Z][A-Z][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required/><br>
            
            <h3 class="normalFont">Selet Any One of Them,</h3>
            <div class="radio">
              <label for="">
                <input type="radio" name="selectedCandidate" value="BJP"> <strong>Bhartiya Janta Party (BJP)</strong>
              </label><br>

              <label for="">
                <input type="radio" name="selectedCandidate" value="INC"> <strong>Congress (INC)</strong> 
              </label><br>
              
              <label for="">
                <input type="radio" name="selectedCandidate" value="AAP"> <strong>Aam Admi Party (AAP)</strong>
              </label><br>

              <label for="">
                <input type="radio" name="selectedCandidate" value="TMC"> <strong>JanaSena (JNS)</strong>
              </label><br>
              <br>
              <hr>
              <button type="submit" name="submit" class="btn btn-primary" ><strong>Submit</strong></button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
