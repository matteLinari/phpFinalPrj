<html>
<head>
    <title><?=$this->e($title)?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
 <!-- 
     style="background: url(http://www.its-ictpiemonte.it/wp-content/themes/its-site-theme-dist/assets/its_share_img@2x-1.jpg);
    no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;"
 -->
    
    <?php 
    if(!isset($_SESSION['user']))
        echo $this->insert('navbar');
    else
        echo $this->insert('navbarLogged');
    ?>
    
    <?=$this->section('content')?>

</body>
</html>
