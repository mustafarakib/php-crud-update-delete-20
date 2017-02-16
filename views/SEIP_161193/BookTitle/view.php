<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Title - Active List</title>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resource/bootstrap/css/bootstrap-theme.min.css">
    <script src="../../../resource/bootstrap/js/bootstrap.min.js"></script>
    <style>
        td{ border: 0;}
        table{ border: 1px;}
        tr{ height: 30px;}
    </style>
</head>

<body>
<?php
require_once("../../../vendor/autoload.php");

$objBookTitle = new \App\BookTitle\BookTitle();
$objBookTitle->setData($_GET);
$oneData = $objBookTitle->view();

echo "
  <div class='container'>
    <h1> Single Book Information  </h1>

    <table class='table table - striped table - bordered' cellspacing='0px'>
       <tr>
           <td>ID: </td>
           <td> $oneData->id </td>
       </tr>
       <tr>
           <td>Book Name: </td>
           <td> $oneData->book_name </td>
       </tr>
       <tr>
           <td>Author Name: </td>
           <td> $oneData->author_name </td>
       </tr>
    </table>
  </div>
";

?>
</body>
</html>
