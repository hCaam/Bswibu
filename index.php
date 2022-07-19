<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>?</title>
    <link rel="icon" href="../icon_smool.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-slate-700">
<?php
include 'db.php';
session_start();


?>
<div>
    <div class="w-1/3">

    </div>
    <div  class="w-2/3 flex flex-row">
        <div> </div>
        <div>

        </div>
    </div>


</div>


</body>
<script>
$(document).ready(function(){
  $("#button").click(function(){
    $("#div1").load("demo_test.txt");
  });
});
</script>
</html>