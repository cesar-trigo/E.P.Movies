<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://img.icons8.com/?size=32&id=CYNJXdNSRvrJ&format=png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <title>Sign up - CAC-Movies</title>
</head>

<body>
  <header class="header">
    <div class="content-icon-nav">
      <div>
        <a class="icon-inic" href="#">CAC-MOVIES</a>
      </div>

      <nav class="nav-header">
        <ul>
          <li class="li-inic-header">
            <a class="ancor-inic-header" href="./signIn.html">Sign In</a>
          </li>
          <li class="li-inic-header">
            <a class="ancor-inic-header" href="#">Sign Up</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="content-secont-nav">
      <nav class="nav-header">
        <ul>
          <li>
            <a class="ancor-sec-header" href="../index.html">Home</a>
          </li>
          <li>
            <a class="ancor-sec-header" href="./api.html">Api</a>
          </li>
          <li>
            <a class="ancor-sec-header" href="./usersTable.php">Table</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="main-index">
    <article class="content-section">
      <section class="content-title-dem">
        <form id="login" action="../php/login-register/register.php" method="POST">
          <h2 class="h1">Sign up</h2>
          <!-- msj de error y success -->
          <?php 
            if (isset($_GET['error'])) { ?>
                <p id="error" class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
          
          <label for="name">Name</label>
          <input type="text" name="name" id="name"  placeholder="Name">
          <label for="lastName">Last Name</label>
          <input type="text" name="lastName" id="lastName" placeholder="Last Name">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Email">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Password">
          <button type="submit">Sign up</button>
        </form>
      </section>
    </article>
  </main>
  <footer>
    <div class="content-footer">
      <a class="icon-inic" href="#">Terms and Conditions</a>
      <a class="icon-inic" href="#">Frequent questions</a>
      <a class="icon-inic" href="#">
        Ayuda</a>
      <a class="ancor-inic-header a-footer" href="#">Movie Manager</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../js/form.js"></script>
</body>

</html>