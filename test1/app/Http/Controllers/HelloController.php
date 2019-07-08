<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HelloController extends Controller
// {
//     public function index($id='noname', $pass='unknown') {

//         return<<<EOF
// <html>
// <title>helllo/index</title>
// <style>
// h1 {
//     font-size: 100pt;
//     color: #eee;
// }
// </style>
// <body>
// <h1>Index</h1>
// <p>コントローラのindex</p>
// <ul>
// <li>id:{$id}</li>
// <li>pass:{$pass}</li>
// </ul>
// </body>
// </html>

// EOF;
//     }
// }

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {
    font-size: 16pt;
    color: #999;
}
h1 {
    font-size: 100pt;
    text-alien: center;
    color: purple;
}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag ($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index(){
        global $head, $style, $body, $end;

        $html = $head . tag('title','Hello/Index') . $style . $body . tag('h1', 'Index') . tag('p', 'this is Index page')
        . '<a href="/hello/other">go to other page</a>' .$end;
        return $html;
    }

    public function other() {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Other') . $style . $body . tag('h1', 'Other') . tag('p', 'this is Other page') . $end;
        return $html;
    }
}
