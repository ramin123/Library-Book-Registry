@extends('layouts/default')

{{-- Page title --}}
@section('title')
FAQ
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--start of page level css-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/faq.css') }}">
<!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
<div class="breadcum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                        </a>
                    </li>
                    <li class="hidden-xs">
                        <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                            data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <a href="#">FAQ</a>
                    </li>
                </ol>
                <div class="float-right mt-1">
                    <i class="livicon icon3" data-name="question" data-size="20" data-loop="true" data-c="#3d3d3d"
                        data-hc="#3d3d3d"></i> FAQ
                </div>
            </div>
        </div>
    </div>
</div>
@stop


{{-- Page content --}}
@section('content')
<!-- Container Section Start -->
<div class="container">
    <div class="row my-3">
        <div class="col-md-12 col-12 col-lg-12 col-sm-12">
            <div class="control-bar sandbox-control-bar my-2">
                <span class="btn btn-primary filter active" data-filter="all">All</span>
                <span class="btn btn-primary filter" data-filter=".category-1">HTML</span>
                <span class="btn btn-primary filter" data-filter=".category-2">PHP</span>
                <span class="btn btn-primary filter" data-filter=".category-3">JQUERY</span>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <div class="card-group card-accordion faq-accordion">
                        <div id="faq">
                            <div class="mix category-1 col-lg-12 card mb-2" data-value="1">
                                <div class="card-header bg-white py-2" id="headingOne">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question1" aria-expanded="true"
                                            aria-controls="question1">
                                            <strong>1.</strong>
                                            How does syncing work?
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question1" class="collapse" aria-labelledby="headingOne" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quidem
                                            delectus rerum eligendi mollitia, repudiandae quae beatae. Et repellat quam
                                            atque corrupti iusto architecto impedit explicabo repudiandae qui similique
                                            aut iure ipsum quis inventore nulla error aliquid alias quia dolorem dolore,
                                            odio excepturi veniam odit veritatis. Quo iure magnam, et cum. Laudantium,
                                            eaque non? Tempore nihil corporis cumque dolor ipsum accusamus sapiente
                                            aliquid quis ea assumenda deserunt praesentium voluptatibus, accusantium a
                                            mollitia necessitatibus nostrum voluptatem numquam modi ab, sint rem.
                                        </p>
                                        <ol>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-1 col-lg-12 mb-2 card" data-value="2">
                                <div class="card-header bg-white py-2" id="headingTwo">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question2" aria-expanded="true"
                                            aria-controls="question2">
                                            <strong>2.</strong>
                                            How do I upload files from my phone or tablet?
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question2" class="collapse" aria-labelledby="headingTwo" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempore,
                                            placeat quisquam rerum! Eligendi fugit dolorum tenetur modi fuga nisi rerum,
                                            autem officiis quaerat quos. Magni quia, quo quibusdam odio. Error magni
                                            aperiam amet architecto adipisci aspernatur! Officia, quaerat magni
                                            architecto nostrum magnam fuga nihil, ipsum laboriosam similique
                                            voluptatibus facilis nobis? Eius non asperiores, nesciunt suscipit veniam
                                            blanditiis veritatis provident possimus iusto voluptas, eveniet architecto
                                            quidem quos molestias, aperiam eum reprehenderit dolores ad deserunt eos
                                            amet. Vero molestiae commodi unde dolor dicta maxime alias, velit, nesciunt
                                            cum dolorem, ipsam soluta sint suscipit maiores mollitia assumenda ducimus
                                            aperiam neque enim! Quas culpa dolorum ipsam? Ipsum voluptatibus numquam
                                            natus? Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam rerum
                                            maiores officia! Beatae, molestias!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-1 col-lg-12 mb-2 card" data-value="3">
                                <div class="card-header bg-white py-2" id="headingThree">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question3" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <strong>3.</strong>
                                            How do I link to a file or folder?
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question3" class="collapse" aria-labelledby="headingThree" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempore,
                                            placeat quisquam rerum! Eligendi fugit dolorum tenetur modi fuga nisi rerum,
                                            autem officiis quaerat quos. Magni quia, quo quibusdam odio. Error magni
                                            aperiam amet architecto adipisci aspernatur! Officia, quaerat magni
                                            architecto nostrum magnam fuga nihil, ipsum laboriosam similique
                                            voluptatibus facilis nobis? Eius non asperiores, nesciunt suscipit veniam
                                            blanditiis veritatis provident possimus iusto voluptas, eveniet architecto
                                            quidem quos molestias, aperiam eum reprehenderit dolores ad deserunt eos
                                            amet. Vero molestiae commodi unde dolor dicta maxime alias, velit, nesciunt
                                            cum dolorem, ipsam soluta sint suscipit maiores mollitia assumenda ducimus
                                            aperiam neque enim! Quas culpa dolorum ipsam? Ipsum voluptatibus numquam
                                            natus? Eligendi explicabo eos, perferendis voluptatibus hic sed ipsam rerum
                                            maiores officia! Beatae, molestias!
                                        </p>
                                        <ol>
                                            <li>
                                                explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores
                                                officia! Beatae,
                                            </li>
                                            <li>
                                                explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores
                                                officia! Beatae,
                                            </li>
                                            <li>
                                                explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores
                                                officia! Beatae,
                                            </li>
                                            <li>
                                                explicabo eos, perferendis voluptatibus hic sed ipsam rerum maiores
                                                officia! Beatae,
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-2 col-lg-12 mb-2 card" data-value="4">
                                <div class="card-header bg-white py-2" id="headingFour">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question4" aria-expanded="false"
                                            aria-controls="question4">
                                            <strong>4.</strong>
                                            How do I change my password?
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question4" class="collapse" aria-labelledby="headingFour" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum
                                            autem consectetur labore eius tenetur esse, in temporibus sequi cum
                                            voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae
                                            necessitatibus, unde, deserunt voluptas possimus veniam magni soluta
                                            deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab
                                            aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam
                                            fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam!
                                            Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium
                                            mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi
                                            doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis
                                            tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste
                                            officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla
                                            accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam
                                            consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates
                                            corrupti, minus! Possimus, perspiciatis!
                                        </p>
                                        <ol>
                                            <li>
                                                reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                            </li>
                                            <li>
                                                reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                            </li>
                                            <li>
                                                reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                            </li>
                                            <li>
                                                reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-1 col-lg-12 mb-2 card" data-value="5">
                                <div class="card-header bg-white py-2" id="headingFive">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question5" aria-expanded="false"
                                            aria-controls="question5">
                                            <strong>5.</strong>
                                            Remote screen alignment problem
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question5" class="collapse" aria-labelledby="headingFive" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            The screen of my Qtek9100 is cracked and i actually did a hard reset
                                            although thisi is my second time of using the application remote screen
                                            alignment,it actually works the first time but while trying to use it the
                                            second timeafter i performed my hard reset all i got is "your device cannot
                                            be...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-2 col-lg-12 mb-2 card" data-value="6">
                                <div class="card-header bg-white py-2" id="headingSix">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question6" aria-expanded="false"
                                            aria-controls="question6">
                                            <strong>6.</strong>
                                            How do I delete my account?
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question6" class="collapse" aria-labelledby="headingSix" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum
                                            autem consectetur labore eius tenetur esse, in temporibus sequi cum
                                            voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae
                                            necessitatibus, unde, deserunt voluptas possimus veniam magni soluta
                                            deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab
                                            aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam
                                            fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam!
                                            Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium
                                            mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi
                                            doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis
                                            tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste
                                            officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla
                                            accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam
                                            consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates
                                            corrupti, minus! Possimus, perspiciatis!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-3 col-lg-12 mb-2 card" data-value="7">
                                <div class="card-header bg-white py-2" id="headingSeven">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question7" aria-expanded="false"
                                            aria-controls="question7">
                                            <strong>7.</strong>
                                            Can I have an invoice for my subscription?
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question7" class="collapse" aria-labelledby="headingSeven" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum
                                            autem consectetur labore eius tenetur esse, in temporibus sequi cum
                                            voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae
                                            necessitatibus, unde, deserunt voluptas possimus veniam magni soluta
                                            deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab
                                            aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam
                                            fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam!
                                            Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium
                                            mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi
                                            doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis
                                            tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste
                                            officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla
                                            accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam
                                            consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates
                                            corrupti, minus! Possimus, perspiciatis!
                                        </p>
                                        <ol>
                                            <li>Sint nemo iste nulla accusamus quam qui quos,</li>
                                            <li>Sint nemo iste nulla accusamus quam qui quos,</li>
                                            <li>Sint nemo iste nulla accusamus quam qui quos,</li>
                                            <li>Sint nemo iste nulla accusamus quam qui quos,</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-3 col-lg-12 mb-2 card" data-value="8">
                                <div class="card-header bg-white py-2" id="headingEight">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question8" aria-expanded="false"
                                            aria-controls="question8">
                                            <strong>8.</strong>
                                            Why did my credit card or PayPal payment fail?
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question8" class="collapse" aria-labelledby="headingEight" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum
                                            autem consectetur labore eius tenetur esse, in temporibus sequi cum
                                            voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae
                                            necessitatibus, unde, deserunt voluptas possimus veniam magni soluta
                                            deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab
                                            aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam
                                            fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam!
                                            Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium
                                            mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi
                                            doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis
                                            tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste
                                            officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla
                                            accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam
                                            consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates
                                            corrupti, minus! Possimus, perspiciatis!
                                        </p>
                                        <ol>
                                            <li>
                                                reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                                perspiciatis!
                                            </li>
                                            <li>
                                                reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                                perspiciatis!
                                            </li>
                                            <li>
                                                reprehenderit obcaecati voluptates corrupti, minus! Possimus,
                                                perspiciatis!
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-2 col-lg-12 mb-2 card" data-value="9">
                                <div class="card-header bg-white py-2" id="headingNine">
                                    <h4 class="card-title my-0">
                                        <a data-toggle="collapse" data-target="#question9" aria-expanded="false"
                                            aria-controls="question9">
                                            <strong>9.</strong>
                                            How do I change my account settings?
                                            <span class="float-right">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="question9" class="collapse" aria-labelledby="headingNine" data-parent="#faq">

                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis earum
                                            autem consectetur labore eius tenetur esse, in temporibus sequi cum
                                            voluptatem vitae repellat nostrum odio perspiciatis dolores recusandae
                                            necessitatibus, unde, deserunt voluptas possimus veniam magni soluta
                                            deleniti! Architecto, quidem, totam. Fugit minus odit unde ea cupiditate ab
                                            aperiam sed dolore facere nihil laboriosam dolorum repellat deleniti aliquam
                                            fugiat laudantium delectus sint iure odio, necessitatibus rem quisquam!
                                            Ipsum praesentium quam nisi sint, impedit sapiente facilis laudantium
                                            mollitia quae fugiat similique. Dolor maiores aliquid incidunt commodi
                                            doloremque rem! Quaerat, debitis voluptatem vero qui enim, sunt reiciendis
                                            tempore inventore maxime quasi fugiat accusamus beatae modi voluptates iste
                                            officia esse soluta tempora labore quisquam fuga, cum. Sint nemo iste nulla
                                            accusamus quam qui quos, vero, minus id. Eius mollitia consequatur fugit nam
                                            consequuntur nesciunt illo id quis reprehenderit obcaecati voluptates
                                            corrupti, minus! Possimus, perspiciatis!
                                        </p>
                                        <ol>
                                            <li>voluptates corrupti, minus! Possimus, perspiciatis!</li>
                                            <li>voluptates corrupti, minus! Possimus, perspiciatis!</li>
                                            <li>voluptates corrupti, minus! Possimus, perspiciatis!</li>
                                        </ol>
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
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('js/frontend/faq.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/jquery.mixitup.js') }}"></script>

@stop
