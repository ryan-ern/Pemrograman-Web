<?php
$page = $_GET['page'];
switch($page){
    case 'NikeR6':
        include('NikeR6.html');
    break;
    case 'NikeAF1':
        include('NikeAF1.html');
    break;
    case 'NikeAM':
        include('NikeAM.html');
    break;
}
?>