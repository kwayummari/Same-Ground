<?php 
// Define file upload path 
$upload_dir = array( 
    'img'=> '../cv/', 
); 

// Allowed image properties  
$imgset = array( 
    'maxsize' => 3000, 
    'maxwidth' => 3024, 
    'maxheight' => 3024, 
    'minwidth' => 10, 
    'minheight' => 10, 
    'type' => array('bmp', 'gif', 'jpg', 'jpeg', 'png'), 
); 

// If 0, will OVERWRITE the existing file 
define('RENAME_F', 1); 

/** 
 * Set filename 
 * If the file exists, and RENAME_F is 1, set "img_name_1" 
 * 
 * $p = dir-path, $fn=filename to check, $ex=extension $i=index to rename 
 */ 
function setFName($p, $fn, $ex, $i){ 
    if(RENAME_F == 1 && file_exists($p . $fn . $ex)){ 
        return setFName($p, $fn . '_' . ($i + 1), $ex, ($i + 1)); 
    } else { 
        return $fn . $ex; 
    } 
} 

$re = ''; 
if(isset($_FILES['upload']) && strlen($_FILES['upload']['name']) > 1) { 

    define('F_NAME', preg_replace('/\.(.+?)$/i', '', basename($_FILES['upload']['name'])));   

    // Get filename without extension 
    $sepext = explode('.', strtolower($_FILES['upload']['name'])); 
    $type = end($sepext); // gets extension 

    // Upload directory 
    $upload_dir = in_array($type, $imgset['type']) ? $upload_dir['img'] : $upload_dir['audio']; 
    $upload_dir = trim($upload_dir, '/') . '/'; 

    // Validate file type 
    if(in_array($type, $imgset['type'])){ 
        // Image width and height 
        list($width, $height) = getimagesize($_FILES['upload']['tmp_name']); 

        if(isset($width) && isset($height)) { 
            if($width > $imgset['maxwidth'] || $height > $imgset['maxheight']){ 
                $re .= '\\n Width x Height = '. $width .' x '. $height .' \\n The maximum Width x Height must be: '. $imgset['maxwidth']. ' x '. $imgset['maxheight']; 
            } 

            if($width < $imgset['minwidth'] || $height < $imgset['minheight']){ 
                $re .= '\\n Width x Height = '. $width .' x '. $height .'\\n The minimum Width x Height must be: '. $imgset['minwidth']. ' x '. $imgset['minheight']; 
            } 

            if($_FILES['upload']['size'] > $imgset['maxsize']*1000){ 
                $re .= '\\n Maximum file size must be: '. $imgset['maxsize']. ' KB.'; 
            } 
        } 
    } else { 
        $re .= 'The file: '. $_FILES['upload']['name']. ' has not the allowed extension type.'; 
    } 

    // File upload path 
    $f_name = setFName($_SERVER['DOCUMENT_ROOT'] . '/' . $upload_dir, F_NAME, ".$type", 0); 
    $uploadpath = $upload_dir . $f_name; 

    // If no errors, upload the image, else, output the errors 
    if($re == ''){ 
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadpath)) { 
            $CKEditorFuncNum = $_GET['CKEditorFuncNum']; 
            $url = 'https://sameground.or.tz/cms/cv/' . $f_name; 
            $msg = F_NAME .'.'. $type .' successfully uploaded: \\n- Size: '. number_format($_FILES['upload']['size']/1024, 2, '.', '') .' KB'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>"; 
        } else { 
            $re = '<script>alert("Unable to upload the file")</script>'; 
        } 
    } else { 
        $re = '<script>alert("'. $re .'")</script>'; 
    } 
} 

// Render HTML output 
@header('Content-type: text/html; charset=utf-8'); 
echo $re;
?>
