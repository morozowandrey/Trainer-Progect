<?php
define( 'SHORTINIT', true );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );
global $wpdb;
$errors = [];
header("Content-type: application/json; charset=utf-8");
if(!isset($_POST['name'])||$_POST['name']==''){
    $errors["name"]="Name not set";
    echo json_encode($errors);
    exit;
}
if(!isset($_POST['feedback'])||$_POST['feedback']==''){
    $errors["feedback"]="Feedback not set";
    echo json_encode($errors);
    exit;
}
if(isset($_POST['name'])&&$_POST['name']!=''&&isset($_POST['feedback'])&&$_POST['feedback']!=''){
    $result = $wpdb->insert('testimonials',array('name'=>$_POST['name'],'feedback'=>$_POST['feedback']),array('%s','%s'));
    if((bool)$result){
      $msg = ["msg"=>"thank you"];
      echo json_encode($msg);       
    }
    exit;
}
?>
