<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Referentiel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Societes;
use AppBundle\Entity\UserSocietesDates;
use AppBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="pagehome")
     */
    public function defaultAction(Request $request)
    {

        // Adding 2 success type messages
        $this->addFlash("success", "This is the first success message");
        $this->addFlash("success", "This is the second success message");

        // Adding 2 error type messages
        $this->addFlash("error", "This is the first error message");
        $this->addFlash("error", "This is the second error message");


        return $this->render('default/index.html.twig', array(
            'login'=>'onetrack'
        ));
    }

    /**
     * @Route("/listing", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $result = [];

            $idLogin = $this->simple_decrypt($request->get('contexte'), 'ODkwMDY1OS4zMTU=');
            $idLogins= explode("#", $idLogin);


        $em = $this->getDoctrine()->getManager();

        // societe par user
        $tests = $em->getRepository('AppBundle:UserSocietesDates')->findBy(array('idUsers' => $idLogins[0], 'idDate' => "132"));
        $i = 0;

        //login
        $login = $em->getRepository('AppBundle:Users')->findOneBy(array('idUsers' => $idLogins[0]));

        //referentiel
        $RAW_QUERY = 'SELECT * FROM user_referentiels WHERE id_users = '.$idLogins[0].';';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $referentiel = $statement->fetchAll();

        //marches
        foreach ($tests as $idtest) {
            $RAW_QUERY = 'SELECT * FROM marches WHERE id_marche = 8 and id_marche_type= 1;';
            $statement = $em->getConnection()->prepare($RAW_QUERY);
            $statement->execute();
            $marche = $statement->fetchAll();
            $idtest->{"marche"} = $marche[0]['Marche'];
            $result[$i] = $idtest;
            $i++;
        }



            $this->get('session')->set('idlogin', $login->getLogin());


        //$_SESSION['Login'] = $login->getLogin();

        return $this->render('default/listingActifs.html.twig', array(
            'tests' => $result,
            'login' => $login->getLogin(),
            'referentiel' => $referentiel[0]['id_referentiel']

        ));
    }


    /**
     * Finds and displays a test entity.
     *
     * @Route("listing/{id}/{ref}", name="Actif_show")
     * @Method("GET")
     */
    public function showAction(Request $test)
    {
        $em = $this->getDoctrine()->getManager();
        $societe = $em->getRepository('AppBundle:Societes')->findOneBy(array('idSociete' => $test->get('id')));



        //login
        $login = $this->get('session')->get('idlogin');
        //referentiel
        $result=$societe;
        //add marche
        $RAW_QUERY = 'SELECT * FROM marches WHERE id_marche = 8 and id_marche_type= 1;';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $marche = $statement->fetchAll();
        $result->{"marche"} = $marche[0]['Marche'];

        //add code
        $RAW_QUERY = 'select * from code where id_code IN (SELECT id_code FROM societes_code WHERE id_societe='.$test->get('id').')';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $code = $statement->fetchAll();
        $result->{"code"} = $code[0]['nom'];


        // tableau famille / sous famille

        $RAW_QUERY = 'SELECT * FROM referentiel_famille WHERE id_referentiel='.$test->get('ref').';';
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $familles = $statement->fetchAll();


$tab_famille=[];
$i=0;
        foreach ($familles as $famille) {
            //info famille
            $RAW_QUERY = 'SELECT libelle FROM famille WHERE id_famille ='.$famille['id_famille'].';';
            $statement = $em->getConnection()->prepare($RAW_QUERY);
            $statement->execute();
            $info_famille = $statement->fetchAll();
            $tab_famille[$i]=array('libelle'=>$info_famille[0]['libelle'],'famille'=>'Y', 'id_famille'=>$famille['id_famille']);
            //sous famille

            $RAW_QUERY = 'SELECT * FROM famille_sous_famille WHERE id_referentiel ='.$test->get('ref').' AND id_famille='.$famille['id_famille'].';';
            $statement = $em->getConnection()->prepare($RAW_QUERY);
            $statement->execute();
            $sous_familles = $statement->fetchAll();

            foreach($sous_familles as $sous_famille){
                $RAW_QUERY = 'SELECT * FROM sous_famille WHERE id_sous_famille = '.$sous_famille['id_sous_famille'].';';
                $statement = $em->getConnection()->prepare($RAW_QUERY);
                $statement->execute();
                $info_sous_famille = $statement->fetchAll();
                $i++;
                $tab_famille[$i]=array('libelle'=>$info_sous_famille[0]['libelle'],'famille'=>'N' , 'id_famille'=>$famille['id_famille']);

                $RAW_QUERY = 'SELECT * FROM question WHERE id_question IN (SELECT id_question FROM sous_famille_question WHERE id_referentiel = '.$test->get('ref').'  And id_sous_famille= '.$sous_famille['id_sous_famille'].' ORDER BY id_sous_famille, ordre)';
                $statement = $em->getConnection()->prepare($RAW_QUERY);
                $statement->execute();
                $questions = $statement->fetchAll();
                foreach($questions as $question) {

                    //reponse
                    $RAW_QUERY = 'SELECT * FROM reponse WHERE id_question IN (SELECT id_question FROM sous_famille_question WHERE id_referentiel = 57 ORDER BY id_sous_famille, ordre) AND id_societe = '.$test->get('id').' AND id_question= '.$question['id_question'].' AND id_date= 132;';
                    $statement = $em->getConnection()->prepare($RAW_QUERY);
                    $statement->execute();
                    $reponse = $statement->fetchAll();

                    if($reponse){

                        $RAW_QUERY = 'SELECT * FROM sources WHERE id_source='.$reponse[0]['id_source'];
                        $statement = $em->getConnection()->prepare($RAW_QUERY);
                        $statement->execute();
                        $source = $statement->fetchAll();
                        $i++;
                        $tab_famille[$i]=array('libelle'=>$question['code'].' '.$question['libelle'],'famille'=>'Q', 'id_famille'=>$famille['id_famille'],'format'=>$question['suffixe'],'commentaire'=>$reponse[0]['commentaire'],'source'=> $source[0]['source']);



                    }else {

                        $i++;
                        $tab_famille[$i]=array('libelle'=>$question['code'].' '.$question['libelle'],'famille'=>'Q', 'id_famille'=>$famille['id_famille'],'format'=>$question['suffixe'],'commentaire'=>'','source'=>'');


                    }
                    //source

                }


            }

            $i++;
        }

        return $this->render('default/DetailsActif.html.twig', array(
            'test' => $result,
            'login' => $login,
            'famille'=> $tab_famille,
        ));
    }





    function simple_decrypt($message, $key)
    {
        $METHOD = 'aes-128-cbc-hmac-sha1';
        if (mb_strlen($key, '8bit') !== 16) {
            throw new Exception("Needs a 256-bit key!");
        }
        $ivsize = openssl_cipher_iv_length($METHOD);
        $iv = mb_substr($message, 0, $ivsize, '8bit');
        $ciphertext = mb_substr($message, $ivsize, null, '8bit');

        $result = openssl_decrypt(
            $ciphertext,
            $METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );
        while ($msg = openssl_error_string())
            var_dump($msg . "<br />\n");
        return $result;
    }
}
