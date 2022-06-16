<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todoリストユーザ登録画面</title>
<link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>
<link rel="stylesheet" href="register.css">
</head>

<body>
  <!-- <form action="todo_register_act.php" method="POST"> -->
    <!-- <fieldset> -->
<div class="container">
  <div class="welcome">
    <div class="pinkbox">
      <div class="signup nodisplay">
        <h1>register</h1>
        <form  action="todo_register_act.php" method="POST" autocomplete="off">
          <input type="text" name="username" placeholder="username">
          <!-- <input type="text" placeholder="email"> -->
          <input type="text" name="password" placeholder="password">
          <!-- <input type="password" placeholder="confirm password"> -->
          <button class="button submit">create account </button>
        </form>
      </div>
      <div class="signin">
        <h1>sign in</h1>
        <form action="todo_login_act.php" method="POST" class="more-padding" autocomplete="off">
          <input type="text" name="username" placeholder="username">
          <input type="password" name="password" placeholder="password">
          <div class="checkbox">
            <input type="checkbox" id="remember" /><label for="remember">remember me</label>
          </div>
          <button class="button submit">login</button>
        </form>
      </div>
    </div>

    <div class="leftbox">
      <h2 class="title"><span>BLOOM</span>&<br>BOUQUET</h2>
      <p class="desc">pick your perfect <span>bouquet</span></p>
      <img class="flower smaller" src="https://image.ibb.co/d5X6pn/1357d638624297b.jpg" alt="1357d638624297b" border="0">
      <p class="account">Have an account?</p>
      <button class="button" id="signin">login</button>
    </div>

    <div class="rightbox">
      <!-- <form  method="POST" class="more-padding" autocomplete="off"> -->
      <h2 class="title"><span>BLOOM</span>&<br>BOUQUET</h2>
      <p class="desc"> pick your perfect <span>bouquet</span></p>
      <img class="flower" src="https://preview.ibb.co/jvu2Un/0057c1c1bab51a0.jpg"/>
      <p class="account">don't have an account?</p>
      <button class="button" id="signup">sign up</button>
<!-- </form> -->
    </div>
  </div>
 </div>
      <!-- <legend>todoリストユーザ登録画面</legend>  -->
      <!-- <div>
        username: <input type="text" name="username">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>
      <div>
        <button>Register</button>
      </div>  -->
<!-- <a href="todo_login.php">or login</a> -->

    <!-- </fieldset> -->
  <!-- </form> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="register.js"></script>
</body>

</html>