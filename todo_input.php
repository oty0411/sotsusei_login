<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>DB連携型todoリスト（入力画面）</title> -->
  <link rel="stylesheet" href="input.css">
</head>

<body>
  <form action="todo_create.php" method="POST">

      <a href="todo_read.php">一覧画面</a>
      <a href="todo_register.php">logout</a>
  <div class="list44">
    <div class="list44-title">
        <!-- </div> -->
        <ul>
        <li>撮影メーカー<br>
        <input type="text" name="todo">
      </li>
      <li>
        撮影日<br>
        <input type="date" name="deadline">
      </li>
      </ul>
  </div>
  <section>
  <a href="#" class="btn_06"><button>登録</button></a>
</section>
  <!-- <div class="btnbox">
    <button class="buttonA">登録
    </button>
  </div> -->
  </form>

</body>

</html>