<?php

namespace Aoding9\Dcat\Nav\OpenLink;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class DcatNavOpenLinkServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
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
