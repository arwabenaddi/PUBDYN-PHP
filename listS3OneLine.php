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
  $name = "";    
 try {
    $objects = $s3->listObjects([      
      'Bucket'=>$bucket       
    ]);
   foreach ($objects['Contents']  as $object) {       
//         echo $object['Key'].PHP_EOL;
        $name =  $object['Key'];           
   }  
    // Get the object.
    $result = $s3->getObject([
        'Bucket' => $bucket,
        'Key'    => $name
    ]);

//Affichage contenu de fichier existant dans le bucket 
//echo $result['Body'];
       $contents = $result['Body'];
       $content = str_replace("arwa","test",$contents);  
//echo $content;
    $connection=mysqli_connect($host,$dbUsername,$dbPass,$dbname);
    if (mysqli_connect_error()){
        die('connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
    }

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$filename = $name;
// $filenames = readfile('db.sql'); 
//  echo $contents;
//  $contents = str_replace(' ','',$contents);

// $lines = str_replace(CHR(13).CHR(10),"",$contents);
echo $filename;
 $lines = file($filename);
// Loop through each line
mysqli_query($connection,$lines) or die('Erreur insertion file'.$lines.'<br>'.mysqli_error($connection));

// If it has a semicolon at the end, it's the end of the query
} 
} 
 catch (S3Exception $e) {
    echo $e->getMessage().PHP_EOL;
 }

?>

