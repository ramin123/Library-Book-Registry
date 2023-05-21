@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Modals
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('css/pages/advmodals.css') }}" rel="stylesheet"/>

@stop

{{-- Page content --}}
@section('content')

    <section class="content-header advanced_modals">
        <h1>Advanced Modals</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">UI features</a>
            </li>
            <li class="active">Advanced Modals</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="rocket" data-loop="true" data-color="#fff"
                               data-hovercolor="white" data-size="16"></i> Modals
                        </span>
                        <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 ">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch Demo Modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h4 class="modal-title" id="exampleModalLabel">Modal title</h4>
                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Here is the basic modal
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                                    Vertically Centered Modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info text-white">
                                                <h4 class="modal-title" id="exampleModalCenterTitle">Modal title</h4>
                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Modal comes in center.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="col-3">
                               <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Form in Modal</button>

                               <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header bg-warning text-white">
                                               <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                                               <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                               </button>
                                           </div>
                                           <div class="modal-body">
                                               <form>
                                                   <div class="form-group">
                                                       <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                       <input type="text" class="form-control" id="recipient-name">
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="message-text" class="col-form-label">Message:</label>
                                                       <textarea class="form-control" id="message-text"></textarea>
                                                   </div>
                                               </form>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                               <button type="button" class="btn btn-warning">Send message</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                            <div class="col-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalScrollable">
                                    Modal with Scrollbar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success text-white">
                                                <h4 class="modal-title" id="exampleModalScrollableTitle">Modal title</h4>
                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

                                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

                                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

                                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

                                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

                                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

                                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

                                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

                                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

                                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

                                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

                                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <span>
                            <i class="livicon" data-name="rocket" data-loop="true" data-color="#fff"
                               data-hovercolor="white" data-size="16"></i> Advanced Modals
                        </span>
                        <span class="float-right ">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 ">
                                <h3>
                                    <strong>Fade and Slide</strong> effects
                                </h3>
                                <p>Simple modal with title and footer</p>
                                <br>
                                <button class="btn btn-raised btn-primary " data-toggle="modal" data-target="#modal-1">
                                    Fade in &amp; Scale
                                </button>
                                <br>
                                <button class="btn btn-raised btn-primary " data-toggle="modal" data-target="#modal-2">
                                    Slide in (right)
                                </button>
                                <button class="btn btn-raised btn-primary " data-toggle="modal" data-target="#modal-3">
                                    Slide in (bottom)
                                </button>
                            </div>
                            <div class="col-md-3">
                                <h3>
                                    <strong>Flip and Rotate</strong> effects
                                </h3>
                                <p>
                                    You can customize the size of your modal. Just add the class
                                    <code>modal-lg</code> .
                                </p>
                                <button class="btn btn-raised btn-info " data-toggle="modal" data-target="#modal-8">3D
                                    Expand Open
                                </button>
                                <button class="btn btn-raised btn-info " data-toggle="modal" data-target="#modal-9">3D
                                    Big Entrance
                                </button>
                                <button class="btn btn-raised btn-info " data-toggle="modal" data-target="#modal-10">3D
                                    Expand Up
                                </button>
                                <button class="btn btn-raised btn-info " data-toggle="modal" data-target="#modal-14">3D
                                    Bounce
                                </button>
                                <button class="btn btn-raised btn-info " data-toggle="modal" data-target="#modal-15">3D
                                    Pulse
                                </button>
                                <button class="btn btn-raised btn-info " data-toggle="modal" data-target="#modal-13">3D
                                    Tossing
                                </button>
                            </div>
                            <div class="col-md-3">
                                <h3>
                                    <strong>Other</strong> effects
                                </h3>
                                <p>
                                    For fullwidth modal, add the class
                                    <code>modal-full</code> .
                                </p>
                                <br>
                                <button class="btn btn-raised btn-warning " data-toggle="modal" data-target="#modal-4">
                                    Pulldown
                                </button>
                                <button class="btn btn-raised btn-warning " data-toggle="modal" data-target="#modal-5">
                                    Floating
                                </button>
                                <button class="btn btn-raised btn-warning " data-toggle="modal" data-target="#modal-6">
                                    Stretch Left
                                </button>
                                <button class="btn btn-raised btn-warning " data-toggle="modal" data-target="#modal-7">
                                    Pull Up
                                </button>
                                <button class="btn btn-raised btn-warning " data-toggle="modal" data-target="#modal-11">
                                    Stretch Right
                                </button>
                            </div>
                            <div class="col-md-3">
                                <h3>
                                    <strong>Color</strong> variation
                                </h3>
                                <p>
                                    Like in a normal page, you can add class to make your modal responsive,
                                    <code>col-md-4</code> for example.
                                </p>
                                <button class="btn btn-raised btn-primary md-trigger" data-toggle="modal"
                                        data-target="#modal-16">Primary
                                </button>
                                <button class="btn btn-raised btn-info md-trigger" data-toggle="modal"
                                        data-target="#modal-17">Info
                                </button>
                                <button class="btn btn-raised btn-success md-trigger" data-toggle="modal"
                                        data-target="#modal-18">Success
                                </button>
                                <button class="btn btn-raised btn-danger md-trigger" data-toggle="modal"
                                        data-target="#modal-21">Danger
                                </button>
                                <button class="btn btn-raised btn-secondary md-trigger" data-toggle="modal"
                                        data-target="#modal-19">Default
                                </button>
                                <button class="btn btn-raised btn-warning md-trigger" data-toggle="modal"
                                        data-target="#modal-20">Warning
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--moddal dialog -->
        <div class="modal fade modal-fadeIn"  id="modal-1" role="dialog"
             aria-labelledby="modalLabelfade" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title" id="modalLabelfade">Fade in &amp; Scale</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade slideRight" id="modal-2" role="dialog" aria-labelledby="modalLabelslide">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title" id="modalLabelslide">Slide in (right)</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade slideDown" id="modal-3" role="dialog" aria-labelledby="modalLabelslidebottom">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title" id="modalLabelslidebottom">Slide in (bottom)</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade pullDown" id="modal-4" role="dialog" aria-labelledby="modalLabelnews">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title" id="modalLabelnews">Pulldown</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade floating" id="modal-5" role="dialog" aria-labelledby="modalLabelfall">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title" id="modalLabelfall">Floating</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade stretchLeft" id="modal-6" role="dialog" aria-labelledby="modalLabelsidefall1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title" id="modalLabelsidefall1">Stretch Left</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade pullUp" id="modal-7" role="dialog" aria-labelledby="modalLabelsticky">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title" id="modalLabelsticky">Pull Up</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade expandOpen" id="modal-8" role="dialog" aria-labelledby="my3dlabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info text-white">
                        <h4 class="modal-title" id="my3dlabel">3D Expand Open</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close Me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bigEntrance" id="modal-9" role="dialog" aria-labelledby="Modallabel3dflip">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info text-white ">
                        <h4 class="modal-title" id="Modallabel3dflip">3D Big Entrance </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade slideExpandUp" id="modal-10" role="dialog" aria-labelledby="Modallabel3dsign">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info text-white">
                        <h4 class="modal-title" id="Modallabel3dsign">3D Expand Up</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade stretchRight" id="modal-11" role="dialog" aria-labelledby="modalLabelsidefall2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title" id="modalLabelsidefall2">Stretch Right</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="md-modal md-effect-12" id="modal-12">-->
            <!--<div class="md-content">-->
                <!--<h3>Modal Dialog</h3>-->
                <!--<div class="modal-red">-->
                    <!--<p>-->
                        <!--This is a modal window. You can do the following things with it:-->
                    <!--</p>-->
                    <!--<ul>-->
                        <!--<li>-->
                            <!--<strong>Read:</strong> modal windows will probably tell you something important so don't-->
                            <!--forget to read what they say.-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it-->
                            <!--and appreciate its presence.-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<strong>Close:</strong> click on the button below to close the modal.-->
                        <!--</li>-->
                    <!--</ul>-->
                    <!--<button class="btn btn-modal btn-secondary md-close">Close me!</button>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <div class="modal fade tossing" id="modal-13" role="dialog" aria-labelledby="Modallabel3dslit">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info text-white">
                        <h4 class="modal-title" id="Modallabel3dslit">3D tossing</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bounce" id="modal-14" role="dialog" aria-labelledby="Modallabel3drotate">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info text-white">
                        <h4 class="modal-title" id="Modallabel3drotate">3D Bounce</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade pulse" id="modal-15" role="dialog" aria-labelledby="Modallabel3drotateinleft">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header bg-info text-white">
                        <h4 class="modal-title" id="Modallabel3drotateinleft">3D Pulse</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info " data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-16" role="dialog" aria-labelledby="modalLabelprimary">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title" id="modalLabelprimary">Primary Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-primary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-17" role="dialog" aria-labelledby="modalLabelinfo">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info text-white">
                        <h4 class="modal-title" id="modalLabelinfo">Info Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-info" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-18" role="dialog" aria-labelledby="modalLabelsuccess">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h4 class="modal-title" id="modalLabelsuccess">Success Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-success" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-19" role="dialog" aria-labelledby="modalLabeldefault">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h4 class="modal-title" id="modalLabeldefault">Default Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-20" role="dialog" aria-labelledby="modalLabelwarn">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h4 class="modal-title" id="modalLabelwarn">Warning Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-warning" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-21" role="dialog" aria-labelledby="modalLabeldanger">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h4 class="modal-title" id="modalLabeldanger">Danger Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            This is a modal window. You can do the following things with it:
                        </p>
                        <ul>
                            <li>
                                <strong>Read:</strong> modal windows will probably tell you something important so don't
                                forget to read what they say.
                            </li>
                            <li>
                                <strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at
                                it and appreciate its presence.
                            </li>
                            <li>
                                <strong>Close:</strong> click on the button below to close the modal.
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn  btn-danger" data-dismiss="modal">Close me!</button>
                    </div>
                </div>
            </div>
        </div>
        <!--- end modals-->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-12 my-3">
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        <span>
                            <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                               data-hc="white"></i> Extended Modals
                        </span>
                        <span class="float-right ">
                                    <i class="fa fa-chevron-up clickable"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <!-- BEGIN modal-->
                        <table class="table table-hover table-striped table-bordered table-responsive-lg table-responsive-md table-responsive-sm">
                            <tbody>
                            <tr>
                                <td>Responsive</td>
                                <td>
                                    <a class="btn btn-raised btn-success btn-large" data-toggle="modal"
                                       data-href="#responsive" href="#responsive">View Demo</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Stackable</td>
                                <td>
                                    <a class="btn btn-raised btn-primary btn-large" data-toggle="modal"
                                       data-href="#stack1" href="#stack1">View Demo</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ajax</td>
                                <td>
                                    <a class="btn btn-raised btn-warning btn-large" data-toggle="modal"
                                       data-href="#ajax-modal" href="#ajax-modal">View Demo</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Static Background with Animation</td>
                                <td>
                                    <a class="btn btn-raised btn-danger btn-large" data-toggle="modal"
                                       data-href="#static" href="#static">View Demo</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Full Width</td>
                                <td>
                                    <a class="btn btn-raised btn-info btn-large" data-toggle="modal"
                                       data-href="#full-width" href="#full-width">View Demo</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Long Modals</td>
                                <td>
                                    <a class="btn btn-raised btn-secondary btn-large" data-toggle="modal"
                                       data-href="#long" href="#long">View Demo</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--- responsive model -->
        <div class="extended_modals">
            <div class="modal fade in" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title mr-auto">Responsive</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Some More data</h4>
                                    <p>
                                        <input id="name" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name1" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name2" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name3" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name4" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name5" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h4>Some More data</h4>
                                    <p>
                                        <input id="name6" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name7" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name8" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name9" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name10" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                    <p>
                                        <input id="name41" name="name" type="text" placeholder="Your name"
                                               class="form-control">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END modal-->
            <!--- stack1 model -->
            <div class="modal fade bs-example-modal-sm in" id="stack1" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Stack One</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                        </div>
                        <div class="modal-body">
                            <p>One fine body…</p>
                            <p>One fine body…</p>
                            <p>One fine body…</p>
                            <div class="form-group label-floating">
                                <label class="control-label">Name: </label>
                                <input id="name21" name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Password:</label>
                                <input id="name22" name="name" type="text" class="form-control">
                            </div>
                            <a class="btn btn-success" data-toggle="modal" href="#stack2">Launch modal</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stack2 modal-->
            <div class="modal fade bs-example-modal-md in" id="stack2" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Stack two</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                        </div>
                        <div class="modal-body">
                            <p>One fine body…</p>
                            <p>One fine body…</p>
                            <div class="form-group label-floating">
                                <label class="control-label">Name:</label>
                                <input id="name11" name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Password:</label>
                                <input id="name12" name="name" type="text" class="form-control">
                            </div>
                            <a class="btn btn-success" data-toggle="modal" href="#stack3">Launch modal</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END modal-->
            <!-- stack3 modal-->
            <div class="modal fade in" id="stack3" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Stack3</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                        </div>
                        <div class="modal-body">
                            <p>One fine body…</p>
                            <div class="form-group label-floating">
                                <label class="control-label">Name:</label>
                                <input id="name13" name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Password:</label>
                                <input id="name14" name="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ajax-modal modal-->
            <div class="modal fade in" id="ajax-modal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">ajax-modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#tab1" data-toggle="tab" class="nav-link active">Tab 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab2" data-toggle="tab" class="nav-link">Tab 2</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
                                    <p>This modal was loaded in via ajax</p>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <p>This is some other tab content</p>
                                </div>
                            </div>
                            <button class="btn btn-success update">Update</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- static modal-->
            <div class="modal fade in" id="static" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p>Would you like to continue with some arbitrary task?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-primary">Continue Task</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END modal-->
            <!-- fullwidth modal-->
            <div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Full Width</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                        </div>
                        <div class="modal-body">
                            <p>
                                This modal will resize itself to the same dimensions as the container class.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin ipsum ac ante
                                fermentum suscipit. In ac augue non purus accumsan lobortis id sed nibh. Nunc egestas
                                hendrerit ipsum, et porttitor augue volutpat non. Aliquam erat volutpat. Vestibulum
                                scelerisque lobortis pulvinar. Aenean hendrerit risus neque, eget tincidunt leo.
                                Vestibulum est tortor, commodo nec cursus nec, vestibulum vel nibh. Morbi elit magna,
                                ornare placerat euismod semper, dignissim vel odio. Phasellus elementum quam eu ipsum
                                euismod pretium.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END modal-->
            <!-- long modal-->
            <div class="modal fade in" id="long" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">A Fairly Long Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body modal_long">
                            {{--<a class="btn btn-secondary " data-toggle="modal" href="#notlong">Not So Long Modal</a>--}}
                            <img alt="image" src="http://i.imgur.com/KwPYo.jpg">
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script>
        $("#stack2,#stack3").on('hidden.bs.modal', function (e) {
            $('body').addClass('modal-open');
        });
    </script>
@stop
