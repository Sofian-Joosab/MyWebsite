<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sofian Joosab</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="styleCont.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript">
    $(window).on('scroll', function(){
      if($(window).scrollTop()){
        $(".navbar").css('background', 'rgba(255,255,255)');
        $(".navbar-brand").css('color', '#000');
        $(".navbar-inverse .navbar-nav #nav1").css('color', '#000');
        $(".navbar-inverse .navbar-nav #nav2").css('color', '#000');
        $(".navbar-inverse .navbar-nav #nav3").css('color', '#000');
        $(".navbar-inverse .navbar-nav #nav4").css('color', '#000');
        
      }
      else{
        $(".navbar").css('background', 'rgba(37,37,35)');
        $(".navbar-brand").css('color', '#FFF');  
        $(".navbar-inverse .navbar-nav li a").css('color', '#FFF'); 
        $(".navbar-inverse .navbar-nav #nav1").css('color', '#FFF');  
        $(".navbar-inverse .navbar-nav #nav2").css('color', '#FFF');
        $(".navbar-inverse .navbar-nav #nav3").css('color', '#FFF');
        $(".navbar-inverse .navbar-nav #nav4").css('color', '#FFF');
      }
    })
  </script>
  <script type="text/javascript">
          $(document).ready(function(){
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
              window.location.hash = hash;
            });
          } 
        });
      });
  </script>
</head>
<?php 
  include 'Parts/nav.html';
?>
<body>
  <div class="container text-center">
      <h3>Contact</h3>
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="Parts/contact.php">
           <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input name="name" type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Full Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Subject</label>
              <input name="subject" type="name" class="form-control" id="exampleInputEmail1" placeholder="Subject">
            </div>
            <div class="form-group form-check">
            <label for="exampleInputEmail1">Message</label>
            <textarea name="message" class="form-control" rows="6"></textarea>
          </div>
            <button id="button" type="submit" class="btn btn-primary btn-lg">Send</button>
        </form>
      </div>
    </div>
  </div>  
  </body>
  <?php 
    include 'Parts/footer.html';
  ?>
</html>