<?php

$vinyls_text = file_get_contents("./vinyls_list.json");

$vinyls = json_decode($vinyls_text, true);
