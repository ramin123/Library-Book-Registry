const mix = require('laravel-mix');

//enable sourcemaps only in dev environment
if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'inline-source-map',
    });
}

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const vendors = 'node_modules/';
const resourcesAssets = 'resources/';
const srcCssFrontend = resourcesAssets + 'css/frontend/';
const srcJsFrontend = resourcesAssets + 'js/frontend/';
const srcSassFrontend = resourcesAssets + 'sass/frontend/';

//destination path configuration
const dest = 'public/';
const destFonts = dest + 'webfonts/';
const destCssFrontend = dest + 'css/frontend/';
const destJsFrontend = dest + 'js/frontend/';
const destImg = dest + 'img/';
const destImages = dest + 'images/';
const destVendors = dest + 'vendors/';

const paths = {
    animate: vendors + 'animate.css/',
    accwizard: vendors + 'acc-wizard/release/',
    animatechart: vendors + 'animatechart/',
    autogrow: vendors + 'autogrow/',
    imgLoad: vendors + 'blueimp-load-image/',
    jquery: vendors + 'jquery/dist/',
    popperjs: vendors + 'popper.js/dist/umd/',
    bootstrap: vendors + 'bootstrap/dist/',
    bootstrapFormBuilder: vendors + 'bootstrap-form-builder-v4/', //not working
    wysihtml5: vendors + 'bootstrap3-wysihtml5-bower/dist/',
    bootstraprating: vendors + 'bootstrap-rating/',
    daterangepicker: vendors + 'bootstrap-daterangepicker/',
    magnify: vendors + 'bootstrap-magnify/',
    maxlength: vendors + 'bootstrap-maxlength/src/',
    multiselect: vendors + 'bootstrap-multiselect/dist/',
    progressbar: vendors + 'bootstrap-progressbar/',
    rating: vendors + 'bootstrap-rating/',
    switch: vendors + 'bootstrap-switch/dist/',
    tagsinput: vendors + 'bootstrap-tagsinput/',
    typeaheadjs: vendors + 'typeahead.js/dist/',
    timepicker: vendors + 'bootstrap-timepicker/',
    touchspin: vendors + 'bootstrap-touchspin/dist/',
    jvectormap: vendors + 'bower-jvectormap/',
    buttons: vendors + 'Buttons/',
    card: vendors + 'card/',
    chartjs: vendors + 'chart.js/dist/',
    ckeditor: vendors + 'ckeditor/',
    clockface: vendors + 'clockface.js/',
    fontawesome: vendors + '@fortawesome/fontawesome-free/',
    flotchart: vendors + 'flot/',
    countupjs: vendors + 'countup.js/dist/',
    dataTables: vendors + 'datatables/media',
    devicon: vendors + 'devicon/',
    dropzone: vendors + 'dropzone/dist/',
    fancybox: vendors + 'fancybox/',
    frappe: vendors + 'frappe-charts/dist/',
    gmaps: vendors + 'gmaps/',
    gridmanager: vendors + 'gridmanager/',
    highcharts: vendors + 'highcharts/',
    holderjs: vendors + 'holderjs/',
    html5sortable: vendors + 'html5sortable/dist/',
    intltelinput: vendors + 'intl-tel-input/',
    rangeslider: vendors + 'ion-rangeslider/',
    ionicons: vendors + 'ionicons/dist/',
    jcrop: vendors + 'Jcrop/',
    inputmask: vendors + 'inputmask/dist/',
    knob: vendors + 'jquery-knob/js/',
    select2: vendors + 'select2/dist/',
    datetimepicker: vendors + 'eonasdan-bootstrap-datetimepicker/build/',
    fullcalendar: vendors + 'fullcalendar/dist/',
    summernote: vendors + 'summernote/dist/',
    icheck: vendors + 'iCheck/',
    jasnyBootstrap: vendors + 'jasny-bootstrap/dist/',
    toastr: vendors + 'toastr/',
    bootstrapValidator: vendors + 'bootstrapvalidator/dist/',
    select2BootstrapTheme: vendors + 'select2-bootstrap-theme/dist/',
    c3: vendors + '/c3/',
    spinner: vendors + 'jquery.spinner/dist/',
    jqueryui: vendors + 'jquery-ui/',
    Loader: vendors + 'Loader/',
    mixitup: vendors + 'mixitup/',
    colorpicker: vendors + 'bootstrap-colorpicker/dist/',
    moment: vendors + 'moment/',
    timezone: vendors + 'moment-timezone/',
    nestable: vendors + 'nestable/',
    noty: vendors + 'noty/',
    owlcarousel: vendors + 'owlCarousel/owl-carousel/',
    rangy: vendors + 'rangy-1.3/',
    bootstrapSlider: vendors + 'bootstrap-slider/dist/',
    trumbowyg: vendors + 'trumbowyg/dist/',
    simplelineicons: vendors + 'simple-line-icons/',
    sortablejs: vendors + 'sortablejs/',
    transitionize: vendors + 'transitionize/dist/',
    switchery: vendors + 'switchery/dist/',
    twtrBootstrapWizard: vendors + 'twitter-bootstrap-wizard/',
    wysihtml5x: vendors + 'wysihtml5x/dist/',
    datepicker: vendors + 'bootstrap-datepicker/dist/',
    jqvmap: vendors + 'jqvmap/',
    flottooltip: vendors + 'flot.tooltip/js/',
    wow: vendors + 'wowjs/dist/',
    raphael: vendors + 'raphael/',
    pdfmake: vendors + 'pdfmake/build/',
    selectize: vendors + 'selectize/dist/',
    airDatepicker: vendors + 'air-datepicker/dist',
    awesomebootstrapcheckbox: vendors + 'awesome-bootstrap-checkbox/',
    starability: vendors + 'starability',
    bootstrapStarRating: vendors + 'bootstrap-star-rating/',
    flatpickr: vendors + 'flatpickr/dist/',
    pickadate: vendors + 'pickadate/lib/',
    sifter: vendors + 'sifter/',
    microplugin: vendors + 'microplugin/src/',
    sweetalert2: vendors + 'sweetalert2/',
    jstree: vendors + 'jstree/dist/',
    hover: vendors + 'hover.css/css/',
    jeditable: vendors + 'jquery-jeditable/src/',
    d3: vendors + 'd3/',
    morrisjs: vendors + 'morris.js/',
    d3pie: vendors + 'd3pie/',
    bootstrapdatetimepicker: vendors + 'bootstrap-datetime-picker/',
    jTable: vendors + 'jtable/',
    jquery_newsTicker: vendors + 'jquery.newsTicker/',
    slimmenu: vendors + 'slimmenu/dist/',
};

