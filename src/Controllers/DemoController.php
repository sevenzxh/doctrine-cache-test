<?php
/**
 * Created by SlimApp.
 *
 * Date: 2018-12-24
 * Time: 16:32
 */

namespace Vendor\Doctrinecache\Controllers;

use Symfony\Component\HttpFoundation\Response;

class DemoController
{
    public function testAction()
    {
        return new Response('Hello World!');
    }
}

