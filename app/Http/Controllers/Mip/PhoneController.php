<?php

namespace App\Http\Controllers\Mip;

use App\AdminModel\Admin;
use App\AdminModel\Phonemanage;
use App\Events\PhoneEvent;
use App\Notifications\MailSendNotification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneController extends Controller
{
    public function phoneComplate(Request $request)
    {
        $request['ip']=$request->getClientIp();
        $request['referer']=$request->session()->get('referer')?$request->session()->get('referer'):$request->input('host');
        if(empty(Phonemanage::where('phoneno',$request->phoneno)->value('phoneno')))
        {
            Phonemanage::create($request->all());
            $request->session()->flush();
            if (str_contains($request['referer'],'mip'))
            {
                return '<script> alert("提交成功，我们将尽快与您联系");
                        window.location="'.$request->input('host').'";
                        </script>';
            }else{
                echo "电话提交成功！";
            }

        }else{
            if (str_contains($request['referer'],'mip'))
            {
                return '<script> alert("电话已存在 我们将尽快与您联系");
                        window.location="'.$request->input('host').'";
                        </script>';
            }else{
                echo "电话已存在 我们将尽快与您联系！";
            }
        }
    }
}
