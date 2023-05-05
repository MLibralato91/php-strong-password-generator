<?php
function genPass($length)
{
  $allchars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?';
  $password = [];
  $charact = '';

  while (sizeof($password) < $length) {
    $charact = $allchars[rand(0, strlen($allchars) - 1)];
    if (!in_array($charact, $password)) {
      $password[] = $charact;
    }
  }
  return $password;
}
