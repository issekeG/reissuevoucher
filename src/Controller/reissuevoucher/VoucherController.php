<?php

namespace App\Controller\reissuevoucher;

use App\Entity\reissuevoucher\VoucherUser;
use App\Entity\reissuevoucher\Voucher;
use App\Form\reissuevoucher\VoucherType;
use App\Form\reissuevoucher\VoucherTypeEdit;

use App\Repository\reissuevoucher\VoucherRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Time;

/*
 * @Route("/voucher")
 */
class VoucherController extends AbstractController
{
    /*
     * @Route("/", name="app_voucher_index", methods={"GET"})
     */
    public function index(VoucherRepository $voucherRepository): Response
    {
        return $this->render('reissuevoucher/voucher/dashboard.html.twig', [
            'vouchers' => $voucherRepository->findAll(),
        ]);
    }

    /*
  * @Route("update/{status}", name="dashboard_status", methods={"POST","GET"})
  */
    public function showShoesByStatus(VoucherRepository $voucherRepository, $status): Response
    {
        return $this->render('reissuevoucher/voucher/dashboard.html.twig', [
            'vouchers' => $voucherRepository->findBy(['status' => $status])
        ]);
    }

    /*
     * @Route("/form", name="app_voucher_new", methods={"GET", "POST"})
     */
    public function new(Request $request, VoucherRepository $voucherRepository, SessionInterface $session): Response
    {
        $voucher = new Voucher();

        $username = $session->get('userName');

        if ($username) {
            $voucher->setRequestedBy($username);
        }
        $voucher->setRequestedDate(New \DateTime());
        $voucher->setNewEvoucherDate(New \DateTime());
        $voucher->setTimeOfPurchase(New \DateTime());
        $voucher->setDateOfPurchase(New \DateTime());

        /*
        $user = $this->getUser();

        if ($user instanceof VoucherUser){
            $form = $this->createForm(VoucherTypeEdit::class, $voucher);
        }else{
            $form = $this->createForm(VoucherType::class, $voucher);
        }
         */
        $form = $this->createForm(VoucherType::class, $voucher);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $voucherRepository->add($voucher, true);

            /*
            if ($user instanceof VoucherUser){
                $user_email = $user->getEmail();

                $email = (new Email())

                    #Replace with the address that should send the emails
                    ->from('charlotte@gmail.com')

                    ->to($user_email)

                    #Replace with your Mail Subject!
                    ->subject('subject!')

                    #Replace with your Mail Content !
                    ->text('content')

                    #Replace with your Mail Content in HTML format!
                    ->html('<p>Replace content in html format !!!!!!!</p>');

                $mailer->send($email);
            }
            */

            return $this->redirectToRoute('app_voucher_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reissuevoucher/voucher/new.html.twig', [
            'voucher' => $voucher,
            'form' => $form,
        ]);


       /* if ($user instanceof VoucherUser){
            return $this->renderForm('reissuevoucher/voucher/voucher_new_login.html.twig', [
                'voucher' => $voucher,
                'form' => $form,
            ]);
        }
        else{
            return $this->renderForm('reissuevoucher/voucher/new.html.twig', [
                'voucher' => $voucher,
                'form' => $form,
            ]);
        }*/

    }


    /*
     * @Route("/", name="app_voucher_search", methods={"GET", "POST"})
     */
    public function search(VoucherRepository $voucherRepository): Response
    {
        return $this->render('reissuevoucher/voucher/dashboard.html.twig', [
            'vouchers' => $voucherRepository->findAll(),
        ]);
    }

    /*
     * @Route("/{id}", name="app_voucher_show", methods={"GET"})
     */
    public function show(Voucher $voucher): Response
    {
        return $this->render('reissuevoucher/voucher/show.html.twig', [
            'voucher' => $voucher,
        ]);
    }


    public function edit(Request $request, Voucher $voucher, SessionInterface $session,VoucherRepository $voucherRepository): Response
    {
        $username = $session->get('userName');
        $form = $this->createForm(VoucherTypeEdit::class, $voucher);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($form->get('reject')->isClicked()) {
                $voucher->setStatus("Rejected");

            }
            else if ($form->get('sentOut')->isClicked()) {
                $voucher->setStatus("Sent out");
                if ($username) {
                    $voucher->setSentOutBy($username);
                }
            }
            else if ($form->get('approved')->isClicked()) {
                $voucher->setStatus("Approved");
                $voucher->setAuthorizedDate(New \DateTime());
                if ($username) {
                    $voucher->setAuthorizedBy($username);
                }

            }

            $voucherRepository->add($voucher, true);

            return $this->redirectToRoute('app_voucher_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reissuevoucher/voucher/edit.html.twig', [
            'voucher' => $voucher,
            'form' => $form->createView(),
        ]);
    }

    /*
     * @Route("/{id}", name="app_voucher_delete", methods={"POST"})
     */
    public function delete(Request $request, Voucher $voucher, VoucherRepository $voucherRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$voucher->getId(), $request->request->get('_token'))) {
            $voucherRepository->remove($voucher, true);
        }

        return $this->redirectToRoute('app_voucher_index', [], Response::HTTP_SEE_OTHER);
    }



    /*
     * @Route("update/{status}/{id}", name="update_status", methods={"POST","GET"})
     */
    public function updateStatus(VoucherRepository $voucherRepository, $status, $id, EntityManagerInterface $entityManager) : Response
    {

        $id = (int)$id;
        $voucher = $voucherRepository->find($id);

        if (!$voucher) {
            throw $this->createNotFoundException('ReissueRequest not found with id ' . $id);
        }

        $voucher->setStatus($status);

        $entityManager->flush();

        return $this->redirectToRoute('app_voucher_index');

    }



}
