<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function read()
    {
        $notifies = Notification::whereUserId(user_id())->whereIsRead('0')->get();
        if ($notifies->count() > 0) {
            foreach ($notifies as $notify) {
                $notify->is_read = '1';
                $notify->save();
            }
            return redirect()->back()->with('success', 'Record Updated Successfullly');
        } else {
            return redirect()->back()->with('error', 'No record found');
        }
    }
}
