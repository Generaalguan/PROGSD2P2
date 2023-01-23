<?php
include('includes/config.php');
include('includes/database.php');
include('includes/functions.php');

secure();

include('includes/header.php');
?>
<hr>

<h2>Dashboard</h2>

<a href="projects.php">manage projects</a>
<a href="users.php">manage users</a>

<?php
include('includes/footer.php');