<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/style.css"/>
  <title>connexion & inscription</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form action="index2.php" class="sign-in-form" method="POST">
          <h2 class="title">Connexion</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>

            <input type="text" name="username" value="" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" value="" required>
          </div>
          <input type="submit" value="login" class="btn solid" name="login">

          <?php

                session_start();

                //Si la clef de session username et password n'éxiste pas alors on affiche le message dans echo ""
                if (!key_exists("username", $_SESSION) || !key_exists("password", $_SESSION)) {                                         
                    echo "Ce n'est pas les bon logs";
                } else {
                //Si la clef de session username et password éxiste alors on renvoie vers la page home.html
                  echo "<p>Bienvenue " . $_SESSION["username"] . " "
                  . $_SESSION["password"] . "</p>";
                  header("Location: http://localhost/TODODO/ToDoGit/Projet-transverse-ToDoList/connexion inscription/home");
                }

          ?>

          <p class="social-text">connexion avec les réseaux social</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <form action="index2.php" class="sign-up-form" method="POST">
          <h2 class="title">inscription</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="username" name="username" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="email" name="email" value="" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" name="password" value="" required />
          </div>
          <input type="submit" class="btn" value="Signup" name="submit" />
          <p class="social-text">inscription avec les réseaux</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>TODOLIST</h3><br>
          <button class="btn transparent" id="sign-up-btn">
            inscription
          </button>
        </div>
        <img src="assets/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>TODOLIST</h3><br>
          <button class="btn transparent" id="sign-in-btn">
            CONNEXION
          </button>
        </div>
        <img src="assets/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="assets/app.js"></script>
</body>

</html>