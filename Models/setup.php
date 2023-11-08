
<?php
function setup($title){
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="../../Data/Images/icon.png" style="height: 2px;"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans|Montserrat+Alternates:400,700|Merriweather:400,300,700,700italic&display=swap">
        <link rel="stylesheet" href="../../Assets/nav.css">
        <link rel="stylesheet" href="../../Assets/style.css">
        <script src="../../Assets/index.js"></script>
        <title>
    '.$title.'
    </title>
</head>';
}
?>