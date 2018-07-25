<?php
require_once('db/sql.php');
?>
<!DOCTYPE html>
<html >
<head>
	<link rel="stylesheet" href="http://localhost:8080/licenta/css/questionnare-css.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600,400italic,300italic,300,600italic">
</head>
<body>
  <form method="post" action="./db/sql.php?action=questionnare">
	<ul class="input_parent">

  
  <p class="what_is_this" title="This is a questionnare so we can plan your personalized trip in Bucharest">?</p>
  <input class="track_item_input" type="radio" name="radio-btn" id="img-1" checked="checked"/>
  <li class="slide-container">
    <div class="nav">
      <label class="track_item next" for="img-2">›</label>
    </div>
    <div class="slide">
      <h1>Question 1</h1>
      <p>If you had only one day trip, you would enjoy:</p>

        <ul>
          <li>
          <label>
            <input type="radio"  id="parks" name="one" value="parks" />Parks
          </label>
            
          </li>
          <li>
          <label>
            <input type="radio" id="art" name="one" value="art galleries"/>Art galleries
          </label>
            
          </li>
          <li>
          <label>
            <input type="radio" id="history" name="one" value="historical museums" />Historical museums
           </label>
          </li>
          <li>
          <label>
            <input type="radio" id="shopping" name="one" value="shopping"/>Shopping
            </label>
          </li>
          <li>
          <label>
            <input type="radio" id="culinary" name="one" value="have a culinary experience" />Have a culinary experience
          </label>
            
          </li>
        </ul>
    </div>
  </li>
  <input class="track_item_input" type="radio" name="radio-btn" id="img-2"/>
  <li class="slide-container">
    <div class="nav">
      <label class="track_item prev" for="img-1">‹</label>
      <label class="track_item next" for="img-3">›</label>
    </div>
    <div class="slide">
      <h1>Question 2</h1>
      <p>Is there any item you cannot live without while travelling?</p>
 
        <ul>
          <li>
            <label>
              <input type="radio" id="books" name="two" value="books"/>Books
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="tent" name="two" value="tent"/>Tent
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="compass" name="two" value="compass" />Compass
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="clothes" name="two" value="a lot of clothes" />A lot of clothes
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="computer" name="two" value="a computer" />A computer
            </label>
          </li>
        </ul>
    </div>
  </li>
  <input class="track_item_input" type="radio" name="radio-btn" id="img-3"/>
  <li class="slide-container">
    <div class="nav">
      <label class="track_item prev" for="img-2">‹</label>
      <label class="track_item next" for="img-4">›</label>
    </div>
    <div class="slide">
      <h1>Question 3</h1>
      <p>While you are travelling you prefer to:</p>
    
        <ul>
          <li>
            <label>
              <input type="radio"  id="withoutHurry" name="three" value="withoutHurry" />Get deeper into the place, meet people, feel the vibe - enjoy without any hurry
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="hurry" name="three" value="hurry" />Visit and explore as many places as possible - you never know if another time you are in this part of the world.
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="unorganized" name="three" value="unorganized" />Buy an one-way ticket and go with the flow.
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="organized" name="three" value="organized" />Organise every detail as you do not want to miss any attraction.
            </label>
          </li>
        </ul>
    </div>
  </li>
  <input class="track_item_input" type="radio" name="radio-btn" id="img-4"/>
  <li class="slide-container">
    <div class="nav">
      <label class="track_item prev" for="img-3">‹</label>
      <label class="track_item next" for="img-5">›</label>
    </div>
    <div class="slide">
      <h1>Question 4</h1>
      <p>You want to get to the concert hall. Google Maps is saying it is only 5km away. You will:</p>
     
        <ul>
          <li>
            <label>
              <input type="radio"  id="walk" name="four" value="walk" />Go on foot, taking longer way because it passes by the nice district - if something interesting happens, why not to change the plan?
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="bus" name="four" value="bus" />Take local bus to save money and feel like a local.
            </label>
          </li>
          <li>
            <label>
            <input type="radio" id="taxi" name="four" value="taxi" />Take a taxi to get to the venue as soon and safe as possible.
            </label>
          </li>
        </ul>
    </div>
  </li>
  <input class="track_item_input" type="radio" name="radio-btn" id="img-5"/>
  <li class="slide-container">
    <div class="nav">
      <label class="track_item prev" for="img-4">‹</label>
      <label class="track_item next" for="img-6">›</label>
    </div>
    <div class="slide">
      <h1>Question 5</h1>
      <p>When visiting a destination, you prefer more:</p>
   
        <ul>
          <li>
            <label>
              <input type="radio"  id="traditionalFood" name="five" value="traditionalFood" />Eating traditional food associated with that destination.
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="localFood" name="five" value="localFood" />Sourcing local produce made by local businesses.
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="experimentalFood" name="five" value="experimentalFood" />Trying experimental food.
            </label>
          </li>
        </ul>
    </div>
  </li>
  <input class="track_item_input" type="radio" name="radio-btn" id="img-6"/>
  <li class="slide-container">
    <div class="nav">
      <label class="track_item prev" for="img-5">‹</label>
    </div>
    <div class="slide">
      <h1>Question 6</h1>
      <p>What type of transportation do you prefer?</p>
        <ul>
          <li>
            <label>
              <input type="radio" id="walking" name="six" value="WALKING" />Walking
            </label>
          </li>
          <li>
            <label>
              <input type="radio" id="driving" name="six" value="DRIVING" />Drinving
            </label>
          </li>
        </ul>
        <input type="submit" name="question6" id="question6" value="Finish"/>
      
    </div>
  </li>

</ul>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='https://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script  src="http://localhost:8080/licenta/js/questionnare-js.js"></script>
</body>
</html>
<?php
if(isset($_SESSION['questionnare']['id'])){
  $trip=getQuestionnare($_SESSION['questionnare']['id']);
  ?>
  <script>
  $('input[name="one"][value="<?php echo $trip['qone']; ?>"]').attr('checked', true);
  $('input[name="two"][value="<?php echo $trip['qtwo']; ?>"]').attr('checked', true);
  $('input[name="three"][value="<?php echo $trip['qthree']; ?>"]').attr('checked', true);
  $('input[name="four"][value="<?php echo $trip['qfour']; ?>"]').attr('checked', true);
  $('input[name="five"][value="<?php echo $trip['qfive']; ?>"]').attr('checked', true);
  $('input[name="six"][value="<?php echo $trip['qsix']; ?>"]').attr('checked', true);
  </script>
  <?php
}
?>

