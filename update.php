<?php
include 'connection.php';

if (!empty($_POST['idproject']) && !empty($_POST['projectname'])) {
    $sqlupdate = "UPDATE project_list SET project_name = '".$_POST['projectname']."' WHERE id_project = '".$_POST['idproject']."'";
}else if (!empty($_POST['idfeature']) && !empty($_POST['featurename']) && !empty($_POST['progress']) && !empty($_POST['date'])) {
    $sqlupdate = "UPDATE project_feature SET feature_name = '".$_POST['featurename']."', progress = '".$_POST['progress']."', `date` = '".$_POST['date']."', color = '".$_POST['color']."', `desc` = '".$_POST['desc']."', `status` = '".$_POST['status']."' WHERE id_feature = '".$_POST['idfeature']."'";
}

$resutl = mysqli_query($conn, $sqlupdate); 

echo json_encode($resutl);

mysqli_close($conn);

?>