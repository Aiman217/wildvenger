<?php

  function invalidUsername($username){
    return (bool) preg_match("#[^a-zA-Z0-9]#", $username);
  }

  function invalidPassword($password){
    return (bool) preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,16}$/m", $password);
  }

?>
