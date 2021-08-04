<?php
session_start();
setcookie('login', null, time() - 0);
    header("Location: indexAluno.html");
