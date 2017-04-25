<?php

namespace SiQ\SupportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use SiQ\SupportBundle\Entity\Ticket;
use SiQ\SupportBundle\Entity\Image;

class SupportController extends Controller
{
    public function indexAction($page)
    {
        // On sait pas combien de pages il y a mais on sait qu'une page doit être supérieure ou égale à 1
        if( $page < 1)
        {
            // On déclenche une exception NotFoundHttpException
            // Cela va affichier la page d'erreur 404
            throw $this->createNotFoundException('Page inexistante(page = '.$page.')');
         
        }
        
        // Pour récupérer la liste de tous les articles : on utilise findAll()
        // les tickets
        $tickets = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('SupportBundle:Ticket')
                        ->findAll();
        
        // L'appel de la vue change pas
        /*
        $tickets = array(
            array(
                'titre'   => '3511',
                'id'      => 1,
                'auteur'  => 'Denhez',
                'contenu' => 'bla bla bla ',
                'date'    => new \DateTime()),
            array(
                'titre'   => '3511',
                'id'      => 1,
                'auteur'  => 'Denhez',
                'contenu' => 'bla bla bla ',
                'date'    => new \DateTime()),
            array(
                'titre'   => '3511',
                'id'      => 1,
                'auteur'  => 'Denhez',
                'contenu' => 'bla bla bla ',
                'date'    => new \DateTime()),
            array(
                'titre'   => '3511',
                'id'      => 1,
                'auteur'  => 'Denhez',
                'contenu' => 'bla bla bla ',
                'date'    => new \DateTime()), 
        );
        */
        return $this->render('SupportBundle:Support:index.html.twig', array( 'tickets' => $tickets ));
        // return new Response("Hello World!");
        
        //$id = 5;
        //$url = $this->generateUrl('siqsupport_voir', array('id' => $id), true);
        
        // redirection
        //return $this->redirect($url);
        
        //return $this->render('SupportBundle:Support:index.html.twig', array('nom' => 'Youf'));
        
    }
    
    public function voirAction($id)
    {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getManager();
        
        // On récupère l'entité correspondant à l'id $id
        $ticket = $em->getRepository('SupportBundle:Ticket')
                     ->find($id);
        
        if($ticket === null)
        {
            throw $this->createNotFoundException('Ticket[id='.$id.'] inexistant.');
        }
        
        // On récupère la liste des commentaires
        $liste_commentaires = $em->getRepository('SupportBundle:Commentaire')
                                 ->findAll();
                                 
        // Puis modifier la ligne du render comme ceci, pour prendre en compte l'article:
        
        return $this->render('SupportBundle:Support:voir.html.twig', array(
            'ticket' => $ticket,
            'liste_commentaires' => $liste_commentaires
            ));
        
        
        
         
         /* $ticket = array(
            'id' => 1,
            'titre' => 'La qualification 3511',
            'auteur' => 'Isabell Denhez',
            'contenu' => 'J  ai un souci ',
            'date'    => new \DateTime()                        
                         ); */
         //$response = new Response(json_decode(array('id' => $id )));
         
         //$response-> headers->set('Content-Type', 'application/json');
         // return $response;
        //return $this->render('SupportBundle:Support:voir.html.twig', array('ticket' => $ticket ));
         
         // On récupère la requête
         //$request = $this->getRequest();
         
         // On récupère notre paramètre tag
         //$tag = $request->query->get('tag');
         
         //return new Response("affaicher id ".$id.", avec le tag : ".$tag);
         
         
        // $id = 6;
       // $url = $this->generateUrl('siqsupport_voir', array('id' => $id), true);
        
        // redirection
        //return $this->redirect($url);
         
    }
    
     public function voirSlugAction($slug, $annee, $format)
    {
         return new Response("affaicher le ticket correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
    }
    
    public function ajouterAction()
    {
        // On récupéré l'EntityManager
        $em = $this->getDoctrine()
                   ->getManager();
        
        // Création de l' entité
        $ticket = new Ticket();
        $ticket->setTitre('Qualification 8611');
        $ticket->setContenu('Disparition de la qualification');
        $ticket->setAuteur('Catherine');
        
        
        // Création de  l'entité Image
        $image = new Image();
        $image->setUrl('');
        $image->setAlt('Qualification');
        
        // On lie l'image à l'article
        $ticket->setImage($image);
        
        // On récupère l'entityManager
        $em = $this->getDoctrine()->getManager();
        
        // On peut ne pas définir ni la date ni la publication,
        // car ces attributs sont définis automatiquement dans le constructeur
        
        // On récupère l'entityManager
        //$em = $this->getDoctrine()->getManager();
        // Etape 1 : On << persiste >> l'entité
        $em->persist($ticket);
        // Etape 2 : On <<flush>>  tout ce qui a été persisté avant
        $em->flush();
        
        // Reste de la méthode qu'on avait déja écrit
              
               
        
        // La gestion d'un formulaire est particulière
        if($this->get('request')->getMethod() == 'POST'){
            // Création et gestion du formulaire
            $this->get('session')->getFlashBag()->add('notice', 'Ticket bien enregistré');
            // Puis on redirige vers la page de visualisation de cet ticket
            return $this->redirect($this->generateUrl('support_voir', array('id' => $ticket->getId())));
        }
        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('SupportBundle:Support:ajouter.html.twig'); 
    }
    
    public function modifierAction($id)
    {
        // On récupére l'EntityManager
        $em = $this->getDoctrine()
                   ->getManager();
       
       // On récupère l'entité correspondant à l'id $id
       $ticket = $em->getRepository('SupportBundle:Ticket')
                    ->find($id);
       if($ticket === null){
        throw $this->createNotFoundException('Ticket[id='.$id.'] inexistant.');
       }
       
       // On récupère toutes les catégories :
       $liste_categories = $em->getRepository('SupportBundle:Categorie')
                              ->findAll();
        
        // On boucle sur les catégories pour les lier à le ticket
        foreach($liste_categories as $categorie)
        {
            $ticket->addCategorie($categorie);
        }
        
        // Inutile de persister le ticket, on l'a récupéré avec Doctrine
        // Etape 2: On déclenche l'enregistrement
        $em->flush();
        
        return new Response('OK');
        //return $this->render('SupportBundle:Suport:modifier.html.twig');
    }
    
    public function archiverAction($id)
    {
        // Ici, on recupéra l'article
        //
        return $this->render('SupportBundle:Suport:archiver.html.twig');
    }
    public function menuAction($nombre)
    {
        // On fixe en dure une liste ici, bien
        $liste = array(
                       array('id' => 2, 'titre' => 'Mon dernier weekend!'),
                       array('id' => 5, 'titre' => 'Sortie de Symfony 2'),
                       array('id' => 9, 'titre' => 'Petit test!')
                       );
        return $this->render('SupportBundle:Support:menu.html.twig', array(
                       'liste_tickets' => $liste // C'est ici tout                                                     
                                                                           ));
    }
    
    public function modifierImageAction($id_ticket)
    {
        $em = $this->getDoctrine()->getManager();
        // On recupere le ticket
        $ticket = $em->getRepository('SupportBundle:Ticket')->find($id_ticket);
        // On modifie l'URL de l' image par exemple
        $ticket->getImage()->setUrl('test.png');
        
        
        return new Response('OK');
    }
    
}
