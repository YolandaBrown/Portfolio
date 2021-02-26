<?php

$error = ""; $successMessage = "";

if ($_POST) {
    
    if (!$_POST["email"]) {
        
        $error .= "An email address is required.<br>";
        
    }
    
    if (!$_POST["content"]) {
        
        $error .= "The content field is required.<br>";
        
    }
    
    if (!$_POST["subject"]) {
        
        $error .= "The subject is required.<br>";
        
    }
    
    if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        
        $error .= "The email address is invalid.<br>";
        
    }
    
    if ($error != "") {
        
        $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
        
    } else {
        
        $emailTo = "yolanda.brown@yolanbr5.com";
        
        $subject = $_POST['subject'];
        
        $content = $_POST['content'];
        
        $headers = "From: ".$_POST['email'];
        
        if (mail($emailTo, $subject, $content, $headers)) {
            
            $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
            
            
        } else {
            
            $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
            
            
        }   
    }    
}

?>


<!doctype html>

<html>

<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/solid.css"
    integrity="sha384-TN9eFVoW87zV3Q7PfVXNZFuCwsmMwkuOTOUsyESfMS9uwDTf7yrxXH78rsXT3xf0" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/fontawesome.css"
    integrity="sha384-PRy/NDAXVTUcXlWA3voA+JO/UMtzWgsYuwMxjuu6DfFPgzJpciUiPwgsvp48fl3p" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="/Porfolio Project StyleSheet.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <style>

.navbar {
    background-color: red;
}

.jumbotron{
  background-color: red;
}

.footer {
  width: 100%;
  background-color: blue;
  text-align: center;
  
}

</style>

  <title>Yolanda Brown</title>

</head>

<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="index.php">About <span class="sr-only">(current)</span></a>
        <!--<a class="nav-link" href="Projects.html">Projects</a>-->
        <!--<a class="nav-link" href="#"></a>-->
        <a class="nav-link" href="Resume.html">Resume</a>
        <!--<a class="nav-link" href="blog.html">Blog</a>-->
      </div>
    </div>
  </nav>
</header>

<body>

<!--This is to display a centered jumbotron from Bootsrap-->
<div class="jumbotron text-center">
  <h1 class="display-4">Hi, I'm Yolanda!</h1>
  <p class="lead">I'm a Website Designer/Software Engineer with a passion for creating websites and applications. If you are looking to establish or re-establish presence, click the button below.</p>
  <a class="btn btn-primary btn-lg" href="#contact-form" role="button">Work With Me</a>
</div>


  <div id="Projects" class="container">
    <h2>Projects</h2>
    <br>
    <div class="card-deck">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Magic 8 Ball</h5>
          <img class ="magic card-img-top" src="magic8ball.png" alt="Magic 8 Ball">
          <p class="card-text">A different spin to the classic game of asking the magic 8 ball random questions.</p>
          <p class="card-text">The technologies used are HTML5, CSS3, and JavaScript.</p>
          <a href="https://codepen.io/Yolanda_Brown/full/vYGbJQb" class="btn btn-primary">Click Here</a>
        </div>
      </div>

      <div class="card">
          <div class="card-body">
          <h5 class="card-title">Survery Form</h5>
          <img class="survey card-img-top" src="gardeningsurvey3.png" alt="Gardening Survey">
          <p class="card-text">A survey form to gather information from home gardners.</p>
          <p class="card-text">The technologies used are HTML5, CSS3, and JavaScript.</p>
          <a href="https://codepen.io/Yolanda_Brown/full/WNQBBVE" class="btn btn-primary">Click Here</a>
        </div>
      </div>
      </div>
      </div>

    <br>
    <br>
    
    <div id="contact-form" class="container">
  
<h1>Contact Me</h1>
  <div id="error"><? echo $error.$successMessage; ?></div>
  <form method="post">
<fieldset class="form-group">
<label for="email">Email address</label>
<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
<small class="text-muted">Your email will not be shared with anyone else.</small>
</fieldset>
<fieldset class="form-group">
<label for="subject">Subject/Topic</label>
<input type="text" class="form-control" id="subject" name="subject" >
</fieldset>
<fieldset class="form-group">
<label for="exampleTextarea">How can I help you?</label>
<textarea class="form-control" id="content" name="content" rows="3"></textarea>
</fieldset>
<button type="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
      
    </div>
    <br>
    <br>
    <br>
   
       
<!-- Created by Yolanda Brown 3/26/2020 -->

<div class="footer">
              <strong>Created by Yolanda Brown &#169 2020</strong>

            <a href = "https://github.com/YolandaBrown/Portfolio"> <img src="github-brands.svg" alt="Yolanda's Github" style="width:auto;height:70px; padding-right:50px; padding-left:50px;"></a>
           
            <a href ="https://twitter.com/YolandaCreates"><img src="twitter-brands.svg" alt="Yolanda Creates Twitter Page" style="width:auto;height:70px; padding-right:50px;"></a>
          
            <a href ="http://www.linkedin.com/in/yolanda-brown-pmp-rhit-csm-ctfl-4432469b"><img src="linkedin-in-brands.svg" alt="Yolanda Linkedin Profile" style="width:auto;height:70px; padding-right:50px;"></a>
      
            <a class="eco-banner" href="https://www.ecowebhosting.co.uk/"
              alt="Planting trees every month with Eco Web Hosting" rel="noopener"><img
                src="https://eco-cdn.co.uk/eco-badge-1.svg" alt="Planting trees every month with Eco Web Hosting"></a>

               </div>
</div>


<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
 
    </body>
</html>