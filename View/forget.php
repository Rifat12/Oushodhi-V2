<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'publicHeader.php'; ?>

    <fieldset>
        <legend>Security Question</legend>
        <form action="../Controller/checkforget.php" method="post">
            <label for="ans"> What's your favourite color? </label>
            <br>
            <br>
            <input type="text" name="ans" id="" placeholder="Write your answer here">
            <br>
            <br>
            <input type="submit" value="Confirm">


        </form>


    </fieldset>

    <br>


    <?php include 'publicFooter.php'; ?>

</body>

</html>