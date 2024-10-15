<?php

namespace Dcat\Admin\Kefubar\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class KefubarController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('客服专用条')
            ->description('一键配置')
            ->body(Admin::view('ycookies.kefubar::index'));
    }
}