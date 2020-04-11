<?php

if ($_POST['submit']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email ";
	}
	
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are not a robot";
	}
	
	if ($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error.</strong> Please correct the following: '.$error.'</div>';
	} else {
		mail("barklaya@email.cz", "Contact message", "Name: ".$_POST['name']."
		Email: ".$_POST['email']."
		Message: ".$_POST['message']); 
		
		{
		$result='<div class="alert alert-success" role="alert">Thank you, I\'ll be in touch shortly</div>'; 
		}
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Georgy Barklaya | Gallery</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="main.css" rel="stylesheet" type="text/css">
	<link href="css/lightbox.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<meta name="description" content="My name is Georgy Barklaya. I’m a portrait photographer, cinematographer and film editor based in Prague. If you’re interested in my work I’d love to hear from you. Just leave me a message.">
  </head>
  <body class="body">

  

<!-- NAVBAR--> 
<nav class="navbar-right navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       	<a class="navbar-brand" href="index.html"><img src="images/barklaya-logo-2.png" alt="Barklaya" width="40" height="40" class="barklayalogo-2"/></a></div> 
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
      
       <ul class="nav navbar-nav pull-right navbar-right buttons">
        <li><a href="index.html">ABOUT</a></li>
        <li><a href="gallery-contact.php">GALLERY</a></li>
        <li><a href="#contact">CONTACT</a></li>
          <li class="dropdown center"></li>
       </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>



<!--RESPONSIVE GALLERY -->
	  
<header class="container bodygallery">

	<div><a href="images/picture-0001-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0001-sm.jpg"></a></div>
	<div><a href="images/picture-0002-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0002-sm.jpg"></a></div>
	<div><a href="images/picture-0003-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0003-sm.jpg"></a></div>
	<div><a href="images/picture-0004-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0004-sm.jpg"></a></div>
   	<div><a href="images/picture-0006-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0006-sm.jpg"></a></div>
   	<div><a href="images/picture-0014-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0014-sm.jpg"></a></div>
   	<div><a href="images/picture-0008-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0008-sm.jpg"></a></div>
   	<div><a href="images/picture-0009-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0009-sm.jpg"></a></div>
   	<div><a href="images/picture-0007-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0007-sm.jpg"></a></div>
   	<div><a href="images/picture-0005-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0005-sm.jpg"></a></div>
   	<div><a href="images/picture-0010-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0010-sm.jpg"></a></div>
   	<div><a href="images/picture-0013-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0013-sm.jpg"></a></div>
   	<div><a href="images/picture-0018-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0018-sm.jpg"></a></div>
   	<div><a href="images/picture-0012-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0012-sm.jpg"></a></div>
   	<div><a href="images/picture-0011-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0011-sm.jpg"></a></div>
   	<div><a href="images/picture-0016-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0016-sm.jpg"></a></div>
    <div><a href="images/picture-0017-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0017-lg.jpg"></a></div>
   	<div><a href="images/picture-0019-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0019-lg.jpg"></a></div>
   	<div><a href="images/picture-0020-lg.jpg" data-lightbox="my-gallery"><img src="images/picture-0020-lg.jpg"></a></div>
   	
</header>  



<!-- CONTACT FORM --> 

   <div class="container">
    <section class="container band-contact-me" id="contact">
      	<div class= "row">
      		<div class="col-md-6 col-md-offset-3">
      
      			<h1>Get in touch</h1>
      
      			<?php echo $result;?>
      			<p class="snd-msg_text">If you’re interested in my work just leave me a message via the form below and I’ll get back to you. I’m comfortable communicating in English, Russian, Spanish and Czech so I’ll leave the language up to you.</p>
      			<form method="post" role="form">
      				<div class="form-group">
      					<input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>">
      				</div>
      				
      				<div class="form-group">
      					<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>">
      				</div>
      				
      				<div class="form-group">
      					<textarea name="message" rows="5" class="form-control" placeholder="Your message"><?php echo $_POST['message']; ?></textarea>
      				</div>
      				
      				<div class="checkbox">
      					<label>
      						<input name="check" type="checkbox" class="human"> I am human
      					</label>
      				</div>
      				
      				<div align="center">
      					<input	type="submit" name="submit" class="btn btn-seconadry" value="send message"/>
      				</div>
      			</form>
      		</div>
      	</div>
      </div>
  </div>

<!--FOOTER --> 
<section id="footer"> 		
 <div class="container band-footer">
   <div class="row">
     <div class="col-lg-offset-0 col-lg-12"><a target="_blank" href="https://www.linkedin.com/in/barklaya"><img src="images/social-linkedin.png" alt="linkedin-logo" width="25" height="25" class="pull-right img-logo"/></a><a target="_blank" href="https://vimeo.com/barklaya"><img src="images/social-vimeo.png" alt="vimeo-logo" width="25" height="25" class="pull-right img-logo vimeo-logo"/></a><a target="_blank" href="http://www.imdb.com/name/nm6835683/"><img src="images/social-imdb.png" alt="imdb-logo" width="30" height="30" class="pull-right img-logo imdb-logo"/></a>
       <p class="center-block gb-tag">© Georgy Barklaya, 2020</p>
     </div>
   </div>
 </div>
 </section>
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

 <!-- Lightbox Required: Link to lightbox.js -->
  <script type"text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
  <!-- End Lightbox Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>

    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });

  </script>
  <!-- End SlidesJS Required -->
          
</body>
</html>