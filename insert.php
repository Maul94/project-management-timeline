<?php
include 'connection.php';

if (!empty($_POST['projectname'])) {
    $sqlinsert = "INSERT INTO project_list (project_name) VALUE ('".$_POST['projectname']."');";
}else if (!empty($_POST['projectid']) && !empty($_POST['featurename']) && !empty($_POST['progress']) && !empty($_POST['date'])) {
    $sqlinsert = "INSERT INTO project_feature (project_id, feature_name, progress, `date`, color, `desc`) VALUE ('".$_POST['projectid']."', '".$_POST['featurename']."', '".$_POST['progress']."', '".$_POST['date']."', '".$_POST['color']."', '".$_POST['desc']."');";
}

$resutl = mysqli_query($conn, $sqlinsert); 

echo json_encode($resutl);

mysqli_close($conn);

?>