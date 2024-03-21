<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- link bootstrap -->
    <!-- link css -->
    <link rel="stylesheet" href="../style/show.css">
    <!-- link css -->
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link font awesome -->
    <title>Product Management</title>
</head>
<body>
    <div class="container border border-5 p-4 d-flex justify-content-between my-3">
        <h3>Accessories Store</h3>
        <button class="btn btn-outline-success"><i class="fa-solid fa-plus"></i>  Add Product</button>
    </div>
    <div class="container">
        <table class="table align-middle table-hover" style="table-layout: fixed;">
            <tr>
                <td>Name</td>
                <td>Image</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Category</td>
                <td>Brand</td>
                <td>Action</td>
            </tr>
            <tr>
                <td>Samsung Galaxy Z Fold 2</td>
                <td>
                    <img src="../images/image-example.jpg" alt="image-example.jpg">
                </td>
                <td>200</td>
                <td>5</td>
                <td>Mobiles</td>
                <td>Samsung</td>
                <td>
                    <button class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>