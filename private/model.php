<?php
require ('db_pass.php');
function make_connection() {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DB);
    if ($mysqli->connect_errno) {
        die('Connection Error: ' .  $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_test() {
    $mysqli = make_connection();

    $query = "SELECT test_value FROM test_table";
    $stmt = $mysqli->prepare($query) or die ('Error preparing: TEST');
    $stmt->bind_result($test_values) or die ('Error biding: TEST');
    $stmt->execute() or die ('Error executing: TEST');

    $results = array();
    while ($stmt->fetch()) {
        $results[] = $test_values;
    }
    return $results;
}

//CMS FUNCTIONS

function admin_login() {
  if (!isset($_POST['submit_admin_login'])) {
      return 'no_post';
      exit();
  }

  if (!isset($_POST['username']) OR empty($_POST['password'])) {
      return 'no_info';
      exit();
  }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $mysqli = make_connection();
    $query = "SELECT admin_id FROM admin_login WHERE admin = ? AND adminpassword = ?";
    $stmt = $mysqli->prepare($query) or die ('Error preparing admin login');
    $stmt->bind_param('ss',$username, $password) or die ('Error binding params admin');
    $stmt->bind_result($admin_id) or die ('Error binding result');
    $stmt->execute() or die ('Error executing');
    $fetch_success = $stmt->fetch();

    if (!$fetch_success) {
        return 'no_fetch';
        exit();
    }

    $_SESSION['loggedin'] = 'loggedin';
    setcookie('admin_id', $admin_id, time() + 3600);
    return 'cms';
    exit();
}

function admin_cookie() {
    if (!isset($_COOKIE['admin_id'])) {
        admin_action();
    }
}

function add_project() {
    $id = 0;
    $project_name = $_POST['project_name'];
    $project_desc = $_POST['project_desc'];
    $project_git = $_POST['project_git'];
    $project_blog = $_POST['project_blog'];

    if (empty($_POST['project_name']) OR empty($_POST['project_desc']) OR empty($_POST['project_git']) OR empty($_POST['project_blog'])) {
        return exit('Input fields are empty');
    }

    $mysqli = make_connection();
    $query = "INSERT INTO projects VALUES (?,?,?,?,?)";
    $stmt = $mysqli->prepare($query) or die ('Error preparing project to add');
    $stmt->bind_param('issss', $id, $project_name, $project_desc, $project_git, $project_blog) or die ('Error biding params for add project');
    $stmt->execute() or die ('Error executing adding project');
}

function get_projects() {
    $mysqli = make_connection();
    $query = "SELECT project_id, project_name, project_desc, project_git, project_blog FROM projects ORDER BY project_id DESC";
    $stmt = $mysqli->prepare($query) or die ('Error preparing getting projects');
    $stmt->bind_result($id,$project_name, $project_desc, $project_git, $project_blog) or die ('Error biding getting projects');
    $stmt->execute() or die ('Error executing getting projects');
    $results = array();
    while ($stmt->fetch()) {
        $projects = array();
        $projects[] = $id;
        $projects[] = $project_name;
        $projects[] = $project_desc;
        $projects[] = $project_git;
        $projects[] = $project_blog;
        $results[] = $projects;
    }
    return $results;
}

function select_project_to_edit($id) {
    $mysqli = make_connection();
    $query = "SELECT project_id, project_name, project_desc, project_git, project_blog FROM projects WHERE project_id = '$id'";
    $stmt = $mysqli->prepare($query) or die ('Error preparing getting project to edit');
    $stmt->bind_result($id,$project_name, $project_desc, $project_git, $project_blog) or die ('Error biding getting project to edit');
    $stmt->execute() or die ('Error executing getting project to to edit');
    $results = array();
    while ($stmt->fetch()) {
        $projects = array();
        $projects[] = $id;
        $projects[] = $project_name;
        $projects[] = $project_desc;
        $projects[] = $project_git;
        $projects[] = $project_blog;
        $results[] = $projects;
    }
    return $results;
}

function delete_project() {
    if (empty($_POST['project_delete_check'])) {

    } else {
        $mysqli = make_connection();
        $id = $_POST['delete_id'];
        $query = "DELETE FROM projects WHERE project_id = $id";
        $stmt = $mysqli->prepare($query) or die ('Error prepearing for project delete');
        $stmt->execute() or die ('Error executing delete project');
    }
}