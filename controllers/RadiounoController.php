<?php

namespace Controllers;
use simplehtmldom\HtmlWeb;


class RadiounoController
{
    public function index()
    {
        $client = new HtmlWeb();
        $html = $client->load('https://radiouno.pe');
        $iframe = $html->find('iframe[src]', 2);
        $src = $iframe->src;
        $baseurl = explode('index.php', $src);

        $playlist = $client->load($src);
        $playlist = $playlist->find('script',2);
        $playlist = $playlist->src;
        $playlist = $client->load($baseurl[0].$playlist);
        $playlist = explode('mp3: "',$playlist);
        $playlist = $playlist[1];
        $playlist = explode(';"',$playlist);
        $playlist = $playlist[0].';';
        return $playlist;
    }
}