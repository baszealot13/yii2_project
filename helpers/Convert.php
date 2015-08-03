<?php
namespace yii\helpers;
use yii;

class Convert
{
    private function dec2any($num, $base = 34, $index = false) {
        if (!$base) {
            $base = strlen($index);
        } 
        else if (!$index) {
            $index = substr("0123456789ABCDEFGHJKLMNPQRSTUVWXYZ", 0, $base);
        }
        $out = "";
        for ($t = floor(log10($num) / log10($base)); $t >= 0; $t--) {
            $a = floor($num / pow($base, $t));
            $out = $out . substr($index, $a, 1);
            $num = $num - ($a * pow($base, $t));
        }
        return $out;
    }
    
    private function str2dec($str) {
        
        $max = strlen($str);
        $i = 0;
        $total = 0;
        $move = 1;
        $result = 0;
        while ($i < $max) {
            $result = $result + ord(substr($str, $i, 1)) * $move;
            $move = $move * 10;
            $i++;
        }
        return $result;
    }
    
    public function student_password($student_code) {
        return dec2any(str2dec(substr(md5($student_code), -8)));
    }
}
?>
