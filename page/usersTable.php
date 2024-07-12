<?php include("../php/connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img.icons8.com/?size=32&id=CYNJXdNSRvrJ&format=png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Api - CAC-Movies</title>
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
            <a class="ancor-inic-header" href="./signUp.php">Sign Up</a>
          </li>
          <li class="li-inic-header">
            <a class="ancor-inic-header" href="../php/logout.php">Logout</a>
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
            <a class="ancor-sec-header" href="#">Table</a>
          </li>
          <li>
            <a class="ancor-sec-header" href="./editUser.php">Edit User</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
    <main class="main-index">
        <article class="content-section-api content-table">
            <?php
            $query = "SELECT * FROM usuarios";
            if ($result = mysqli_query($connect, $query)): ?>
                <table>
                <caption>All users table.</caption>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Email</th> 
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <th class="th-data" ><?php echo htmlspecialchars($row["name"]); ?></th>
                                <th class="th-data" ><?php echo htmlspecialchars($row["lastName"]); ?></th>
                                <th class="th-data" ><?php echo htmlspecialchars($row["email"]); ?></th>
                                <th class="th-data" ><a href="../php/deleteUser.php?id=<?php echo $row['id']; ?>">&#10060;</a></th>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Query error: <?php echo mysqli_error($connect); ?></p>
            <?php endif; ?>
        </article>
    </main>
    <footer>
    <div class="content-footer">
      <a class="a-footer" href="#">Terms and Conditions</a>
      <a class="a-footer" href="#">Frequent questions</a>
      <a class="a-footer" href="#">
        Ayuda</a>
      <a class="a-footer" href="#">Movie Manager</a>
    </div>
  </footer>
    <script src="../js/api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
