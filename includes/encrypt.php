<?php

if (!function_exists('encryptId')) {
    function encryptId($id) {
        return rtrim(strtr(base64_encode($id), '+/', '-_'), '=');
    }
}

if (!function_exists('decryptId')) {
    function decryptId($encryptedId) {
        $encryptedId = strtr($encryptedId, '-_', '+/');
        return base64_decode($encryptedId);
    }
}

?>