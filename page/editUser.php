<?php  
session_start();
if (isset($_SESSION["email"])) {
    include("../php/connect.php");

    if (empty($_SESSION['email'])) {
        echo "You must log in";
        header("location: signIn.html");
    } else {
        $email = $_SESSION['email']; 
?>
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
                        <a class="ancor-sec-header" href="./usersTable.php">Table</a>
                    </li>
                    <li>
                        <a class="ancor-sec-header" href="#">Edit User</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main-index">
        <article class="content-section-api content-table">
            <?php 
                $query = "SELECT * FROM usuarios WHERE email='$email'";

                if ($result = mysqli_query($connect, $query)) {
                    $row = mysqli_fetch_array($result);          
            ?>
            <form action="../php/updateUser.php" method="POST" class="register-login" id="form-libro">
                <h2>Edit</h2>
                <div>
                    <div>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                        <div>
                            <input class="" type="text" name="email" id="email" placeholder="Email" value="<?php echo $row['email']; ?>" autofocus />
                            <div class="error-text"></div>
                        </div>
                        <input class="" type="text" name="name" placeholder="Name" id="name" value="<?php echo $row['name']; ?>" autofocus />
                        <div class="error-text"></div>
                    </div>
                    <div>
                        <input class="" type="text" name="lastName" id="lastName" placeholder="Last Name" value="<?php echo $row['lastName']; ?>" />                            
                        <div class="error-text"></div>
                    </div>
                    <div>
                        <input class="" type="text" name="password" placeholder="Password" value="<?php echo $row['password']; ?>" id="password" />
                        <div class="error-text"></div>
                    </div>
                </div>
                <div class="button-container"> 
                    <button class="" type="submit" value="Modify" id="Modify" name="Modify">Modify</button>
                </div>   
            </form>
            <?php 
                }
            ?>
        </article>
    </main>
    <footer>
        <div class="content-footer">
            <a class="a-footer" href="#">Terms and Conditions</a>
            <a class="a-footer" href="#">Frequent questions</a>
            <a class="a-footer" href="#">Ayuda</a>
            <a class="a-footer" href="#">Movie Manager</a>
        </div>
    </footer>
</body>
</html>

<?php 
    }
} else {
    header("location: signIn.html");
}
?>
