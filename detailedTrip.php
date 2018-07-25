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
 <div id="informations">
 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; See details</span>
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <<!-- Output general info-->
  <div id="output">
 </div>
</div>
<div id="changePref">
  <button id="changePrefBtn" type="button" class="btn btn-primary">Change preferences</button>
  <button type="button" id="homeBtn" class="btn btn-info"><span class="glyphicon glyphicon-home"></span>       Go Home</button>
  <button type="button" id="printBtn" class="btn btn-success" onclick='printDiv();'>Print Report</button>
</div>

<div id="destinationsInfo">
<div class="container" id="first">
  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon">
              <!-- <i class="fa fa-thumbs-o-up"></i> --> A
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
              <!-- <i class="fa fa-thumbs-o-up"></i> --> B
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
              <!-- <i class="fa fa-thumbs-o-up"></i> --> C
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
              <!-- <i class="fa fa-thumbs-o-up"></i> --> D
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
              <!-- <i class="fa fa-thumbs-o-up"></i> --> E
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
              <!-- <i class="fa fa-thumbs-o-up"></i> --> F
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
</div>
  

 
<!--  Modal for feedback -->
<div id="mybutton">
<button data-toggle="modal" data-target="#myModal" class="feedback">Feedback</button>
</div>

 </div>

  <div id="directions"></div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Give feedback and upload pictures</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" id="feedbackForm">
          <div id="leftModal">
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
          </div>
          <div id="rightModal">
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
          </div>
        <input type="submit" id="send" class="btn btn-primary" name="submitFeedback" value="Send">
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<script type="text/javascript">
//---------------------change preferences-----------------------------


$('#changePrefBtn').click(function(){
  window.location.href="http://localhost:8080/licenta/preferences.php";
});

//-------------------------data manipulation-------------------------------

