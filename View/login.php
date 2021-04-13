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
        <legend>
            LOGIN
        </legend>
        <form action='../Controller/checklogin.php' method='POST'>
            <table>
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name='logusername'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='logpassword'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        Don't have an account?
                        <a href='./reg.php'>Create One!</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href='./forget.php'>Forgot Password?</a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <br>
    <?php include 'publicFooter.php'; ?>
</body>

</html>