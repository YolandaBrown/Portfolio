
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


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/solid.css"
    integrity="sha384-TN9eFVoW87zV3Q7PfVXNZFuCwsmMwkuOTOUsyESfMS9uwDTf7yrxXH78rsXT3xf0" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/fontawesome.css"
    integrity="sha384-PRy/NDAXVTUcXlWA3voA+JO/UMtzWgsYuwMxjuu6DfFPgzJpciUiPwgsvp48fl3p" crossorigin="anonymous">
  <link rel="stylesheet" href="/Porfolio Project StyleSheet.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
  <style>
  
h1 {
  text-align: center;
}

button {
  <justify-content>: center;
}

  </style>
    
  <title>Yolanda Brown-How Can I Help You?</title>
</head>
<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="index.php">About <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="Projects.html">Projects</a>
        <a class="nav-link active" href="Contact.php">Contact</a>
        <a class="nav-link" href="Resume.html">Resume</a>
        <a class="nav-link" href="blog.html">Blog</a>
      </div>
    </div>
  </nav>
</header>
<body>

<br>
<br>
<br>
  
  <div class="container">
  
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


    <footer>
  <div class="container-sm">
      <div class ="footer">
        <nav class="navbar navar-extend-md fixed-bottom navbar-light bg-info">
          
            <strong>Created by Yolanda Brown &#169 2020</strong>
            <a href = "https://github.com/YolandaBrown/Portfolio" alt="Yolanda's Github"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-github" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
      
            </a>
           <a href ="https://twitter.com/YolandaCreates" alt="Yolanda Creates Twitter Page"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg></a>
            
            <a href= "http://www.linkedin.com/in/yolanda-brown-pmp-rhit-csm-ctfl-4432469b"alt="Yolanda LinkedIn Profile"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212h-2.4s.03-6.547 0-7.225h2.4v1.023a5.54 5.54 0 0 0-.016.025h.016v-.025c.32-.493.89-1.193 2.165-1.193 1.58 0 2.764 1.033 2.764 3.252v4.143h-2.4V9.529c0-.972-.348-1.634-1.217-1.634-.664 0-1.059.447-1.233.878-.063.154-.079.37-.079.586v4.035z"/>
            </svg></a>
      
            <a class="eco-banner" href="https://www.ecowebhosting.co.uk/"
              alt="Planting trees every month with Eco Web Hosting" rel="noopener"><img
                src="https://eco-cdn.co.uk/eco-badge-1.svg" alt="Planting trees every month with Eco Web Hosting"></a>

          </div>      
        </nav>
        </div>
</footer>


<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
      
<script type="text/javascript">
      
      $("form").submit(function(e) {
          
          var error = "";
          
          if ($("#email").val() == "") {
              
              error += "The email field is required.<br>"
              
          }
          
          if ($("#subject").val() == "") {
              
              error += "The subject field is required.<br>"
              
          }
          
          if ($("#content").val() == "") {
              
              error += "The content field is required.<br>"
              
          }
          
          if (error != "") {
              
             $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
              
              return false;
              
          } else {
              
              return true;
              
          }
      })
      
</script>
      
</body>
</html>
    -->