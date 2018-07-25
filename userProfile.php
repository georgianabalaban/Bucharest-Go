<?php
require_once('db/sql.php');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost:8080/licenta/css/userProfile-css.css">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 user-details">
            <div class="user-image">
            	<span  class="glyphicon glyphicon-user img-circle"></span>
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3><?php echo $_SESSION['user']['username']; ?></h3>
                </div>
                <ul class="navigation">
                    <li class="active">
                        <a data-toggle="tab" href="#information">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#settings">
                            <span class="glyphicon glyphicon-cog"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#email">
                            <span class="glyphicon glyphicon-stats"></span>
                        </a>
                    </li>
                </ul>
                <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4 class="tabTitle">Trip Information</h4>
                            <h5 id="noInfo">No information to display yet.</h5>
                              <div class="card" id="firstCard">
							  </div>
							  <div class="card" id="secondCard">
							  </div>
							  <div class="card" id="thirdCard">
							  </div>
							  <div class="card" id="fourthCard">
							  </div>
							  <div class="card" id="fifthCard">
							  </div>
                        </div>
                        <div id="settings" class="tab-pane">
                            <h4 class="tabTitle">Change your settings</h4>
                            <form id="userForm" method="post">
                            	<input type="text" name="userName" id="userName" class="input" placeholder="Name" />
	                			<input type="email" name="userEmail" id="userEmail" class="input" placeholder="Email"/>
	                			<input type="password" name="userPassword" id="userPassword" class="input" placeholder="Password" />
	                			<input type="submit" name="submit" id="submitBtn" value="Change"/>
                            </form>
                        </div>
                        <div id="email" class="tab-pane">
                            <h4 class="tabTitle">Statistics</h4>
                            <div id="pie-chart"></div>
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>


	$('#userName').val('<?php echo $_SESSION['user']['username']; ?>');
	$('#userEmail').val('<?php echo $_SESSION['user']['email']; ?>');
	console.log('<?php echo $_SESSION['user']['username']; ?>');

//-------------------user destination cards----------------------

<?php if(!isset($_SESSION['trip']['id'])){
	?>
	$('#firstCard').hide();
	$('#secondCard').hide();
	$('div#thirdCard').hide();
	$('#fourthCard').hide();
	$('#fifthCard').hide();
	$('#noInfo').show();
	<?php
}else{
	?>
	$('#firstCard').append('<h3 class="title">1. <?php echo $_SESSION['first']['destination_name']; ?></h3>');
	$('#secondCard').append('<h3 class="title">2. <?php echo $_SESSION['second']['destination_name']; ?></h3>');
	$('#thirdCard').append('<h3 class="title">3. <?php echo $_SESSION['third']['destination_name']; ?></h3>');
	$('#fourthCard').append('<h3 class="title">4. <?php echo $_SESSION['fourth']['destination_name']; ?></h3>');
	$('#fifthCard').append('<h3 class="title">5. <?php echo $_SESSION['fifth']['destination_name']; ?></h3>');
	$('.card').show();
	$('#noInfo').hide();
	<?php
}
if(isset($_SESSION['feedback']['id'])){
	if(isset($_SESSION['feedback']['imgOne'])){
		?>
		$('#firstCard').append('<div class="box"><h4>Uploaded image:</h4><img class="image" src="http://localhost:8080/licenta/images/uploaded/<?php echo $_SESSION['feedback']['imgOne']; ?>"/></div>');
		<?php
	}
	if(isset($_SESSION['feedback']['imgTwo'])){
		?>
		$('#secondCard').append('<div class="box"><h4>Uploaded image:</h4><img class="image" src="http://localhost:8080/licenta/images/uploaded/<?php echo $_SESSION['feedback']['imgTwo']; ?>"/></div>');
		<?php
	}
	if(isset($_SESSION['feedback']['imgThree'])){
		?>
		$('#thirdCard').append('<div class="box"><h4>Uploaded image:</h4><img class="image" src="http://localhost:8080/licenta/images/uploaded/<?php echo $_SESSION['feedback']['imgThree']; ?>"/></div>');
		<?php
	}
	if(isset($_SESSION['feedback']['imgFour'])){
		?>
		$('#fourthCard').append('<div class="box"><h4>Uploaded image:</h4><img class="image" src="http://localhost:8080/licenta/images/uploaded/<?php echo $_SESSION['feedback']['imgFour']; ?>"/></div>');
		<?php
	}
	if(isset($_SESSION['feedback']['imgFive'])){
		?>
		$('#fifthCard').append('<div class="box"><h4>Uploaded image:</h4><img class="image" src="http://localhost:8080/licenta/images/uploaded/<?php echo $_SESSION['feedback']['imgFive']; ?>"/></div>');
		<?php
	}
	if(isset($_SESSION['starOne'])){
		?>
		$('#firstCard').append('<div class="box"><h4>Given grade: <?php echo  $_SESSION['starOne']; ?> / 5</h4></div>');
		<?php
	}
	if(isset($_SESSION['starTwo'])){
		?>
		$('#secondCard').append('<div class="box"><h4>Given grade: <?php echo  $_SESSION['starTwo']; ?> / 5</h4></div>');
		<?php
	}
	if(isset($_SESSION['starThree'])){
		?>
		$('#thirdCard').append('<div class="box"><h4>Given grade: <?php echo  $_SESSION['starThree']; ?> / 5</h4></div>');
		<?php
	}
	if(isset($_SESSION['starFour'])){
		?>
		$('#fourthCard').append('<div class="box"><h4>Given grade: <?php echo  $_SESSION['starFour']; ?> / 5</h4></div>');
		<?php
	}
	if(isset($_SESSION['starFive'])){
		?>
		$('#fifthCard').append('<div class="box"><h4>Given grade: <?php echo  $_SESSION['starFive']; ?> / 5</h4></div>');
		<?php
	}
	?>
	$('.card .box').show();
	<?php
}
?>


