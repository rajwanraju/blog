<?php
$message='';
session_start();
if($_SESSION['id'] == null) {
    header('Location: index.php');
}

require_once '../vendor/autoload.php';
$login = new App\classes\Login();
$blog=new App\classes\Blog();


if(isset($_GET['logout'])) {
    $login->adminLogout();
}

if (isset($_GET['delete'])){
    $id=$_GET['id'];
    $message=$blog->deleteBlogInfo($id);
}

$queryResult=$blog->viewBlogInfo();
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include 'includes/menu.php'; ?>

<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-11 mx-auto">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Blog Id</th>
                            <td></td>

                        </tr>
                        <tr>
                            <th>Blog Id</th>
                            <td></td>

                        </tr>
                        <tr>
                            <th>Blog Id</th>
                            <td></td>

                        </tr>
                        <tr>
                            <th>Blog Id</th>
                            <td></td>

                        </tr>
                        <tr>
                            <th>Blog Id</th>
                            <td></td>

                        </tr>



                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>