<?php
session_start();
$res=session_destroy();
if($res){
    header('Location: http://chicken.dothome.co.kr/index.html');
}
?>