<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
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
                <li><a href="{{ route("doadminlogout") }}">Log Out</a></li>
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
    @if (Session::has("message"))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{{ Session::get("message") }}}
            </div>
        </div>
    </div>
    @endif
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-3">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="tab" href="#htext1">Header Slide 1</a></li>
                <li class=""><a data-toggle="tab" href="#htext2">Header Slide 2</a></li>
                <li class=""><a data-toggle="tab" href="#htext3">Header Slide 3</a></li>
                <li class=""><a data-toggle="tab" href="#btext">Breakout Text</a></li>
                <li class=""><a data-toggle="tab" href="#services">Services</a></li>
                <li class=""><a data-toggle="tab" href="#team">Team</a></li>
                <li class=""><a data-toggle="tab" href="#testimonials">Testimonials</a></li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="tab-content">
                <div class="tab-pane active well" id="htext1">
                    <form action="{{ route("adminsaveh1") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Header</label>
                        <input name="inputText" value="{{{ $data["h1Text"]  }}}" type="text" class="form-control" placeholder="Header text" />
                        <br />
                        <label>Subheading</label>
                        <input name="inputSubText" value="{{{ $data["h1SubText"] }}}" type="text" class="form-control" placeholder="Subheader text" />
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
                <div class="tab-pane well" id="htext2">
                    <form action="{{ route("adminsaveh2") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Header</label>
                        <input name="inputText" value="{{{ $data["h2Text"] }}}" type="text" class="form-control" placeholder="Header text" />
                        <br />
                        <label>Subheading</label>
                        <input name="inputSubText" value="{{{ $data["h2SubText"] }}}" type="text" class="form-control" placeholder="Subheader text" />
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
                <div class="tab-pane well" id="htext3">
                    <form action="{{ route("adminsaveh3") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Header</label>
                        <input name="inputText" value="{{{ $data["h3Text"] }}}" type="text" class="form-control" placeholder="Header text" />
                        <br />
                        <label>Subheading</label>
                        <input name="inputSubText" value="{{{ $data["h3SubText"] }}}" type="text" class="form-control" placeholder="Subheader text" />
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
                <div class="tab-pane well" id="btext">
                    <form action="{{ route("adminsavebtext") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Breakout Header</label>
                        <input name="inputBreakoutHeader" value="{{{ $data["breakoutHeader"] }}}" type="text" class="form-control" placeholder="Breakout Header" />
                        <br />
                        <label>Breakout Text</label>
                        <textarea class="form-control" rows="4" name="inputBreakoutText" placeholder="Breakout Text">{{{ $data["breakoutText"] }}}</textarea>
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
                <div class="tab-pane well" id="services">
                    <form action="{{ route("adminsaveservices") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Service 1</label>
                        <input name="inputService1" value="{{{ $data["service1"]  }}}" type="text" class="form-control" placeholder="Service 1" />
                        <br />
                        <label>Service 2</label>
                        <input name="inputService2" value="{{{ $data["service2"]  }}}" type="text" class="form-control" placeholder="Service 2" />
                        <br />
                        <label>Service 3</label>
                        <input name="inputService3" value="{{{ $data["service3"]  }}}" type="text" class="form-control" placeholder="Service 3" />
                        <br />
                        <label>Service 4</label>
                        <input name="inputService4" value="{{{ $data["service4"]  }}}" type="text" class="form-control" placeholder="Service 4" />
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
                <div class="tab-pane well" id="team">
                    <form action="{{ route("adminsaveteam") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Name</label>
                        <input name="inputTeamName1" value="{{{ $data["teamName1"] }}}" type="text" class="form-control" placeholder="Name" />
                        <br />
                        <label>Image Link</label>
                        <input name="inputTeamImage1" value="{{{ $data["teamImage1"] }}}" type="text" class="form-control" placeholder="Image" />
                        <br />
                        <label>Bio Text</label>
                        <input name="inputTeamBioText1" value="{{{ $data["teamBioText1"] }}}" type="text" class="form-control" placeholder="Bio" />
                        <hr />
                        <br />
                        <label>Name</label>
                        <input name="inputTeamName2" value="{{{ $data["teamName2"] }}}" type="text" class="form-control" placeholder="Name" />
                        <br />
                        <label>Image Link</label>
                        <input name="inputTeamImage2" value="{{{ $data["teamImage2"] }}}" type="text" class="form-control" placeholder="Image" />
                        <br />
                        <label>Bio Text</label>
                        <input name="inputTeamBioText2" value="{{{ $data["teamBioText2"] }}}" type="text" class="form-control" placeholder="Bio" />
                        <hr />
                        <br />
                        <label>Name</label>
                        <input name="inputTeamName3" value="{{{ $data["teamName3"] }}}" type="text" class="form-control" placeholder="Name" />
                        <br />
                        <label>Image Link</label>
                        <input name="inputTeamImage3" value="{{{ $data["teamImage3"] }}}" type="text" class="form-control" placeholder="Image" />
                        <br />
                        <label>Bio Text</label>
                        <input name="inputTeamBioText3" value="{{{ $data["teamBioText3"] }}}" type="text" class="form-control" placeholder="Bio" />
                        <hr />
                        <br />
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
                <div class="tab-pane well" id="testimonials">
                    <form action="{{ route("adminsavetestimonials") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>Testimonial 1</label>
                        <input name="inputTestimonial1" value="{{{ $data["testimonial1"] }}}" type="text" class="form-control" placeholder="Testimonial 1" />
                        <br />
                        <label>Testimonial 2</label>
                        <input name="inputTestimonial2" value="{{{ $data["testimonial2"] }}}" type="text" class="form-control" placeholder="Testimonial 2" />
                        <br />
                        <label>Testimonial 3</label>
                        <input name="inputTestimonial3" value="{{{ $data["testimonial3"] }}}" type="text" class="form-control" placeholder="Testimonial 3" />
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
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
</body>
</html>
