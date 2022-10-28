<?php

namespace controller;


use Exception;
use model\User;
use UserDb\UserDb;

// function to login
function login($email, $password, UserDb $userDb)
{
    try {

        // get User from db;
        $user = $userDb->getUser($email);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}


// Takes raw data from the request
$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json, true);

// echo $data['email'], $data['password'];
echo json_encode(['message' => 'hello']);
