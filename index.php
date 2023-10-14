<?php
if ($_SERVER['REQUEST_URI'] === '/law') {
    include('law.html');
    exit;
} else if ($_SERVER['REQUEST_URI'] === '/thanks') {
    include('thanks.html');
    exit;
} else if ($_SERVER['REQUEST_URI'] === '/policy') {
    include('policy.html');
    exit;
}
include('index.html');
?>
