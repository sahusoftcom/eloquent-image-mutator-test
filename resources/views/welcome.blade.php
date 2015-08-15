<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">

                <div class="title">Eloquent Image Mutator Example</div>

                <form action="/upload" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    Select image to upload:
                    <input type="file" name="file" id="file">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

            </div>
        </div>
    </body>
</html>
