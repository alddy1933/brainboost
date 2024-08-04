<?php

function checkAuth()
{
    if (session()->get('username') == '') {
        echo view('\App\Views\errors\non-authentication');
        exit();
    }
}
