<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            <?php if ($_SESSION['lang'] == 'german'): ?>
                Ich hab noch nie
            <?php elseif ($_SESSION['lang'] == 'english'): ?>
                Never have I ever
            <?php endif ?>
        </title>

        <style>
            body, .bottom {
                max-width: 450px;
            }

            body {
                font-size: 1rem;
                text-align: center;
                margin: 3rem auto;
                font-family: 'avenir next', avenir, 'helvetica neue', helvetica, roboto, noto, ubuntu, 'segoe ui', arial, sans-serif;
            }

            .bottom {
                position: absolute;
                bottom: 0;
                width: 100%;
            }

            .box, .btn {
                box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);
                background-color: #ffffff;
                margin-bottom: 1em;
                text-decoration: none;
                box-sizing: border-box;
                padding: 10px;
            }

            .btn {
                display: block;
                border: none;
                font-size: 1rem;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php include $template; ?>
    </body>
</html>