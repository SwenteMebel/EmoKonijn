
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
        <div class="onderRij"><?php include "../EmoKonijn/include/matchBekijken.php";?></div>
    </div>
    
    <form>
    <label>Highscore</label> <?php include_once "../EmoKonijn/data/highscore.txt";?><br>
    <?php include_once "include/aantalMatches.php";?> <br>
    <?php include_once "include/aantalMatches.php";?> <br>
    <input type='submit' value="Vernieuw" onclick="window.location.reload">
    </form>
    <table>

        <tr><th>Hoevaak komen de scores voor?</th></tr>
        <tr>
            <td>De score 0 komt <?php include_once "../EmoKonijn/data/score_0.txt";?> keer voor.</td>
            <td>De score 1 komt <?php include_once "../EmoKonijn/data/score_1.txt";?> keer voor.</td>
            <td>De score 2 komt <?php include_once "../EmoKonijn/data/score_2.txt";?> keer voor.</td>
            <td>De score 3 komt <?php include_once "../EmoKonijn/data/score_3.txt";?> keer voor. </td>
            <td>De score 4 komt <?php include_once "../EmoKonijn/data/score_4.txt";?> keer voor.</td>
        </tr>
        <tr>
            <td>De score 5 komt <?php include_once "../EmoKonijn/data/score_5.txt";?> keer voor.</td>
            <td>De score 6 komt <?php include_once "../EmoKonijn/data/score_6.txt";?> keer voor.</td>
            <td>De score 7 komt <?php include_once "../EmoKonijn/data/score_7.txt";?> keer voor.</td>
            <td>De score 8 komt <?php include_once "../EmoKonijn/data/score_8.txt";?> keer voor.</td>
            <td>De score 9 komt <?php include_once "../EmoKonijn/data/score_9.txt";?> keer voor.</td>
        </tr>
        <tr>
            <td>De score 10 komt <?php include_once "../EmoKonijn/data/score_10.txt";?> keer voor.</td>
            <td>De score 11 komt <?php include_once "../EmoKonijn/data/score_11.txt";?> keer voor.</td>
            <td>De score 12 komt <?php include_once "../EmoKonijn/data/score_12.txt";?> keer voor.</td>
            <td>De score 13 komt <?php include_once "../EmoKonijn/data/score_13.txt";?> keer voor.</td>
            <td>De score 14 komt <?php include_once "../EmoKonijn/data/score_14.txt";?> keer voor.</td>
        </tr>
    </table>
  
</main>
    <script src="" sync defer></script>
</body>
</html>