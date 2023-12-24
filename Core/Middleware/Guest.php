<?php

namespace Core\Middleware;

class Guest
{

  public function handle()
  {
    if ($_SESSION['full_name'] ?? false) {
      header('location: /');

      exit();
    }
  }
}