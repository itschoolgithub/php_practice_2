<?php
    function DBConnect() {
        $connection = new PDO("mysql:host=127.0.0.1;port=3307;dbname=articles", "root", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $connection;
    }