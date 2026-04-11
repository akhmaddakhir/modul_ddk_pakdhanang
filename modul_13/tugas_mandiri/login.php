<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 40px auto;
        max-width: 400px;
        padding: 20px;
      }

      h2 {
        font-size: 16px;
        margin-bottom: 12px;
      }

      table td {
        padding: 4px 6px;
        font-size: 14px;
      }

      input[type="text"],
      input[type="password"] {
        background: #ffffcc;
        border: 1px solid #999;
        padding: 3px 6px;
        font-size: 14px;
        width: 200px;
      }

      input[type="submit"] {
        margin-top: 6px;
        padding: 4px 14px;
        font-size: 13px;
        cursor: pointer;
      }

      .error {
        color: red;
        font-size: 13px;
        margin-top: 8px;
      }
    </style>
  </head>
  <body>
    <h2>Halaman Login</h2>

    <?php
      $error = "";
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"] ?? "";
        $password = $_POST["password"] ?? "";

        if ($username === "aku" && $password === "1234567") {
          header("Location: form.php");
          exit;
        } else {
          $error = "Username atau password salah!";
        }
      }
    ?>

    <form method="POST" action="">
      <table>
        <tr>
          <td>Username</td>
          <td>: <input type="text" name="username" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>: <input type="password" name="password" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="KIRIM" /></td>
        </tr>
      </table>
    </form>

    <?php if ($error): ?>
      <p class="error"><?= $error ?></p>
    <?php endif; ?>
  </body>
</html>