var timpPentruVizitare='';
var timpPentruTransportare='';
  var outputText=[];//vector cu informatii pentru fiecare destinatie in parte
  var transportationPrice=0;
  var addresses=[];//vector unde retin adresele obiectivelor
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
  //nr total de minute de vizitat doar destinatiile, fara timpul de transport
  var totalTimes=0;
  for(var i=0;i<times.length;i++){
    totalTimes+=parseInt(times[i]);
  }

  //nr total de destinatii
  var nrDestinatii=destinations.length;
  var origini=[];
  var destinatii=[];
  var pos;

  //------------------------callback function for google maps api-------------------------------------
  function initMap() {
      //---------------------------map initialization--------------------
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 55.53, lng: 9.4},
          zoom: 10
        });

         //--------------------------user position display----------------

        //var stepDisplay = new google.maps.InfoWindow(); 
  
        var userPos = new google.maps.InfoWindow();

  
         //-------------------- Try HTML5 geolocation.--------------------------------
  if (navigator.geolocation) {
    //-------------------------------------pozitia curenta a utilizatorului------------------------------
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      

      //-----------------markerul de pe harta pentru locatia actuala------------------------
      var userIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=A|FF0000|000000';
      

      
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

      //--------------------------------------------directions api-----------------------------

       var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer(
      {
          suppressMarkers: true
      });
      directionsDisplay.setMap(map);

        var bounds = new google.maps.LatLngBounds;
        var markersArray = [];
            //---------------------iconite markeri pt harta-----------------
            var icon1 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=B|FF0000|000000';
            var icon2 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=C|FF0000|000000';
            var icon3 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=D|FF0000|000000';
            var icon4 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=E|FF0000|000000';
            var icon5 = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=F|FF0000|000000';


            //----------------calcul vectori origini si destinatii----------------
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
            //-----------------------lists of origins and destinations from the response----------------
            var originList = response.originAddresses;
            var destinationList = response.destinationAddresses;

            var outputDiv = document.getElementById('output');
            outputDiv.innerHTML = '';

            for(var i=1;i<originList.length;i++){

                //-------------adaug adresele fiecarei destinatii-----------
                addresses.push(originList[i]);
            }

             
            for(var i=0; i<originList.length-1;i++){
                var results = response.rows[i].elements;

              //--------------calcul distanta totala in km-------------
              var res=results[i].distance.text.split(' ');
              var r=res[0].split(',');
              var intreg=parseInt(r[0].split('.')[0]);
              var zecimala=parseInt(r[0].split('.')[1]);
              var dist=intreg+parseFloat(zecimala/10);
              distantaTotala+=parseFloat(dist);

              //--------------------calcul timp total---------------------
              var tes=results[i].duration.text.split(' ');
              if(tes.length==2){//daca are durata mai mica de o ora,adica contine doar minute
                var min=parseInt(tes[0]);
                minuteTotale=minuteTotale+min; 
              }else{//daca are durata mai mare de o ora
                var min=parseInt(tes[2]);//nr minute returnat
                var h=parseInt(tes[0]);//nr ore returnat transformat in minute
                minuteTotale=minuteTotale+min+h;
              }
              
            }

             //-----------calculez distantele intre locatia userului si fiecare destinatie si sortez----------

              var firstDistances=response.rows[0].elements;
              //bubble sort
              for(var i=1;i<firstDistances.length;i++){
                
                for(var j=0;j<firstDistances.length-i;j++){
                  var res=firstDistances[j].distance.text.split(' ');
                  var r=res[0].split('.');
                  var intreg=parseInt(r[0]);
                  var zecimala=parseInt(r[1]);
                  var d=intreg+parseFloat(zecimala/10);
                  var res1=firstDistances[j+1].distance.text.split(' ');
                  var r1=res1[0].split('.');
                  var intreg1=parseInt(r1[0]);
                  var zecimala1=parseInt(r1[1]);
                  var d1=intreg1+parseFloat(zecimala1/10);
                  if(d>d1){
                    //-----------sortarea tuturor vectorilor folositi----------
                    
                    var aux=destinations[j];
                    destinations[j]=destinations[j+1];
                    destinations[j+1]=aux;

                    var aux2=prices[j];
                    prices[j]=prices[j+1];
                    prices[j+1]=aux2;

                    var aux3=times[j];
                    times[j]=times[j+1];
                    times[j+1]=aux3;

                    var aux4=imagesLinks[j];
                    imagesLinks[j]=imagesLinks[j+1];
                    imagesLinks[j+1]=aux4;

                    var aux5=addresses[j];
                    addresses[j]=addresses[j+1];
                    addresses[j+1]=aux5;

                    var aux1=firstDistances[j];
                    firstDistances[j]=firstDistances[j+1];
                    firstDistances[j+1]=aux1;
                    
                  }
                }
              }


          //-----------------------------add markers with images and data to map-----------------------
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
  
    //-----------------------show markers on map--------------------
    for (var i = 0; i < destinations.length; i++) {
    
        geocoder.geocode({'address': destinations[i]},
          showGeocodedAddressOnMap(i));
    }
        
  /*---------------------display google maps directions-----------------------*/
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
          optimizeWaypoints: false,
          travelMode: transportation
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });

   //--------------------------------DISPLAY DETAILED DIRECTIONS--------------------------------

    var directionsDisplay = new google.maps.DirectionsRenderer({
    draggable: false,
    suppressMarkers: true,
    map: map,
    panel: document.getElementById('directions')
  });



 //------------------------output title of destinations------------------
  $('#first .title').html("<p>Your location: "+originList[0]+"</p>");
  $('#second .title').html(destinations[0]);
  $('#third .title').html(destinations[1]);
  $('#fourth .title').html(destinations[2]);
  $('#fifth .title').html(destinations[3]);
  $('#sixth .title').html(destinations[4]);

  //-----------------------output name of destinations into feedback modal------------

  $('#myModal #feedone p').html(destinations[0]);
  $('#myModal #feedtwo p').html(destinations[1]);
  $('#myModal #feedthree p').html(destinations[2]);
  $('#myModal #feedfour p').html(destinations[3]);
  $('#myModal #feedfive p').html(destinations[4]);

  //--------------------------------output prices of destinations---------------------

  $('#second .details ul').append("<li>Price for visiting is: "+prices[0]+" lei</li>");
  $('#third .details ul').append("<li>Price for visiting is: "+prices[1]+" lei</li>");
  $('#fourth .details ul').append("<li>Price for visiting is: "+prices[2]+" lei</li>");
  $('#fifth .details ul').append("<li>Price for visiting is: "+prices[3]+" lei</li>");
  $('#sixth .details ul').append("<li>Price for visiting is: "+prices[4]+" lei</li>");

  //---------------------------output time of visiting for each destination--------------

  $('#second .details ul').append("<li>Time for visiting is: "+times[0]+" minutes</li>");
  $('#third .details ul').append("<li>Time for visiting is: "+times[1]+" minutes</li>");
  $('#fourth .details ul').append("<li>Time for visiting is: "+times[2]+" minutes</li>");
  $('#fifth .details ul').append("<li>Time for visiting is: "+times[3]+" minutes</li>");
  $('#sixth .details ul').append("<li>Time for visiting is: "+times[4]+" minutes</li>");

   //--------------------------------afisare fiecare adresa----------------------------

            $('#second .details ul').append("<li>Address: "+addresses[0]+" </li>");
            $('#third .details ul').append("<li>Address: "+addresses[1]+" </li>");
            $('#fourth .details ul').append("<li>Address: "+addresses[2]+" </li>");
            $('#fifth .details ul').append("<li>Address: "+addresses[3]+" </li>");
            $('#sixth .details ul').append("<li>Address: "+addresses[4]+" </li>");


          //----------------------------calcul timp pentru transportare---------------------

             if(minuteTotale>=60){
                var ore=parseInt(minuteTotale/60);
                var minute=parseInt(minuteTotale%60);
                timpPentruTransportare=ore+' hours '+minute+' minutes';
              }else{
                timpPentruTransportare=minuteTotale+" minutes";
              }

            //------------------------------calcul timp pentru vizitare-----------------------------

            if(totalTimes>=60){
              var visitOre=parseInt(totalTimes/60);
              var visitMin=parseInt(totalTimes%60);
              timpPentruVizitare=visitOre+' hours '+visitMin+' minutes';
            }else{
              timpPentruVizitare=totalTimes+" minutes";
            }


            //---------------------------------------calcul timp total-----------------------------
            
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



