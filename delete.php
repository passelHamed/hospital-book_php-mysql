<?php

require_once("connectdata.php");

$delete = new database2();


if (isset($_GET['id']) && isset($_GET['cmd'])){
    if ($_GET['cmd'] == "delete"){
        $delete->setId($_GET['id']);
        $delete->delete();
        echo "<script>document.location='allbooks.php'</script>";
    }
}