<?php
require_once('db/sql.php');
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php
if(isset($_SESSION['user']['username'])){
  ?>
  <script>
  $('#loginDiv').hide();
  $('#icecream-dropdown').show();
  </script>
  <?php
} else {
  ?>
  <script>
  $('#loginDiv').show();
  $('#icecream-dropdown').hide();
  </script>
  <?php
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bucharest Go</title>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="http://localhost:8080/licenta/css/css.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
</head>

<body>
 <header class="main-header">
    <div class="header-wrapper">
        <div class="main-logo">Bucharest Go</div>
        <nav>
          <ul class="main-menu">
              <li><a href="#section-2">About</a></li>
              <li><a href="#section-3">History</a></li>
              <li><a href="#section-4">Main atractions</a></li>
              <li><a href="#section-5">Food & drink</a></li>
              <li><a href="#section-6">Transport</a></li>
              <button type="text" class="button buttonBlue openb" id="loginDiv">
                <div class="ripples buttonRipples"><span class="ripplesCircle"></span><a id="loginButton" href="#popup1">Log in</a></div>
              </button>
              <div style="display: none;" class='dropdown' id='icecream-dropdown'>
           <div class='dropdown-button' id="userName"></div>
             <span class='triangle'>&#9660;</span>
             <ul class='dropdown-selection'>
               <li><a href="http://localhost:8080/licenta/detailedTrip.php">My Trip</a></li>
                <li><a href="./db/sql.php?action=logout">Logout</a></li>
             </ul>
         </div>
          </ul>
          
        </nav>
        
    </div>
  </header>
  <div id="popup1" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
      <div class="form-structor">
        <div class="signup slide-up">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <form id="signupForm" method="post">
              <div class="form-holder">
                <input type="text" name="signup-name" id="signupName" class="input" placeholder="Name" />
                <input type="email" name="signup-email" id="signupEmail" class="input" placeholder="Email"/>
                <input type="password" name="signup-password" id="signupPassword" class="input" placeholder="Password" />
              </div>
              <button name="signup-submit" class="submit-btn" id="signupBtn">Sign up</button>
              <div class="error" id="allFieldsError">
                    You need to fill all the fields!
              </div>
              <div id="userNotNew" class="error">
                Email already exists!
              </div>
              <div class="feedback" id="signupMsg">
                    Sign up successful! Go to login.
              </div>
            </form>

        </div>
        <div class="login">
          <div class="center">
            
            <h2 class="form-title" id="login"><i class="spinner"></i><span>or</span>Log in</h2>
            
            <form id="loginForm" method="post">
              <div class="form-holder">
                <input type="email" name="login-email" id="loginEmail" class="input" placeholder="Email"/>
                <input type="password" name="login-password" id="loginPassword" class="input" placeholder="Password"/>
              </div>
              <button name="login-submit" class="submit-btn" id="loginBtn">Log in</button>
              <div class="error" id="fields">
                    You need to fill all the fields!
              </div>
              
              <div class="error" id="fail">
                    Incorect email or password!
              </div>
              <div class="feedback" id="loginMsg">
                  Login successful 
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper">
            <h1>Welcome<br>to Bucharest Go</h1>
            <div class="line"></div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper">
            <h1>About us</h1>
            <h2>We generate personalized tours<br>for your best experience.</h2>
            <div class="line"></div>
            <div  class="learn-more-button"><a id="planTrip" href="http://localhost:8080/licenta/questionnare.php">Plan your trip</a></div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper">
            <h1>Information</h1>
            <h2>We offer details about<br>main atractions, bars and restaurants.</h2>
            <div class="line"></div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper">
            <h1>History</h1>
            <h2>Is what made us <br>what we are today</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span>Intro</label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span> What we do</label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span> Information</label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span> History</label>
        </div>
      </nav>
    </div>
  </section>
    

  <section id="section-2">
  <h1>ABOUT<h1>
  <h2>PERSONALIZED TRAVEL PLANNING</h2>
  <h3>WE PLAN EVERYTHING, YOU GO INDEPENDENTLY</h3>
  <ul>
    <li>SAVE TIME AND MONEY - WE DO RESEARCH AND PLAN EVERYTHING</li>
    <li>TRAVEL IN AN ALTERNATIVE WAY</li>
    <li>ITINERARY IS TAILORED TO YOUR NEEDS</li>
    <li>NO STRESS - WE ARE AN E-MAIL AWAY</li>
  </ul>
  </section>
  <section id="section-3">
  <h1>History<h1>
  </section>
  <section id="section-4">
  <h1>Main atractions<h1>
  </section>
  <section id="section-5">
  <h1>Food & drink<h1>
  </section>
  <section id="section-6">
  <h1>Transport<h1>
  </section>
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='https://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js'></script>
<script  src="http://localhost:8080/licenta/js/index-js.js"></script>
<script src="https://use.fontawesome.com/8ae46bccf5.js"></script>
</body>
</html>

<script>
  $('#planTrip').click(function(event) {
      event.preventDefault();
      if($('#icecream-dropdown:visible').length==0){
        alert("You need to log in first!");
      }else{
        <?php
        if(isset($_SESSION['trip']['id'])){
          ?>
             alert("You already have a trip! Go check it in the user menu.");
          <?php
          
        }else{
          ?>

          window.location = $(this).attr('href');
          <?php
        }
        ?>
      }
  });


      $(function () {
        $('#signupForm').on('submit', function (e) {
            e.preventDefault();
            if(($('#signupName').val()=="") || ($('#signupEmail').val()=="") || ($('#signupPassword').val()=="")){
                $("#signupMsg").hide();
                $('#userNotNew').hide();
                $('.signup').removeClass('slide-up');
                $('.login').addClass('slide-up');
                $("#allFieldsError").show().animate({"opacity":"1", "bottom":"-50px"}, 400);
            }else{
              $.ajax({
                      type: 'post',
                      url: './db/sql.php?action=signup',
                      data: $('#signupForm').serialize(),
                      success: function (res) {
                        if(res=="success"){
                          $(".error").hide();
                          $("#signupMsg").show().animate({"opacity":"1", "bottom":"-50px"}, 400);
                          $('.signup').removeClass('slide-up');
                          $('.login').addClass('slide-up');
                          $('#signupName').val('');
                          $('#signupEmail').val('');
                          $('#signupPassword').val('');
                        }else{
                          console.log(res);
                          $("#signupMsg").hide();
                          $("#loginMsg").hide();
                          $('#fail').hide();
                          $('#allFieldsError').hide();
                          $('#userNotNew').show().animate({"opacity":"1", "bottom":"-50px"}, 400);
                        }
                          
                      }
              });
           }
        });
      });

        $(function () {
        $('#loginForm').on('submit', function (e) {
            e.preventDefault();
            if(($('#loginName').val()=="") || ($('#loginEmail').val()=="") || ($('#loginPassword').val()=="")){
                $("#loginMsg").hide();
                $('#fail').hide();
                $('#userNotNew').hide();
                $('.login').removeClass('slide-up');
                $('.signup').addClass('slide-up');
                $("#fields").show().animate({"opacity":"1", "bottom":"-50px"}, 400);
      }else{
        $.ajax({
                type: 'post',
                url: './db/sql.php?action=login',
                data: $('#loginForm').serialize(),
                success: function (res) {
                  if(res!="error"){
                    $('#fail').hide();
                    $("#fields").hide();
                    $("#loginMsg").show().animate({"opacity":"1", "bottom":"-50px"}, 400);
                    $('.login').removeClass('slide-up');
                    $('.signup').addClass('slide-up');
                    $('#loginName').val('');
                    $('#loginEmail').val('');
                    $('#loginPassword').val('');
                    $('#userName').text(res);
                    $('#icecream-dropdown').show();
                    $('#loginDiv').hide();
                  }else{
                    $("#fields").hide();
                    $("#loginMsg").hide();  
                    $("#fail").show().animate({"opacity":"1", "bottom":"-50px"}, 400);
                    $('.login').removeClass('slide-up');
                    $('.signup').addClass('slide-up');
                    $('#icecream-dropdown').hide();
                  }
                }
              });
                  
      }
        });
      });
      <?php 
      if(isset($_SESSION['user']['username'])) { ?>
        $('#fail').hide();
        $("#fields").hide();
        $("#loginMsg").show().animate({"opacity":"1", "bottom":"-50px"}, 400);
        $('.login').removeClass('slide-up');
        $('.signup').addClass('slide-up');
        $('#loginName').val('');
        $('#loginEmail').val('');
        $('#loginPassword').val('');
        $('#userName').text('<?=$_SESSION['user']['username'];?>');
        $('#icecream-dropdown').show();
        $('#loginDiv').hide();
      <?php }
      ?>
    </script>






