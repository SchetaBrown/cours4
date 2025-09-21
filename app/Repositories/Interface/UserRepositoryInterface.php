<?php

namespace App\Repositories\Interface;

interface UserRepositoryInterface
{
    public function getEntityById($id);
    public function createEntity($data);
    public function getUserInSocialTable($provider, $socialAccount);
    public function getEntityByEmailWithSocial($socialAccount);
}
