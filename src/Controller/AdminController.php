<php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/dashboard", name="admin_dashboard")
     */
    public function showAdminDashboard(): Response
    {
        $user = $this->getUser();

        return $this->render('admin/dashboard.html.twig', [
            'user' => $user,
        ]);
    }
};