<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <div class="userlist">
        <h1>User list</h1>
        <a href="user1.html">
            <p>Aurora Skye</p>
        </a>
        <a href="user2.html">
            <p>Phoenix Stone</p>
        </a>
        <a href="user3.html">
            <p>Luna Evergreen</p>
        </a>
    </div>
    <?php
    // Retrieve user data from JSON file
    $jsonFile = 'users.json';
    $users = json_decode(file_get_contents($jsonFile), true);

    // Display added users
    if (!empty($users)) {
        echo "<div>";
        foreach ($users as $user) {
            echo "<div>$user</div>";
        }
        echo "</div>";
    } else {
        echo "No users added.";
    }
    ?>
</body>
</html>
