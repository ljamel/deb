<?php

namespace OpenClassrooms\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
        return $db;
    }
}