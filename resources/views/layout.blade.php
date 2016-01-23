<!DOCTYPE html>
<html>
    <head>
        <title>@yield("title")</title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{% block title %} Home - Doncredas {% endblock %}</title>
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
        {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
        {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
        <![endif]-->
        <style> textarea { resize: none; } </style>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body style="padding-top: 50px;">
        <div class="container">
            @yield("content")
            <hr>
            <footer class="col-lg-12" style="margin-bottom: 50px;" id="foot">
                <div class="text-center">
                </div>
                <span class="pull-left">Copyright © 2015 - doncredas</span> <span class="pull-right"><a href="https://github.com/doncredas/doncredasPHP" target="_blank">Code source</a></span>
            </footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
