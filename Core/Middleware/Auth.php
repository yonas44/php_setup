<?php

namespace Core\Middleware;

class Auth
{

  public function handle()
  {
    if (!$_SESSION['full_name'] ?? false) {
      header('location: /register');

      exit();
    }
  }
}