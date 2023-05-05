<?php
function genPass($length)
{
  $allchars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?';
  $password = '';
  for ($i = 0; $i < $length; $i++) {
    $password .= $allchars[rand(0, strlen($allchars) - 1)];
  }
  return $password;
}
