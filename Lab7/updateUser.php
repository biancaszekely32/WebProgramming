<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update User</title>
    <style>
        <?php include "addUsers.css" ?>
    </style>
</head>

<body>
<div class="container">
    <h1>Update User</h1>
    <p><b>Please fill this form and submit to update the user in the database.</b></p>

    <form action="updateUserBack.php" method="post">
        <input type="hidden" name="id" value="<?php echo trim($_GET['id']); ?>">
        <input type="text" name="name" placeholder="Name:" #name> <br>
        <input type="text" name="username" placeholder="Username:" #username> <br>
        <input type="password" name="password" placeholder="Password:" #password> <br>
        <input type="number" name="age" placeholder="Age:" #age> <br>
        <input type="text" name="role" placeholder="Role:" #role> <br>
        <input type="text" name="email" placeholder="Email:" #email> <br>
        <input type="text" name="webpage" placeholder="Webpage:" #webpage> <br>
        <div class="button_container">
            <button type="submit">Update User</button>
            <button type="reset" onclick="window.location.href='showUsers.html'">Cancel</button>
        </div>
    </form>
</div>
</body>

</html>