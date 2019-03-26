<?php

// To be executed in a command toolwith access to the directory of this source code  :
// (for example in a WAMP installation) => $ /c/wamp64/bin/php/php7.2.4/php.exe listS3OneLine.php


// Decode the argument of the batch
$racine=substr($argv[0],0,strpos($argv[0], "list"));


require_once $racine.'aws-autoloader.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;


$bucket = 'PUBDYN-PHPS3';

   // Instantiate the S3 client with your AWS credentials

    $s3 = new Aws\S3\S3Client([
        'signature' => 'v2',
        'version' => 'latest',
        'region' => 'ap-southeast-1',
        'credentials'  => [
            'key'    => $CELLAR_ADDON_KEY_ID,
            'secret' => $CELLAR_ADDON_KEY_SECRET
        ],
        'endpoint' => "https://".$CELLAR_ADDON_HOST
      ]);


// Use the high-level iterators (returns ALL of your objects).
try {
    $results = $s3->getPaginator('ListObjects', [
        'Bucket' => $bucket
    ]);

    foreach ($results as $result) {
        foreach ($result['Contents'] as $object) {
            echo $object['Key'] . PHP_EOL;
        }
    }
} catch (S3Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

// Use the plain API (returns ONLY up to 1000 of your objects).
try {
    $objects = $s3->listObjects([
        'Bucket' => $bucket
    ]);
    foreach ($objects['Contents']  as $object) {
        echo $object['Key'] . PHP_EOL;
    }
} catch (S3Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

?>
