<?php

if (session_status() == PHP_SESSION_NONE) {
    ini_set('session.cookie_lifetime', 60 * 60 * 24); //24h
    ini_set('session.gc-maxlifetime', 60 * 60 * 1);
    session_start();
}
