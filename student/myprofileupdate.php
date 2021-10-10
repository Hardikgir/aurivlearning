<?php 
session_start();
include('../include/config.inc.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit();

/*
$target_dir = "Profile_image/";
$target_file = $target_dir . basename($_FILES["profile_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["profile_img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
// }
*/



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $is_profileupload = 0;
    if(!empty($_FILES["profile_img"]["name"]))
    {
        $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
        $extension  = pathinfo( $_FILES["profile_img"]["name"], PATHINFO_EXTENSION ); // jpg
        $basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
        $source       = $_FILES["profile_img"]["tmp_name"];
        $destination  = "../Profile_image/{$basename}";

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($destination,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["profile_img"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $filename = '';
        $uploadOk = 0;
    }

    
        if ($_FILES["profile_img"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            $filename = '';
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            $filename = '';
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            $filename = '';
        } else {
            if (move_uploaded_file( $source, $destination)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["profile_img"]["name"])). " has been uploaded.";
            $_SESSION['user_profile'] = $filename.".".$extension;
            } else {
            echo "Sorry, there was an error uploading your file.";
            $filename = '';
            }
        }
        $is_profileupload = 1;
    }
    



    $fname = $_POST ['fname'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];
    $wportelegramno = $_POST ['wportelegramno'];
    $gender = $_POST ['gender'];
    $selgrade = $_POST ['selgrade'];
    $syllabus = $_POST ['syllabus'];
    $preferencelanguage = $_POST ['preferencelanguage'];
    $parent_name = $_POST ['parent_name'];
    $parent_email = $_POST ['parent_email'];
    $location = $_POST ['location'];
    $school_college = $_POST ['school_college'];
    $location_of_school_college = $_POST ['location_of_school_college'];
    $user_id = $_SESSION['usrid'];
    if($is_profileupload = 1){
        $user_profile = $filename.".".$extension;
        $student_profile_sql = "UPDATE tbl_regusers SET fname='$fname',email='$email',phone='$phone',wportelegramno='$wportelegramno',gender='$gender',parent_name='$parent_name',parent_email='$parent_email',location='$location',school_college='$school_college',location_of_school_college='$location_of_school_college',profileimg='$user_profile' WHERE user_id =".$user_id;
    }else{
        $student_profile_sql = "UPDATE tbl_regusers SET fname='$fname',email='$email',phone='$phone',wportelegramno='$wportelegramno',gender='$gender',parent_name='$parent_name',parent_email='$parent_email',location='$location',school_college='$school_college',location_of_school_college='$location_of_school_college' WHERE user_id =".$user_id;
    }
    
    

    $sql_preference_details = "UPDATE tbl_stud_preference_details SET grade='$selgrade',syllabus='$syllabus',preferencelanguage='$preferencelanguage' WHERE regid =".$user_id;

    $result_profile = mysqli_query($con,$student_profile_sql);
    $result_preference_details = mysqli_query($con,$sql_preference_details);

    if($result_profile == '1' & $result_preference_details == '1'){
        $_SESSION['usermsg'] = 1;
        
        $_SESSION['location'] = $location;
        header('Location: '.$baseUrl.'student/myprofile.php');    
    }else{
        $_SESSION['usermsg'] = 0;
        header('Location: '.$baseUrl.'student/myprofile.php'); 
    }

}


exit();





// echo '<pre> result_profile';
// print_r($result_profile);
// echo '</pre>';

// echo '<pre> result_preference_details';
// print_r($result_preference_details);
// echo '</pre>';
// exit();


// echo $student_profile_sql;
// echo "<br>";
// echo $sql_preference_details;

