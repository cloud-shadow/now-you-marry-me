<?php
if (array_key_exists('prev', $_GET))
    require_once('index.jyk.html');
else 
    require_once('index.jyk.dday.html');