function front() {
    //copy frontend skins to public
    mix.copy(srcCssFrontend + 'skins', destCssFrontend + 'skins');

    //default layout
    mix.copy(srcJsFrontend + 'josh_frontend.js', destJsFrontend);
    mix.copy(srcJsFrontend + 'style-switcher.js', destJsFrontend);

    //copy jquery and bootstrap
    mix.copy(paths.jquery + 'jquery.min.js', destJsFrontend);
    mix.copy(paths.bootstrap + 'js/bootstrap.min.js', destJsFrontend);

    // index page
    mix.copy(srcCssFrontend + 'tabbular.css', destCssFrontend);
    mix.copy(srcCssFrontend + 'jquery.circliful.css', destCssFrontend);
    mix.copy(srcJsFrontend + 'carousel.js', destJsFrontend);
    mix.copy(srcJsFrontend + 'index.js', destJsFrontend);
    mix.copy(srcJsFrontend + 'jquery.circliful.js', destJsFrontend);

    // advanced features
    mix.copy(srcCssFrontend + 'panel.css', destCssFrontend);
    mix.copy(srcJsFrontend + 'advfeatures.js', destJsFrontend);
    mix.copy(srcCssFrontend + 'timeline.css', destCssFrontend);

    // switchery
    mix.copy(paths.switchery + 'switchery.css', destVendors + 'switchery/css');
    mix.copy(paths.switchery + 'switchery.js', destVendors + 'switchery/js');

    // devicon
    mix.copy(paths.devicon + 'devicon.min.css', destVendors + 'devicon');
    mix.copy(paths.devicon + 'fonts', destVendors + 'devicon/fonts');
    mix.copy(paths.devicon + 'devicon-colors.css', destVendors + 'devicon');

    //pages section
    //about us
    mix.copy(srcJsFrontend + 'aboutus.js', destJsFrontend);

    //timeline
    mix.sass(srcSassFrontend + 'pages/timeline1.scss', destCssFrontend + 'timeline1.css');

    //price
    mix.sass(srcSassFrontend + 'pages/price.scss', destCssFrontend + 'price.css');

    //404
    mix.sass(srcSassFrontend + 'pages/404.scss', destCssFrontend).options({
        processCssUrls: false
    });
    mix.copy(srcJsFrontend + '404.js', destJsFrontend);

    //500
    mix.sass(srcSassFrontend + 'pages/500.scss', destCssFrontend);

    //forgotpwd js
    mix.copy(srcJsFrontend + 'forgotpwd_custom.js', destJsFrontend);

    //frontned login js
    mix.copy(srcJsFrontend + 'login_custom.js', destJsFrontend);

    //frontned register js
    mix.copy(srcJsFrontend + 'register_custom.js', destJsFrontend);

    //faq
    mix.sass(srcSassFrontend + 'pages/faq.scss', destCssFrontend);
    mix.copy(srcJsFrontend + 'faq.js', destJsFrontend);
    mix.copy(paths.mixitup + 'dist/mixitup.js', destVendors + 'mixitup');
    mix.copy(srcJsFrontend + 'jquery.mixitup.js', destJsFrontend);

    // register
    mix.sass(srcSassFrontend + 'pages/register.scss', destCssFrontend);

    // login
    mix.sass(srcSassFrontend + 'pages/login.scss', destCssFrontend).options({
        processCssUrls: false
    });

    // forgot
    mix.sass(srcSassFrontend + 'pages/forgot.scss', destCssFrontend).options({
        processCssUrls: false
    });

    //shoping section
    //single_product
    mix.copy(paths.rating + 'bootstrap-rating.js', destVendors + 'bootstrap-rating');
    mix.copy(paths.rating + 'bootstrap-rating.css', destVendors + 'bootstrap-rating');
    mix.copy(paths.bootstraprating + 'bootstrap-rating.css', destVendors + 'bootstraprating');
    mix.copy(paths.bootstraprating + 'bootstrap-rating.js', destVendors + 'bootstraprating');
    mix.copy(paths.bootstraprating + 'bootstrap-rating.min.js', destVendors + 'bootstraprating');

    mix.sass(srcSassFrontend + 'pages/cart.scss', destCssFrontend);
    mix.copy(srcJsFrontend + 'cart.js', destJsFrontend);
    mix.copy(srcJsFrontend + 'elevatezoom.js', destJsFrontend);
    //

    //portfolio section
    //portfolio
    mix.sass(srcSassFrontend + 'pages/portfolio.scss', destCssFrontend + 'portfolio.css');
    mix.copy(srcJsFrontend + 'portfolio.js', destJsFrontend);
    mix.copy(srcJsFrontend + 'elevatezoom.js', destJsFrontend);

    //news section
    mix.sass(srcSassFrontend + 'pages/news.scss', destCssFrontend);

    //newsitem
    mix.sass(srcSassFrontend + 'pages/blog.scss', destCssFrontend);

    //contact page
    mix.sass(srcSassFrontend + 'pages/contact.scss', destCssFrontend);
    mix.copy(srcJsFrontend + 'gmap.js', destJsFrontend);
    //
    //user account
    mix.sass(srcSassFrontend + 'pages/user_account.scss', destCssFrontend);
    mix.copy(srcJsFrontend + 'user_account.js', destJsFrontend);

    //frontend sass->css
    mix.sass(srcSassFrontend + 'custom.scss', destCssFrontend + 'custom.css');
    mix.sass(srcSassFrontend + 'custom1.scss', destCssFrontend + 'custom1.css');
    mix.sass(srcSassFrontend + 'index.scss', destCssFrontend + 'index.css');

    /*frontend css mix*/
    /*default skin*/
    mix.combine(
        [
            // srcCssFrontend + 'fonts.css',
            destCssFrontend + '../bootstrap.css',
            paths.fontawesome + 'css/all.min.css',
            paths.bootstrapValidator + 'css/bootstrapValidator.min.css',
            destCssFrontend + 'custom.css',
            srcCssFrontend + '../custom.css'
        ],
        destCssFrontend + '../lib.css'
        //we have to store in public/css otherwise fontawesome fonts won't load
    )
        .version()
        .sourceMaps();

    /*frontend js mix*/

    mix.combine(
        [
            paths.jquery + 'jquery.min.js',
            paths.popperjs + 'popper.min.js',
            paths.bootstrap + 'js/bootstrap.min.js',
            vendors + 'raphael/raphael.min.js',
            srcJsFrontend + 'livicons-1.4.min.js',
            srcJsFrontend + 'josh_frontend.js',
            paths.bootstrapValidator + 'js/bootstrapValidator.min.js',
        ],
        destJsFrontend + 'lib.js'
    );
}

/**
 * Export the frontend asset compilation
 */
module.exports = front;
