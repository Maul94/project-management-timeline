<?php
include 'connection.php';

$query = mysqli_query($conn, "SELECT * FROM project_feature where status = 1 and project_id = " . $_POST['id'] . " ORDER BY date DESC");

$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = "<tr ondblclick='editfeature(this)' style='cursor: pointer;'><td width='15%'>" . $row['feature_name'] . "</td><td width='10%'>" . $row['date'] . "</td><td width='5%'>" . $row['progress'] . "%</td><td><div class='progress'><div class='progress-bar " . $row['color'] . "' role='progressbar' style='width: " . $row['progress'] . "%' aria-valuenow='" . $row['progress'] . "' aria-valuemin='0' aria-valuemax='100'></div></div></td><td style='display:none;'>" . $row['desc'] . "</td><td style='display:none;'>" . $row['id_feature'] . "</td></tr>";
}

echo json_encode($data);

mysqli_close($conn);
