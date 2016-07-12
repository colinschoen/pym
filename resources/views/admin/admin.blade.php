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
                <li class="active"><a data-toggle="tab" href="#header">Header</a></li>
                <li class=""><a data-toggle="tab" href="#btext">Breakout Text</a></li>
                <li class=""><a data-toggle="tab" href="#services">Services</a></li>
                <li class=""><a data-toggle="tab" href="#team">Team</a></li>
                <li class=""><a data-toggle="tab" href="#testimonials">Testimonials</a></li>
                <li class=""><a data-toggle="tab" href="#profile">Admin Password</a></li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="tab-content">
                <div class="tab-pane active well" id="header">
                    <div style="display: none;" class="header-template">
                        <div class="panel">
                            <div class="panel-body">
                                <label>Header</label>
                                <input name="inputHeader[]" type="text" class="form-control" placeholder="Header text" />
                                <br />
                                <label>Subheading</label>
                                <input name="inputSubHeader[]" type="text" class="form-control" placeholder="Subheader text" />
                                <br />
                                <label>Order</label>
                                <input name="inputOrder[]" type="text" class="form-control" placeholder="Order Integer (e.g.  3)" />
                                <br />
                                <button style="float: right;" class="deleteSlideBtn btn btn-danger">Delete Slide</button>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route("adminsaveheader") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div id="headerModuleContainer">
                            @foreach ($headers as $header)
                            <div class="panel">
                                <div class="panel-body">
                                    <label>Header</label>
                                    <input name="inputHeader[]" value="{{{ $header->header  }}}" type="text" class="form-control" placeholder="Header text" />
                                    <br />
                                    <label>Subheading</label>
                                    <input name="inputSubHeader[]" value="{{{ $header->subheader }}}" type="text" class="form-control" placeholder="Subheader text" />
                                    <br />
                                    <label>Button Text</label>
                                    <input name="inputButtonText[]" value="{{{ $header->button_text }}}" type="text" class="form-control" placeholder="Button text" />
                                    <br />
                                    <label>Button URL</label>
                                    <input name="inputButtonUrl[]" value="{{{ $header->button_url }}}" type="text" class="form-control" placeholder="Button URL" />
                                    <br />
                                    <label>Background Image URL</label>
                                    <input name="inputBackground[]" value="{{{ $header->background }}}" type="text" class="form-control" placeholder="Background Image URL" />
                                    <br />
                                    <label>Order</label>
                                    <input name="inputOrder[]" type="text" value="{{{ $header->sequence }}}" class="form-control" placeholder="Order Integer (e.g.  3)" />
                                    <br />
                                    <button type="button" style="float: right;" class="deleteSlideBtn btn btn-danger">Delete Slide</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="btn btn-success">Save</button> <button id="btnAddHeaderSlide" class="btn btn-primary">+ Add Slide </button>
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
                        <textarea name="inputService1Body" class="form-control" placeholder="Body...">{{{ $data["service1Body"] }}}</textarea>
                        <br />
                        <label>Service 2</label>
                        <input name="inputService2" value="{{{ $data["service2"]  }}}" type="text" class="form-control" placeholder="Service 2" />
                        <textarea name="inputService2Body" class="form-control" placeholder="Body...">{{{ $data["service2Body"] }}}</textarea>
                        <br />
                        <label>Service 3</label>
                        <input name="inputService3" value="{{{ $data["service3"]  }}}" type="text" class="form-control" placeholder="Service 3" />
                        <textarea name="inputService3Body" class="form-control" placeholder="Body...">{{{ $data["service3Body"] }}}</textarea>
                        <br />
                        <label>Service 4</label>
                        <input name="inputService4" value="{{{ $data["service4"]  }}}" type="text" class="form-control" placeholder="Service 4" />
                        <textarea name="inputService4Body" class="form-control" placeholder="Body...">{{{ $data["service4Body"] }}}</textarea>
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
                        <br />
                        <label>Content (Image or Youtube video link)</label>
                        <input name="inputTeamContent1" value="{{{ $data["teamContent1"] }}}" type="text" class="form-control" placeholder="E.g. (https://www.youtube.com/watch?v=pzot1TWuutY) or (https://imagehost.com/img.jpeg)" />
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
                        <br />
                        <label>Content (Image or Youtube video link)</label>
                        <input name="inputTeamContent2" value="{{{ $data["teamContent2"] }}}" type="text" class="form-control" placeholder="E.g. (https://www.youtube.com/watch?v=pzot1TWuutY) or (https://imagehost.com/img.jpeg)" />
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
                        <br />
                        <label>Content (Image or Youtube video link)</label>
                        <input name="inputTeamContent3" value="{{{ $data["teamContent3"] }}}" type="text" class="form-control" placeholder="E.g. (https://www.youtube.com/watch?v=pzot1TWuutY) or (https://imagehost.com/img.jpeg)" />
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
                <div class="tab-pane well" id="profile">
                    <form action="{{ route("adminsaveprofile") }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <label>New Password</label>
                        <input name="inputPassword" value="" type="password" class="form-control" />
                        <br />
                        <button class="btn btn-success">Update Password</button>
                    </form>
                </div>
                <div class="tab-pane well" id="team">
            </div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#headerModuleContainer").on('click', ".deleteSlideBtn", function(e) {
            e.preventDefault();
            $(this).parents(".panel").remove();
        });
        $("#btnAddHeaderSlide").on('click', function(e) {
            e.preventDefault();
            $('.header-template').children(".panel").clone().appendTo("#headerModuleContainer").show();
        });
    });
</script>
</body>
</html>
