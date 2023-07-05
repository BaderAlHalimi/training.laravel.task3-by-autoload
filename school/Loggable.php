<?php
namespace school;
trait Loggable
{
    public static $id;
    public static $operation;
    public function run()
    {
        file_put_contents('log.txt', 'Student id: ' . self::$id . ' || -> Operation: ' . self::$operation . ' || Time: ' . date("Y/m/d h:i:s") . "\n", FILE_APPEND);
    }
}
