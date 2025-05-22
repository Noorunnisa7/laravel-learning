<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to laravel</h1>

<?php
echo "Laravel Learning";
?>

@php 
$username = "Admin";
$email = "Admin@gmail.com";
@endphp


<h2>
    {{$username}}
    {{$email}}
</h2>

@if($username == "Admin")
<h3>Condition is true {{$username}}</h3>  
@else 
<h3>Condition is false {{$username}}</h3>
@endif


</body>
</html>