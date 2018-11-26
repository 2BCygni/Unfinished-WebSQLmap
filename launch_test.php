<?php
include('config/db.php');
if(isset($_POST['name'], $_POST['target'], $_POST['url'], $_POST['description'], $_POST['risk'], $_POST['level'], $_POST['argv'], $_POST['pvp'])) {
	$query=$db->prepare("INSERT into tests (name, description, target, launchdate, state, argv, risk, level, url, pvp) VALUES (:name, :description, :target, :launchdate, 'Pending', :argv, :risk, :level, :url, :pvp)");
    $query->bindValue(':name', htmlspecialchars($_POST['name']), PDO::PARAM_STR);
    $query->bindValue(':description',htmlspecialchars($_POST['description']), PDO::PARAM_STR);
    $query->bindValue(':target',htmlspecialchars($_POST['target']), PDO::PARAM_STR);
    $query->bindValue(':launchdate',date("Y-m-d H:i:s"), PDO::PARAM_STR);
    $query->bindValue(':argv',$_POST['argv'], PDO::PARAM_STR);
    $query->bindValue(':risk',htmlspecialchars($_POST['risk']), PDO::PARAM_STR);
    $query->bindValue(':level',htmlspecialchars($_POST['level']), PDO::PARAM_STR);
    $query->bindValue(':url',$_POST['url'], PDO::PARAM_STR);
    $query->bindValue(':pvp',htmlspecialchars($_POST['pvp']), PDO::PARAM_STR);
    $query->execute();

    $query=$db->prepare("SELECT * FROM infos");
    $query->execute();
    $data=$query->fetch();


    echo $data['pypath'] . " " . $data['sqlpath'] . " -u " . $_POST['url'] . " --risk=" . $_POST['risk'] . " --level=" . $_POST['level'] . " -p " . $_POST['pvp'] . " " . $_POST['argv'] . " --dbs" . " --batch";

    exec($data['pypath'] . " " . $data['sqlpath'] . " -u " . $_POST['url'] . " --risk=" . $_POST['risk'] . " --level=" . $_POST['level'] . " -p " . $_POST['pvp'] . " " . $_POST['argv'] . " --dbs --batch");

    header('Location: gest_test.php?name=' . $_POST['name']);
}
// date("Y-m-d H:i:s")