<html>
<head>
    <title><?=$this->e($title)?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
    if(!isset($_SESSION['user']))
        echo $this->insert('navbar');
    else
        echo $this->insert('navbarLogged');
    ?>
    <?=$this->section('content')?>
</body>
</html>
