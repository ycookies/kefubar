<?php

namespace Dcat\Admin\Kefubar;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class KefubarServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	// 定义菜单
    protected $menu = [
        [
            'title' => '客服专用条',
            'uri'   => 'kefubar',
            'icon'  => 'fa fa-phone-square',
        ]
    ];

    // 路由白名单
    protected $exceptRoutes = [
        'auth' => []
    ];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
