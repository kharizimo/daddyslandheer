<?php
class Db{
    private static $cn=null;
    public static function connect($db){
        $db->db_type=$db->db_type??'MYSQL';
        $db->db_charset=$db->db_charset??'utf8';
        $db->db_attributes=$db->db_attributes??[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ];
        switch($db->db_type):
            case 'MYSQL': 
                $db->db_dns="mysql:host=$db->db_host;dbname=$db->db_name;charset=$db->db_charset";
                try{self::$cn=new PDO($db->db_dns,$db->db_user,$db->db_pwd);}
                catch(Exception $e){echo$e->getMessage();exit();}
                break;
            case 'SQLITE':
                $db->db_file=$db->db_file??'data.db';
                try{self::$cn=new PDO("sqlite:$db->db_file");}
                catch(Exception $e){echo$e->getMessage();exit();}
        endswitch;
        self::$cn->setAttribute(PDO::ATTR_ERRMODE,$db->db_attributes[PDO::ATTR_ERRMODE]);
        self::$cn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,$db->db_attributes[PDO::ATTR_DEFAULT_FETCH_MODE]);
    }
    public static function rows($sql){
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch()){
                $ret[]=$r;
            }
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function table($sql){
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch()){
                $row=[];
                foreach($r as $col){
                    $row[]=$col;
                }
                $ret[]=$row;
            }
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function row($sql){
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            if($r=$q->fetch()){
                $ret=$r;
            }
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function get($sql,$key='data'){
        $ret=null;
        try{
            $q=self::$cn->query($sql);
            if($r=$q->fetch()){
                $ret=$r[$key];
            }
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function gets($sql,$key='data'){
        $ret=null;
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch()){
                $ret[]=$r[$key];
            }
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function map_row($sql,$pattern=[]){
        // Fonction à retravailler
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch(PDO::FETCH_NUM)){
                if(!empty($pattern)&& !in_array($r[0],$pattern)){continue;}
                $ret[$r[0]]=$r[1];
            }
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function map_execute($sql,$array,$pattern=[]){
        try{
            $q=self::$cn->prepare($sql);
            $i=0;
            foreach($array as $k=>$v){
                if(!empty($pattern)&& !in_array($k,$pattern)){continue;}
                $q->bindValue(1,$v);
                $q->bindValue(2,$k);
                $q->execute();
            }
        }
        catch(exception $e){echo $e->getMessage();}
    }

    //Cette fo,ction est obsolète tend à être supprimer et remplacépar map_row 
    public static function hash_map($sql){
        $section='section';
        $content='content';
        $ret=[];
        try{
            $q=self::$cn->query($sql);
            while($r=$q->fetch()){
                $ret[$r[$section]]=$r[$content];
            }
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function execute($sql){
        $ret='';
        try{
            $q=self::$cn->exec($sql);
            return self::$cn->lastInsertId();
        }
        catch(exception $e){echo $e->getMessage();}
        return $ret;
    }
    public static function prepare($sql,$array=[],$map=[]){
        try{
            $q=self::$cn->prepare($sql);
            $i=0;
            foreach($array as $row){
                foreach($map as $field){
                    $i++;
                    $q->bindValue($i,$row[$field]);
                }
                if($i){
                    $q->execute();
                    $i=0;
                }
            }
        }
        catch(exception $e){echo $e->getMessage();}
    }
}