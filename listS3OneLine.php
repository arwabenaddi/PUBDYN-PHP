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
//  $connection=mysqli_connect($host,$dbUsername,$dbPass,$dbname);
//connect to S3
// $bucket = 'new-bucket-10ed2760';
$bucketAr = 'archivage';
$bucket  = "new-bucket-10ed2760";
$keynamesql  = "onetrack_2019-03-29.sql";
// $name  = "onetrack_2019-03-29.zip";
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
  $name = "";    
 try {
    $objects = $s3->listObjects([      
      'Bucket'=>$bucket       
    ]);
   foreach ($objects['Contents']  as $object) {   
       
         foreach($object as $key) {
//              print "$key => $value\n";
            $extension = pathinfo($key, PATHINFO_EXTENSION);
               echo $extension; 
            if ($extension = "7z"){
               echo 'ok ext';
              
            }
         }
        
    }  

       
//            $reponse = $connection->multi_query($tests)or die('Erreur insertion file'.$tests.'<br>'.mysqli_error($connection));
   
} catch (S3Exception $e) {
    echo $e->getMessage().PHP_EOL;
 }
?>
