<?php
    $data = '[
        {"id":"1", "name":"Choldcroft", "email":"1@test.com"},
        {"id":"2", "name":"Lexi", "email":"2@test.com"},
        {"id":"3", "name":"Axcell", "email":"3@test.com"}
    ]';
    echo $_GET["callback"]."(".$data")";
?>