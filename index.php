<?php
session_start();
if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'naam', FILTER_SANITIZE_SPECIAL_CHARS);
    $mail = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
    $class = filter_input(INPUT_POST, 'klas', FILTER_SANITIZE_SPECIAL_CHARS);

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $mail;
    $_SESSION['class'] = $class;
    $_SESSION['workshop'] = $_POST['workshop'];
    $_SESSION['check'] = $_POST['check'];
    $_SESSION['btn'] = $_POST['submit'];
    header("location: formulier.php");
}
?>
<!DOCTYPE html>
<head>
    <title>oefenopdracht forms</title>
</head>
<body>
<style>
    label {
        float: left;
        display: block;
        width: 150px;
    }
    input {
        display: block;
    }
</style>
    <h1 style="text-align: center">Inschrijfformulier Workshop</h1>
    <form method="post" action="index.php">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" value="" placeholder="Typ text" required/>
        <br>
        <label for="e-mail">Email:</label>
        <input type="email" id="e-mail" name="email" placeholder="Typ text" value="" required/>
        <br>
        <label for="klas">Klas:</label>
        <input type="text" id="klas" name="klas" placeholder="Typ text" required/>
        <br>
        <br>
        <table>
            <tr>
                <td>Workshops</td>
                <td></td>
                <td><input type="radio" id="drone" name="workshop" value="Drones" required></td>
                <td><label for="drone" style="margin-left: 50px">Drones</label> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="radio" id="rasberry" name="workshop" value="Rasberry Pi" required></td>
                <td><label for="rasberry" style="margin-left: 50px">Rasberry Pi</label> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="radio" id="security" name="workshop" value="Security" required></td>
                <td><label for="security" style="margin-left: 50px">Security</label> </td>
            </tr>
        </table>
        <br>
        <br>
        <input id="check" name="check" type="checkbox" value="true" style="float: left; margin-right: 50px" required>
        <label for="check">Ik ga akkoord met de voorwaarden</label>
        <br>
        <br>
        <br>
        <input type="submit" name="submit" value="Inschrijven">
    </form>
</body>
