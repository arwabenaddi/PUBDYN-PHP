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
//             echo 'contenu de fichier : '$filebd;
//         }
//     }
// } catch (S3Exception $e) {
//     echo $e->getMessage().PHP_EOL;
// }
//Utilisez l'API simple (renvoie SEULEMENT jusqu'à 1000 de vos objets)
 try {
    $objects = $s3->listObjects([
      
      'Bucket'=>$bucket
       
    ]);
   foreach ($objects['Contents']  as $object) {
            echo $object['key'].PHP_EOL;
            return $object['key'];
   }
 } 
catch {
        // Temporary variable, used to store current query
        $templine = '';
        // Read in entire file
        $filename =  $object['Key'];

        //  echo $contents;
        //  $contents = str_replace(' ','',$contents);

        // $lines = str_replace(CHR(13).CHR(10),"",$contents);

         $lines = file($filename);
        // Loop through each line
        foreach ($lines as $line)
        {
        // Skip it if it's a comment
        // || $line == str_replace(CHR(13).CHR(10),"",$line) 
        if (substr($line,0,2) == '--' || $line == '' )
            continue;

        // Add this line to the current segment
        $templine = $line;

        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';')
        {
            // $line = str_replace(CHR(13).CHR(10),"",$line);
            // Perform the query
            // $insertfile = "INSERT INTO db VALUES ($templine)";
            mysqli_query($connection,$templine) or die('Erreur insertion file'.$templine.'<br>'.mysqli_error($connection));
            // Reset temp variable to empty
            $templine = '';
            echo 'Tables imported successfully';
        }
        }

}



catch (S3Exception $e) {
    echo $e->getMessage().PHP_EOL;
 }



?>
