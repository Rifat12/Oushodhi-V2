<?php
$s_april = 25000;
$balance = -5000;
$w_amount = ($s_april - $balance) * .9;
$withdrawn = 0;

if (isset($_POST['all'])) {
    $withdrawn = $w_amount;
    $w_amount = 0;
    echo "<mark>All the Money has been withdrawn from this account<mark/>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'internalheader.php'; ?>
    <Table>
        <tr>
            <td>April Months Salary:</td>
            <td>
                <?php echo $s_april; ?>
            </td>
        </tr>
        <tr>
            <td>Previous Balance</td>
            <td>
                <?php echo $balance; ?>
            </td>
        </tr>
        <tr>
            <td>Taxes</td>
            <td>
                10%
            </td>
        </tr>
        <tr>
            <td>Withdrawable Amount</td>
            <td>
                <?php echo $w_amount; ?>
            </td>
        </tr>

        <tr>
            <td>Withdrawn Amount</td>
            <td>
                <?php echo $withdrawn; ?>
            </td>
        </tr>

        <form action="" method="post">
            <table>
                <tr>
                    <td><input type="hidden" name="all"></td>
                    <td><button type="submit">Withdraw All</button></td>
                </tr>

            </table>
        </form>


    </Table>
    <?php include 'internalfooter.php'; ?>
</body>

</html>