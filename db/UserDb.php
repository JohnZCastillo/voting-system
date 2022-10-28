<?php

namespace UserDb;

use model\User;

require_once 'autoload.php';

interface UserDb
{

    public function getUser($id);

    public function getUsers(): User;

    public function addUser(User $user);

    public function removeUser($id);

    public function updateUser(User $user);
}
