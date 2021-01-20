<?php

function processFileUpload($name, $type, $size, $tempName, $expectedFileType ,$max_size = 5000000){
    $uploadPath = "files/".time().'-'.$name;
    $fileTypes = explode(',',$expectedFileType);
    if(!in_array($type, $fileTypes)){
        return ['status'=>'error','message'=>'File type not accepted'];
    }
    if($size < $max_size){
        move_uploaded_file($tempName, $uploadPath);
        //echo "File Uploaded";
        return ['status'=>'success','message'=>'File uploaded', 'path'=> $uploadPath];
    }else{
        return ['status'=>'error','message'=>'File larger than max size'];
    }
}