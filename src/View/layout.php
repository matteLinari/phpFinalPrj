<html>
<head>
    <title><?=$this->e($title)?></title>
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
