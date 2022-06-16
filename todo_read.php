<?php
session_start();
include("functions.php");
check_session_id();

$pdo = connect_to_db();

$sql = 'SELECT * FROM todo_table ORDER BY deadline ASC';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["todo"]}</td>
      <td>{$record["deadline"]}</td>
      <td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>
      <td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>>スケジュール管理</title>
    <link rel="stylesheet" href="read.css">
</head>

<body>
  <fieldset class="list15" >
    <legend>撮影予定一覧</legend>
    <a href="todo_input.php">入力画面</a>
    <a href="todo_register.php">logout</a>
    <table>
      <thead>
  <!-- <div class="list15"> -->
  <ul>
    <tr>
        <li><th>撮影メーカー</th></li>
        <li><th>日程</th></li>
          <!-- <th></th>
          <th></th> -->
    </tr>
  </ul>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
    <!-- </div> -->
  </fieldset>
</body>

</html>