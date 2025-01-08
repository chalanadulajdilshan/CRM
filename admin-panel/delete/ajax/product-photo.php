
  

<?php

include_once(dirname(__FILE__) . '/../../../class/include.php');
   
    
if ($_POST['option'] == 'delete') {
 
    $PRODUCT_PHOTO = new ProductPhoto($_POST['id']);

    unlink('../../../upload/product-categories/sub-category/product/photos/' . $PRODUCT_PHOTO->image_name); 

    $result = $PRODUCT_PHOTO->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}