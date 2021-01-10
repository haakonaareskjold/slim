<?php


namespace App\Models;

interface UserRepositoryInterface
{
    public function getAllUsers();

    public function getUserById($id);

    public function createOrUpdate($id = null);
}