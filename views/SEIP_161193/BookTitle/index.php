<?php
require_once("../../../vendor/autoload.php");

$objBookTitle = new \App\BookTitle\BookTitle();
$allData = $objBookTitle->index();

use App\Message\Message;

if(!isset($_SESSION)){
    session_start();
}
$msg = Message::getMessage();
echo "<div style='height: 30px'> <div  id='message'> $msg </div> </div>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Title - Active List</title>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resource/bootstrap/css/bootstrap-theme.min.css">
    <script src="../../../resource/bootstrap/js/bootstrap.min.js"></script>
    <style>
        td{
            border: 0px;
        }
        table{
            border: 1px;
        }
        tr{
            height: 30px;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Book Title - Active List
        &nbsp;&nbsp; <a href='trashed.php' class='btn btn-lg btn-default'> Go To Trashed List</a>
    </h1>

    <table class="table table-striped table-bordered" cellspacing="0px">
        <tr>
            <th style='width: 10%; text-align: center'>Serial Number</th>
            <th style='width: 10%; text-align: center'>ID</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Action Buttons</th>
        </tr>

        <?php
        $serial= 1;
        foreach($allData as $oneData){

            if($serial%2) $bgColor = "#cccccc";
            else $bgColor = "#ffffff";

            echo "
                  <tr  style='background-color: $bgColor'>
                     <td style='width: 10%; text-align: center'>$serial</td>
                     <td style='width: 10%; text-align: center'>$oneData->id</td>
                     <td>$oneData->book_name</td>
                     <td>$oneData->author_name</td>

                     <td>
                         <a href='view.php?id=$oneData->id' class='btn btn-info'>View</a>
                         <a href='edit.php?id=$oneData->id' class='btn btn-primary'>Edit</a>
                         <a href='trash.php?id=$oneData->id' class='btn btn-warning'>Soft Delete</a>
                         <a href='delete.php?id=$oneData->id' class='btn btn-danger'>Delete</a>
                     </td>
                  </tr>
              ";
            $serial++;
        }
        ?>
    </table>
</div>

<script src="../../../resource/bootstrap/js/jquery.js"></script>
<script>
    jQuery(function($) {
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
    })
</script>

</body>
</html>
