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
                <li class="active"><a href="#htext">Header</a></li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="tab-content">
                <div id="htext" class="well">
                    <h5>Header Text:</h5>
                    <textarea id="inputHText"></textarea>
                    <br />
                    <h5>Header Link Text:</h5>
                    <input type="text" class="form-control" placeholder="e.g. More Information" />
                    <br />
                    <h5>Header Link href:</h5>
                    <input type="text" class="form-control" placeholder="e.g. http://google.com" />
                    <br />
                    <button class="btn btn-success">Save</button>
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
