<?php
session_start();
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
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
						$_SESSION['user']['email']=$res['email'];
				        $_SESSION['user']['id']=$res['id'];
				        if($res['trip_id']!=0){
				               $_SESSION['trip']['id']=$res['trip_id'];
				               //$detailsId=getDetailsId($_SESSION['user']['id']);
							    //$details=getDetails($detailsId['detailed_destinations_id']);
				               $destinations=selectAllDestinations($_SESSION['user']['id']);
				               foreach($destinations as $dest){
				               	echo $dest['destination_id'];
				               }
							    /*$_SESSION['first']=selectDestination($details['detail_1']);
								$_SESSION['second']=selectDestination($details['detail_2']);
								$_SESSION['third']=selectDestination($details['detail_3']);
								$_SESSION['fourth']=selectDestination($details['detail_4']);
								$_SESSION['fifth']=selectDestination($details['detail_5']);*/

								$types=selectTripType($detailsId['detailed_destinations_id']);
								 $_SESSION['typeHistory']=$types['history'];
						          $_SESSION['typeNature']=$types['nature'];
						          $_SESSION['typeShopping']=$types['shopping'];
						          $_SESSION['typeArt']=$types['art'];
						          $_SESSION['typeFoodDrink']=$types['food_drink'];
				        }
				        if($res['questionnare_id']!=0){
				            $_SESSION['questionnare']['id']=$res['questionnare_id'];
				        }
				        echo $_SESSION['user']['username'];
					}else{
						echo "error";
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
					          $tripTypes=insertTripTypes(5,5,1,1,1);
					          $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=5;
					          $_SESSION['typeNature']=5;
					          $_SESSION['typeShopping']=1;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=1;
					        }

					        //----------------------------------------history and shopping trip----------------------------------------------------

					        else if(($_POST['one']=='historical museums' || $_POST['one']=='shopping') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && $_POST['two']=='a lot of clothes'){
					          $type1=1;
					          $type2=3;
					          $_POSTes=createTrip($type1,$type2,0);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					          $tripTypes=insertTripTypes(5,1,5,1,1);
					          $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=5;
					          $_SESSION['typeNature']=1;
					          $_SESSION['typeShopping']=5;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=1;
					        }

					        //----------------------------------------history and art trip---------------------------------------------------------

					        else if(($_POST['one']=='historical museums' || $_POST['one']=='art galleries') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && $_POST['two']=='books'){
					            $type1=1;
					            $type2=4;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					            $tripTypes=insertTripTypes(5,1,1,5,1);
					            $idTypes=getLastTripTypes();
					          	insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
						          $_SESSION['typeHistory']=5;
						          $_SESSION['typeNature']=1;
						          $_SESSION['typeShopping']=1;
						          $_SESSION['typeArt']=5;
						          $_SESSION['typeFoodDrink']=1;
					        }

					        //----------------------------------------history and mancare&bautura trip---------------------------------------------

					        else if(($_POST['one']=='historical museums' || $_POST['one']=='have a culinary experience') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized')){
					            $type1=1;
					            $type2=5;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					            $tripTypes=insertTripTypes(5,1,1,1,5);
					            $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
						          $_SESSION['typeHistory']=5;
						          $_SESSION['typeNature']=1;
						          $_SESSION['typeShopping']=1;
						          $_SESSION['typeArt']=1;
						          $_SESSION['typeFoodDrink']=5;
					        }

					         //----------------------------------------nature and shopping trip-----------------------------------------------------

					        else if($_POST['one']=='parks' && $_POST['two']=='a lot of clothes' && $_POST['four']=='walk'){
					          $type1=2;
					          $type2=3;
					          $_POSTes=createTrip($type1,$type2,0);
					          $trip=getLastTrip();
					          $_SESSION['trip']['id']=$trip['id'];
					          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					          $tripTypes=insertTripTypes(1,5,5,1,1);
					          $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=5;
					          $_SESSION['typeShopping']=5;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=1;
					        }

					        //----------------------------------------nature and art trip----------------------------------------------------------

					        else if(($_POST['one']=='parks' || $_POST['one']=='art galleries') && ($_POST['two']=='books' || $_POST['two']=='tent' || $_POST['two']=='compass') && $_POST['four']=='walk'){
					            $type1=2;
					            $type2=4;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					            $tripTypes=insertTripTypes(1,5,1,5,1);
					            $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=5;
					          $_SESSION['typeShopping']=1;
					          $_SESSION['typeArt']=5;
					          $_SESSION['typeFoodDrink']=1;
					        }

					        //----------------------------------------nature and mancare&bautura trip----------------------------------------------

					        else if(($_POST['one']=='parks' || $_POST['one']=='have a culinary experience') && ($_POST['two']=='tent' || $_POST['two']=='compass') && $_POST['four']=='walk'){
					            $type1=2;
					            $type2=5;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					            $tripTypes=insertTripTypes(1,5,1,1,5);
					            $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=5;
					          $_SESSION['typeShopping']=1;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=5;
					        }

					        //----------------------------------------shopping and art trip--------------------------------------------------------
					        else if(($_POST['one']=='shopping' || $_POST['one']=='art galleries') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && ($_POST['two']=='books' ||  $_POST['two']=='a lot of clothes')){
					            $type1=3;
					            $type2=4;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					            $tripTypes=insertTripTypes(1,1,5,5,1);
					            $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=1;
					          $_SESSION['typeShopping']=5;
					          $_SESSION['typeArt']=5;
					          $_SESSION['typeFoodDrink']=1;
					        }

					        //----------------------------------------shopping and mancare&bautura trip--------------------------------------------
					        else if(($_POST['one']=='shopping' || $_POST['one']=='have a culinary experience') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && $_POST['two']=='a lot of clothes'){
					            $type1=3;
					            $type2=5;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					            $tripTypes=insertTripTypes(1,1,5,1,5);
					            $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=1;
					          $_SESSION['typeShopping']=5;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=5;
					        }

					        //------------------------------------------art and mancare&bautura trip-------------------------------------------------
					        else if(($_POST['one']=='art galleries' || $_POST['one']=='have a culinary experience') && ($_POST['three']=='withoutHurry' || $_POST['three']=='unorganized' || $_POST['three']=='organized') && $_POST['two']=='books'){
					            $type1=4;
					            $type2=5;
					            $_POSTes=createTrip($type1,$type2,0);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					            $tripTypes=insertTripTypes(1,1,1,5,5);
					            $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=1;
					          $_SESSION['typeShopping']=1;
					          $_SESSION['typeArt']=5;
					          $_SESSION['typeFoodDrink']=5;
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
					          $tripTypes=insertTripTypes(4,4,4,1,1);
					          $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=4;
					          $_SESSION['typeNature']=4;
					          $_SESSION['typeShopping']=4;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=1;
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
					          $tripTypes=insertTripTypes(4,4,1,4,1);
					          $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=4;
					          $_SESSION['typeNature']=4;
					          $_SESSION['typeShopping']=1;
					          $_SESSION['typeArt']=4;
					          $_SESSION['typeFoodDrink']=1;
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
					          $tripTypes=insertTripTypes(4,4,1,1,4);
					          $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=4;
					          $_SESSION['typeNature']=4;
					          $_SESSION['typeShopping']=1;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=4;
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
					          $tripTypes=insertTripTypes(1,4,4,4,1);
					          $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=4;
					          $_SESSION['typeShopping']=4;
					          $_SESSION['typeArt']=4;
					          $_SESSION['typeFoodDrink']=1;
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
					          $tripTypes=insertTripTypes(1,4,4,1,4);
					          $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=4;
					          $_SESSION['typeShopping']=4;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=4;
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
					            $tripTypes=insertTripTypes(1,1,4,4,4);
					            $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=1;
					          $_SESSION['typeNature']=1;
					          $_SESSION['typeShopping']=4;
					          $_SESSION['typeArt']=4;
					          $_SESSION['typeFoodDrink']=4;
					        }


					        else{
					            $_POSTes=createTrip(1,2,3);
					            $trip=getLastTrip();
					            $_SESSION['trip']['id']=$trip['id'];
					            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
					            $tripTypes=insertTripTypes(4,4,4,1,1);
					            $idTypes=getLastTripTypes();
					          insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
					          $_SESSION['typeHistory']=4;
					          $_SESSION['typeNature']=4;
					          $_SESSION['typeShopping']=4;
					          $_SESSION['typeArt']=1;
					          $_SESSION['typeFoodDrink']=1;
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
			    $lowestDest=array();
			    foreach($_SESSION['firstTripDestinations'] as $t){
			      array_push($lowestDest, $t['destination_id']);
			    }
			    //$res=insertDetails($lowestDest[0],$lowestDest[1],$lowestDest[2],$lowestDest[3],$lowestDest[4]);
			    deleteDestionations($_SESSION['user']['id']);
			    $res1=insertDestination($_SESSION['user']['id'],$lowestDest[0]);
			    $res2=insertDestination($_SESSION['user']['id'],$lowestDest[1]);
			    $res3=insertDestination($_SESSION['user']['id'],$lowestDest[2]);
			    $res4=insertDestination($_SESSION['user']['id'],$lowestDest[3]);
			    $res5=insertDestination($_SESSION['user']['id'],$lowestDest[4]);
			    if($res1 && $res2 && $res3 && $res4 && $res5){
				    //$lastDetails=getLastDetails();
				    //$_SESSION['details']['id']=$lastDetails['id'];
				    //$update=updateDatailsToUser($_SESSION['user']['id'],$_SESSION['details']['id']);
				    //$detailsId=getDetailsId($_SESSION['user']['id']);
				    //$res=getDetails($detailsId['detailed_destinations_id']);
				    $_SESSION['first']=selectDestination($lowestDest[0]);
					$_SESSION['second']=selectDestination($lowestDest[1]);
					$_SESSION['third']=selectDestination($lowestDest[2]);
					$_SESSION['fourth']=selectDestination($lowestDest[3]);
					$_SESSION['fifth']=selectDestination($lowestDest[4]);
				    echo "succes"; 
			    }else{
			      	echo "error";
			    }
			    
				break;
			}
			case 'detailesMedium': {
			    $mediumDest=array();
			    foreach($_SESSION['firstTripDestinations'] as $t){
			      array_push($mediumDest, $t['destination_id']);
			    }
			     foreach($_SESSION['thirdTripDestinations'] as $t){
			      array_push($mediumDest, $t['destination_id']);
			    }
			    //$res=insertDetails($mediumDest[0],$mediumDest[1],$mediumDest[2],$mediumDest[5],$mediumDest[6]);
			    deleteDestionations($_SESSION['user']['id']);
			    $res1=insertDestination($_SESSION['user']['id'],$mediumDest[0]);
			    $res2=insertDestination($_SESSION['user']['id'],$mediumDest[1]);
			    $res3=insertDestination($_SESSION['user']['id'],$mediumDest[2]);
			    $res4=insertDestination($_SESSION['user']['id'],$mediumDest[5]);
			    $res5=insertDestination($_SESSION['user']['id'],$mediumDest[6]);
			    if($res1 && $res2 && $res3 && $res4 && $res5){

			    //$lastDetails=getLastDetails();
			    //$_SESSION['details']['id']=$lastDetails['id'];
			    //$update=updateDatailsToUser($_SESSION['user']['id'],$_SESSION['details']['id']);
			    //$detailsId=getDetailsId($_SESSION['user']['id']);
			    //$res=getDetails($detailsId['detailed_destinations_id']);
			    $_SESSION['first']=selectDestination($mediumDest[0]);
				$_SESSION['second']=selectDestination($mediumDest[1]);
				$_SESSION['third']=selectDestination($mediumDest[2]);
				$_SESSION['fourth']=selectDestination($mediumDest[5]);
				$_SESSION['fifth']=selectDestination($mediumDest[6]);
			    echo "succes"; 
			    }else{
			      echo "error";
			    }
			    
				break;
			}
			case 'detailesHighest': {
			    $highestDest=array();
			    foreach($_SESSION['thirdTripDestinations'] as $t){
			      array_push($highestDest, $t['destination_id']);
			    }
			    //$res=insertDetails($highestDest[0],$highestDest[1],$highestDest[2],$highestDest[3],$highestDest[4]);
			    deleteDestionations($_SESSION['user']['id']);
			    $res1=insertDestination($_SESSION['user']['id'],$highestDest[0]);
			    $res2=insertDestination($_SESSION['user']['id'],$highestDest[1]);
			    $res3=insertDestination($_SESSION['user']['id'],$highestDest[2]);
			    $res4=insertDestination($_SESSION['user']['id'],$highestDest[3]);
			    $res5=insertDestination($_SESSION['user']['id'],$highestDest[4]);
			    if($res1 && $res2 && $res3 && $res4 && $res5){
			    //$lastDetails=getLastDetails();
			    //$_SESSION['details']['id']=$lastDetails['id'];
			    //$update=updateDatailsToUser($_SESSION['user']['id'],$_SESSION['details']['id']);
			    //$detailsId=getDetailsId($_SESSION['user']['id']);
			    //$res=getDetails($detailsId['detailed_destinations_id']);
			    $_SESSION['first']=selectDestination($highestDest[0]);
				$_SESSION['second']=selectDestination($highestDest[1]);
				$_SESSION['third']=selectDestination($highestDest[2]);
				$_SESSION['fourth']=selectDestination($highestDest[3]);
				$_SESSION['fifth']=selectDestination($highestDest[4]);
			    echo "succes"; 
			    }else{
			      echo "error";
			    }
			   
				break;
			}
			case 'preferences': {
				$history=1;
				$nature=1;
				$shopping=1;
				$art=1;
				$food_drink=1;
				if(isset($_POST['rangeOne'])){
					$history=$_POST['rangeOne']/10;
				}
				if(isset($_POST['rangeTwo'])){
					$nature=$_POST['rangeTwo']/10;
				}
				if(isset($_POST['rangeThree'])){
					$shopping=$_POST['rangeThree']/10;
				}
				if(isset($_POST['rangeFour'])){
					$art=$_POST['rangeFour']/10;
				}
				if(isset($_POST['rangeFive'])){
					$food_drink=$_POST['rangeFive']/10;
				}
				$res=insertTripTypes($history,$nature,$shopping,$art,$food_drink);
				$idTypes=getLastTripTypes();
				insertTripTypesToUser($idTypes['id'],$_SESSION['user']['id']);
				$_SESSION['typeHistory']=$history;
		        $_SESSION['typeNature']=$nature;
		        $_SESSION['typeShopping']=$shopping;
		        $_SESSION['typeArt']=$art;
		        $_SESSION['typeFoodDrink']=$food_drink;
				//-----------------------------------------history and nature trip-----------------------------------------------------
				if(($history>=4) && ($nature>=4)){
					 $type1=1;
			          $type2=2;
			          $_POSTes=createTrip($type1,$type2,0);
			          $trip=getLastTrip();
			          $_SESSION['trip']['id']=$trip['id'];
			          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
				}

				//----------------------------------------history and shopping trip----------------------------------------------------
				else if(($history>=4) && ($shopping>=4)){
					$type1=1;
		          $type2=3;
		          $_POSTes=createTrip($type1,$type2,0);
		          $trip=getLastTrip();
		          $_SESSION['trip']['id']=$trip['id'];
		          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}
				//----------------------------------------history and art trip---------------------------------------------------------
				else if(($history>=4) && ($art>=4)){
					 $type1=1;
		            $type2=4;
		            $_POSTes=createTrip($type1,$type2,0);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}
				//----------------------------------------history and mancare&bautura trip---------------------------------------------
				else if(($history>=4) && ($food_drink>=4)){
					$type1=1;
		            $type2=5;
		            $_POSTes=createTrip($type1,$type2,0);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
				}
				 //----------------------------------------nature and shopping trip-----------------------------------------------------
				else if(($nature>=4) && ($shopping>=4)){
					 $type1=2;
		          	  $type2=3;
			          $_POSTes=createTrip($type1,$type2,0);
			          $trip=getLastTrip();
			          $_SESSION['trip']['id']=$trip['id'];
			          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}
				
				//----------------------------------------nature and art trip----------------------------------------------------------

				else if(($nature>=4) && ($art>=4)){
					$type1=2;
		            $type2=4;
		            $_POSTes=createTrip($type1,$type2,0);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
				}

				 //----------------------------------------nature and mancare&bautura trip----------------------------------------------
				else if(($nature>=4) && ($food_drink>=4)){
					$type1=2;
		            $type2=5;
		            $_POSTes=createTrip($type1,$type2,0);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}
				//----------------------------------------shopping and art trip--------------------------------------------------------
				else if(($shopping>=4) && ($art>=4)){
					 $type1=3;
		            $type2=4;
		            $_POSTes=createTrip($type1,$type2,0);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
				}
				 //----------------------------------------shopping and mancare&bautura trip--------------------------------------------
				else if(($shopping>=4) && ($food_drink>=4)){
					$type1=3;
		            $type2=5;
		            $_POSTes=createTrip($type1,$type2,0);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}

				//------------------------------------------art and mancare&bautura trip-------------------------------------------------
				else if(($art>=4) && ($food_drink>=4)){
					$type1=4;
		            $type2=5;
		            $_POSTes=createTrip($type1,$type2,0);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}

				//------------------------------------------history and nature and shopping trip----------------------------------------
				else if(($history>=4) && ($nature>=4) && ($shopping>=4)){
					$type1=1;
			          $type2=2;
			          $type3=3;
			          $_POSTes=createTrip($type1,$type2,$type3);
			          $trip=getLastTrip();
			          $_SESSION['trip']['id']=$trip['id'];
			          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
				}
				 //-----------------------------------------history and nature and art trip----------------------------------------------
				
				else if(($history>=4) && ($nature>=4) && ($art>=4)){
					$type1=1;
		          $type2=2;
		          $type3=4;
		          $_POSTes=createTrip($type1,$type2,$type3);
		          $trip=getLastTrip();
		          $_SESSION['trip']['id']=$trip['id'];
		          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}
				//-----------------------------------------history and nature and mancare&bautura trip----------------------------------
				else if(($history>=4) && ($nature>=4) && ($food_drink>=4)){
					 $type1=1;
			          $type2=2;
			          $type3=5;
			          $_POSTes=createTrip($type1,$type2,$type3);
			          $trip=getLastTrip();
			          $_SESSION['trip']['id']=$trip['id'];
			          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}
				//-----------------------------------------nature and shopping and art trip---------------------------------------------
				else if(($nature>=4) && ($shopping>=4) && ($art>=4)){
					$type1=2;
			          $type2=3;
			          $type3=4;
			          $_POSTes=createTrip($type1,$type2,$type3);
			          $trip=getLastTrip();
			          $_SESSION['trip']['id']=$trip['id'];
			          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}
				//-----------------------------------------nature and shopping and mancare&bautura trip---------------------------------
				else if(($nature>=4) && ($shopping>=4) && ($food_drink>=4)){
				$type1=2;
		          $type2=3;
		          $type3=5;
		          $_POSTes=createTrip($type1,$type2,$type3);
		          $trip=getLastTrip();
		          $_SESSION['trip']['id']=$trip['id'];
		          $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
				}

				//-----------------------------------------shopping and arta and mancare&bautura trip-----------------------------------
				else if(($shopping>=4) && ($art>=4) && ($food_drink>=4)){
					$type1=3;
		            $type2=4;
		            $type3=5;
		            $_POSTes=createTrip($type1,$type2,$type3);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);

				}
				//history nature shopping
				else{
					$_POSTes=createTrip(1,2,3);
		            $trip=getLastTrip();
		            $_SESSION['trip']['id']=$trip['id'];
		            $_POST=insertTripToUser($trip['id'],$_SESSION['user']['id']);
				}
				$trip=getTrip($_SESSION['trip']['id']);
			    $lowestDest=array();
			    $firstTripDestinations=getLowestDestinations($trip['typeOne'],$trip['typeTwo'],$trip['typeThree']);
			    foreach($firstTripDestinations as $t){
			      array_push($lowestDest, $t['destination_id']);
			    }
			    //$res=insertDetails($lowestDest[0],$lowestDest[1],$lowestDest[2],$lowestDest[3],$lowestDest[4]);
			    deleteDestionations($_SESSION['user']['id']);
			    $res1=insertDestination($_SESSION['user']['id'],$lowestDest[0]);
			    $res2=insertDestination($_SESSION['user']['id'],$lowestDest[1]);
			    $res3=insertDestination($_SESSION['user']['id'],$lowestDest[2]);
			    $res4=insertDestination($_SESSION['user']['id'],$lowestDest[3]);
			    $res5=insertDestination($_SESSION['user']['id'],$lowestDest[4]);
			    if($res1 && $res2 && $res3 && $res4 && $res5){
				    /*$lastDetails=getLastDetails();
				    $_SESSION['details']['id']=$lastDetails['id'];
				    $update=updateDatailsToUser($_SESSION['user']['id'],$_SESSION['details']['id']);
				    $detailsId=getDetailsId($_SESSION['user']['id']);
				    $res=getDetails($detailsId['detailed_destinations_id']);*/
				    $_SESSION['first']=selectDestination($lowestDest[0]);
					$_SESSION['second']=selectDestination($lowestDest[1]);
					$_SESSION['third']=selectDestination($lowestDest[2]);
					$_SESSION['fourth']=selectDestination($lowestDest[3]);
					$_SESSION['fifth']=selectDestination($lowestDest[4]);
				}
				header("location: http://localhost:8080/licenta/detailedTrip.php");
				break;
			}
			case 'userProfile':{
				$res=updateUserInfo($_SESSION['user']['id'], $_POST['userName'], $_POST['userEmail'], $_POST['userPassword']);
				if($res){
					echo "success";
				} else{
					echo "error";
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
function getQuestionnare($id){
	$link= conectare_db();
  $query="select * from questionnare where id='$id'";
   $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}
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

//details functions

function insertDetails($first,$second,$third,$fourth,$fifth){
  $link= conectare_db();
  $query="insert into detailed_destinations(detail_1,detail_2,detail_3,detail_4,detail_5) values('$first','$second','$third','$fourth','$fifth')";
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
function getCityDetails($id){
  $link= conectare_db();
  $query="select * from city_details where details_section='$id'";
  $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}
function updateDestinationStars($id, $stars){
	$link= conectare_db();
  $query="update destinations set destination_stars='$stars' where destination_id='$id'";
  return mysqli_query($link, $query);
}
function getLastStars($id){
  $link= conectare_db();
  $query="select * from destinations where destination_id='$id'";
  $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}

function selectBestRatedDestinations(){
	$link= conectare_db();
  $query="select * from destinations where destination_stars>4 limit 5";
  $res=mysqli_query($link, $query);
  $vector=array();
    while ($r=mysqli_fetch_array($res)){
        array_push($vector, $r);
    }
    return $vector;
}

function getAllDestinations(){
$link=conectare_db();
	$query="select * from destinations";
	$res=mysqli_query($link, $query);
  $vector=array();
    while ($r=mysqli_fetch_array($res)){
        array_push($vector, $r);
    }
    return $vector;
}
//preferences functions

function insertTripTypes($history,$nature,$shopping,$art,$food_drink){
	$link= conectare_db();
	$query="insert into trip_types(history,nature,shopping,art,food_drink) values('$history','$nature','$shopping','$art','$food_drink')";
	return mysqli_query($link, $query);
}
function insertTripTypesToUser($input,$id){
  $link= conectare_db();
  $query="update users set trip_types_id='$input' where id='$id'";
  return mysqli_query($link,$query);
}

function updateTripTypeUser($id,$typeId){
	$link= conectare_db();
  $query="update users set trip_types_id='$typeId' where id='$id'";
  return mysqli_query($link, $query);
}

function selectTripType($id){
	$link= conectare_db();
  $query="select * from trip_types where id='$id'";
  $res=mysqli_query($link, $query);
  return mysqli_fetch_array($res);
}

function getLastTripTypes(){
  $link= conectare_db();
  $query="select id from trip_types order by id desc limit 1";
  $res=mysqli_query($link, $query);
  return mysqli_fetch_assoc($res);
}

//---------------------------------change user account

function updateUserInfo($id, $username, $email, $password){
	$link=conectare_db();
	$password=md5($password);
	$query="update users set username='$username', email='$email', password='$password' where id='$id'";
	return mysqli_query($link,$query);
}


function insertDestination($user_id,$destination_id){
	$link= conectare_db();
	$query="insert into users_destinations(user_id,destination_id) values('$user_id','$destination_id')";
	return mysqli_query($link, $query);
}

function deleteDestionations($user_id){
	$link= conectare_db();
	$query="delete from users_destinations where user_id='$user_id'";
	return mysqli_query($link, $query);
}

function selectAllDestinations($user_id){
	$link= conectare_db();
  $query="select * from users_destinations where user_id='$user_id'";
  $res=mysqli_query($link, $query);
  $vector=array();
    while ($r=mysqli_fetch_array($res)){
        array_push($vector, $r);
    }
    return $vector;
}

