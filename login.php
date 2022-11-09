<?php
     require '_db_connect.php';
     $login = false;
     $ShowError = false; 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = $_POST['user'];
          $password = $_POST['pass'];
          // $sql = "SELECT*FROM user WHERE username = '$username' AND password='$password'";
          $sql = "SELECT*FROM user WHERE username = '$username'";
          $result = mysqli_query($conn,$sql);
          $num = mysqli_num_rows($result);
          if($num == 1){
            while($rows = mysqli_fetch_assoc($result)){
              if(password_verify($password,$rows['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: index.php");
              }
              else{
                $ShowError = true;
             }
            }
          }
          else{
            $ShowError = true;
         }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login to Techsays</title>
  <link rel="stylesheet" href="style.css">
 </head>
<body>
  <div class="wrapper">
    <div class="container">
      <h1>Login To Techsays</h1>
      <?php
      if($login == true){
        echo'<h5>Yeah! logged-in Successfully</h5>';
      }
      if($ShowError == true){
        echo'<h5>Oops! Try again</h5>';
      }
      ?>
      <form action="./login.php" method="POST">
      <input type="text" name ="user" id="username" placeholder="Username"/>
      <input type="password" name="pass" id="password" placeholder="Password"/>
      <button id="submit">Login</button>
      </form> 
    </div>
      <a href="signup.php">Create New Account</a>
    <ul class="instructions">
      <li>
        Username should begin with a alphabetic character, should be between 4
        to 32 letters.
      </li>
      <li>Password 8 character. 1 lower 1 upper 1 special symbol 1 number</li>
    </ul>
  </div>
  <script>
    let usernameRef = document.getElementById("username");
    let passwordRef = document.getElementById("password");
    let usernameError = document.getElementById("username-error");
    let passwordError = document.getElementById("password-error");
    let submitBtn = document.getElementById("submit");
    let messageRef = document.getElementById("message-ref");
    let isUsernameValid = () => {
      //   "Username should begin with a alphabetic character, should be between 4 to 32 letters."
      const usernameRegex = /^[a-zA-Z][a-zA-Z0-9]{3,32}/gi;
      return usernameRegex.test(usernameRef.value);
    };
    let isPasswordValid = () => {
      //   "Password 8 character. 1 lower 1 upper 1 special symbol 1 number"
      const passwordRegex =
        /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm;
      return passwordRegex.test(passwordRef.value);
    };
    usernameRef.addEventListener("input", () => {
      if (!isUsernameValid()) {
        // messageRef.style.visibility = "hidden";
        usernameRef.style.cssText =
          "border-color:#fe2e2e;background-color: #ffc2c2";
      } else {
        usernameRef.style.cssText =
          "border-color:#34bd34;background-color: #c2ffc2";
      }
    });
    passwordRef.addEventListener("input", () => {
      if (!isPasswordValid()) {
        // messageRef.style.visibility = "hidden";
        passwordRef.style.cssText =
          "border-color:#fe2e2e;background-color: #ffc2c2";
      } else {
        passwordRef.style.cssText =
          "border-color:#34bd34;background-color: #c2ffc2";
      }
    });
    submit.addEventListener("mouseover", () => {
      if (!isUsernameValid() || !isPasswordValid()) {
        var containerRect = document
          .querySelector(".container")
          .getBoundingClientRect();
        var submitRect = submit.getBoundingClientRect();
        offset = submitRect.left - containerRect.left;

        if (offset <= 100) {
          submitBtn.style.transform = "translateX(16.25em)";
        } else {
          submitBtn.style.transform = "translateX(0)";
        }
      }
    });
    submit.addEventListener("click", () => {
      messageRef.style.visibility = "visible";
    });
  </script>
</body>
</html>