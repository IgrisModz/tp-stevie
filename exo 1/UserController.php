<?php

class UserController
{
    public function register()
    {
        echo "<form method='post'>";
        echo "<div><label for=\"username\">Username</label>";
        echo "<input id=\"username\" name=\"username\" type=\"text\"/></div>";
        echo "<div><label for=\"password\">Password</label>";
        echo "<input id=\"password\" name=\"password\" type=\"password\"/></div>";
        echo "<div><label for=\"email\">Email</label>";
        echo "<input id=\"email\" name=\"email\" type=\"email\"/></div>";
        echo "<input id=\"submit\" name=\"submit\" type=\"submit\" value=\"Register\"/>";
        echo "</form>";
    }

    public function processRegistration()
    {
        $userInfo = $_POST;
        $user = new UserModel();
        $user->save($userInfo);
        echo "<div>User registered successfully!</div>";

        return $user;
    }
}