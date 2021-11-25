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
// ARRAYS
        $one = ["Easy On Me", "Adele", "https://www.elle.vn/wp-content/uploads/2016/11/05/cuoc-song-cua-ca-si-adele-01-1024x1536.jpg"];
        $two = ["God's Country", "State of Mine & Drew Jacobs", "https://1.bp.blogspot.com/-UfkdPAyhyv8/YA6g1kNUOvI/AAAAAAAAJAs/OvF9ijdSQx8zAoMp2D350alou_8Gh0zhwCLcBGAsYHQ/s16000/1.jpg"];
        $three = ["Cold Heart (PNAU Remix)", "Elton John & Dua Lipa", "https://pics.filmaffinity.com/Elton_John_Dua_Lipa_Cold_Heart_Music_Video-694712411-large.jpg"];
        $four = ["abcdefu", "GAYLE", "https://images.squarespace-cdn.com/content/v1/56c346b607eaa09d9189a870/1631714593549-FQ4OYXC0PLSQCPS6JJMC/GAYLE+Press+Photo+2+PC_+LUKE+ROGERSFLAUNT.jpeg"];
        $five = ["Fancy Like", "Walker Hayes", "https://cdn.mobsocmedia.com/uploads/sites/49/20180926143711/walker-hayes-late-daughther-.jpg"];

// OBJECTS
        $song1 = new \stdClass;
        $song1->title = "Easy On Me";
        $song1->artist = "Adele";
        $song1->image = "https://www.elle.vn/wp-content/uploads/2016/11/05/cuoc-song-cua-ca-si-adele-01-1024x1536.jpg";

        $song2 = new \stdClass;
        $song2->title = "God's Country";
        $song2->artist = "State of Mine & Drew Jacobs";
        $song2->image = "https://1.bp.blogspot.com/-UfkdPAyhyv8/YA6g1kNUOvI/AAAAAAAAJAs/OvF9ijdSQx8zAoMp2D350alou_8Gh0zhwCLcBGAsYHQ/s16000/1.jpg";

        $song3 = new \stdClass;
        $song3->title = "Cold Heart (PNAU Remix)";
        $song3->artist = "Elton John & Dua Lipa";
        $song3->image = "https://pics.filmaffinity.com/Elton_John_Dua_Lipa_Cold_Heart_Music_Video-694712411-large.jpg";

        $song4 = new \stdClass;
        $song4->title = "abcdefu";
        $song4->artist = "GAYLE";
        $song4->image = "https://images.squarespace-cdn.com/content/v1/56c346b607eaa09d9189a870/1631714593549-FQ4OYXC0PLSQCPS6JJMC/GAYLE+Press+Photo+2+PC_+LUKE+ROGERSFLAUNT.jpeg";

        $song5 = new \stdClass;
        $song5->title = "Fancy Like";
        $song5->artist = "Walker Hayes";
        $song5->image = "https://cdn.mobsocmedia.com/uploads/sites/49/20180926143711/walker-hayes-late-daughther-.jpg";
    
        $songs = [$song1, $song2, $song3, $song4, $song5];

        return $this->render('/beautiful_homepage/home.html.twig', [
            // arrays
            'one' => $one,
            'two' => $two,
            'three' => $three,
            'four' => $four,
            'five' => $five,
            //array of objects
            "songs" => $songs,
            //objects
            "song1" => $song1,
            "song2" => $song2,
            "song3" => $song3,
            "song4" => $song4,
            "song5" => $song5

        ]);
    }
}
