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
        $alert = Alert::make('这是一个提示','提示');
        return $content
            ->title('客服专用条')
            ->description('一键配置')
            ->row($alert->info())
            ->row(Admin::view('ycookies.kefubar::index'));
    }
}