//-------------------alert js-------------
var Alert = undefined;

(function(Alert) {
  var alert, error, info, success, warning, _container;
  info = function(message, title, options) {
    return alert("info", message, title, "icon-info-sign", options);
  };
  warning = function(message, title, options) {
    return alert("warning", message, title, "icon-warning-sign", options);
  };
  error = function(message, title, options) {
    return alert("error", message, title, "icon-minus-sign", options);
  };
  success = function(message, title, options) {
    return alert("success", message, title, "icon-ok-sign", options);
  };
  alert = function(type, message, title, icon, options) {
    var alertElem, messageElem, titleElem, iconElem, innerElem, _container;
    if (typeof options === "undefined") {
      options = {};
    }
    options = $.extend({}, Alert.defaults, options);
    if (!_container) {
      _container = $("#alerts");
      if (_container.length === 0) {
        _container = $("<ul>").attr("id", "alerts").appendTo($("body"));
      }
    }
    if (options.width) {
      _container.css({
        width: options.width
      });
    }
      alertElem = $("<li>").addClass("alert").addClass("alert-" + type);
      setTimeout(function() {
         alertElem.addClass('open');
      }, 1);
    if (icon) {
      iconElem = $("<i>").addClass(icon);
      alertElem.append(iconElem);
    }
    innerElem = $("<div>").addClass("alert-block");
    alertElem.append(innerElem);
    if (title) {
      titleElem = $("<div>").addClass("alert-title").append(title);
      innerElem.append(titleElem);
    }
    if (message) {
      messageElem = $("<div>").addClass("alert-message").append(message);
      innerElem.append(messageElem);
    }
    if (options.displayDuration > 0) {
      setTimeout((function() {
        leave();
      }), options.displayDuration);
    } else {
      innerElem.append("<em>Click to Dismiss</em>");
    }
    alertElem.on("click", function() {
      leave();
    });
     function leave() {
         alertElem.removeClass('open');
          alertElem.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',  function() { return alertElem.remove(); });
    }
    return _container.prepend(alertElem);
  };
  Alert.defaults = {
    width: "",
    icon: "",
    displayDuration: 3000,
    pos: ""
  };
  Alert.info = info;
  Alert.warning = warning;
  Alert.error = error;
  Alert.success = success;
  return _container = void 0;
    
   
})(Alert || (Alert = {}));

this.Alert = Alert;

//-----------------------------ajax form-----------------------------

$('#test').on('click', function() {
  Alert.info('Message');
  });
$('#userForm').on('submit', function(e){
	e.preventDefault();
    if(($('#userName')=="") || ($('#userEmail')=="") || ($('#userPassword')=="")){
    	Alert.warning('You need to fill all inputs!','');
    } else{
    	$.ajax({
    		  type: 'post',
	          url: './db/sql.php?action=userProfile',
	          data: $('#userForm').serialize(),
	          success: function (res) {
	            if(res=="success"){
	              Alert.success('You have changed your information with success!','Success',{displayDuration: 3000, pos: 'top'})
	              $('#userName').val('');
	              $('#userEmail').val('');
	              $('#userPassword').val('');
	            }else{
	              Alert.error('error','',{displayDuration: 0})
	            }
	              
	          }
    	});
    }
})

