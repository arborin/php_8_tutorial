<?php



function getTransactionFiles(string $dirPath)
{
    $files = [];

    foreach (scandir($dirPath) as $file) {
        if (is_dir($file)) {
            continue;
        }

        $files[] = $dirPath . $file;
    }

    return $files;
}


function getTransaction(string $fileName): array
{
    if (!file_exists($fileName)) {
        trigger_error("File " . $fileName . " does not exists", E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    fgetcsv($file); // remove first line 


    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractTransaction($transaction);
    }


    return $transactions;
}


function extractTransaction(array $transactionRow): array
{
    [$date, $checkNumber, $description, $amount] = $transactionRow;

    $amount = (float)str_replace(['$', ','], '', $amount);

    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount,
    ];
}
