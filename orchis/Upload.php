<?php 
class Upload{
    public static $file_path='';
    public static $ext_accept='';
    public static function simple($radix='0',$file='file',$rename=false){
        $ret='';
        if(!$_FILES[$file]['error']){
            $ext=pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION);
            if($rename){
                $i=0;
                do{
                    $ret="$radix-$i.".$ext;
                    $i++;
                }
                while(is_file(self::$file_path.$ret)); 
            }else{$ret="$radix.$ext";}
            move_uploaded_file($_FILES[$file]['tmp_name'],self::$file_path."$ret");
        }
        return $ret;
    }
}