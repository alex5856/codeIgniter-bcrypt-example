## codeIgniter_bcrypt_simple

作 者： Alex Chen

簡 介：此bcrypt 範例為使用在 codeIgniter libraries

需 求：php 5.5

使用方式：
 
 載入 libraries
 
 `$this->load->library('fn_bcrypt');`
 
 加密
 
 `$post_pwd = $_POST['pwd'];`
 
 `$this->fn_bcrypt->bcrypt($post_pwd);`

 驗證
 
 `$pwd = 'xxxxoooo';  // 已存在資料表之密碼`

 `$this->fn_bcrypt->bcrypt_verify($post_pwd, $pwd);`

