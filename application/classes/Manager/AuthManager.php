<?php

class Manager_AuthManager
{
    //This class contains the authentication processes and methods used to access the session.
    public function authenticateUser($userPassword, $storedPassword)
    {
        if(crypt($userPassword, $storedPassword) == $storedPassword)
            return true;
        else
            return false;
    }

    public function setUserSession($userName, $userRole, $userEmail)
    {
        $session = Session::instance();

        $session->set('userName', $userName);
        $session->set('userEmail', $userEmail);
        $session->set('userRole', $userRole);
    }

    public function getSessionUserName()
    {
        $session = Session::instance();

        return $session->get('userName');
    }

    public function getSessionUserEmail()
    {
        $session = Session::instance();

        return $session->get('userEmail');
    }

    public function getSessionUserRole()
    {
        $session = Session::instance();

        return $session->get('userRole');
    }

    public function addValueToSession($key, $value)
    {
        $session = Session::instance();
        $session->set($key,$value);
    }

    public function getValueFromSession($key)
    {
        $session = Session::instance();
        return $session->get($key);
    }

    public function destroyUserSession()
    {
        $session = Session::instance();

        $session->delete('userName');
        $session->delete('userEmail');
        $session->delete('userRole');
    }

    public function isLoggedIn()
    {
        $session = Session::instance();
        $userEmail = $session->get('userEmail');
        if(isset($userEmail))
            return true;
        else
            return false;
    }

}