//------------------------pie chart-------------------------
<?php
if(isset($_SESSION['typeHistory']) && isset($_SESSION['typeNature']) && isset($_SESSION['typeShopping']) && isset($_SESSION['typeArt']) && isset($_SESSION['typeFoodDrink'])){
?>
$('#printBtn').show();
var total=<?php echo $_SESSION['typeHistory']+$_SESSION['typeNature']+$_SESSION['typeShopping']+$_SESSION['typeArt']+$_SESSION['typeFoodDrink']; ?>;
var historyProcent=(<?php echo $_SESSION['typeHistory']; ?>/total)*100;
var natureProcent=(<?php echo $_SESSION['typeNature']; ?>/total)*100;
var shoppingProcent=(<?php echo $_SESSION['typeShopping']; ?>/total)*100;
var artProcent=(<?php echo $_SESSION['typeArt']; ?>/total)*100;
var foodDrinkProcent=(<?php echo $_SESSION['typeFoodDrink']; ?>/total)*100;
var JSON = [
  {
    "year":"HISTORY",
    "qData":[historyProcent, 8, 6, 7]
  },
  {
    "year":"NATURE",
    "qData":[natureProcent, 3, 1, 2]
  },
  {
    "year":"SHOPPING",
    "qData":[shoppingProcent, 4, 2, 3]
  },
  {
    "year":"ART",
    "qData":[artProcent, 4.6, 2.3, 3.5]
  },
  {
    "year":"FOOD AND DRINK",
    "qData":[foodDrinkProcent, 8.3, 4, 6]
  }
];

// Load the Visualization API and the piechart package.
google.load('visualization', '1.0', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {

  // Create the data table.
  var data = new google.visualization.DataTable();
  var arr = [];
  data.addColumn('string', 'Year');
  data.addColumn('number', 'Q1');
  for(var i=0;i<JSON.length;i++){
    arr.push([JSON[i].year,JSON[i].qData[0]]);
  }
  data.addRows(arr);
  // Set chart options
  var options = {'title':'Type of destination chosen',
                 'width':700,
                 'height':550,
                 'legend':{
                   "position":"labeled",
                   "textStyle": { 
                       "color": "black",
                       "fontSize": "14",
                       "bold": "true",
                       "format": "##%"
                  }
                 },
                 'pieSliceText':"none"
                };

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.PieChart(document.getElementById('pie-chart'));
  chart.draw(data, options);
}
<?php
} else{
	?>
	$('#chart').hide();
	<?php
}
?>

//------------------------------bar chart---------------------------
//chart data

<?php
if(isset($_SESSION['starOne']) && isset($_SESSION['starTwo']) && isset($_SESSION['starThree']) && isset($_SESSION['starFour']) && isset($_SESSION['starFive'])){
?>
var chartjson = {
  "title": "Destinations ratings",
  "data": [{
    "name": "<?php echo $_SESSION['first']['destination_name']; ?>",
    "score": <?php echo  $_SESSION['starOne']; ?> *100 /5
  }, {
    "name": "<?php echo $_SESSION['second']['destination_name']; ?>",
    "score": <?php echo  $_SESSION['starTwo']; ?> *100/5
  }, {
    "name": "<?php echo $_SESSION['third']['destination_name']; ?>",
    "score": <?php echo  $_SESSION['starThree']; ?> *100/5
  }, {
    "name": "<?php echo $_SESSION['fourth']['destination_name']; ?>",
    "score": <?php echo  $_SESSION['starFour']; ?> *100/5
  }, {
    "name": "<?php echo $_SESSION['fifth']['destination_name']; ?>",
    "score": <?php echo  $_SESSION['starFive']; ?> *100/5
  }],
  "xtitle": "Secured Marks",
  "ytitle": "Marks",
  "ymax": 100,
  "ykey": 'score',
  "xkey": "name",
  "prefix": "%"
}

//chart colors
var colors = ['one', 'two', 'three', 'four', 'five'];

//constants
var TROW = 'tr',
  TDATA = 'td';

var chart = document.createElement('div');
//create the chart canvas
var barchart = document.createElement('table');
//create the title row
var titlerow = document.createElement(TROW);
//create the title data
var titledata = document.createElement(TDATA);
//make the colspan to number of records
titledata.setAttribute('colspan', chartjson.data.length + 1);
titledata.setAttribute('class', 'charttitle');
titledata.innerText = chartjson.title;
titlerow.appendChild(titledata);
barchart.appendChild(titlerow);
chart.appendChild(barchart);

//create the bar row
var barrow = document.createElement(TROW);

//lets add data to the chart
for (var i = 0; i < chartjson.data.length; i++) {
  barrow.setAttribute('class', 'bars');
  var prefix = chartjson.prefix || '';
  //create the bar data
  var bardata = document.createElement(TDATA);
  var bar = document.createElement('div');
  bar.setAttribute('class', colors[i]);
  bar.style.marginRight="20px";
  bar.style.height = chartjson.data[i][chartjson.ykey] + prefix;
  bardata.innerText = chartjson.data[i][chartjson.ykey] + prefix;
  bardata.appendChild(bar);
  barrow.appendChild(bardata);
}

//create legends
var legendrow = document.createElement(TROW);
var legend = document.createElement(TDATA);
legend.setAttribute('class', 'legend');
legend.setAttribute('colspan', chartjson.data.length);

//add legend data
for (var i = 0; i < chartjson.data.length; i++) {
  var legbox = document.createElement('span');
  legbox.setAttribute('class', 'legbox');
  var barname = document.createElement('span');
  barname.setAttribute('class', colors[i] + ' xaxisname');
  var bartext = document.createElement('span');
  bartext.innerText = chartjson.data[i][chartjson.xkey];
  legbox.appendChild(barname);
  legbox.appendChild(bartext);
  legend.appendChild(legbox);
}
barrow.appendChild(legend);
barchart.appendChild(barrow);
barchart.appendChild(legendrow);
chart.appendChild(barchart);
document.getElementById('chart').innerHTML = chart.outerHTML;
<?php
}
?>
</script>
</body>
</html>

