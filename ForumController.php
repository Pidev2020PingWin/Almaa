<?php

namespace UserBundle\Controller;

use UserBundle\Entity\Articles_especes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * Articles_espece controller.
 *
 */
class ForumController extends Controller
{
    public function ajoutAction(Request $request)

    {

   $Question=new Question();
    $form=$this->createForm('UserBundle\Form\Articles_especesType',$Articles_especes);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $Articles_especes->setIdEspeces(0);
        $Articles_especes->setIdCat(0);
        $Articles_especes->setIdArticle(0);

        $em->persist($Articles_especes);
        $em->flush();


} return $this->render('@User/informations/Articles_especes/ajoutarticle.html.twig', array( 'Articles_especes'=>$Articles_especes,'form'=>$form->createView() ));}

public function deleteAction($id)
{
    //the manager is the responsible for saving objects, deleting and updating object
    $em=$this->getDoctrine()->getManager();
    $Articles_especes=$em->getRepository(Articles_especes::class)->find($id);
    //the remove() method notifies Doctrine that you'd like to remove the given object from the database
    $em->remove($Articles_especes);
    //The flush() method execute the DELETE query.
    $em->flush();
    //redirect our function to the read page to show our table
    return $this->redirectToRoute('articles_afficher');

}
    public function AfficherAction()
    {
        $Articles_especes=$this->getDoctrine()->getRepository(Articles_especes::class)->findAll();
        //add the list of clubs to the render function as input to be sent to the view
        return $this->render('@User/informations/Articles_especes/articles.html.twig', array('Articles_especes'=>$Articles_especes));
    }
    public function updateAction(Request $request,$id)
    {
        $formation = $this->getDoctrine()->getRepository(Formation::class)->find($id);
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $ef = $this->getDoctrine()->getManager();
            $ef->persist($formation);
            $ef->flush();
            return $this->redirectToRoute("read_formation");
        }
        return $this->render("@Club/Formation/update.html.twig", array("form" => $form->createView()));
    }

}
