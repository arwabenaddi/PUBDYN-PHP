<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <?php echo '<p>Variable cryptée</p>'; 
 
    const METHOD = 'aes-128-cbc-hmac-sha1';

     function simple_encrypt($message, $key)
    {
        if (mb_strlen($key, '8bit') !==16) {
            throw new Exception("Needs a 256-bit key!");
        }
        $ivsize = openssl_cipher_iv_length(METHOD);
        $iv = openssl_random_pseudo_bytes($ivsize);

        $ciphertext = openssl_encrypt(
            $message,
            METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );

        return  $iv . $ciphertext;
    }

 
 $id='6781#2018-02-14 16:33:39';
 $variable_crypt=simple_encrypt($id, $salt = 'ODkwMDY1OS4zMTU=');
$parametres = ['contexte'=>$variable_crypt,
               'langue'=>'fr=FR',
              ];
 echo'<a  href="http://app-81cd652f-c489-40d7-bd9a-137afd06953a.cleverapps.io/web/app.php/listing?'.http_build_query($parametres).'">listing</a> <br>';
 ?>
 </body>
</html>


