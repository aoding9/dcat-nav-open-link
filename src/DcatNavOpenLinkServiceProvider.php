<?php

namespace Aoding9\Dcat\Nav\OpenLink;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Layout\Navbar;

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
        Admin::navbar(function (Navbar $navbar) {
            $navbar->right(Admin::view('aoding9.dcat-nav-open-link::index'));
        });
		//

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
