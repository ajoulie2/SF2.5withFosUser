<?php

namespace CapBundle\Controller;
use CapBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/")
 * @Template()
 */
class AlexController extends Controller
{
     /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        return array('name' => 'AlexIsGood');
    }

    /**
     * @Route("/addUser")
     * @Template()
     */
    public function addAction(Request $request)
    {
        // Création de l'entité
        $user = new User();
        $user->setName('Alex');
        $user->setPassword('Alex');

        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // Étape 1 : On « persiste » l'entité
        $em->persist($user);

        // Étape 2 : On « flush » tout ce qui a été persisté avant
        $em->flush();

        /*if ($request->isMethod('POST')) {

            $request->getSession()->getFlashBag()->add('notice', 'user bien enregistrée.');
            return $this->redirect($this->generateUrl('useradded', array('id' => $user->getId())));
        }*/



        return $this->render('CapBundle:User:add.html.twig');
    }

    /**
     * @Route("/userAdded")
     * @Template()
     */
    public function userAddedAction(Request $request)
    {

    }


    /**
     * @Route("/view/{id}")
     * @Template()
     */
    public function viewAction($id)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('CapBundle:User')
        ;

        // On récupère l'entité correspondante à l'id $id
        $user = $repository->find($id);

        // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
        // ou null si l'id $id  n'existe pas, d'où ce if :
        if (null === $user) {
            throw new NotFoundHttpException("L'user d'id ".$id." n'existe pas.");
        }

        return $this->render('CapBundle:Alex:view.html.twig', array(
            'user' => $user
        ));
    }

}
