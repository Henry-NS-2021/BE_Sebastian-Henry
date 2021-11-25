<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeautifulHomepageController extends AbstractController
{
    #[Route('/home', name: 'beautiful_homepage')]
    public function index(): Response
    {
        $one = ["Easy On Me", "Adele", "https://www.elle.vn/wp-content/uploads/2016/11/05/cuoc-song-cua-ca-si-adele-01-1024x1536.jpg"];
        $two = ["God's Country", "State of Mine & Drew Jacobs", "https://1.bp.blogspot.com/-UfkdPAyhyv8/YA6g1kNUOvI/AAAAAAAAJAs/OvF9ijdSQx8zAoMp2D350alou_8Gh0zhwCLcBGAsYHQ/s16000/1.jpg"];
        $three = ["Cold Heart (PNAU Remix)", "Elton John & Dua Lipa", "https://pics.filmaffinity.com/Elton_John_Dua_Lipa_Cold_Heart_Music_Video-694712411-large.jpg"];
        $four = ["abcdefu", "GAYLE", "https://images.squarespace-cdn.com/content/v1/56c346b607eaa09d9189a870/1631714593549-FQ4OYXC0PLSQCPS6JJMC/GAYLE+Press+Photo+2+PC_+LUKE+ROGERSFLAUNT.jpeg"];
        $five = ["Fancy Like", "Walker Hayes", "https://cdn.mobsocmedia.com/uploads/sites/49/20180926143711/walker-hayes-late-daughther-.jpg"];


        return $this->render('/beautiful_homepage/home.html.twig', [
            'one' => $one
        ]);
    }
}
