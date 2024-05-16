<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<?php
include "../notes/functions.php";

$empty_user = (object) [
    "name" => "",
    "type" => "",
    "email" => "",
    "classes" => []
];

function getUsersData() {
    $filename = "../data/users.json";
    if (file_exists($filename)) {
        $jsonData = file_get_contents($filename);
        return json_decode($jsonData, true);
    } else {
        return [];
    }
}

function saveUsersData($users) {
    $filename = "../data/users.json";
    $jsonData = json_encode($users, JSON_PRETTY_PRINT);
    return file_put_contents($filename, $jsonData);
}

function showUserPage($users) {
    $userId = isset($_GET['id']) ? intval($_GET['id']) : null;

    if ($userId !== null && isset($users[$userId])) {
        $user = $users[$userId];
    } else {
        echo "Invalid user ID.";
        return;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_GET['action'])) {
        switch ($_GET['action']) {
            case "update":
                // Update user data
                $user['name'] = htmlspecialchars($_POST['user-name']);
                $user['type'] = htmlspecialchars($_POST['user-type']);
                $user['email'] = htmlspecialchars($_POST['user-email']);
                $user['classes'] = explode(",", htmlspecialchars($_POST['user-classes']));
                $allUsers = getUsersData();
                $allUsers[$userId] = $user;
                saveUsersData($allUsers);
                break;
            case "delete":
                // Delete user
                $allUsers = getUsersData();
                unset($allUsers[$userId]);
                saveUsersData($allUsers);
                header("Location: ../admin/users.php");
                exit();
                break;
        }
    }

    // Display user form
    $classes = implode(", ", $user['classes']);
    echo <<<HTML
    <nav class="nav nav-crumbs">
        <ul>
            <li><a href="../admin/users.php">Back</a></li>
        </ul>
    </nav>
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$userId&action=update">
        <div class="form-control">
            <label class="form-label" for="user-name">Name</label>
            <input type="text" value="{$user['name']}" class="form-input" name="user-name" id="user-name" placeholder="Enter a username">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-type">Type</label>
            <input type="text" value="{$user['type']}" class="form-input" name="user-type" id="user-user-type" placeholder="Enter a usertype">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-email">Email</label>
            <input type="text" value="{$user['email']}" class="form-input" name="user-email" id="user-email" placeholder="Enter a useremail">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-classes">Classes</label>
            <input type="text" value="{$classes}" class="form-input" name="user-classes" id="user-classes" placeholder="Enter a userclasses">
        </div>
        <div class="form-control">
            <input type="submit" class="form-button" value="Save changes">
            <a class="form-button" href="{$_SERVER['PHP_SELF']}?id=$userId&action=delete">Delete</a>
        </div>
    </form>
HTML;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User admin page</title>
    <?php include "../notes/meta.php";?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
            <h1>User Admin</h1>
        </div>
        <div class="flex-stretch"></div>
        <nav class="nav nav-flex flex-none">
            <ul>
                <li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
                <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container">
    <div class="card soft">
        <?php
        $users = getUsersData();
        if (isset($_GET['id'])) {
            showUserPage($users);
        } else {
            echo "<h2>Users List</h2>";
            echo "<nav class='nav'>";
            echo "<ul>";
            foreach ($users as $userId => $userData) {
                echo "<li><a href='../admin/users.php?id=$userId'>{$userData['name']}</a></li>";
            }
            echo "</ul>";
            echo "</nav>";
        }
        ?>
    </div>
</div>
</body>
</html>


