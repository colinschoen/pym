<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PYM Admin</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Dashboard</h1>
        </div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-3">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#htext1">Header Slide 1</a></li>
                <li class=""><a href="#htext2">Header Slide 2</a></li>
                <li class=""><a href="#htext3">Header Slide 3</a></li>
                <li class=""><a href="#htext4">Header Slide 4</a></li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="tab-content">
                <div id="htext1" class="well">
                    <form action="#" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Header Text:</label>
                        <textarea id="inputText" id="inputHText"></textarea>
                        <br />
                        <label>Header Link Text:</label>
                        <input name="inputLinkText" type="text" class="form-control" placeholder="e.g. More Information" />
                        <br />
                        <label>Header Link href:</label>
                        <input type="text" name="inputLinkHref" class="form-control" placeholder="e.g. http://google.com" />
                        <br />
                        <label>Background </label>
                        <input type="file" name="inputBackground" />
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('inputHText');
</script>
</body>
</html>
