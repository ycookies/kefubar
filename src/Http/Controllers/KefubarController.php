<?php

namespace Dcat\Admin\Kefubar\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;
use Dcat\Admin\Widgets\Alert;
class KefubarController extends Controller
{
    public function index(Content $content)
    {
        $alert = Alert::make('当前版本：v1.0.2','提醒')->info();
        return $content
            ->title('客服专用条')
            ->description('一键配置')
            ->row($alert->render())
            ->body(Admin::view('ycookies.kefubar::index'));
    }
}