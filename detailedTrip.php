 <?php
require_once('db/sql.php');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://localhost:8080/licenta/css/detailed-css.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://localhost:8080/licenta/js/detailedTrip.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

 <div id="map"></div>

 <div class="container" id="first">
  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon">
              <!-- <i class="fa fa-thumbs-o-up"></i> --> 1
            </span>

            <div class="info-box-content">
              <span class="info-box-number title" style="font-size:20px;"></span>
              <div class="details"><ul></ul></div>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description distanceBetween">
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
</div>

<div class="container" id="second">
  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon">
              <!-- <i class="fa fa-thumbs-o-up"></i> --> 2
            </span>

            <div class="info-box-content">
              <span class="info-box-number title" style="font-size:20px;"></span>
              <div class="details"><ul></ul></div>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description distanceBetween">
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
</div>

<div class="container" id="third">
  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon">
              <!-- <i class="fa fa-thumbs-o-up"></i> --> 3
            </span>

            <div class="info-box-content">
              <span class="info-box-number title" style="font-size:20px;"></span>
              <div class="details"><ul></ul></div>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description distanceBetween">
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
</div>

<div class="container" id="fourth">
  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon">
              <!-- <i class="fa fa-thumbs-o-up"></i> --> 4
            </span>

            <div class="info-box-content">
              <span class="info-box-number title" style="font-size:20px;"></span>
              <div class="details"><ul></ul></div>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description distanceBetween">
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
</div>


<div class="container" id="fifth">
  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon">
              <!-- <i class="fa fa-thumbs-o-up"></i> --> 5
            </span>

            <div class="info-box-content">
              <span class="info-box-number title" style="font-size:20px;"></span>
              <div class="details"><ul></ul></div>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description distanceBetween">
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
</div>

<div class="container" id="sixth">
  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon">
              <!-- <i class="fa fa-thumbs-o-up"></i> --> 6
            </span>

            <div class="info-box-content">
              <span class="info-box-number title" style="font-size:20px;"></span>
              <div class="details"><ul></ul></div>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
                  <span class="progress-description distanceBetween">
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
</div>


<!-- Output general info-->
  <div id="output">
 </div>


