@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form examples
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <style>

        .container{
            margin-top:20px;
        }
        .image-preview-input {
            position: relative;
            overflow: hidden;
            margin: 0px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .image-preview-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview-input-title {
            margin-left:2px;
        }
        .image_radius{
            border-top-right-radius: 4px !important;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 4px !important;
        }
        .fileinput .thumbnail > img{
            width:100%;
        }
        .color_a{
            color: #333;
        }
        .btn-file > input{
            width: auto;
        }
    </style>

@stop
{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Form Examples</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">Form Examples</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content pl-3 pr-3">
        <!--main content-->
        <div class="row">
            <!--row starts-->
            <div class="col-md-12 col-lg-6 col-sm-12 col-12">
                <!--lg-6 starts-->
                <!--basic form starts-->
                <div class="my-3">
                <div class="card " id="hidepanel1">
                    <div class="card-header bg-primary text-white ">
                        <span>
                            <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Basic Form 1
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="#">
                            <!-- CSRF Token -->
                                <!-- Name input-->
                                <div class="form-group">
                                    <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="name">Name</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                </div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="email">Your E-mail</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control"></div>
                                </div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                    <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="message">Your message</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <textarea class="form-control resize_vertical" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="upload">File Upload</label>
                                    <div class="col-md-9 col-12 col-lg-9">
                                        <div class="input-group image-preview">
                                            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                            <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-secondary image-preview-clear" style="display:none; border-radius:0 !important; border: 1px solid rgba(0, 0, 0, 0.16);">
                        <span class="fa  fa-times"></span> Clear
                    </button>
                                                <!-- image-preview-input -->
                    <div class="btn btn-secondary image_radius image-preview-input" style="margin-left:-3px;">
                        <span class="fa fa-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name=""/> <!-- rename it -->
                    </div>
                </span>
                                        </div><!-- /input-group image-preview [TO HERE]-->
                                    </div>
                                    </div>
                                </div>
                                <!-- Form actions -->
                                <div class="form-position">
                                    <div class="row">
                                    <div class="col-md-12  col-sm-12 col-12  col-lg-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                    </div>
                                </div>
                        </form>
                        </div>
                    </div>
                    </div>
                <!--basic form 2 starts-->
                <div class="my-3">
                <div class="card " id="hidepanel2">
                    <div class="card-header bg-info text-white">
                        <span>
                            <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Basic Form 2
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="#" method="">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="name1">E-mail Address</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <input id="name1" name="name" type="text" placeholder="Enter your Email" class="form-control"></div>
                                </div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="password">Password</label>
                                    <div class="col-md-9 col-12 col-lg-9">
                                        <input id="password" name="password" type="password" placeholder="Enter your Password" class="form-control"></div>
                                </div>
                                </div>
                                <div class="checkbox" style="margin-left:130px;">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox">&nbsp; Stay signed in</label>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="row my-2">
                                        <div class="col-md-3"></div>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <button type="submit" class="btn btn-info btn-sm">Sign in</button>
                                    </div>
                                </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--panel body ends--> </div>
                    </div>
                <!--input form starts-->
                <div class="my-3">
                <div class="card " id="hidepanel5">
                    <div class="card-header bg-warning text-white">
                        <span>
                            <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Form Inputs
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <div class="form-group input-group">
                                <div class="input-group-append">
                                <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="User name"></div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                <span class="input-group-text image_radius">.00</span>
                                </div>
                            </div>
                            <div class="form-group input-group">
                                <div class="input-group-append">
                                        <span class="input-group-text">
                                           <i class="fas fa-euro-sign" aria-hidden="true"></i>
                                        </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon"></div>
                            <div class="form-group input-group">
                                <div class="input-group-append">
                                <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                <span class="input-group-text Form image_radius">.00</span>
                                </div>
                            </div>
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                        <span class="input-group-btn input-group-append">
                                            <button class="btn btn-secondary input-group-text image_radius" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                </div>
                            </div>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                <div>
                                            <span class="btn btn-secondary btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."></span>
                                    <a href="#" class="btn btn-secondary fileinput-exists color_a" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>
            </div>
            <!--md-6 ends-->
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <!--md-6 starts-->
                <!--form control starts-->
                <div class="card" id="hidepanel6">
                    <div class="card-header bg-success text-white ">
                        <span>
                            <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Form Controls
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form role="form" id="form_controls">
                            <div class="form-group">
                                <label for="input">Text Input</label>
                                <input class="form-control" id="input">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label for="input2">Text Input with Placeholder</label>
                                <input class="form-control" placeholder="Enter text" id="input2"></div>
                            <div class="form-group">
                                <label>Static Control</label>
                                <p class="form-control-static">email@example.com</p>
                            </div>
                            <div class="form-group">
                                <label for="area">Text area</label>
                                <textarea class="form-control resize_vertical" id="area" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Checkboxes</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" value="">&nbsp; Checkbox 1</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" value=""> &nbsp; Checkbox 2</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" value="">&nbsp;Checkbox 3</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <label class="checkbox-inline">
                                    &nbsp;<input type="checkbox" class="custom-checkbox" >&nbsp;1</label>
                                <label class=" checkbox-inline">
                                    <input type="checkbox" class="custom-checkbox" >&nbsp;2</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox"  class="custom-checkbox" >&nbsp;3</label>
                            </div>
                            <div class="form-group">
                                <label>Radio Buttons</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="custom-radio" id="optionsRadios1" value="option1">&nbsp; Radio 1</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="custom-radio" id="optionsRadios2" value="option2">&nbsp; Radio 2</label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" class="custom-radio" id="optionsRadios3" value="option3">&nbsp; Radio 3</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Inline Radio Buttons</label>
                                <label class="radio-inline">
                                    &nbsp;<input type="radio" class="custom-radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >&nbsp; 1</label>
                                <label class="radio-inline">
                                    <input type="radio" class="custom-radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">&nbsp;2</label>
                                <label class="radio-inline">
                                    <input type="radio"  class="custom-radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">&nbsp; 3</label>
                            </div>
                            <div class="form-group">
                                <label for="select1">Select</label>
                                <select class="form-control" id="select1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="multi">Multiple Selects</label>
                                <select multiple class="form-control" id="multi">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                    <div>
                                            <span class="btn btn-secondary btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."></span>
                                        <a href="#" class="btn btn-secondary fileinput-exists color_a ml-2" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit Button</button>
                            <button type="reset" class="btn btn-secondary" id="reset">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <!--md-6 ends-->
        <div class="row">
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <!--md-6 starts-->
                <!--validation states starts-->
                <div class="card " id="hidepanel4">
                    <div class="card-header bg-danger text-white  ">
                        <span>
                            <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Validation States
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess"></div>
                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning"></div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!--md-6 ends-->
            <div class="col-md-12 col-lg-6 col-12 my-3">
                <div class="card " id="hidepanel3">
                    <div class="card-header bg-secondary text-white">
                        <span>
                            <i class="livicon" data-name="leaf" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Disabled Fieldsets
                        </span>
                                <span class="float-right">
                                    <i class="fa fa-chevron-up clickable"></i>
                                    <i class="fa fa-times removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <form role="form">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled></div>
                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" disabled>&nbsp; Disabled Checkbox</label>
                                </div>
                                <button type="submit" class="btn my-2">Disabled Button</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--main content ends--> </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('js/pages/form_examples.js') }}"></script>

    <script>
        $(document).on('click', '#close-preview', function(){
            $('.image-preview').popover('hide');
            // Hover befor close the preview
            $('.image-preview').hover(
                function () {
                    $('.image-preview').popover('show');
                },
                function () {
                    $('.image-preview').popover('hide');
                }
            );
        });

        $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
                type:"button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
            });
            closebtn.attr("class","close float-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse");
        });
        // Create the preview image
        $(".image-preview-input input:file").change(function (){
            var img = {
                id: 'dynamic',
                width:250,
                height:200
            };
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);
            }
            reader.readAsDataURL(file);
        });
        });


    </script>

@stop
