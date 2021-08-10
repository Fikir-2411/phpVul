<?php

$username = $_POST['username']; $password = $_POST['password'];
if ($username == 'admin') {
    if (hash('md5', $paswword, false) == '0e98321410563210983242136754122109') {
        echo 'You\'ve  been logged in as Admin';
    } else {
        echo 'You aren\'t the real admin';
    }
}
