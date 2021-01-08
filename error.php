<?php
$request = $_GET["request"];
$request = explode('/', $request);

header("location:/${request[0]}");
