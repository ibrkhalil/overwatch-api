<html>
    <head>
        <title>Overwatch API - A RESTful API for the Overwatch Game</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The Overwatch API is a project aiming to make available as much data about Overwatch as possible. Check out the documentation to get started">
        <meta name="author" content="James McFadden">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto+Slab" rel="stylesheet">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/skeleton.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container">
            <div id="header" class="row">
                <div class="ten columns">
                    <a class="site-heading" href="{{ route('web.index') }}">Overwatch API</a>
                </div>
                <div class="two columns" id="social">
                    <a class="github-button" href="https://github.com/jamesmcfadden/overwatch-api/issues" aria-label="Issue jamesmcfadden/overwatch-api on GitHub">Issue</a>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="jamesmcfdn" data-dnt="true">Tweet</a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <ul id="navigation">
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li><a href="{{ route('web.docs', ['version' => 'v1']) }}">Documentation</a></li>
                        <li><a href="{{ route('web.contribution') }}">Corrections &amp; Contribution</a></li>
                        <li><a href="{{ route('api.index') }}">The API</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    @yield('content')
                </div>
            </div>
            <div id="footer" class="row">
                <div class="twelve columns">
                    Built by <a href="http://jamesmcfadden.co.uk?utm_source=overwatch-api.net">James</a>
                </div>
            </div>
        </div>
        @include('partials/analytics')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
