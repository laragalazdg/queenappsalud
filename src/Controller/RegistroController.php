<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Security\UserClassBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegistroController extends AbstractController
{
    #[Route('/registro', name: 'registro')]
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
$user= new User();
        $form= $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $nuevoUsuario = $this->getDoctrine()->getManager();
            $plaintextPassword = $user->getPassword();
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $plaintextPassword
            );
            $user->setPassword($hashedPassword);
            $nuevoUsuario->persist($user);
            $nuevoUsuario->flush();
            $this->addFlash('exito',User::REGISTRO_EXITOSO);
        
            return $this->redirectToRoute('dashboard');

        }    

        return $this->render('registro/index.html.twig', [
            'formulario' => $form->createView()
        ]);
}
}
