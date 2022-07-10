<?php 

require_once "config.php";

error_reporting(0);


if(isset($_POST['addBusiness']))
{
  //  getting general details
   $shopId = rand();
   $businessName = $_POST['businessName'];
   $businessMobileNumber = $_POST['businessMobileNumber'];
   $ownerName = $_POST['ownerName'];
   $ownerMobileNumber = $_POST['ownerMobileNumber'];
   $emailAddress = $_POST['emailAddress'];
   
   //images
   for($i=0;$i<count($_FILES['image1']['name']); $i++)
   {
     $name= $_FILES['image1']['name'][$i];
     $tmper= $_FILES['image1']['tmp_name'][$i];
     $folder1 = "img/shopsImages/";
     move_uploaded_file($tmper,$folder1.$name);

     
    //  return false;

    $sql = "INSERT INTO anythingonrent (shopId,images_location) VALUES('$shopId' ,'http://localhost/emaloutv2/$folder1$name')" ;
    mysqli_query($conn,$sql);
    // if($run){
    //   echo "image inserted successfully";

    // }else{
    //   echo 'failed';
    // }
  
    // if (mysqli_query($conn, $sql)) {
    //   echo "New record created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
    }
    // die();
   //visting card image
   $visitingCard_URL = "img/visting_cards/";
    $visitingCard  = $_FILES['visitingCards']['name'];
    $tmp_visit_name = $_FILES['visitingCards']['tmp_name'];
    move_uploaded_file($tmp_visit_name,$visitingCard_URL.$visitingCard);
    $visitingCardImageLocation = $visitingCard_URL.$visitingCard;
   $categoryName = $_POST['categoryName']; //getting category

   $features = implode(",", $_POST['feature']); //getting features

   /// getting timing of all week days
   $mondayTiming = implode(",", $_POST['mondayTiming']);
   $tuesdayTiming = implode(",", $_POST['tuesdayTiming']);
   $wednesdayTiming = implode(",", $_POST['wednesdayTiming']);
   $thursdayTiming = implode(",", $_POST['thursdayTiming']);
   $fridayTiming = implode(",", $_POST['fridayTiming']);
   $saturdayTiming = implode(",", $_POST['saturdayTiming']);
   $sundayTiming = implode(",", $_POST['sundayTiming']);

   $descrption = $_POST['description']; //getting description
   //getting location detials
   $city = $_POST['city'];
   $distt = $_POST['distt'];
   $address = $_POST['address'];
   
   $allData = [
     $businessName,
     $businessMobileNumber,
     $ownerName,
     $ownerMobileNumber,
     $emailAddress,
     $visitingCardImageLocation,
     $categoryName,
     $features,
     $mondayTiming,
     $tuesdayTiming,
     $wednesdayTiming,
     $thursdayTiming,
     $fridayTiming,
     $saturdayTiming,
     $sundayTiming,
     $descrption,
     $city,
     $distt,
     $address
   ];


   $sql = "INSERT INTO $categoryName (
     shopId,
     businessName,
     businessMobileNumber,
     ownerName,
     ownerMobileNumber,
     emailAddress,
     visitingCardImageLocation,
     categoryName,
     features,
     mondayTiming,
     tuesdayTiming,
     wednesdayTiming,
     thursdayTiming,
     fridayTiming,
     saturdayTiming,
     sundayTiming,
     city,
     distt,
     fulladdress)
     VALUES(
       '$shopId',
       '$businessName',
       '$businessMobileNumber',
       '$ownerName',
       '$ownerMobileNumber',
       '$emailAddress',
       '$visitingCard',
       '$categoryName',
       '$features',
       '$mondayTiming',
       '$tuesdayTiming',
       '$wednesdayTiming',
       '$thursdayTiming',
       '$fridayTiming',
       '$saturdayTiming',
       '$sundayTiming',
       '$city',
       '$distt',
       '$address'
     ) ";

 $result = mysqli_query($conn,$sql);
if ($result)
{
  echo "<script>alert('data uploaded')</script>";
}else{
  echo "<script>alert('failed')</script>";

}

  // print_r($allData);
   

  }



