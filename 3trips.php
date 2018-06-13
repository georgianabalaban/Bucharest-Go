<?php
require_once('db/sql.php');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="http://localhost:8080/licenta/css/3trips-css.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

  <div id="container">
    <div id="firstTrip" class="drop-shadow lifted">
    <p class="title">Destinations with lowest prices</p>
    <p class="resumedInfo" id="firstText"></p>
    </div>

    <div id="secondTrip" class="drop-shadow lifted">
    <p class="title">Destinations with medium prices</p>
    <p class="resumedInfo" id="secondText"></p>
    </div>

    <div id="thirdTrip" class="drop-shadow lifted">
    <p class="title">Destinations with highest prices</p>
    <p class="resumedInfo" id="thirdText"></p>
    </div>
  </div>

  <div id="output">
  </div>

<script type="text/javascript">
var firstVector=[];
var firstPrices=[];
var secondVector=[];
var secondPrices=[];
var thirdVector=[];
var thirdPrices=[];
</script>
<?php
  foreach($_SESSION['firstTripDestinations'] as $t){
    ?>
    <script>
      firstVector.push('<?php echo $t['destination_name']; ?>');
      firstPrices.push('<?php echo $t['destination_price']; ?>');
    </script>
    <?php
  }
  foreach($_SESSION['thirdTripDestinations'] as $t){
    ?>
    <script>
      thirdVector.push('<?php echo $t['destination_name']; ?>');
      thirdPrices.push('<?php echo $t['destination_price']; ?>');
    </script>
    <?php
  }

?>
<script>
//get second trip's destinations with medium price
    for(var i=0;i<=2;i++){
      secondVector.push(firstVector[i]);
      secondPrices.push(firstPrices[i]);
    }
    for(var i=0;i<=1;i++){
      secondVector.push(thirdVector[i]);
      secondPrices.push(thirdPrices[i]);
    }

    //display info for resumed trips

    var firstText='';
    for(var i=0;i<firstVector.length;i++){
      firstText+=firstVector[i]+' with the cost of '+firstPrices[i]+" lei."+"<br><hr>";
    }
    $('#firstTrip #firstText').html(firstText);


    var secondText='';
    for(var i=0;i<secondVector.length;i++){
      secondText+=secondVector[i]+' with the cost of '+secondPrices[i]+" lei."+"<br><hr>";
    }
    $('#secondTrip #secondText').html(secondText);

    var thirdText='';
    for(var i=0;i<thirdVector.length;i++){
      thirdText+=thirdVector[i]+' with the cost of '+thirdPrices[i]+" lei."+"<br><hr>";
    }
    $('#thirdTrip #thirdText').html(thirdText);

    //trigger click pe div
  $('#firstTrip').on('click',function(){
    $.ajax({
                type: 'POST',
                url: './db/sql.php?action=detailesLowest',
                success: function(res) {
                    console.log(res);
                    window.location = "http://localhost:8080/licenta/detailedTrip.php";
                }
            });
  });

  $('#secondTrip').on('click',function(){
    $.ajax({
                type: 'POST',
                url: './db/sql.php?action=detailesMedium',
                success: function(res) {
                    console.log(res);
                    window.location = "http://localhost:8080/licenta/detailedTrip.php";
                }
            });

    
  });

  $('#thirdTrip').on('click',function(){
       $.ajax({
                type: 'POST',
                url: './db/sql.php?action=detailesHighest',
                success: function(res) {
                    console.log(res);
                    window.location = "http://localhost:8080/licenta/detailedTrip.php";
                }
            });

  });


</script>

</body>
</html>
