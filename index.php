<?php
require_once('db/sql.php');
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
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700">
</head>

<body>
<section id="top">
 <header class="main-header">
    <div class="header-wrapper">
        <div class="main-logo">Bucharest Go</div>
        <nav>
          <ul class="main-menu">
              <li><a href="#section-2" class="scroll">About</a></li>
              <li><a href="#section-3" class="scroll">History</a></li>
              <li><a href="#section-4" class="scroll">Top rated destinations by our clients</a></li>
              <li><a href="#section-5" class="scroll">Food & drink</a></li>
              <button type="text" class="button buttonBlue openb" id="loginDiv">
                <div class="ripples buttonRipples"><span class="ripplesCircle"></span><a id="loginButton" href="#popup1">Log in</a></div>
              </button>
              <div style="display: none;" class='dropdown' id='icecream-dropdown'>
           <div class='dropdown-button' id="userName"></div>
             <span class='triangle'>&#9660;</span>
             <ul class='dropdown-selection'>
                <li id="userProfile"><a href="http://localhost:8080/licenta/userProfile.php">My Profile</a></li>
                <li id="myTrip"><a href="http://localhost:8080/licenta/detailedTrip.php">My Trip</a></li>
                <li id="changePref"><a href="http://localhost:8080/licenta/questionnare.php">Change preferences</a></li>
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

  <a href="#section-2" class="scroll-down-link scroll-down-arrow scroll" data-iconfont="ETmodules" data-icon></a>
  </section>

  <section id="section-2" data-aos="zoom-in">
  <div class="sectionText">
    <h1>ABOUT<h1>
    <h3>WE PLAN EVERYTHING, YOU GO INDEPENDENTLY</h3>
    <ul>
    </ul>
  </div>
  
  <a href="#top" class="scroll-up scroll">
     <span class="left-bar"></span>
    <span class="right-bar"></span> 
    <svg width="40" height="40">
        <line class="top" x1="0" y1="0" x2="120" y2="0"/>
        <line class="left" x1="0" y1="40" x2="0" y2="-80"/>
        <line class="bottom" x1="40" y1="40" x2="-80" y2="40"/>
        <line class="right" x1="40" y1="0" x2="40" y2="1200"/>
    </svg>
  </a>
  </section>
  <section id="section-3" data-aos="zoom-in">
  <div class="sectionText">
  <h1>History<h1>
  <p>Bucharest is a relatively new city: mention of it is not made until 1459, as one of the residences of Vlad III (the Impaler), ruler of Wallachia. The exact origins of the city are therefore unknown. Folklore has it that a shepherd, Bucur, founded the city, but a more likely candidate is Radu Voda (also known as Radu Negru), ruler of Wallachia from c. 1290-1300.</p>
    <p>The history of Bucharest is fundamentally marked by the arrival, in 1866, of the Hohenzollern prince, the future King Carol the 1st, who modernized the capital with the help of the political elites. Almost all the monumental sites of Bucharest were built during the time of the royal family of Romania: the National Museum of History, CEC Palace, the former Chamber of Commerce, the Atheneum, the royal palaces, the Arch of Triumph, the National Bank of Romania.
    </p>
    <p>The capital reached its glory between the two World Wars when it was known throughout Europe as the ‘Little Paris’ for its architecture and the elites’ use of French language.</p>
    <p>The actions of the communist governments put an end to Bucharest’s interwar atmosphere, private property was nationalized and the elites died imprisoned. A grey architecture, typical for Eastern communist regimes invaded the capital, reaching its peak during Nicolae Ceausescu’s time in power (1965-1989) when many emblematic constructions were demolished and tens of thousands of people relocated to make room for the World Record House of the People.</p>
    <p>Symbolically, contemporary Bucharest is perhaps the best representation of today’s Romania, stuck between a conflicted past and a future it can’t decide upon. Visiting it is without a doubt a great way to better understand European history as few other capitals have been marked by so many events as Bucharest.</p>
  </div>
  <a href="#top" class="scroll-up scroll">
     <span class="left-bar"></span>
    <span class="right-bar"></span> 
    <svg width="40" height="40">
        <line class="top" x1="0" y1="0" x2="120" y2="0"/>
        <line class="left" x1="0" y1="40" x2="0" y2="-80"/>
        <line class="bottom" x1="40" y1="40" x2="-80" y2="40"/>
        <line class="right" x1="40" y1="0" x2="40" y2="1200"/>
    </svg>
  </a>
  </section>
  <section id="section-4" data-aos="zoom-in">
  <div class="sectionText">
    <h1>Top rated destinations<h1>
    <div id="destinationsInfo"></div>
  </div>
  <a href="#top" class="scroll-up scroll">
     <span class="left-bar"></span>
    <span class="right-bar"></span> 
    <svg width="40" height="40">
        <line class="top" x1="0" y1="0" x2="120" y2="0"/>
        <line class="left" x1="0" y1="40" x2="0" y2="-80"/>
        <line class="bottom" x1="40" y1="40" x2="-80" y2="40"/>
        <line class="right" x1="40" y1="0" x2="40" y2="1200"/>
    </svg>
  </a>
  </section>
  <section id="section-5" data-aos="zoom-in">
  <div class="sectionText">
  <h1>Food in Bucharest</h1>
  <p>If we are to choose a local dish, you must try the Romanian “mititei” (or “mici“). In our language, “mic” or “mititel” means “small“. It is a dish invented in a restaurant in the Old City Centre about 100 years ago, it is like a sausage without the outer skin.</p>
  <p>We really like soups. A local famous soup is called “ciorbă de burtă“, in English it is called tripe soup.</p>
  <p>One of the main courses could be with “sarmale” (“sărmăluțe“) (English: “stuffed cabbage” or “force-meat rolls in cabbage leaves”). They were brought to Romania (and all the countries around us) by the Ottomans. </p>
  <p>“Mămăligă” is another local dish to have here, you might know it as “polenta“. It is made with corn (maize) flower. </p>
  <h1>Romanian drinks</h1>
  <p>We have a very long tradition in producing wine, a 2000 years tradition. One of our kings is the ancient Dacia (the name of the country 2000 years ago) ordered to have the vineyards burn, as the population became less vigilance. You see, we are used to having wines around us “Fetească” is one of the grapes we have been cultivating for the last 2 millennia.After the Revolution we had in 1989, many small businesses were started in this field of activity. Most wine producers invested lots of money to use modern technology; they  increased quality and sometimes changed the grapes in their vineyards.</p>
  <p>Our brandy, called “țuică” or “pălincă“, which is a distilled alcoholic drink, made of plums, apples, pears, or pretty much everything that can start the fermentation process. The single distilled one is called “țuică”, the one that is distilled twice is called “pălincă”. The first one is usually less than 37% alcohol, the second one is 40%+.</p>
  </div>
  <a href="#top" class="scroll-up scroll">
     <span class="left-bar"></span>
    <span class="right-bar"></span> 
    <svg width="40" height="40">
        <line class="top" x1="0" y1="0" x2="120" y2="0"/>
        <line class="left" x1="0" y1="40" x2="0" y2="-80"/>
        <line class="bottom" x1="40" y1="40" x2="-80" y2="40"/>
        <line class="right" x1="40" y1="0" x2="40" y2="1200"/>
    </svg>
  </a>
  </section>
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='https://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js'></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
<script  src="http://localhost:8080/licenta/js/index-js.js"></script>
<script src="https://use.fontawesome.com/8ae46bccf5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.4.1/snap.svg-min.js"></script>
</body>
</html>