<?php
if(isset($_POST['submitFeedback'])){
        $starOne=0;
        $starTwo=0;
        $starThree=0;
        $starFour=0;
        $starFive=0;
        $imgOne="";
        $imgTwo="";
        $imgThree="";
        $imgFour="";
        $imgFive="";

        if(isset($_POST['starone'])){
          $starOne=$_POST['starone'];
          $_SESSION['starOne']=$starOne;
        }
        if(isset($_POST['startwo'])){
          $starTwo=$_POST['startwo'];
          $_SESSION['starTwo']=$starTwo;
        }
        if(isset($_POST['starthree'])){
          $starThree=$_POST['starthree'];
          $_SESSION['starThree']=$starThree;
        }
        if(isset($_POST['starfour'])){
          $starFour=$_POST['starfour'];
          $_SESSION['starFour']=$starFour;
        }
        if(isset($_POST['starfive'])){
          $starFive=$_POST['starfive'];
          $_SESSION['starFive']=$starFive;
        }
       
        $firstStars=getLastStars($_SESSION['first']['destination_id']);
        $totalFirstStars=$firstStars['destination_stars']+$starOne;
        $one=updateDestinationStars($_SESSION['first']['destination_id'],$totalFirstStars);

        $secondStars=getLastStars($_SESSION['second']['destination_id']);
        $totalSecondStars=$secondStars['destination_stars']+$starTwo;
        $two=updateDestinationStars($_SESSION['second']['destination_id'],$totalSecondStars);

        $thirdStars=getLastStars($_SESSION['third']['destination_id']);
        $totalThirdStars=$thirdStars['destination_stars']+$starThree;
        $three=updateDestinationStars($_SESSION['third']['destination_id'],$totalThirdStars);

        $fourthStars=getLastStars($_SESSION['fourth']['destination_id']);
        $totalFourthStars=$fourthStars['destination_stars']+$starFour;
        $four=updateDestinationStars($_SESSION['fourth']['destination_id'],$totalFourthStars);

        $fifthStars=getLastStars($_SESSION['fifth']['destination_id']);
        $totalFifthStars=$fifthStars['destination_stars']+$starFive;
        $five=updateDestinationStars($_SESSION['fifth']['destination_id'],$totalFifthStars);


        if(isset($_FILES['imgOne'])){
          if($_FILES['imgOne']['error']==0){
                  switch ($_FILES['imgOne']['type']) {
                        case 'image/jpg':
                        case 'image/jpeg':
                        case 'image/png':
                        case 'image/gif':
                            $imgOne= uniqid().$_FILES['imgOne']['name'];
                            $_SESSION['feedback']['imgOne']=$imgOne;
                            $r= move_uploaded_file($_FILES['imgOne']['tmp_name'], './images/uploaded/'.$imgOne);
                            break;

                        default:
                            print 'tip necunoscut';
                            break;
                    }
                }
        }
        if(isset($_FILES['imgTwo'])){
          if($_FILES['imgTwo']['error']==0){
                  switch ($_FILES['imgTwo']['type']) {
                        case 'image/jpg':
                        case 'image/jpeg':
                        case 'image/png':
                        case 'image/gif':
                            $imgTwo= uniqid().$_FILES['imgTwo']['name'];
                            $_SESSION['feedback']['imgTwo']=$imgTwo;
                            $r= move_uploaded_file($_FILES['imgTwo']['tmp_name'], './images/uploaded/'.$imgTwo);
                            break;

                        default:
                            print 'tip necunoscut';
                            break;
                    }
                }
        }
        if(isset($_FILES['imgThree'])){
          if($_FILES['imgThree']['error']==0){
                  switch ($_FILES['imgThree']['type']) {
                        case 'image/jpg':
                        case 'image/jpeg':
                        case 'image/png':
                        case 'image/gif':
                            $imgThree= uniqid().$_FILES['imgThree']['name'];
                            $_SESSION['feedback']['imgThree']=$imgThree;
                            $r= move_uploaded_file($_FILES['imgThree']['tmp_name'], './images/uploaded/'.$imgThree);
                            break;

                        default:
                            print 'tip necunoscut';
                            break;
                    }
                }
        }
        if(isset($_FILES['imgFour'])){
          if($_FILES['imgFour']['error']==0){
                  switch ($_FILES['imgFour']['type']) {
                        case 'image/jpg':
                        case 'image/jpeg':
                        case 'image/png':
                        case 'image/gif':
                            $imgFour= uniqid().$_FILES['imgFour']['name'];
                            $_SESSION['feedback']['imgFour']=$imgFour;
                            $r= move_uploaded_file($_FILES['imgFour']['tmp_name'], './images/uploaded/'.$imgFour);
                            break;

                        default:
                            print 'tip necunoscut';
                            break;
                    }
                }
        }
        if(isset($_FILES['imgFive'])){
          if($_FILES['imgFive']['error']==0){
                  switch ($_FILES['imgFive']['type']) {
                        case 'image/jpg':
                        case 'image/jpeg':
                        case 'image/png':
                        case 'image/gif':
                            $imgFive= uniqid().$_FILES['imgFive']['name'];
                            $_SESSION['feedback']['imgFive']=$imgFive;
                            $r= move_uploaded_file($_FILES['imgFive']['tmp_name'], './images/uploaded/'.$imgFive);
                            break;

                        default:
                            print 'tip necunoscut';
                            break;
                    }
                }
        }


        $res=insertFeedback($imgOne,$imgTwo,$imgThree,$imgFour,$imgFive,$starOne,$starTwo,$starThree,$starFour,$starFive);
        if($res){
          $feedId=getLastFeed();
          $_SESSION['feedback']['id']=$feedId['id'];
          $r=updateFeedbackUser($_SESSION['user']['id'],$feedId['id']);
          if($r){
            ?>
            Alert.success('Thank you for your feedback!','Success',{displayDuration: 3000, pos: 'top'})
            <?php
          }else{
            ?>
            Alert.error('error','',{displayDuration: 0})
            <?php
          }
        }
}
?>


