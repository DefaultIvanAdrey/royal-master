<?php
session_start();
session_destroy();
// Redirect to the logout page:
header('Location: login.html');
?>