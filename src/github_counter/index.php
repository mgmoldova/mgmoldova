<?php
header('Content-Type: image/svg+xml');
header('Cache-Control: max-age=0, no-cache, no-store, must-revalidate');
?>
<?php
require '../db_lonagi.php';
require '../nvg-data.php';
R::selectDatabase("stati");
$cccc = new nvgData("stati","ips",'ip',"github",6,1,1);
$cccc2 = new nvgCount("stati","visitors","github");
$cccc2->enableLangC("langs");
$cccc2->Count();
R::selectDatabase("stati");
$v=@R::findOne("visitors","wsite = ?",["github"])->value;
?>

<svg xmlns="http://www.w3.org/2000/svg" width="140" height="20">
    <linearGradient id="b" x2="0" y2="100%">
        <stop offset="0" stop-color="#bbb" stop-opacity=".1"/>
        <stop offset="1" stop-opacity=".1"/>
    </linearGradient>
    <mask id="a">
        <rect width="140" height="20" rx="3" fill="#fff"/>
    </mask>
    <g mask="url(#a)">
        <rect width="81" height="20" fill="#555"/>
        <rect x="81" width="57" height="20" fill="#007ec6"/>
        <rect width="140" height="20" fill="url(#b)"/>
    </g>
    <g fill="#fff" text-anchor="middle" font-family="DejaVu Sans,Verdana,Geneva,sans-serif" font-size="11">
        <text x="41.5" y="15" fill="#010101" fill-opacity=".3">Profile views</text>
        <text x="41.5" y="14">Profile views</text>
        <text x="101.5" y="15" fill="#010101" fill-opacity=".3"><?=$v;?></text>
        <text x="101.5" y="14"><?=$v;?></text>
        <text fill="#007ec6" x="1010" y="140"><?=time();?></text>
    </g>
</svg>