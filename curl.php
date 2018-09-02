<?php
    $url = "https://data.taipei/opendata/datalist/apiAccess?scope=resourceAquire&rid=24c9f8fe-88db-4a6e-895c-498fbc94df94";
    $c = curl_init($url);
    // echo $c;
    curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($c);
    echo $result;

?>