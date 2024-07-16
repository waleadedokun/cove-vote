<?php
    require('./config.php');
    if (isset($_SESSION['loggedIn'])) {
        header('Location: ../election-list.php');
        exit();
    };

    if (isset($_POST['login'])) {
      $email = $connection->real_escape_string($_POST['email']);
      $password = $connection->real_escape_string($_POST['password']);

      $res = $connection->query(query: "SELECT password from users WHERE email='$email'");

      if ($res->num_rows > 0 ) {
          $hashed_password = $res->fetch_assoc()['password'];

        if(password_verify($password, $hashed_password)) {
            $_SESSION['loggedIn'] = true;
            $_SESSION['email'] = $email;
            $res = $connection->query(query: "SELECT `user-type` from `users` WHERE email='$email'");
            $user_type = $res->fetch_assoc()['user-type'];
            $res = $connection->query(query: "SELECT `id` from `users` WHERE email='$email'");
            $id = $res->fetch_assoc()['id'];
            $_SESSION['userType'] = $user_type;
            $_SESSION['id'] = $id;
            exit('success');
        } else {
            exit('failed to veriy password');
        }
    } else {
      exit('User does not exist');
    };
    exit($email . " = " . $password);

  }
?>