<!--  Modal for feedback -->
<div id="mybutton">
<button data-toggle="modal" data-target="#myModal" class="feedback">Feedback</button>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Rate your destinations and upload pics</h4>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data" id="feedbackForm">
        <div id="feedone" class="feedContainer">
          <p></p>
          <div class="stars">
              <input class="star star-5" value="5" id="star-1-5" type="radio" name="starone"/>
              <label class="star star-5" for="star-1-5"></label>
              <input class="star star-4" value="4" id="star-1-4" type="radio" name="starone"/>
              <label class="star star-4" for="star-1-4"></label>
              <input class="star star-3" value="3" id="star-1-3" type="radio" name="starone"/>
              <label class="star star-3" for="star-1-3"></label>
              <input class="star star-2" value="2" id="star-1-2" type="radio" name="starone"/>
              <label class="star star-2" for="star-1-2"></label>
              <input class="star star-1" value="1" id="star-1-1" type="radio" name="starone"/>
              <label class="star star-1" for="star-1-1"></label>
          </div>

          <div class="fileUploader">
            <div class="col-md-6">
            <div class="form-group">
                <label>Upload Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span id="uploadBtnOne" class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInpOne" name="imgOne">
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img class="imgUpload" id='img-upload-one'/>
            </div>
          </div>
          </div>

        </div>
        <div id="feedtwo" class="feedContainer">
          <p></p>
          <div class="stars">
              <input class="star star-5" value="5" id="star-2-5" type="radio" name="startwo"/>
              <label class="star star-5" for="star-2-5"></label>
              <input class="star star-4" value="4" id="star-2-4" type="radio" name="startwo"/>
              <label class="star star-4" for="star-2-4"></label>
              <input class="star star-3" value="3" id="star-2-3" type="radio" name="startwo"/>
              <label class="star star-3" for="star-2-3"></label>
              <input class="star star-2" value="2" id="star-2-2" type="radio" name="startwo"/>
              <label class="star star-2" for="star-2-2"></label>
              <input class="star star-1" value="1" id="star-2-1" type="radio" name="startwo"/>
              <label class="star star-1" for="star-2-1"></label>
          </div>
          <div class="fileUploader">
            <div class="col-md-6">
            <div class="form-group">
                <label>Upload Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span id="uploadBtnTwo" class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInpTwo" name="imgTwo">
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img class="imgUpload" id='img-upload-two'/>
            </div>
          </div>
          </div>
        </div>
        <div id="feedthree" class="feedContainer">
        <p></p>
        <div class="stars">
            <input class="star star-5" value="5" id="star-3-5" type="radio" name="starthree"/>
            <label class="star star-5" for="star-3-5"></label>
            <input class="star star-4" value="4" id="star-3-4" type="radio" name="starthree"/>
            <label class="star star-4" for="star-3-4"></label>
            <input class="star star-3" value="3" id="star-3-3" type="radio" name="starthree"/>
            <label class="star star-3" for="star-3-3"></label>
            <input class="star star-2" value="2" id="star-3-2" type="radio" name="starthree"/>
            <label class="star star-2" for="star-3-2"></label>
            <input class="star star-1" value="1" id="star-3-1" type="radio" name="starthree"/>
            <label class="star star-1" for="star-3-1"></label>
        </div>
        <div class="fileUploader">
          <div class="col-md-6">
          <div class="form-group">
              <label>Upload Image</label>
              <div class="input-group">
                  <span class="input-group-btn">
                      <span id="uploadBtnThree" class="btn btn-default btn-file">
                          Browse… <input type="file" id="imgInpThree" name="imgThree">
                      </span>
                  </span>
                  <input type="text" class="form-control" readonly>
              </div>
              <img class="imgUpload" id='img-upload-three'/>
          </div>
      </div>
      </div>
        </div>
        <div id="feedfour" class="feedContainer">
          <p></p>
          <div class="stars">
              <input class="star star-5" value="5" id="star-4-5" type="radio" name="starfour"/>
              <label class="star star-5" for="star-4-5"></label>
              <input class="star star-4" value="4" id="star-4-4" type="radio" name="starfour"/>
              <label class="star star-4" for="star-4-4"></label>
              <input class="star star-3" value="3" id="star-4-3" type="radio" name="starfour"/>
              <label class="star star-3" for="star-4-3"></label>
              <input class="star star-2" value="2" id="star-4-2" type="radio" name="starfour"/>
              <label class="star star-2" for="star-4-2"></label>
              <input class="star star-1" value="1" id="star-4-1" type="radio" name="starfour"/>
              <label class="star star-1" for="star-4-1"></label>
          </div>
          <div class="fileUploader">
            <div class="col-md-6">
            <div class="form-group">
                <label>Upload Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span id="uploadBtnFour" class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInpFour" name="imgFour">
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img class="imgUpload" id='img-upload-four'/>
            </div>
          </div>
          </div>
        </div>
        <div id="feedfive">
          <p></p>
          <div class="stars">
              <input class="star star-5" value="5" id="star-5-5" type="radio" name="starfive"/>
              <label class="star star-5" for="star-5-5"></label>
              <input class="star star-4" value="4" id="star-5-4" type="radio" name="starfive"/>
              <label class="star star-4" for="star-5-4"></label>
              <input class="star star-3" value="3" id="star-5-3" type="radio" name="starfive"/>
              <label class="star star-3" for="star-5-3"></label>
              <input class="star star-2" value="2" id="star-5-2" type="radio" name="starfive"/>
              <label class="star star-2" for="star-5-2"></label>
              <input class="star star-1" value="1" id="star-5-1" type="radio" name="starfive"/>
              <label class="star star-1" for="star-5-1"></label>
          </div>
          <div class="fileUploader">
            <div class="col-md-6">
            <div class="form-group">
                <label>Upload Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span id="uploadBtnFive" class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInpFive" name="imgFive">
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img class="imgUpload" id='img-upload-five'/>
            </div>
          </div>
          </div>
        </div>
        <input type="submit" class="btn btn-primary" name="submitFeedback" value="Send">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

