<?php
    include('../master/connect.php');

$id = $_POST['id'];

  $sql = "UPDATE part SET status = 'inactive' WHERE part_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));

$conn = null;

echo json_encode($output);
?>
