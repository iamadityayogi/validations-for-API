<?php
    function validations1($data,$data1)
    {
        $msg = array();
        foreach($data as $key=>$dataa)
        {
            if(!empty($data1))
            {
                if(!in_array($key,$data1))
                {
                    if($dataa == '')
                    {
                        $msg['key'] = $key;
                        break;
                    }
                }
            }
            elseif($dataa == '')
            {
                $msg['key'] = $key;
                break;
            }
        }
        if(!empty($msg['key']))
        {
            return $msg;
        }
        else
        {
            return 1;
        }
    }
    
    
?>