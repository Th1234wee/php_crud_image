<?php 
    $connection = new mysqli('localhost','root','','db6-7',3308);

    function add_product(){
        global $connection;

        if(isset($_POST['accept_add'])){
            $name      = $_POST['_name'];
            $price     = $_POST['_price'];
            $image     = $_FILES['_file']['name'];
            $qty       = $_POST['_qty'];
            $category  = $_POST['_category'];
            $brand     = $_POST['_brand'];

            if(!empty($name) && !empty($price) && !empty($category) && !empty($image) && !empty($brand) && !empty($qty)){
                $thumbnail = date('YmdHis') . '-' . $image;
                upload_file($thumbnail);

                $sql_insert = "
                                INSERT INTO `tbacessories` 
                                VALUES(null,'$name','$price','$thumbnail','$qty','$category','$brand')
                              ";
                $result     = $connection -> query($sql_insert);

                if($result){
                    echo 123;
                }
            }
        }
    }
    add_product();
    function upload_file($image_name){
        $path     =  '../images/'.$image_name;
        move_uploaded_file($_FILES['_file']['tmp_name'],$path);
    }