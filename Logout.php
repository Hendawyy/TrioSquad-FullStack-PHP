<?php
session_start();
session_unset();
session_destroy();
require("index.html");
?>