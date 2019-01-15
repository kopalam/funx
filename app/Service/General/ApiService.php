<?php

namespace App\Service\General;

use App\Models\TabTools;
use Illuminate\Support\Facades\DB;

class ApiService
{
    /**
     * @param $data serialize() insert to de tab_tools
     */
        function qiniuSet($data)
        {

            $data   =   json_encode($data);
            $res    =   DB::table('tab_tools')->where('name','qiniu')->get();
            if($res == null){
                $ok     =   TabTools::insert($data);
            }

            return $ok;
        }
}
