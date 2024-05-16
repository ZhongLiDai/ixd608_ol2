<?php

function MYSQLIAuth() {
    return[
        "127.0.0.1",//mysql host
        "Surrealli",//mysql user name
        "011554",//mysql user password
        "product"//mysql database name
    ];
}
function PDOAuth() {
    return[
        "mysql:host=127.0.0.1;dbname=product",//mysql host
        "Surrealli",//mysql user name
        "011554",//mysql user password
        [PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
    ];
}

