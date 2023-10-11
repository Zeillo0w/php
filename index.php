<!DOCTYPE html>
<html>
<head>
    <title>Traducteur Anglais - Français</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    margin: 0;
    padding: 0;
}

h1 {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

form {
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: left;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin-top: 20px;
    border-radius: 3px;
    cursor: pointer;
}

p {
    margin: 20px;
}

a {
    text-decoration: none;
    color: #333;
}

a:hover {
    text-decoration: underline;
}

</style>
<body>
    <?php
    if (!isset($_POST['word']) || !isset($_POST['direction'])) {
        ?>
        <h1>Traducteur Anglais - Français</h1>
        <form method="post" action="translate.php">
            <label for="word">Mot :</label>
            <input type="text" name="word" id="word" required>
            <label for="direction">Sens de traduction :</label>
            <select name="direction" id="direction">
                <option value="toEnglish">Français vers Anglais</option>
                <option value="toFrench">Anglais vers Français</option>
            </select>
            <button type="submit">Traduire</button>
        </form>
        <?php
    } else {
        $word = $_POST['word'];
        $direction = $_POST['direction'];

        $translation = translate($word, $direction);

        ?>
        <h1>Traducteur Anglais - Français</h1>
        <p>Résultat de la traduction : <?php echo $translation; ?></p>
        <a href="translate.php">Retour au formulaire</a>
        <?php
    }
    ?>

</body>
</html>
