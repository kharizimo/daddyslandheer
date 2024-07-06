<?php 
class Json{
    private static $cn=null;
    private static $url=null;
    public static function connect($url){
        try{
            self::$cn=json_decode(file_get_contents($url),true);
            self::$url=$url;
        }catch(Exception $e){echo $e->getMessage();}
    }
    public static function rows($table){
        $ret=[];
        $ret=self::$cn[$table]??[];
        return $ret;
    }
    public static function row($table,$id){
        $ret=[];
        $ret=self::$cn[$table][$id]??[];
        return $ret;
    }
    public static function get($table,$id,$field){
        $ret=null;
        $ret=self::$cn[$table][$id][$field]??null;
        return $ret;
    }
    public static function insert($table,$row){
        $ret=null;
        if(isset(self::$cn[$table])){
            array_push( self::$cn[$table],$row);
            file_put_contents(self::$url,self::$cn);
        }
        return $ret;
    }
    public static function update($table,$id,$row){
        $ret=null;
        if(isset(self::$cn[$table][$id])){
            array_push( self::$cn[$table],$row);
            file_put_contents(self::$url,self::$cn);
        }
        return $ret;
    }
}