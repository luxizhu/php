/**
 * Created by PhpStorm.
 * User: xizhu
 * Date: 16-9-21
 * Time: 下午10:14
 */
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Laravel</title>
        {{HTML::style('css/main.css')}}
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand hidden-sm" href="/">Laravel</a>
                </div>
                <ul class="nav navbar-nav navbar-right hidden-sm">
                    <li>{{HTML::link('users/register','register')}}</li>
                    <li>{{HTML::link('users/login','login')}}</li>
                </ul>
            </div>
        </div>
        <div class="container">
            @if(Session::has('message'))
                <p class="alert">{{Session::get('message')}}</p>
            @endif
            {{$content}}
        </div>
    </body>
</html>