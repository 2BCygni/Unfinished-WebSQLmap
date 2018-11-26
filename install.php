<?php
session_start();
include('config/db.php');

if(isset($_SESSION['logged']) && $_SESSION['logged'] === "true") {
  header("Location: index.php");
  exit();
} else {
  $query=$db->prepare("SELECT ready FROM infos");
  $query->execute();
  $data=$query->fetch();
  if ($data['ready'] === "1") {
    header("Location: index.php");
  }
}

if (!isset($_GET['action'])) {
  header('Location: install.php?action=configure');
  exit();
}
if (isset($_GET['action'])) {
  $action = htmlspecialchars($_GET['action']);
  if ($action === "register") {
    include('include/register.php');
    if (isset($_POST['username'])) {
      $username = (isset($_POST['username']) && trim($_POST['username']) != '')? htmlspecialchars($_POST['username']) : null;
      $password = (isset($_POST['password']) && trim($_POST['password']) != '')? htmlspecialchars($_POST['password']) : null;
      if(isset($username, $password)) {
        $query=$db->prepare("INSERT into userinfo (username, password) VALUES (:username, :password)");
        $query->bindValue(':username',$username, PDO::PARAM_STR);
        $query->bindValue(':password',md5(sha1($password)), PDO::PARAM_STR);
        $query->execute();
        $_SESSION['logged'] = "true";
        header('Location: index.php');
      }
    } 
  } elseif ($action === "configure") {
    include('include/configure.php');
    if(isset($_POST['sqlpath'])) {
      $sqlpath = htmlspecialchars($_POST['sqlpath']);
      if(isset($_POST['pypath']) & $_POST['pypath'] != "") {
        echo "pypath : " . $_POST['pypath'];
        $pypath = htmlspecialchars($_POST['pypath']);
        $query=$db->prepare("INSERT into infos (sqlpath, os, ready, preset, pypath) VALUES (:sqlpath, 1, 1, 0, :pypath)");
        $query->bindValue(':sqlpath', $sqlpath, PDO::PARAM_STR);
        $query->bindValue(':pypath', $pypath, PDO::PARAM_STR);
        $query->execute();
        header('Location: install.php?action=register');
      } else {
        $os = 0;
        $query=$db->prepare("INSERT into infos (sqlpath, os, ready, preset, pypath) VALUES (:sqlpath, 0, 1, 0, '')");
        $query->bindValue(':sqlpath', $sqlpath, PDO::PARAM_STR);
        $query->execute();
        header('Location: install.php?action=register');
        /** os=1 if windows os=0 if linux **/
      }
    }
  }
}
?>