<script>
$('#myTrip').hide();
$('#changePref').hide();
<?php
if(isset($_SESSION['user']['username'])){
  ?>
  $('#loginDiv').hide();
  $('#userName').text('<?php echo $_SESSION['user']['username']; ?>');
  <?php
  if(isset($_SESSION['trip']['id'])){
    ?>
    $('#myTrip').show();
    $('#changePref').show();
    <?php
  }
  ?>
  $('#icecream-dropdown').show();
  <?php
} else {
  ?>
  $('#loginDiv').show();
  $('#icecream-dropdown').hide();
  <?php
}
?>
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
                  if(res=="error"){
                    $("#fields").hide();
                    $("#loginMsg").hide();  
                    $("#fail").show().animate({"opacity":"1", "bottom":"-50px"}, 400);
                    $('.login').removeClass('slide-up');
                    $('.signup').addClass('slide-up');
                    $('#icecream-dropdown').hide();
                  }else {
                    window.location.href="http://localhost:8080/licenta";
                  }
                }
              });
                  
      }
        });
      });


      $('#planTrip').click(function(event) {
          event.preventDefault();
          <?php
          if(!isset($_SESSION['user']['username'])){
            ?>
            Alert.warning('You need to login first!','')
            <?php
          } else{
            if(isset($_SESSION['trip']['id'])){
              ?>
              Alert.warning('You already have a trip! Go check it in the user menu or modify it.','')
              <?php
            }else{
              ?>
              window.location = $(this).attr('href');
              <?php
            }
          }
            ?>
      });



//---------------------------------get city details and show them in sections------------------------------
<?php
$id=2;
$firstDetails=getCityDetails($id);
$bestRated=selectBestRatedDestinations();
$destinations=getAllDestinations();

//---------------------------get percentage of number of people that voted with each destination----------
$nrStars=0;
foreach($destinations as $dest){
  $nrStars+=$dest['destination_stars'];
}
foreach($bestRated as $dest){
  $procentage=$dest['destination_stars']/$nrStars;
  $procentage=round($procentage,2);
  ?>
  //---------------------------show title of destination and pictures uploaded by users
  $('#destinationsInfo').append("<h3>"+'<?php echo $dest['destination_name']; ?>'+"</h3>");
  $('#destinationsInfo').append('<div class="destinationsPercentage"><img class="imgRatedDest" src="http://localhost:8080/licenta/images/'+'<?php echo $dest['destination_image']; ?>'+'" width="60%" height="10%" position="relative"/><div class="metric completion" data-ratio="<?php echo $procentage; ?>"><svg viewBox="0 0 1000 500"><path d="M 950 500 A 450 450 0 0 0 50 500"></path><text class="percentage" text-anchor="middle" alignment-baseline="middle" x="500" y="300" font-size="140" font-weight="bold">0%</text><text class="title" text-anchor="middle" alignment-baseline="middle" x="500" y="450" font-size="50" font-weight="normal">people voted for this</text></svg></div></div>');
  <?php
}
?>

var one='<?php echo $firstDetails['details_info']; ?>';
var firstSection=one.split('. ');
firstSection.forEach(function(detail){
  $('section#section-2 ul').append("<li>"+detail+"</li>");
});



    </script>









