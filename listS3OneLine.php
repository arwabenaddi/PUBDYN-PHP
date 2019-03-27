<?php
// Decode the argument of the batch
$racine=substr($argv[0],0,strpos($argv[0], "list"));
require_once $racine.'aws-autoloader.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
// connect to MySql 
$host = "bhmaqgriwqzf40aeyawd-mysql.services.clever-cloud.com";//host Mysql Clever Cloud
$dbUsername = "un0nkeibvggep0ix";//Nom d'utilisateur  Mysql Clever Cloud
$dbPass = "UiS485fnESJLjbyP2ePM";//Mot de passe Mysql Clever Cloud
$dbname = "bhmaqgriwqzf40aeyawd";//Nom de la base de donnée Mysql Clever Cloud
 $connection=mysqli_connect($host,$dbUsername,$dbPass,$dbname);
if (mysqli_connect_error()){
    die('connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
    echo 'ok connect to mysql';
}
//connect to S3
$bucket = 'new-bucket-10ed2760';
$CELLAR_ADDON_HOST = 'cellar-c2.services.clever-cloud.com';
$CELLAR_ADDON_KEY_ID = 'SW016A92CMAJ79EUZY77';
$CELLAR_ADDON_KEY_SECRET = 'KViiRPiEKYrxBA7OQcuMpYJUpxYzMP0yit3lh5k6';
   // Instantiate the S3 client with your AWS credentials
    $s3 = new Aws\S3\S3Client([
        'signature'=>'v2',
        'version'=>'latest',
        'region'=>'ap-southeast-1',
        'credentials'=>[
           'host' => $CELLAR_ADDON_HOST,
            'key'=>$CELLAR_ADDON_KEY_ID,
            'secret'=>$CELLAR_ADDON_KEY_SECRET
        ],
        'endpoint'=>"https://".$CELLAR_ADDON_HOST
      ]);
//Utilisez les itérateurs de haut niveau (renvoie TOUS vos objets)
//Use the high-level iterators (returns ALL of your objects).
// try {
//     $results = $s3->getPaginator('ListObjects', [
//         'Bucket'=>$bucket
//     ]);
//     foreach ($results as $result) {
//         foreach ($result['Contents'] as $object) {
//             echo $object['Key'].PHP_EOL;
//             $bd = $object['Key'].PHP_EOL;
//             $filebd = file_get_contents($bd);
//         }
//     }
// } catch (S3Exception $e) {
//     echo $e->getMessage().PHP_EOL;
// }
// Utilisez l'API simple (renvoie SEULEMENT jusqu'à 1000 de vos objets)
try {
//     $objects = $s3->listObjects([
      
//        'Bucket'=>$bucket
       
//     ]);
//     foreach ($objects['Contents']  as $object) {
       
//         echo $object['value'].PHP_EOL;
        
//     }

    // Get the object.
    $result = $s3->getObject([
        'Bucket' => $bucket,
        'Key'    => $CELLAR_ADDON_KEY_ID
    ]);

    // Display the object in the browser.
    header("Content-Type: {$result['ContentType']}");
    echo $result['Body'];
 } catch (S3Exception $e) {
    echo $e->getMessage().PHP_EOL;
}
?>
