<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Fn_bcrypt
{
  /* bcrypt 加密
     @p1：$pwd (string)
     return：$hash (string);
  */
  public function bcrypt($pwd = '')
  {
      $salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
      $options = ['cost' => 12 ,'salt' => $salt];
      $hash = password_hash($pwd, PASSWORD_BCRYPT, $options);
      return $hash;
  }
  
  /* bcrypt 驗證
     @p1：$pwd (string)
     @p2：$hash (string)
     return：(boolean);
  */
  public function bcrypt_verify($pwd = '', $hash = ''){
      return password_verify($pwd, $hash);
  }
}
/* Location: ./application/libraries/fn_bcrypt.php */