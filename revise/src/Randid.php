<?php
namespace seoclick;

class Randid
{
    function id($id="",$data=array()){
        $index = preg_replace("/[^0-9]+/", "", MD5($id));
        $index=(int)substr($index,0,4);
        $runid=$index%sizeof($data);
        return $runid;
    }

}