<?php
include 'connection.php';

$query = mysqli_query($conn, "SELECT * FROM project_list where status = 1");

$data = array();
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = "<li class='sidebar-item'><div class='row'>
    <div class='col mt-0'>
    <a class='sidebar-link' onclick='getlistfeature(this)' data-id='".$row['id_project']."' data-name='".$row['project_name']."'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-align-left align-middle'><line x1='17' y1='10' x2='3' y2='10'></line><line x1='21' y1='6' x2='3' y2='6'></line><line x1='21' y1='14' x2='3' y2='14'></line><line x1='17' y1='18' x2='3' y2='18'></line></svg>".$row['project_name']."</span></a></div>
    <div class='col-auto'>
    <a href='#' style='color: lightgoldenrodyellow;' onclick='editproject(`".$row['id_project']."|".$row['project_name']."`)'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-edit align-middle me-2'><path d='M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7'></path><path d='M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z'></path></svg></a>
    </div></li>";
}

echo json_encode($data);

mysqli_close($conn);
