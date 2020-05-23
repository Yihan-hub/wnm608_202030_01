<?
    function makeAuth() {
        return[
            "localhost",
            "yihanstore",
            "6081234",
            "yihan_products"

        ];

    }

    function makePDOAuth() {
        return[
            "mysql:host=localhost;dbname=yihan_products",
            "yihanstore",
            "6081234",
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
        ];
    }

?>