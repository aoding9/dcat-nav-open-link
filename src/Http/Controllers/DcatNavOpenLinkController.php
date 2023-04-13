<?php

namespace Aoding9\Dcat\Nav\OpenLink\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;

class DcatNavOpenLinkController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('aoding9.dcat-nav-open-link::index'));
    }
}