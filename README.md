#CodeIgniter bcrypt simple

作 者： Alex Chen

說 明：此bcrypt 範例使用在 php codeIgniter 架構，以提供加密與驗證之用

需 求：php 5.5

使用方式：
 
* 載入 libraries
 
 `$this->load->library('fn_bcrypt');`
 
* 加密
 
 `$post_pwd = $_POST['pwd'];`
 
 `$this->fn_bcrypt->bcrypt($post_pwd);`

* 驗證
 
 `$pwd = 'xxxxoooo';  // 已存在資料表之密碼`

 `$this->fn_bcrypt->bcrypt_verify($post_pwd, $pwd);`

參考資料：

*  http://php.net/manual/en/function.password-hash.php
*  http://php.net/manual/en/function.password-verify.php
*  https://zh.wikipedia.org/wiki/Bcrypt
