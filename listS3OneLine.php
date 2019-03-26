<?php

// To be executed in a command toolwith access to the directory of this source code  :
// (for example in a WAMP installation) => $ /c/wamp64/bin/php/php7.2.4/php.exe listS3OneLine.php


// Decode the argument of the batch
$racine=substr($argv[0],0,strpos($argv[0], "list"));


require_once $racine.'aws-autoloader.php';

use Aws\S3\S3Client;

$CELLAR_ADDON_HOST = getenv("cellar-c2.services.clever-cloud.com");
$CELLAR_ADDON_KEY_ID = getenv("SW016A92CMAJ79EUZY77");
$CELLAR_ADDON_KEY_SECRET = getenv("KViiRPiEKYrxBA7OQcuMpYJUpxYzMP0yit3lh5k6");
//echo "\n".$CELLAR_ADDON_HOST."\n".$CELLAR_ADDON_KEY_ID."\n".$CELLAR_ADDON_KEY_SECRET."\n";

try {

    // Instantiate the S3 client with your AWS credentials

    $s3Client = new Aws\S3\S3Client([
        'signature' => 'v2',
        'version' => 'latest',
        'region' => 'ap-southeast-1',
        'credentials'  => [
            'key'    => $CELLAR_ADDON_KEY_ID,
            'secret' => $CELLAR_ADDON_KEY_SECRET
        ],
        'endpoint' => "https://".$CELLAR_ADDON_HOST
      ]);

    $buckets = $s3Client->listBuckets();
    //echo var_dump($buckets);
    //Echo "\n---\n";
    echo "at date ".date("Y-m-d H:i:s")." - Buckets are : ";

    foreach ($buckets['Buckets'] as $bucket) {
        echo $bucket['Name'] . ", ";
    }
    echo "END";

}
    catch(Exception $e) {

    exit($e->getMessage());
} 



?>
