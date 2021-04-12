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
            <b>REGISTRATION</b>
        </legend>
        <form action="../Controller/checkreg.php"' method=' POST'>
            <table align="">
                <tr>
                    <td>
                        Full Name:
                    </td>
                    <td>
                        <input type="text" name='name'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name='email'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <input type="username" name='username'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='password'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" name='confirmpassword'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>
                                <b>Gender</b>
                            </legend>
                            <input type='radio' name='gender' value='male'>Male
                            <input type='radio' name='gender' value='female'>Female
                            <input type='radio' name='gender' value='others'>Others
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>
                                <b>Date of Birth</b>
                            </legend>
                            <input type='number' name=date max=31 min=1>/
                            <input type='number' name=month max=12 min=1>/
                            <input type='number' name=year max=3000 min=1950>
                            <label><i>dd/mm/yyyy</i></label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        <input type='reset' value='Reset'>
                        Already have an account?
                        <a href='./login.php'>Login here!</a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <br>
    <?php include 'publicFooter.php'; ?>
</body>

</html>