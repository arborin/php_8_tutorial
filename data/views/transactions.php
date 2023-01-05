<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1px" width="100%">
        <thead>
            <tr>
                <td>Date</td>
                <td>Check #</td>
                <td>Description</td>
                <td>Amount</td>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($transactions)) : ?>
                <?php foreach ($transactions as $transaction) : ?>
                    <tr>
                        <td><?= $transaction['date'] ?></td>
                        <td><?= $transaction['checkNumber'] ?></td>
                        <td><?= $transaction['description'] ?></td>
                        <td><?= $transaction['amount'] ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            <tr>

            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">total income:</th>
                <td>123</td>
            </tr>
            <tr>
                <th colspan="3">total expence:</th>
                <td>123</td>
            </tr>
            <tr>
                <th colspan="3">total net:</th>
                <td>123</td>
            </tr>
        </tfoot>
    </table>
</body>

</html>