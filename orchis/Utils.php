<?php 
class Utils{
    public static function token($option=[]){
        $case=$option['case']??'min';//maj
        $ret='';$t=sha1(time());
        $ret=$case=='min'?strtolower($t):strtoupper($t);
        return $ret;
    }
    public static function otp($option=[]){
        $size=$option['size']??4;
        $ret='';
        $ret=rand((int)str_repeat('1',$size),(int)str_repeat('9',$size));
        return $ret;
    }
    public static function send_mail($option){
        extract($option);
        
        $ret=true;
        $_from_email=$_from_email??'noreply@sender.com';
        $_from_title=$_from_title??'No reply';
        $_from="$_from_title <$_from_email>";
        $_to=$_to??'mail@receiver.com';

        $_subject=$_subject??'No subject';
        $_content=$_content??'';

        $_headers[]='MIME-Version: 1.0';
        $_headers[]='Content-type: text/html; charset=utf-8';
        $_headers[] = "From: $_from";
        
        if(!@mail($_to, $_subject, $_content, implode("\r\n", $_headers))){
            $ret=false;
        }    
        return $ret;
    }  
    public static function temps($index){
        $now=new DateTime();
        $date=new DateTime($index);
        $interval=$now->diff($date);
        $ret='';
        if($interval->y){$ret="Il y a {$interval->y} ".($interval->y==1?'an':'ans');}
        else{
            if($interval->m){$ret="Il y a $interval->m mois";}
            else{
                $semaine= intdiv($interval->d,7);
                if($semaine){$ret="Il y a $semaine ".($semaine==1?'semaine':'semaines');}
                else{
                    if($interval->d){$ret="Il y a $interval->d ".($interval->d==1?'jour':'jours');}
                    else{
                        if($interval->h){$ret="Il y a $interval->h ".($interval->h==1?'heure':'heures');}
                        else{
                            if($interval->i){$ret="Il y a $interval->i ".($interval->i==1?'minute':'minutes');}
                            else{$ret='Maintenant';}
                        }
                    }
                }
            }
        }
        return $ret;
    } 
}