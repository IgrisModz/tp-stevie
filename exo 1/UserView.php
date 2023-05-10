<?php

class UserView {
    public function display($userModel) {
        echo "<h1>User Information</h1>";
        echo "<p>Username: " . $userModel->getUsername() . "</p>";
    }
}