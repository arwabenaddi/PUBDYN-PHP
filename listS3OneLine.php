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
// $bucketAr = 'archivage';
// $bucketAr = 'new-bucket-10ed2760/test/';
$bucket  = "new-bucket-10ed2760";
// $keynamesql  = "onetrack_2019-03-29.sql";
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
//   $name = "";    
 try {
    $objects = $s3->listObjects([      
      'Bucket'=>$bucket       
    ]);
     foreach ($objects['Contents']  as $object) {  
     $name =  $object['Key']; 
    echo $name;
        if ($name as $content){
             if(is_file("$content"){
                  echo $content
             }  
             else{
                 echo 'no file';
             }
        }
     }
//    foreach ($objects['Contents']  as $object) {  
//        $name =  $object['Key']; 
//        if(is_file($name){                  
//                     $result = $s3->getObject([
//                         'Bucket' => $bucket,
//                         'Key'    => $name,
//                         'SaveAs' => "/var/tmp/".$name
//                     ]);     

                 
//                 if (!file_exists("/var/tmp/".$name)) {
//                     echo "DONT EXIST!!!!!!" . "<br> ";
//                 }
//                 else
//                 {
//                     echo "EXIST!!!!!!" . "<br> ";
//                 }


//                    $str=file_get_contents("/var/tmp/".$name);
//                     $str=str_replace(" KEY_BLOCK_SIZE=8", "",$str);


//                     //echo $str;
//                    file_put_contents("/var/tmp/".$name, $str);
//                      $putobject = $s3->putObject([
//                                   'Body' => $str,
//                                   'Bucket' => $bucketAr,
//                                   'Key' => $name,             
//                      ]);   
//           // traitement pour le fichier trouvé
//        } 
//     }
       
//          $command = "mysql -h bhmaqgriwqzf40aeyawd-mysql.services.clever-cloud.com -P 3306 -u un0nkeibvggep0ix -pUiS485fnESJLjbyP2ePM bhmaqgriwqzf40aeyawd  < /var/tmp/".$name;
//             $output = shell_exec($command);   
//              echo $output;
       
//            $reponse = $connection->multi_query($tests)or die('Erreur insertion file'.$tests.'<br>'.mysqli_error($connection));
   
} catch (S3Exception $e) {
    echo $e->getMessage().PHP_EOL;
 }
?>
