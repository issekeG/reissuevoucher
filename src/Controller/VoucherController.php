<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Voucher;
use App\Form\VoucherType;
use App\Form\VoucherTypeEdit;
use App\Repository\VoucherRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/voucher")
 */
class VoucherController extends AbstractController
{
    /**
     * @Route("/", name="app_voucher_index", methods={"GET"})
     */
    public function index(VoucherRepository $voucherRepository): Response
    {
        return $this->render('voucher/dashboard.html.twig', [
            'vouchers' => $voucherRepository->findAll(),
        ]);
    }

    /**
     * @Route("/form", name="app_voucher_new", methods={"GET", "POST"})
     */
    public function new(Request $request, VoucherRepository $voucherRepository, MailerInterface $mailer): Response
    {
        $voucher = new Voucher();

        $user = $this->getUser();

        if ($user instanceof User){
            $form = $this->createForm(VoucherTypeEdit::class, $voucher);
        }else{
            $form = $this->createForm(VoucherType::class, $voucher);
        }

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $voucherRepository->add($voucher, true);

            if ($user instanceof User){
                $user_email = $user->getEmail();

                $email = (new Email())

                    #Replace with the address that should send the emails
                    ->from('gickelisseke@gmail.com')

                    ->to($user_email)

                    #Replace with your Mail Subject!
                    ->subject('subject!')

                    #Replace with your Mail Content !
                    ->text('content')

                    #Replace with your Mail Content in HTML format!
                    ->html('<p>Replace content in html format !!!!!!!</p>');

                $mailer->send($email);
            }

            return $this->redirectToRoute('app_voucher_new', [], Response::HTTP_SEE_OTHER);
        }


        if ($user instanceof User){
            return $this->renderForm('voucher/voucher_new_login.html.twig', [
                'voucher' => $voucher,
                'form' => $form,
            ]);
        }
        else{
            return $this->renderForm('voucher/new.html.twig', [
                'voucher' => $voucher,
                'form' => $form,
            ]);
        }

    }


    /**
     * @Route("/", name="app_voucher_search", methods={"GET", "POST"})
     */
    public function search(VoucherRepository $voucherRepository): Response
    {
        return $this->render('voucher/dashboard.html.twig', [
            'vouchers' => $voucherRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_voucher_show", methods={"GET"})
     */
    public function show(Voucher $voucher): Response
    {
        return $this->render('voucher/show.html.twig', [
            'voucher' => $voucher,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_voucher_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Voucher $voucher, VoucherRepository $voucherRepository): Response
    {
        $form = $this->createForm(VoucherTypeEdit::class, $voucher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $voucherRepository->add($voucher, true);

            return $this->redirectToRoute('app_voucher_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('voucher/edit.html.twig', [
            'voucher' => $voucher,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_voucher_delete", methods={"POST"})
     */
    public function delete(Request $request, Voucher $voucher, VoucherRepository $voucherRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$voucher->getId(), $request->request->get('_token'))) {
            $voucherRepository->remove($voucher, true);
        }

        return $this->redirectToRoute('app_voucher_index', [], Response::HTTP_SEE_OTHER);
    }



    /**
     * @Route("update/{status}/{id}", name="update_status", methods={"POST","GET"})
     */
    public function updateStatus(VoucherRepository $voucherRepository, $status, $id, EntityManagerInterface $entityManager) : Response
    {

        $id = (int)$id;
        $shoes = $voucherRepository->find($id);

        if (!$shoes) {
            throw $this->createNotFoundException('ReissueRequest not found with id ' . $id);
        }

        $shoes->setStatus($status);

        $entityManager->flush();

        return $this->redirectToRoute('app_voucher_index');

    }

    /**
     * @Route("update/{status}", name="dashboard_status", methods={"POST","GET"})
     */
    public function showShoesByStatus(VoucherRepository $voucherRepository, $status): Response
    {
        return $this->render('voucher/dashboard.html.twig', [
            'vouchers' => $voucherRepository->findBy(['status' => $status])
        ]);
    }

}
