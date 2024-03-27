<?php
$connection = new mysqli('localhost', 'root', '', 'db6-7', 3308);

function add_product()
{
    global $connection;

    if (isset($_POST['accept_add'])) {
        $name      = $_POST['_name'];
        $price     = $_POST['_price'];
        $image     = $_FILES['_file']['name'];
        $qty       = $_POST['_qty'];
        $category  = $_POST['_cat'];
        $brand     = $_POST['_brand'];

        if (!empty($name) && !empty($price) && !empty($category) && !empty($thumbnail) && !empty($brand) && !empty($qty)) {
            $thumbnail = date('YmdHis') . '-' . $image;
            upload_file($thumbnail);

            $sql_insert = "
                                INSERT INTO `tbacessories` 
                                VALUES(null,'$name','$price','$thumbnail','$qty','$category','$brand')
                              ";
            $result     = $connection->query($sql_insert);

            if ($result) {
                echo 123;
            }
        }
    }
}
add_product();
function upload_file($image_name)
{
    $path     =  '../images/' . $image_name;
    move_uploaded_file($_FILES['_file']['tmp_name'], $path);
}
function show_product()
{
    global $connection;

    $sql_show   =   "SELECT * FROM `tbacessories` WHERE 1 ORDER BY `id` DESC";

    $result     =  $connection->query($sql_show);

    while ($row  =  mysqli_fetch_assoc($result)) {
        echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>
                        <img src="../images/'.$row['image'].'" alt="'.$row['image'].'">
                    </td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['quantity'].'</td>
                    <td>'.$row['category'].'</td>
                    <td>'.$row['brand'].'</td>
                    <td>
                        <button type="button" id="open_edit" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                ';
    }
}
function edit_product(){
    global $connection;

    if(isset($_POST['accept_edit'])){
        $update_id = $_POST['_id'];
        $name      = $_POST['_name'];
        $price     = $_POST['_price'];
        $new_image = $_FILES['_file']['name']; //new image
        $qty       = $_POST['_qty'];
        $category  = $_POST['_cat'];
        $brand     = $_POST['_brand'];
        $old_image = $_POST['old_image'];

        if(empty($image)){
            $thumbnail = $old_image;
        }
        else{
            $thumbnail = date('YmdHis') .'-'. $new_image;
            upload_file($thumbnail);
        }
        if (!empty($name) && !empty($thumbnail) && !empty($price) && !empty($category) && !empty($brand) && !empty($qty)){
            $sql_edit  =   "
                                UPDATE `tbacessories`
                                SET `name` = '$name',`image` = '$thumbnail',
                                    `price`= '$price',`quantity` = '$qty',
                                    `category` = '$category',`brand`= '$brand'
                                WHERE `id` = '$update_id';
                           ";
            $result    =  $connection -> query($sql_edit);

            if($result){
                echo 123;
            }
        }
    }
}
edit_product();