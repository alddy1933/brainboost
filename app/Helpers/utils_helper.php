<?php
function getBiodata($username)
{
    return db_connect()->table('bb_user')->where('username', $username)->get()->getRow();
}
