<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include 'config.php';
$at=1;
// taking file details which is being uploaded by user in form
if(isset($_FILES['file_input'])){
    $ip=mysqli_real_escape_string($conn,$_POST['ip']);
    $time = time();
    $target=$ip.'-'.$time;
    mkdir($target);
    $errors= array();
    $total= sizeof($_FILES['file_input']['name']);      //number of pdfs
    $datatosend= array();
    // $target="123456789-1632334159";                     //folder name
    $just = explode('.',$_FILES['file_input']['name'][0]);
    $img_name=strtolower($just[0]);
    $str = $img_name;
    $chars = str_split($str);
    $img_name="";
    foreach ($chars as $char) {
        if($char!=" "){
            $img_name.=$char;
        }
    }
        // $datatosend[]=$img_name;
        // $datatosend[]=$time;
        // $datatosend[]=$target;
        // $start_page=$_POST['start_page'];
        // $end_page=$_POST['end_page'];
        // $datatosend[]=$start_page;
        // $datatosend[]=$end_page;

    for ($i=0;$i<$total;$i++){
        //geting filename by using name attribute
        $file_name=$_FILES['file_input']['name'][$i];
        //geting filesize by using size attribute
        $file_size=$_FILES['file_input']['size'][$i];
        //geting filetmp by using tmp_name attribute
        $file_tmp=$_FILES['file_input']['tmp_name'][$i];
        //geting file type by using type attribute
        $file_type=$_FILES['file_input']['type'][$i];
        // echo '<pre>';
        // var_dump($_FILES['file_input']);
        // $datatosend[]= $file_name.'<br>';
        // $datatosend[]= $file_size.'<br>';
        // $datatosend[]= $file_tmp.'<br>';
        // $datatosend[]= $file_type.'<br>';
        
        // echo '</pre>';
            //geting file extension by using explode function
            $aiehi = explode('.',$file_name);
            $file_ext= strtolower(end($aiehi));
            // explode function "." ke bad ka nam de dega jaise in img.jpg m ye explode agr hm '.' pr lgate h to y '.' ke bad ka jpg chodega bo end fun hmain dega
            $extensions=array("pdf");
            //Checking wheather extension is correct or not
            if(in_array($file_ext,$extensions)===false){
                $errors[]="This extension formate is not allowed, Please choose pdf file.";
    }
        //     // restricting file size to be not more than 2mb
        //     // remember here size is in bytes so first convert size to bytes
            if($file_size>41943040){
                $errors[]="Files size must be 40mb or lower.";
    }

                // cheching if there comes any error in abobe condition  Use empty function to check if errors array is empty or not
                if(empty($errors)==true){
                    //if no error than upload file
                    // adding serevr time after name of image
                    $new_name=$ip."-".$time."-".$i.".pdf";
                    // $datatosend[]= $new_name."<br>Newname";
                    $pdf_name=$new_name;
                    $target1=$target."/".$pdf_name;
                    // $datatosend[]= "<br>target= ".$target1."<br>target";
                    move_uploaded_file($file_tmp,$target1) or $at=0;
                    if($at==0){
                        goto label1;
                    }
                }else{
                    label1:
                    // print_r($errors);
                    $datatosend['errors']= $errors;
                    $datatosend['status']= false;
                }
                // $datatosend[]= "<br><h1>".$i."complete</h1>";
                // $json_data = json_encode($datatosend);
                // echo $json_data;
                
    }
    
$folder=$target;
//getting author of creating post by his login id usin Session
// session_start();
// $_SESSION['ip']=$ip;
$sql="INSERT INTO folders values('{$folder}');";

}else{

    $datatosend['error']= 'Something goes wrong please reload page and try again';
    $datatosend['status']= false;
    $json_data = json_encode($datatosend);
    echo $json_data;
}














    if(mysqli_query($conn,$sql)){
        // header("Location: {$hostname}/index.php");
        // $datatosend[]=$img_name;
        // $datatosend[]=$target;
        $start_page=$_POST['start_page'];
        $end_page=$_POST['end_page'];
        // $datatosend[]=$start_page;
        // $datatosend[]=$end_page;
        if($total>1){
            exec('python index.py '.$img_name.' '.$target.' '.'0',$return);
            $datatosend[]=$return;
        }else{
            exec('python index.py '.$img_name.' '.$target.' '.'1'.' '.$start_page.' '.$end_page,$return);
            $datatosend[]=$return;
        }
        $datatosend['status']=true;
        $datatosend['errors']=false;
        $json_data = json_encode($datatosend);
        echo $json_data;
    }else{
        $datatosend[]="Query failed";
        $json_data = json_encode($datatosend);
        echo $json_data;
    }
?>