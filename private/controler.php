<?php


//BASIC ACTIONS

function homepage_action() {
    global $smarty;

    $projects = get_projects();
    $smarty->assign('projects', $projects);

    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function page_not_found_action() {
    global $smarty;

    $smarty->display('notfound.tpl');
}

function admin_action() {
    global $smarty;

    $smarty->display('header.tpl');
    $smarty->display('admin.tpl');
    $smarty->display('footer.tpl');
}


//CMS ACTIONS


function cms_action() {
    global $smarty;

    $projects = get_projects();
    $smarty->assign('projects', $projects);


    $smarty->display('header.tpl');
    $smarty->display('cms.tpl');
    $smarty->display('footer.tpl');
}


function edit_project_action() {
    global $smarty;

    $id = $_GET['id'];
    $project_to_edit = select_project_to_edit($id);
    $smarty->assign('edit', $project_to_edit);

    $smarty->display('header.tpl');
    $smarty->display('cms_edit_project.tpl');
    $smarty->display('footer.tpl');
}

//MIDDLE-MAN ACTIONS

function admin_login_action() {
    return admin_login();
}

function add_project_action() {
    add_project();
}