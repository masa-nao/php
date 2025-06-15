<?php
// $company = htmlspecialchars($_POST["company"], ENT_QUOTES, "UTF-8");
$company = htmlspecialchars($_GET["company"], ENT_QUOTES, "UTF-8");

print("会社名は「" . $company . "」ですね");