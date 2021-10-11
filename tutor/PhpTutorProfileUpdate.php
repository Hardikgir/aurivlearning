<?php 
session_start();
include('../include/config.inc.php');

echo '<pre>';
print_r($_POST);
echo '</pre>';
// exit();

echo '<pre> FILE ::-';
print_r($_FILES);
echo '</pre>';
// exit();

$filename = '';
$extension = '';

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
        echo "11111111";
    } else {
        echo "File is not an image.";
        $filename = '';
        $uploadOk = 0;
        echo "22222222222";
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
            echo "uploaded file";
        } else {
            if (move_uploaded_file( $source, $destination)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["profile_img"]["name"])). " has been uploaded.";
            $_SESSION['user_profile'] = $filename.".".$extension;
            } else {
            echo "Sorry, there was an error uploading your file.";
            $filename = '';
            echo "Not pload file";
            }
        }
        $is_profileupload = 1;
    }else{
        echo "545456455";
    }
    

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $wportelegramno = $_POST['wportelegramno'];
    $gender = $_POST['gender'];
    $lang_known = $_POST['lang_known'];
    $identification = $_POST['identification'];
    $inden_num = $_POST['inden_num'];
    $high_qulifi = $_POST['high_qulifi'];
    $teach_exp = $_POST['teach_exp'];
    $sub_pref= $_POST['sub_pref'];
    $activ_pref = $_POST['activ_pref'];
    $bio = $_POST['bio'];
    $user_id = $_SESSION['usrid'];
    if($is_profileupload = 1){
        $user_profile = $filename.".".$extension;
        $student_profile_sql = "UPDATE tbl_regusers SET fname='$fname', email='$email', phone='$phone', wportelegramno='$wportelegramno', gender='$gender', profileimg='$user_profile' WHERE user_id =" .$user_id;
    }else{
        $student_profile_sql = "UPDATE tbl_regusers SET fname='$fname', email='$email', phone='$phone', wportelegramno='$wportelegramno', gender='$gender' WHERE user_id =" .$user_id;
    }

    $sql_preference_details = "UPDATE `tbl_tutor_preference_details` SET `language_known`='$lang_known',`identification_type`='$identification',`identification_number`='$inden_num',`Highest qualification`='$high_qulifi',`teaching_experience`='$teach_exp',`subject_preference`='$sub_pref',`extra_curricular_activity_preference`='$activ_pref',`bio`='$bio'  WHERE regid =".$user_id;

    // 'INSERT INTO `tbl_tutor_preference_details` (`tutor_id`, `regid`, `language_known`, `identification_type`, `identification_number`, `Highest qualification`, `teaching_experience`, `subject_preference`, `extra_curricular_activity_preference`, `bio`, `created_at`) VALUES (NULL, '$user_id', '', '$lang_known', 'identification_type', '5', '$high_qulifi', 'teaching_experience', 'subject_preference', 'extra_curricular_activity_preference', 'bio', current_timestamp())'; 

  

    // echo '<pre>';
    // print_r($sql_preference_details);
    // echo '</pre>';
    // exit();

    $result_profile = mysqli_query($con,$student_profile_sql);
    $result_preference_details = mysqli_query($con,$sql_preference_details);

    if($result_profile == '1' & $result_preference_details == '1'){
        $_SESSION['usermsg'] = 1;
        echo "heee 123123123"; 
        // $_SESSION['location'] = $location;
        // header('Location: '.$baseUrl.'tutor/myprofile.php');    
    }else{
        $_SESSION['usermsg'] = 0;
        echo "heee 45456456"; 
        
        // header('Location: '.$baseUrl.'tutor/myprofile.php'); 
    }

}

echo '<pre>';
print_r($sql_preference_details);
echo '</pre>';
exit();