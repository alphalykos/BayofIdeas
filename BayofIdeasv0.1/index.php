<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://leonix.in/favicon.ico">

    <title>Bay of Ideas</title>
	<!-- Bay's CSS -->
    <link href="./css/style.css" rel="stylesheet">
	
    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

   <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Validation JS for bootstrap form -->
    <script src="email/validation.js" type="text/javascript"></script>
	</head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" id="navibar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./#">Bay of Ideas</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./#">Home</a></li>
            <li><a href="./#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="starter-template">

			<div class= "headings">
				<h1 id="heading1">Bay of Ideas</h1>
				<h2 id="heading2">Outsource Innovation...<h2>
			</div>

			<div id="texts">
				<p class = "textc" id = "text1">Admit it.</p>
				<p class = "textc" id = "text2">You may find difficulty in getting new innovations within your company.</p>
				<p class = "textc" id = "text3"> And you may be shipping some lame-ass products that nobody wants.</p>
				<p class = "textc" id = "text4">Here is the thing. </p> 
				<p class = "textc" id = "text5">You want ideas.</p>
				<p class = "textc" id = "text6">And</p>
				<p class = "textc" id = "text7">We can sell you ideas...</p>
				<br>
				<div id="ContactButton">
					<a href="#contact" class="btn btn-info" role="button">Contact Us</a>
				</div>
			</div>
					
		</div>
    </div><!-- /.container -->
<!-- PHP code for sending contact details -->
<?php
	
	$result=NULL;
	$errName=NULL;
	$errMessage=NULL;
	$errEmail=NULL;
	$errHuman=NULL;
	
    if ((isset($_POST["submit"]) && !empty($_POST["submit"]))) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['msgs'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'alan.idea@gmail.com'; 
        $subject = 'Message from Bay of Ideas';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['msgs']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 1) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>	
<div class="container">
  <div id="contact">  
  <h2 class = "text-center">Contact Us</h2>
  
  <form role="form" method="post" action="index.php#contact" >
    <div class="form-group">
      <label for="name">Name :</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
    </div>

  
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>

	<div class="form-group">
		<label for="msgs">Message :</label>
		<textarea class="form-control" name="msgs" rows="10" id="msgs" placeholder="Message"></textarea>
	</div>
	
	<div class="form-group">
		<label for="human">5 - 4 = ?</label>
		<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
    </div>
    
	<div class="form-group">
		<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
	</div>	
	
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>	
	</div>
	</div>
  </form>
  </div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>