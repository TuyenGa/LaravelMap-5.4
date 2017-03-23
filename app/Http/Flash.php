<?php
/**
 * Created by PhpStorm.
 * User: Vuong
 * Date: 3/1/2017
 * Time: 2:31 PM
 */

namespace App\Http;


class Flash
{



    public function create($title,$message,$level ,$key = 'flash_message')
    {
        session()->flash($key,[

            'title' => $title,
            'message' => $message,
            'level'  => $level
        ]);

    }
    public function info($title,$message)
    {
       return $this->create($title,$message ,'info');

    }
    public function success($title,$message)
    {
        return $this->create($title,$message ,'success');

    }
    public function error($title,$message)
    {
        return $this->create($title,$message ,'error');
    }
    public function warning($title,$message)
    {
        return $this->create($title,$message,'warning');
    }
    public function overlay($title,$message,$level='success')
    {
        return $this-> create($title,$message,$level,'flash_message_overlay');
    }
}
//$flash->message("")
//flash->error()
//$flash->aside()
//$flash->overlay()
//$flash->success()