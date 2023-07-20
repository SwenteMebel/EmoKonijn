<?php

include_once "include/html_begin.php";
include_once "include/html_tags.php";
include_once "include/html_einde.php";
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Emo konijntjes matchen</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/EmoKonijn/css/main.css">
</head>
<body>
<main>
    <div class="konijnen">
        <div class="bovenRij"><?php include "../EmoKonijn/include/emokonijnBoven.php";?></div>
        <div class="onderRij"></div>
    </div>
    
    <form>
    <label>Highscore </label><input type='text' name='highscore' id='heightscore' placeholder='De highscore is'disabled><br>
    <label>Score </label><input type='number' name='score' id='score' placeholder='Hier komt je score'disabled> <br>
    <input type='submit' value="Vernieuw" onclick="window.location.reload">
    </form>

    <table>
        <tr><th>Hoevaak komen de scores voor?</th></tr>
        <tr>
            <td><?php include_once "../EmoKonijn/data/score_0.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_1.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_2.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_3.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_4.txt";?></td>
        </tr>
        <tr>
            <td><?php include_once "../EmoKonijn/data/score_5.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_6.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_7.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_8.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_9.txt";?></td>
        </tr>
        <tr>
            <td><?php include_once "../EmoKonijn/data/score_10.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_11.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_12.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_13.txt";?></td>
            <td><?php include_once "../EmoKonijn/data/score_14.txt";?></td>
        </tr>
    </table>
  
</main>
    <script src="" sync defer></script>
</body>
</html>