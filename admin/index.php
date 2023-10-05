<?php
include_once 'top.php';
include_once 'menu.php';

?>
<div>
    <div class="pagetitle">
    <?php
        //membuat logik sederhana untuk mengarahkan url ke file
        //yang mempunyai extension .php
        //routing -> File yang mengarahkan url

        $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
        if($url == 'dashboard.php'){
            include_once 'dashboard.php';
        } else if(!empty($url)){
            include_once ''.$url.'.php';
        } else {
            include_once 'dashboard.php';
        }
        ?>
    </div>
<div>
<?php
include_once 'buttom.php';
?>