<?php

namespace App\Http\Services\Interface;

interface IntegrationAuthServiceInterface {
    public function callback($provider);
}