</div>
<script type="text/javascript">
$(function () {
  $('#feedbackForm').on('submit', function (e) {
            $.ajax({
                type: 'post',
                url: './db/sql.php?action=feedback',
                data: $('#feedbackForm').serialize(),
                success: function (res) {
                  if(res=="success"){
                    alert("Thank you for your feedback!");
                  }else{
                    alert("error");
                  }
                }
              });
        });
      });



var timpPentruVizitare='';
var timpPentruTransportare='';
  var outputText=[];//vector cu informatii pentru fiecare destinatie in parte
  var transportationPrice=0;
  var addresses=[];//vector unde retin adresele obiectivelor
  var transtationTime=[];//vector unde salvez timpul de transportare intre fiecare destinatie
  var transportation='<?php echo $_SESSION['transportMode']; ?>';

  var distantaTotala=0.0;
  var minuteTotale=0.0;
  var timpTotal='';
  var destinations=[];//vector cu numele destinatiilor
  var prices=[];//vector cu pretul destinatiilor
  var times=[];//vector cu timpul de vizitare al destinatiilor
  var imagesLinks=[];//vector cu linkurile imaginilor fiecarei destinatii

  destinations.push("<?php echo $_SESSION['first']['destination_name']; ?>");
  destinations.push("<?php echo $_SESSION['second']['destination_name']; ?>");
  destinations.push("<?php echo $_SESSION['third']['destination_name']; ?>");
  destinations.push("<?php echo $_SESSION['fourth']['destination_name']; ?>");
  destinations.push("<?php echo $_SESSION['fifth']['destination_name']; ?>");
  console.log(destinations);

  imagesLinks.push("<?php echo $_SESSION['first']['destination_image']; ?>");
  imagesLinks.push("<?php echo $_SESSION['second']['destination_image']; ?>");
  imagesLinks.push("<?php echo $_SESSION['third']['destination_image']; ?>");
  imagesLinks.push("<?php echo $_SESSION['fourth']['destination_image']; ?>");
  imagesLinks.push("<?php echo $_SESSION['fifth']['destination_image']; ?>");

  prices.push("<?php echo $_SESSION['first']['destination_price']; ?>");
  prices.push("<?php echo $_SESSION['second']['destination_price']; ?>");
  prices.push("<?php echo $_SESSION['third']['destination_price']; ?>");
  prices.push("<?php echo $_SESSION['fourth']['destination_price']; ?>");
  prices.push("<?php echo $_SESSION['fifth']['destination_price']; ?>");

  times.push("<?php echo $_SESSION['first']['destination_time'] ?>");
  times.push("<?php echo $_SESSION['second']['destination_time'] ?>");
  times.push("<?php echo $_SESSION['third']['destination_time'] ?>");
  times.push("<?php echo $_SESSION['fourth']['destination_time'] ?>");
  times.push("<?php echo $_SESSION['fifth']['destination_time'] ?>");

  //pretul destinatiilor
  var totalPrices=0;
  for(var i=0;i<prices.length;i++){
    totalPrices+=parseInt(prices[i]);
  }
  //nr total de minune de vizitat doar destinatiile, fara timpul de transport
  var totalTimes=0;
  for(var i=0;i<times.length;i++){
    totalTimes+=parseInt(times[i]);
  }

  //nr total de destinatii
  var nrDestinatii=destinations.length;
  var origini=[];
  var destinatii=[];
  var pos;

  //callback function for google maps api
  function initMap() {
      //map initialization
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 55.53, lng: 9.4},
          zoom: 10
        });

         //user position display

        var stepDisplay = new google.maps.InfoWindow(); 
  
        var userPos = new google.maps.InfoWindow();

  
         // Try HTML5 geolocation.
  if (navigator.geolocation) {

    //pozitia curenta a utilizatorului
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      

      //markerul de pe harta pentru locatia actuala
      var userIcon = {
        path: 'M 0, 0 m -15, 0 a 15, 15 0 1, 0 30, 0 a 15, 15 0 1, 0 -30, 0',
        fillColor: '#3a8bc9',
        fillOpacity: 0.9,
        scale: 0.4,
        strokeColor: '#ffffff',
        strokeWeight: 2,
        strokeOpacity: 0.8
     };
      

      
      var userRadarIcon = {
        path: 'M 0, 0 m -100, 0 a 100, 100 0 1, 0 200, 0 a 100, 100 0 1, 0 -200, 0',
        fillColor: '#3a8bc9',
        fillOpacity: 0.2,
        scale: 0.4,
        strokeColor: '#3e7fb2',
        strokeWeight: 0.5,
        strokeOpacity: 0.9
     };

      
      var userMarker = new google.maps.Marker({
          icon: userIcon,
          position: pos,
          map: map,
          optimized:false
      });


      var userRadarMarker = new google.maps.Marker({
          icon: userRadarIcon,
          position: pos,
          map: map,
          optimized:false
      });
      
      userPos.setPosition(pos);
      userPos.setContent('You are here');
      userPos.open(map);
      map.setCenter(pos);

      //directions api

       var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer(
      {
          suppressMarkers: true
      });
      directionsDisplay.setMap(map);

        var bounds = new google.maps.LatLngBounds;
        var markersArray = [];
            //iconite markeri pt harta
            var icon1 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=1|FF0000|000000';
            var icon2 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=2|FF0000|000000';
            var icon3 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=3|FF0000|000000';
            var icon4 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=4|FF0000|000000';
            var icon5 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=5|FF0000|000000';


            //calcul vectori origini si destinatii
          origini.push(pos);//user position
          for(var i=0;i<nrDestinatii;i++){

            origini.push(destinations[i]);

            destinatii.push(destinations[i]); 
          }

        var geocoder = new google.maps.Geocoder;
        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
          origins: origini,
          destinations: destinatii,
          travelMode: transportation,
          unitSystem: google.maps.UnitSystem.METRIC,
          avoidHighways: false,
          avoidTolls: false
        }, function(response, status) {
          if (status !== 'OK') {
            console.log(status);
          
          } else {
            //lists of origins and destinations from the response
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;

            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';
             deleteMarkers(markersArray);

            //add markers with images and data to map
             var showGeocodedAddressOnMap = function(index) {
              var icon='';
              var nameOfDestination=destinations[index]; 
              if(index==0){
                icon=icon1;
              }else if(index==1){
                icon=icon2;

              }else if(index==2){
                icon=icon3;

              }else if(index==3){
                icon=icon4;

              }else{
                icon=icon5;

              }
              return function(results, status) {
                if (status === 'OK') {
                  var contentString='';
                     contentString = '<div id="content">'+
                  '<p>'+nameOfDestination+'</p>'
                  +'<img src="http://localhost:8080/licenta/images/'+imagesLinks[index]+'" width="100%" height="80%" position="relative"/>'
                  +'</div>';
                 var infowindow = new google.maps.InfoWindow({
                    content: contentString
                  });


                  map.fitBounds(bounds.extend(results[0].geometry.location));
                  var marker=new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    icon: icon
                  })
                  //add infobox
                  marker.addListener('click', function() {
                      infowindow.open(map, marker);
                    });

                  markersArray.push(marker);

                } else {
                  alert('Geocode was not successful due to: ' + status);
                }
              };
            };

            for(var i=1;i<originList.length;i++){

                //adaug adresele fiecarei destinatii
                addresses.push(originList[i]);
            }
            //display location of user
            addresses.push(destinationList[3]);

              //calculez distantele intre locatia userului si fiecare destinatie si sortez

              var firstDistances=response.rows[0].elements;

              //bubble sort
              for(var i=0;i<firstDistances.length-1;i++){
                var res=firstDistances[i].distance.text.split(' ');
                  var r=res[0].split(',');
                  var intreg=parseInt(r[0]);
                  var zecimala=parseInt(r[1]);
                  var d=intreg+parseFloat(zecimala/10);
                for(var j=i+1;j<firstDistances.length;j++){
                  var res1=firstDistances[j].distance.text.split(' ');
                  var r1=res1[0].split(',');
                  var intreg1=parseInt(r1[0]);
                  var zecimala1=parseInt(r1[1]);
                  var d1=intreg1+parseFloat(zecimala1/10);
                  if(d>d1){
                    //sortarea tuturor vectorilor folositi
                    var aux=destinations[i];
                    destinations[i]=destinations[j];
                    destinations[j]=aux;

                    var aux2=prices[i];
                    prices[i]=prices[j];
                    prices[j]=aux2;

                    var aux3=times[i];
                    times[i]=times[j];
                    times[j]=aux3;

                    var aux4=imagesLinks[i];
                    imagesLinks[i]=imagesLinks[j];
                    imagesLinks[j]=aux4;

                    var aux5=addresses[i];
                    addresses[i]=addresses[j];
                    addresses[j]=aux5;

                    var aux1=firstDistances[i];
                    firstDistances[i]=firstDistances[j];
                    firstDistances[j]=aux1;
                  }
                }
              }

              //output title of destinations
  $('#first .title').html("<p>Your location: "+originList[0]+"</p>");
  $('#second .title').html(destinations[0]);
  $('#third .title').html(destinations[1]);
  $('#fourth .title').html(destinations[2]);
  $('#fifth .title').html(destinations[3]);
  $('#sixth .title').html(destinations[4]);

  //output name of destinations into feedback modal
  $('#myModal #feedone p').html(destinations[0]);
  $('#myModal #feedtwo p').html(destinations[1]);
  $('#myModal #feedthree p').html(destinations[2]);
  $('#myModal #feedfour p').html(destinations[3]);
  $('#myModal #feedfive p').html(destinations[4]);
  //output prices of destinations
  $('#second .details ul').append("<li>Price for visiting is: "+prices[0]+" lei</li>");
  $('#third .details ul').append("<li>Price for visiting is: "+prices[1]+" lei</li>");
  $('#fourth .details ul').append("<li>Price for visiting is: "+prices[2]+" lei</li>");
  $('#fifth .details ul').append("<li>Price for visiting is: "+prices[3]+" lei</li>");
  $('#sixth .details ul').append("<li>Price for visiting is: "+prices[4]+" lei</li>");
  //output time of visiting for each destination
  $('#second .details ul').append("<li>Time for visiting is: "+times[0]+" minutes</li>");
  $('#third .details ul').append("<li>Time for visiting is: "+times[1]+" minutes</li>");
  $('#fourth .details ul').append("<li>Time for visiting is: "+times[2]+" minutes</li>");
  $('#fifth .details ul').append("<li>Time for visiting is: "+times[3]+" minutes</li>");
  $('#sixth .details ul').append("<li>Time for visiting is: "+times[4]+" minutes</li>");
   //afisare fiecare adresa
            $('#second .details ul').append("<li>Address: "+addresses[0]+" </li>");
            $('#third .details ul').append("<li>Address: "+addresses[1]+" </li>");
            $('#fourth .details ul').append("<li>Address: "+addresses[2]+" </li>");
            $('#fifth .details ul').append("<li>Address: "+addresses[3]+" </li>");
            $('#sixth .details ul').append("<li>Address: "+addresses[4]+" </li>");

              //show markers on map
              for (var i = 0; i < destinations.length; i++) {
              
                  geocoder.geocode({'address': destinations[i]},
                    showGeocodedAddressOnMap(i));
              }
        
  /*display google maps directions*/
   var waypts = [];
              for (var i = 0; i < destinations.length-1; i++) {
                  
                    waypts.push({
                      location: destinations[i],
                      stopover: true
                    });
                  
              }
   directionsService.route({
          origin: pos,
          destination: destinations[destinations.length-1],
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: transportation
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });

              for(var i=0; i<originList.length-1;i++){
                var results = response.rows[i].elements;

              //calcul distanta totala in km
              var res=results[i].distance.text.split(' ');
              var r=res[0].split(',');
              var intreg=parseInt(r[0]);
              var zecimala=parseInt(r[1]);
              var dist=intreg+parseFloat(zecimala/10);
              distantaTotala+=parseFloat(dist);

              //calcul timp total
              var tes=results[i].duration.text.split(' ');
              if(tes.length==2){//daca are durata mai mica de o ora,adica contine doar minute
                var min=parseInt(tes[0]);
                transtationTime.push(min+" minutes");//timpul pentru fiecare destinatie
                minuteTotale=minuteTotale+min; 
              }else{//daca are durata mai mare de o ora
                var min=parseInt(tes[2]);//nr minute returnat
                var h=parseInt(tes[0]);//nr ore returnat transformat in minute
                transtationTime.push(h+' hours and '+min+' minutes');
                minuteTotale=minuteTotale+min+h;
              }
              
            }

            //afisare timp de transportare intre fiecare destinatie
            $('#first .distanceBetween').append("Transportation time until next destination: "+transtationTime[0]);
            $('#second .distanceBetween').append("Transportation time until next destination: "+transtationTime[1]);
            $('#third .distanceBetween').append("Transportation time until next destination: "+transtationTime[2]);
            $('#fourth .distanceBetween').append("Transportation time until next destination: "+transtationTime[3]);
            $('#fifth .distanceBetween').append("Transportation time until next destination: "+transtationTime[4]);


          //calcul timp pentru transportare
             if(minuteTotale>=60){
                var ore=parseInt(minuteTotale/60);
                var minute=parseInt(minuteTotale%60);
                timpPentruTransportare=ore+' hours '+minute+' minutes';
              }else{
                timpPentruTransportare=minuteTotale+" minutes";
              }

            //calcul timp pentru vizitare
            if(totalTimes>=60){
              var visitOre=parseInt(totalTimes/60);
              var visitMin=parseInt(totalTimes%60);
              timpPentruVizitare=visitOre+' hours '+visitMin+' minutes';
            }else{
              timpPentruVizitare=totalTimes+" minutes";
            }


            //calcul timp total
            minuteTotale+=totalTimes;//adaug minutele pentru vizitare obiective

            if(minuteTotale>60 || minuteTotale==60){
                var ore=parseInt(minuteTotale/60);
                var minute=parseInt(minuteTotale%60);
                timpTotal=ore+' hours '+minute+' minutes';
              }else{
                timpTotal=minuteTotale+" minutes";
              }

              outputDiv.innerHTML+='Transportation mode: '+transportation+'<br>';
              outputDiv.innerHTML+='Total distance: '+Math.round(distantaTotala*10)/10+' km'+'<br>';
              outputDiv.innerHTML+='Total price: '+totalPrices+' lei'+'<br>';
              outputDiv.innerHTML+='Total time for visitation: '+timpPentruVizitare+"<br>";
              outputDiv.innerHTML+='Total time for transportation: '+timpPentruTransportare+"<br>";
              outputDiv.innerHTML+='Total time: '+timpTotal;

          }
        });

    }, function() {
      //handleLocationError(true, infoWindow, map.getCenter());
    });
  }
}

      function deleteMarkers(markersArray) {
        for (var i = 0; i < markersArray.length; i++) {
          markersArray[i].setMap(null);
        }
        markersArray = [];
      }

</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0ZlrCCaEyvY7Up-rSMsrZ3NR_EGL0HMw&callback=initMap">
</script>
</body>
</html>


 