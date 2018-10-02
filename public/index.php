<?php
require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controler.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

if (isset($_GET['page'])) {

} else {
    $page = 'home';
}

//TERNARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

//POST LISTENERS

if(isset($_POST['submit_admin_login'])) {
    $page = admin_login_action();
}

if(isset($_POST['project_submit'])) {
    add_project_action();
}

if (isset($_POST['submit_project_delete'])) {
    delete_project();
}


if (isset($_SESSION['loggedin'])) {
    switch ($page) {
        case 'cms' : cms_action(); break;
        case 'cms_edit_project' : edit_project_action(); break;
    }
}

switch ($page) {
    case 'home': homepage_action($smarty); break;
    case 'admin': admin_action($smarty); break;
    //default: page_not_found_action($smarty); break;
}
