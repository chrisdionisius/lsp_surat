<?php
    include 'koneksi.php';
    $listSurat = mysqli_query($koneksi,"SELECT * FROM surat" );
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>