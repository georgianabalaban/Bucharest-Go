<?php
session_start();
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$username = isset( $_SESSION['user']['username'] ) ? $_SESSION['user']['username'] : "";
$userId = isset( $_SESSION['user']['id'] ) ? $_SESSION['user']['id'] : "";
$tripId = isset( $_SESSION['trip']['id'] ) ? $_SESSION['trip']['id'] : "";
$questionnareId = isset( $_SESSION['questionnare']['id'] ) ? $_SESSION['questionnare']['id'] : "";

		switch($action){
			case 'signup':{
					$username=$_POST['signup-name'];
					$email=$_POST['signup-email'];
					$password=$_POST['signup-password'];
					$res=insert_user($username,$email,$password);
				    if($res){
				        echo "success";
				    }else{
				        echo "error";
				    }
				    break;
				}
			case 'login':{
					$email=$_POST['login-email'];
					$password=$_POST['login-password'];
					$res=login($email,$password);
					if($res){
				        $r=getTransportMode($res['questionnare_id']);
				        $_SESSION['transportMode']=$r['qsix'];
						$_SESSION['user']['username']=$res['username'];
				        $_SESSION['user']['id']=$res['id'];
				        if($res['trip_id']!=0){
				               $_SESSION['trip']['id']=$res['trip_id'];
				        }
				        if($res['questionnare_id']!=0){
				            $_SESSION['questionnare']['id']=$res['questionnare_id'];
				        }
						echo $_SESSION['user']['username'];
					}else{
						echo"error";
					}
					break;
				}
			case 'logout': {
					logout();
					break;
				}
			case 'questionnare': {
				  if(isset($_POST['six']) && isset($_POST['five']) && isset($_POST['four']) && isset($_POST['three']) && isset($_POST['two']) 
				  	&& isset($_POST['one'])){
					    $_SESSION['transportMode']=$_POST['six'];
					    $res=insertQuestions($_POST['one'],$_POST['two'],$_POST['three'],$_POST['four'],$_POST['five'],$_POST['six']);
					    $question=getLastQuestion();
					    $_SESSION['questionnare']['id']=$question['id'];
					    inserareQuestionnare($question['id'],$_SESSION['user']['id']);



					      //-----------------------------------------history and nature trip-----------------------------------------------------

					        if(($_POST['one']=='historical museums' || $_POST['one']=='parks') && ($_POST['three']=='withoutHurry' || $_POST['three']=='organized') && ($_POST['two']=='books' || $_POST['two']=='compass' || $_POST['two']=='tent') && $_POST['four']=='walk'){
					          $type1=1;
					          $type2=2;
					          $_POSTes=createTrip($type1,$type2,0);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //----------------------------------------history and shopping trip----------------------------------------------------

					        else if(($_POST['one']=='historical museums' || $_POST['one']=='shopping') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && $_POST['two']=='a lot of clothes'){
					          $type1=1;
					          $type2=3;
					          $_POSTes=createTrip($type1,$type2,0);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //----------------------------------------history and art trip---------------------------------------------------------

					        else if(($_POST['one']=='historical museums' || $_POST['one']=='art galleries') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && $_POST['two']=='books'){
					            $type1=1;
					            $type2=4;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //----------------------------------------history and mancare&bautura trip---------------------------------------------

					        else if(($_POST['one']=='historical museums' || $_POST['one']=='have a culinary experience') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized')){
					            $type1=1;
					            $type2=5;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					         //----------------------------------------nature and shopping trip-----------------------------------------------------

					        else if($_POST['one']=='parks' && $_POST['two']=='a lot of clothes' && $_POST['four']=='walk'){
					          $type1=2;
					          $type2=3;
					          $_POSTes=createTrip($type1,$type2,0);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //----------------------------------------nature and art trip----------------------------------------------------------

					        else if(($_POST['one']=='parks' || $_POST['one']=='art galleries') && ($_POST['two']=='books' || $_POST['two']=='tent' || $_POST['two']=='compass') && $_POST['four']=='walk'){
					            $type1=2;
					            $type2=4;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //----------------------------------------nature and mancare&bautura trip----------------------------------------------

					        else if(($_POST['one']=='parks' || $_POST['one']=='have a culinary experience') && ($_POST['two']=='tent' || $_POST['two']=='compass') && $_POST['four']=='walk'){
					            $type1=2;
					            $type2=5;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //----------------------------------------shopping and art trip--------------------------------------------------------
					        else if(($_POST['one']=='shopping' || $_POST['one']=='art galleries') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && ($_POST['two']=='books' ||  $_POST['two']=='a lot of clothes')){
					            $type1=3;
					            $type2=4;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //----------------------------------------shopping and mancare&bautura trip--------------------------------------------
					        else if(($_POST['one']=='shopping' || $_POST['one']=='have a culinary experience') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && $_POST['two']=='a lot of clothes'){
					            $type1=3;
					            $type2=5;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //------------------------------------------history and nature and shopping trip----------------------------------------

					        else if(($_POST['one']=='historical museums' || $_POST['one']=='parks' || $_POST['one']=='shopping') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && ($_POST['two']=='books' || $_POST['two']=='compass' || $_POST['two']=='tent' || $_POST['two']=='a lot of clothes') && $_POST['four']=='walk'){
					          $type1=1;
					          $type2=2;
					          $type3=3;
					          $_POSTes=createTrip($type1,$type2,$type3);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //-----------------------------------------history and nature and art trip----------------------------------------------

					        else if(($_POST['one']=='historical museums' || $_POST['one']=='parks' || $_POST['one']=='art galleries') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && ($_POST['two']=='books' || $_POST['two']=='compass' || $_POST['two']=='tent') && $_POST['four']=='walk'){
					          $type1=1;
					          $type2=2;
					          $type3=4;
					          $_POSTes=createTrip($type1,$type2,$type3);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //-----------------------------------------history and nature and mancare&bautura trip----------------------------------

					         else if(($_POST['one']=='historical museums' || $_POST['one']=='parks' || $_POST['one']=='have a culinary experience') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && ($_POST['two']=='books' || $_POST['two']=='compass' || $_POST['two']=='tent') && $_POST['four']=='walk'){
					          $type1=1;
					          $type2=2;
					          $type3=5;
					          $_POSTes=createTrip($type1,$type2,$type3);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //-----------------------------------------nature and shopping and art trip---------------------------------------------

					        else if($_POST['one']=='parks' && ($_POST['two']=='books' ||  $_POST['two']=='a lot of clothes' || $_POST['one']=='art galleries') && $_POST['four']=='walk'){
					          $type1=2;
					          $type2=3;
					          $type3=4;
					          $_POSTes=createTrip($type1,$type2,$type3);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //-----------------------------------------nature and shopping and mancare&bautura trip---------------------------------

					        else if($_POST['one']=='parks' && ($_POST['two']=='books' ||  $_POST['two']=='a lot of clothes' || $_POST['one']=='have a culinary experience') && $_POST['four']=='walk'){
					          $type1=2;
					          $type2=3;
					          $type3=5;
					          $_POSTes=createTrip($type1,$type2,$type3);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //-----------------------------------------shopping and arta and mancare&bautura trip-----------------------------------

					        else if(($_POST['one']=='shopping' || $_POST['one']=='art galleries' || $_POST['one']=='have a culinary experience') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && ($_POST['two']=='books' || $_POST['two']=='computer' || $_POST['two']=='a lot of clothes')){
					            $type1=3;
					            $type2=4;
					            $type3=5;
					            $_POSTes=createTrip($type1,$type2,$type3);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }


					        else{
					            $_POSTes=createTrip(1,2,3);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					        }

					        //----------------------------------------------------------------------3trips-----------------------------------------------
					        $trip=getTrip($_SESSION['trip']['id']);
  							//get first trip's destinations with lowest price
  							$_SESSION['firstTripDestinations']=getLowestDestinations($trip['typeOne'],$trip['typeTwo'],$trip['typeThree']);

  							//get third trip's destinations with highest price
  							$_SESSION['thirdTripDestinations']=getHighestDestinations($trip['typeOne'],$trip['typeTwo'],$trip['typeThree']);

					        header("location: http://localhost:8080/licenta/3trips.php");

					    }
					    break;
			}
			case 'detailesLowest': {
				$trip=getTrip($_SESSION['trip']['id']);
			    $lowestDest=array();
			    $firstTripDestinations=getLowestDestinations($trip['typeOne'],$trip['typeTwo'],$trip['typeThree']);
			    foreach($firstTripDestinations as $t){
			      array_push($lowestDest, $t['destination_id']);
			    }
			    $res=insertDetails($lowestDest[0],$lowestDest[1],$lowestDest[2],$lowestDest[3],$lowestDest[4]);
			    if($res){
				    $lastDetails=getLastDetails();
				    $_SESSION['details']['id']=$lastDetails['id'];
				    $update=updateDatailsToUser($_SESSION['user']['id'],$_SESSION['details']['id']);
				    $detailsId=getDetailsId($_SESSION['user']['id']);
				    $res=getDetails($detailsId['detailed_destinations_id']);
				    $_SESSION['first']=selectDestination($res['first']);
					$_SESSION['second']=selectDestination($res['second']);
					$_SESSION['third']=selectDestination($res['third']);
					$_SESSION['fourth']=selectDestination($res['fourth']);
					$_SESSION['fifth']=selectDestination($res['fifth']);
				    echo "succes"; 
			    }else{
			      	echo "error";
			    }
			    
				break;
			}
			case 'detailesMedium': {
				$trip=getTrip($_SESSION['trip']['id']);
			    $lowestDest=array();
			    $firstTripDestinations=getLowestDestinations($trip['typeOne'],$trip['typeTwo'],$trip['typeThree']);
			    foreach($firstTripDestinations as $t){
			      array_push($lowestDest, $t['destination_id']);
			    }
			    $highestDest=getHighestDestinations($trip['typeOne'],$trip['typeTwo'],$trip['typeThree']);
			     foreach($highestDest as $t){
			      array_push($lowestDest, $t['destination_id']);
			    }
			    $res=insertDetails($lowestDest[0],$lowestDest[1],$lowestDest[2],$lowestDest[3],$lowestDest[4]);
			    if($res){

			    $lastDetails=getLastDetails();
			    $_SESSION['details']['id']=$lastDetails['id'];
			    $update=updateDatailsToUser($_SESSION['user']['id'],$_SESSION['details']['id']);
			    $detailsId=getDetailsId($_SESSION['user']['id']);
			    $res=getDetails($detailsId['detailed_destinations_id']);
			    $_SESSION['first']=selectDestination($res['first']);
				$_SESSION['second']=selectDestination($res['second']);
				$_SESSION['third']=selectDestination($res['third']);
				$_SESSION['fourth']=selectDestination($res['fourth']);
				$_SESSION['fifth']=selectDestination($res['fifth']);
			    echo "succes"; 
			    }else{
			      echo "error";
			    }
			    
				break;
			}
			case 'detailesHighest': {
				$trip=getTrip($_SESSION['trip']['id']);
			    $lowestDest=array();
			    $firstTripDestinations=getHighestDestinations($trip['typeOne'],$trip['typeTwo'],$trip['typeThree']);
			    foreach($firstTripDestinations as $t){
			      array_push($lowestDest, $t['destination_id']);
			    }
			    $res=insertDetails($lowestDest[0],$lowestDest[1],$lowestDest[2],$lowestDest[3],$lowestDest[4]);
			    if($res){

			    $lastDetails=getLastDetails();
			    $_SESSION['details']['id']=$lastDetails['id'];
			    $update=updateDatailsToUser($_SESSION['user']['id'],$_SESSION['details']['id']);

			     $detailsId=getDetailsId($_SESSION['user']['id']);
			    $res=getDetails($detailsId['detailed_destinations_id']);
			    $_SESSION['first']=selectDestination($res['first']);
				$_SESSION['second']=selectDestination($res['second']);
				$_SESSION['third']=selectDestination($res['third']);
				$_SESSION['fourth']=selectDestination($res['fourth']);
				$_SESSION['fifth']=selectDestination($res['fifth']);
			    echo "succes"; 
			    }else{
			      echo "error";
			    }
			   
				break;
			}
			case 'feedback': {
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
					$starone=$_POST['starone'];
					 echo "<script>console.log( 'Debug Objects: " . $starone . "' );</script>";
				}
				if(isset($_POST['startwo'])){
					$starone=$_POST['startwo'];
				}
				if(isset($_POST['starthree'])){
					$starone=$_POST['starthree'];
				}
				if(isset($_POST['starfour'])){
					$starone=$_POST['starfour'];
				}
				if(isset($_POST['starfive'])){
					$starone=$_POST['starfive'];
				}
				if(isset($_FILES['imgOne'])){
					if($_FILES['imgOne']['error']==0){
	            		switch ($_FILES['imgOne']['type']) {
				                case 'image/jpg':
				                case 'image/jpeg':
				                case 'image/png':
				                case 'image/gif':
				                    $imgOne= uniqid().$_FILES['imgOne']['name'];
				                    $r= move_uploaded_file($_FILES['imgOne']['tmp_name'], 'http://localhost:8080/licenta/images/uploaded/'.$imgOne);
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
				                    $r= move_uploaded_file($_FILES['imgTwo']['tmp_name'], 'http://localhost:8080/licenta/images/uploaded/'.$imgTwo);
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
				                    $r= move_uploaded_file($_FILES['imgThree']['tmp_name'], 'http://localhost:8080/licenta/images/uploaded/'.$imgThree);
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
				                    $r= move_uploaded_file($_FILES['imgFour']['tmp_name'], 'http://localhost:8080/licenta/images/uploaded/'.$imgFour);
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
				                    $r= move_uploaded_file($_FILES['imgFive']['tmp_name'], 'http://localhost:8080/licenta/images/uploaded/'.$imgFive);
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
					$r=updateFeedbackUser($_SESSION['user']['id'],$feedId);
					if($r){
						echo "succes";
					}else{
						echo "error";
					}
				}

				break;
			}
			
			}
	


//connect to database
function conectare_db($host="localhost",$user="root",$password="",$db="licenta"){
    return mysqli_connect($host, $user, $password, $db);
}

//correct data
function test_data($input){
    $input=trim($input);
    $input= htmlspecialchars($input);
    $input= stripcslashes($input);
    return $input;
}

//check if email exists in database
function checkEmail($u){
    $link= conectare_db();
    $u= test_data($u);
    $u= mysqli_real_escape_string($link,$u);
    $query="select * from users where email='$u'";
    $r= mysqli_query($link, $query);
    return mysqli_fetch_array($r);
}

//------------------------------------------------signup-------------------------------------------------
function insert_user($username,$email,$password){
    $link= conectare_db();
    $username= test_data($username);
    $password= test_data($password);
    $email=test_data($email);
    $username= mysqli_real_escape_string($link,$username);
    $password= mysqli_real_escape_string($link,$password);
    $email= mysqli_real_escape_string($link,$email);
    $password= md5($password);
    $res=checkEmail($email);
    $query="insert into users(username,email,password) values('$username','$email','$password')";
    if($res){
        return false;
    }else{
        return mysqli_query($link, $query);   
    }
}

//-----------------------------------------------login-------------------------------------------------------
    function login($u,$p){
    $link= conectare_db();
    $u= test_data($u);
    $p= test_data($p);
    $u= mysqli_real_escape_string($link,$u);
    $p= mysqli_real_escape_string($link,$p);
    $p= md5($p);
    $user= checkEmail($u);
    if($user){
        if($p==$user['password']){
            return $user;
        }else{
            return null;
        }
    }else{
        return null;
    }
}


function getTransportMode($id){
    $link= conectare_db();
    $query="select qsix from questionnare where id='$id'";
     $r= mysqli_query($link, $query);
    return mysqli_fetch_assoc($r);
}

function logout(){
	unset($_SESSION['user']['username']);
	unset($_SESSION['user']['id']);
	if(isset($_SESSION['trip']['id'])){
		unset($_SESSION['trip']['id']);	
	}
	if(isset($_SESSION['questionnare']['id'])){
		unset($_SESSION['questionnare']['id']);	
	}
	session_destroy();
    header("location: http://localhost:8080/licenta/");
}


//---------------------------------------------------------questionnare functions--------------------------------------

function inserareQuestionnare($input,$id){
   $link= conectare_db();
  $query="update users set questionnare_id='$input' where id='$id'";
  return mysqli_query($link,$query);
}
function insertQuestions($qone,$qtwo,$qthree,$qfour,$qfive,$qsix){
  $link= conectare_db();
  $query="insert into questionnare(qone, qtwo, qthree, qfour, qfive, qsix) values('$qone','$qtwo','$qthree','$qfour','$qfive','$qsix')";
  return mysqli_query($link, $query);
}
function getLastQuestion(){
  $link= conectare_db();
  $query="select * from questionnare order by id desc limit 1";
   $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}
function selectDestinations($input){
  $link= conectare_db();
  $query="select * from questionnare where destination_type='$input'";
  $res=mysqli_query($link, $query);
  $vector=array();
  while ($r=mysqli_fetch_array($res)){
    array_push($vector, $r);
  }
  return $vector;
}
function insertTripToUser($input,$id){
  $link= conectare_db();
  $query="update users set trip_id='$input' where id='$id'";
  return mysqli_query($link,$query);
}
function createTrip($type1,$type2,$type3){
  $link= conectare_db();
  $query="insert into trips(typeOne,typeTwo,typeThree) values('$type1','$type2','$type3')";
  return mysqli_query($link, $query);
}
function getLastTrip(){
  $link= conectare_db();
  $query="select * from trips order by id desc limit 1";
   $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}


//----------------------------------------------------------3trips functions------------------------------------
function getTrip($id){
  $link= conectare_db();
  $query="select * from trips where id='$id'";
   $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}
function getLowestDestinations($type1,$type2,$type3){
  $link= conectare_db();
  $query="select * from destinations where destination_type='$type1' or destination_type='$type2' or destination_type='$type3' order by destination_price asc limit 5";
  $res=mysqli_query($link, $query);
  if($res){
    $vector=array();
    while ($r=mysqli_fetch_array($res)){
      array_push($vector, $r);
    }
    return $vector;
  }else{
    return false;
  } 
}
function getHighestDestinations($type1,$type2,$type3){
  $link= conectare_db();
  $query="select * from destinations where destination_type='$type1' or destination_type='$type2' or destination_type='$type3' order by destination_price desc limit 5";
  $res=mysqli_query($link, $query);
  if($res){
    $vector=array();
    while ($r=mysqli_fetch_array($res)){
      array_push($vector, $r);
    }
    return $vector;
  }else{
    return false;
  }
}

function insertDetails($first,$second,$third,$fourth,$fifth){
  $link= conectare_db();
  $query="insert into detailed_destinations(first,second,third,fourth,fifth) values('$first','$second','$third','$fourth','$fifth')";
  return mysqli_query($link, $query);
}
function getLastDetails(){
  $link= conectare_db();
  $query="select id from detailed_destinations order by id desc limit 1";
  $res=mysqli_query($link, $query);
  return mysqli_fetch_assoc($res);
}
function updateDatailsToUser($user,$id){
  $link= conectare_db();
  $query="update users set detailed_destinations_id='$id' where id='$user'";
  return mysqli_query($link, $query);
}

//----------------------------------------------------------------feedback functions-------------------------------------------------------

function insertFeedback($imgOne,$imgTwo,$imgThree,$imgFour,$imgFive,$starOne,$starTwo,$starThree,$starFour,$starFive){
	$link= conectare_db();
	$query="insert into feedback(imgOne,imgTwo,imgThree,imgFour,imgFive,starOne,starTwo,starThree,starFour,starFive) values('$imgOne','$imgTwo','$imgThree','$imgFour','$imgFive','$starOne','$starTwo','$starThree','$starFour','$starFive')";
	return mysqli_query($link, $query);
}

function getLastFeed(){
  $link= conectare_db();
  $query="select id from feedback order by id desc limit 1";
  $res=mysqli_query($link, $query);
  return mysqli_fetch_assoc($res);
}

function updateFeedbackUser($user,$id){
  $link= conectare_db();
  $query="update users set feedback_id='$id' where id='$user'";
  return mysqli_query($link, $query);
}

function getDetails($id){
$link= conectare_db();
  $query="select * from detailed_destinations where id='$id'";
   $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}
function selectDestination($id){
  $link= conectare_db();
  $query="select * from destinations where destination_id='$id'";
   $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}
function getDetailsId($id){
  $link= conectare_db();
  $query="select * from users where id='$id'";
   $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}
