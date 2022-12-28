<?php
require_once './autoload.php';
require_once './views/includes/header.php';





$home = new HomeController();
$pages = ['index','about','tours','contact','home','add','update','delete','login','register','logout'];
// $home->index('delete');
if (isset($_GET['page'])) {
    if (in_array($_GET['page'],$pages)) {
        $page = $_GET['page'];
        $home->index($page);
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index('index');
}
?>
<?php
require_once './views/includes/footer.php';
?>