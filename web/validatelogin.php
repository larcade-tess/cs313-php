<?php
session_start();
require_once 'connecttodb.php';

function Login()
{
    if(empty($_POST['username']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
    
    if(empty($_POST['password']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if(!$this->CheckLogin($username,$password))
    {
        return false;
    }
    
    $_SESSION[$this->GetLoginSessionVar()] = $username;
    
    return true;
}

function CheckLogin($username,$password)
{         
    $username = $this->SanitizeForSQL($username);
    $pwdmd5 = md5($password);
    $dbinfo = $db->query('SELECT username, passwordhash FROM login WHERE username = '$username' && passwordhash ='$pwdmd5'');
    
    $result = mysql_query($dbinfo,$this->connection);
    
    if(!$result || mysql_num_rows($result) <= 0)
    {
        $this->HandleError("Error logging in. ".
            "The username or password does not match");
        return false;
    }
    return true;
}
?>