//--------------------------------redirectionare catre pagina principala-------------------

$('#homeBtn').on('click',function(){
  window.location.href="http://localhost:8080/licenta";
});

//------------------------------print button------------------------------

function printDiv() 
{
  var destinationsReport='<div id="reportDest" style="margin-bottom: 30px;"><table><thead><tr><th>Destination Name</th><th>Destination Address</th><th>Destination Visiting Price</th><th>Destination Visiting Time</th></tr></thead><tbody>';
  for(var i=0; i<destinations.length;i++){
    destinationsReport+='<tr style="text-align: center;"><td>'+destinations[i]+'</td><td>'+addresses[i]+'</td><td>'+prices[i]+' lei</td><td>'+times[i]+' minutes</td></tr>';
  }
  destinationsReport+='</tbody></table></div>';

  var totalReport= '<div id="reportTotal"><table><thead><tr><th>Transportation Mode</th><th>Total Distance</th><th>Total Price</th><th>Total Time For Visitation</th><th>Total Time For Transportation</th><th>Total Time</th></tr></thead><tbody><tr style="text-align: center;"><td>'+transportation+'</td><td>'+Math.round(distantaTotala*10)/10+' km</td><td>'+totalPrices+' lei</td><td>'+timpPentruVizitare+'</td><td>'+timpPentruTransportare+'</td><td>'+timpTotal+'</td></tr></tbody></table></div>';


  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+destinationsReport+totalReport+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSEybUFjy07vHO-U22J4vYcrvPY5BnUuM&callback=initMap&language=en">
</script>
</body>
</html>


 