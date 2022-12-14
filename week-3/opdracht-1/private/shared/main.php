
<body>
    <form action="" method="post">
    <p>
        <label for="voornaam">Voornaam:</label>
        <input type="text" name="voornaam" id="voornaam" />
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" />
    </p>
    <p>
        <label for="text">text:</label>
        <input type="text" name="text" id="text" />
    </p>
    <p>
        <input type="submit" name="submit" value="submit" />
    </p>
    </form>
</body>

</html>

<?php

    foreach (filter_list() as $id =>$filter) {
        echo  '</br><tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }




if (isset($_POST['submit'])) {
    echo 'niet leeg';

    $user = $_POST['voornaam'];
    $user__validate = trim(stripslashes(htmlspecialchars($user)));
    
    $email = $_POST['email'];
    $email__validate = trim(stripslashes(htmlspecialchars($email)));

    $text = $_POST['text'];
    $text__validate = trim(stripslashes(htmlspecialchars($text)));

}
else{
    echo "je hebt niet alles ingevuld";
}
?>