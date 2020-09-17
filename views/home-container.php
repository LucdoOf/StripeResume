<html lang="en">
    <head>
        <title>Stripe internship</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="res/css/main.css">
        <meta name="robots" content="noindex">
        <script src="https://ajaxorg.github.io/ace-builds/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
        <link rel="icon" href="https://images.ctfassets.net/fzn2n1nzq965/2EOOpI2mMZgHYBlbO44zWV/5a6c5d37402652c80567ec942c733a43/favicon.png?w=180&amp;h=180">
        <meta charset="UTF-8">
        <meta name="language" content="en-EN">
        <meta name="robots" content="all">
        <meta name="theme-color" content="#635BFF">
        <meta name="author" content="Lucas Garofalo">
        <meta name="MobileOptimized" content="320">
        <meta name="HandheldFriendly" content="true">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Stripe internship">
        <meta name="apple-mobile-web-app-status-bar-style" content="#635BFF">
        <meta name="msapplication-navbutton-color" content="#635BFF">
        <meta name="application-name" content="Stripe internship">
        <meta name="application-url" content="https://stripe.agile-web.net">
        <meta name="geo.region" content="FR-37" />
        <meta name="geo.placename" content="Tours" />
        <meta name="geo.position" content="46.603354;1.888334" />
        <meta name="ICBM" content="46.603354, 1.888334" />
        <link rel="alternate" hreflang="x-default" href="https://stripe.agile-web.net">
        <link rel="canonical" href="https://stripe.agile-web.net">
        <link rel="author" href="https://www.agile-web.net/humans.txt">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="top-background"></div>
        <div id="content">
            <header class="col-8 mx-auto">
                <svg viewBox="0 0 60 25" xmlns="http://www.w3.org/2000/svg" width="120" height="50" class="UserLogo variant-- ">
                    <title>Stripe logo</title>
                    <path fill="#ffffff" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"/>
                </svg>
                <span id="internship-title">Internship</span>
            </header>
            <?php include "home-card.php" ?>
            <?php include "home-profile.php" ?>
            <div id="bottom-container">
                <?php include "home-editor.php" ?>
                <?php include "home-formations.php" ?>
                <?php include "home-skills.php"; ?>
            </div>
            <footer>
                <div id="footer-content" class="col-10 col-sm-8 mx-auto">
                    <h4>Coordinates</h4>
                    <span>64 rue Daniel Mayer - 37100 Tours - France</span>
                    <span><a href="tel:+33648809033">+33 6 48 80 90 33</a></span>
                    <span><a href="mailto:lucasg.18@hotmail.fr">lucasg.18@hotmail.fr</a></span>
                </div>
            </footer>
        </div>
        <script>
            const editor = ace.edit("editor");
            editor.setTheme("ace/theme/cobalt");
            editor.getSession().setMode("ace/mode/javascript");
            editor.setOptions({
                readOnly: true,
                highlightActiveLine: false,
                highlightGutterLine: false
            });
            editor.renderer.$cursorLayer.element.style.opacity=0;
            editor.textInput.getElement().disabled=true;
            editor.commands.commmandKeyBinding={};
        </script>
    </body>
</html>
