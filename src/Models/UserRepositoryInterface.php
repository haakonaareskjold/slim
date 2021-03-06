<?php

namespace App\Models;

interface UserRepositoryInterface
{
    public function getAllUsers();

    public function getUserById($id);

    public function createUser($name);

    public function update(string $id, string $name);

    public function delete($id);
}
