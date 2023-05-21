const mix = require('laravel-mix');
const front = require('./frontend.mix.js');

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
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const vendors = 'node_modules/';
const resourcesAssets = 'resources/';
const srcCss = resourcesAssets + 'css/';
const srcJs = resourcesAssets + 'js/';
const srcSass = resourcesAssets + 'sass/';

//destination path configuration
const dest = 'public/';
const destFonts = dest + 'webfonts/';
const destCss = dest + 'css/';
const destJs = dest + 'js/';
const destImg = dest + 'img/';
const destImages = dest + 'images/';
const destVendors = dest + 'vendors/';

const paths = {
    animate: vendors + 'animate.css/',
    accwizard: vendors + 'acc-wizard/release/',
    animatechart: vendors + 'animatechart/',
    autogrow: vendors + 'autogrow/',
    backbone: vendors + 'backbone/',
    blueimpcanvas: vendors + 'blueimp-canvas-to-blob/',
    blueimpfileupload: vendors + 'blueimp-file-upload/',
    imgLoad: vendors + 'blueimp-load-image/',
    jquery: vendors + 'jquery/dist/',
    popperjs: vendors + 'popper.js/dist/umd/',
    bootstrap: vendors + 'bootstrap/dist/',
    bootstrapFormBuilder: vendors + 'bootstrap-form-builder-v4/', //not working
    blueimpgallerywithdesc: vendors + 'blueimp-gallery-with-desc/',
    blueimptmpl: vendors + 'blueimp-tmpl/',
    formBuilder: vendors + 'js-beautify/js/lib/',
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
    spinner: vendors + 'jquery.spinner/docs/dist/',
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
    underscore: vendors + 'underscore/',
    jquery_steps: vendors + 'jquery-steps/',
    wysihtml5x: vendors + 'wysihtml5x/dist/',
    xeditable: vendors + 'X-editable/dist/',
    nestablelist: vendors + 'nestable-list/',
    sparkline: vendors + 'sparkline/src/',
    tinymce: vendors + 'tinymce/',
    jqueryeasypiechart: vendors + 'bower-jquery-easyPieChart/dist/',
    datatables: vendors + 'datatables.net/',
    datatablesbs4: vendors + 'datatables.net-bs4/',
    datatablesbutton: vendors + 'datatables.net-buttons/',
    datatablesbuttonsbs4: vendors + 'datatables.net-buttons-bs4/',
    datatablescolreorder: vendors + 'datatables.net-colreorder/',
    datatablescolreorderbs4: vendors + 'datatables.net-colreorder-bs4/',
    datatablesresponsive: vendors + 'datatables.net-responsive/',
    datatablesrowreorder: vendors + 'datatables.net-rowreorder/',
    datatablesrowreorderbs4: vendors + 'datatables.net-rowreorder-bs4/',
    datatablesscroll: vendors + 'datatables.net-scroller/',
    datatablesscrollbs4: vendors + 'datatables.net-scroller-bs4/',
    datepicker: vendors + 'bootstrap-datepicker/dist/',
    jqvmap: vendors + 'jqvmap/',
    flottooltip: vendors + 'flot.tooltip/js/',
    jquerymockjax: vendors + 'jquery-mockjax/dist/',
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

/**
 * compile the frontend assets
 */
front();

//simple-line-icons
mix.copy(
    paths.simplelineicons + 'css/simple-line-icons.css',
    destVendors + 'simple-line-icons/css'
);
mix.copy(paths.simplelineicons + 'fonts', destVendors + 'simple-line-icons/fonts');

//ionicons
mix.copy(paths.ionicons + 'css/ionicons.min.css', destVendors + 'ionicons/css');
mix.copy(paths.ionicons + 'fonts', destVendors + 'ionicons/fonts');

//Copy fonts straight to public
mix.copy(paths.fontawesome + 'webfonts', destFonts);

//Copy images straight to public
// mix.copy(paths.jqueryui + 'themes/base/images', destImg);
mix.copy(resourcesAssets + 'img', destImg, false);
mix.copy(resourcesAssets + 'img/authors', destImg + '/authors');
mix.copy(resourcesAssets + 'images', destImages, false);
mix.copy(resourcesAssets + 'images/authors', destImages + '/authors');
mix.copy(resourcesAssets + 'images/cart', destImages + '/cart');
mix.copy(resourcesAssets + 'images/gallery', destImages + '/gallery');

// daterange picker
mix.copy(paths.daterangepicker + 'daterangepicker.js', destVendors + 'daterangepicker/js');
mix.copy(paths.daterangepicker + 'daterangepicker.css', destVendors + 'daterangepicker/css');

// air-datepicker
mix.copy(paths.airDatepicker + '/css/datepicker.min.css', destVendors + 'airDatepicker/css');
mix.copy(paths.airDatepicker + '/js/datepicker.min.js', destVendors + 'airDatepicker/js');
mix.copy(paths.airDatepicker + '/js/i18n/datepicker.en.js', destVendors + 'airDatepicker/js');

//smalotDatepicker
mix.copy(
    paths.bootstrapdatetimepicker + '/css/bootstrap-datetimepicker.min.css',
    destVendors + 'bootstrap-datetime-picker/css'
);
mix.copy(
    paths.bootstrapdatetimepicker + '/js/bootstrap-datetimepicker.min.js',
    destVendors + 'bootstrap-datetime-picker/js'
);

//pickadate
mix.copy(paths.pickadate + '/themes/default.css', destVendors + 'pickadate/css');
mix.copy(paths.pickadate + '/themes/default.date.css', destVendors + 'pickadate/css');
mix.copy(paths.pickadate + '/themes/default.time.css', destVendors + 'pickadate/css');
mix.copy(paths.pickadate + 'picker.js', destVendors + 'pickadate/js');
mix.copy(paths.pickadate + 'picker.date.js', destVendors + 'pickadate/js');
mix.copy(paths.pickadate + 'picker.time.js', destVendors + 'pickadate/js');

// flatpickr-calendar
mix.copy(paths.flatpickr + 'flatpickr.min.css', destVendors + 'flatpickr/css');
mix.copy(paths.flatpickr + 'flatpickr.min.js', destVendors + 'flatpickr/js');
mix.copy(srcJs + 'pages/custom_datepicker.js', destJs + 'pages');

mix.copy(srcCss + 'pages/import_data.css', destCss + 'pages');

// awesomebootstrapcheckbox
mix.copy(
    paths.awesomebootstrapcheckbox + 'awesome-bootstrap-checkbox.css',
    destVendors + 'awesomebootstrapcheckbox/css'
);
mix.copy(
    paths.awesomebootstrapcheckbox + 'demo/build.css',
    destVendors + 'awesomebootstrapcheckbox/css'
);
//tinymce
mix.copy(paths.tinymce + 'tinymce.min.js', destVendors + 'tinymce/js');
mix.copy(paths.tinymce + 'plugins/', destVendors + 'tinymce/js/plugins');
mix.copy(paths.tinymce + 'themes/', destVendors + 'tinymce/js/themes');
mix.copy(paths.tinymce + 'skins/', destVendors + 'tinymce/js/skins');

//bootsdtrap starrating
mix.copy(
    paths.bootstrapStarRating + 'css/star-rating.min.css',
    destVendors + 'bootstrapRating/css'
);
mix.copy(paths.bootstrapStarRating + 'js/star-rating.min.js', destVendors + 'bootstrapRating/js');

// metis menu
mix.copy(srcJs + 'metisMenu.js', destJs);

//bootstrap-form-builder
mix.copy(
    paths.bootstrapFormBuilder + 'assets',
    destVendors + 'bootstrap-form-builder/assets/',
    false
);

// gui builder
mix.copy(srcCss + 'pages/custom_gui_builder.css', destCss + 'pages');
mix.copy(srcJs + 'pages/custom_gui_builder.js', destJs + 'pages');
mix.copy(srcCss + 'pages/formbuilder.css', destCss + 'pages');
mix.copy(srcCss + 'pages/adv_date_pickers.css', destCss + 'pages');

// form builder
// mix.copy(paths.formBuilder + 'beautify-html.js',  destVendors + 'form-builder/js');
// mix.copy(paths.formBuilder + 'beautify-css.js',  destVendors + 'form-builder/js');
// mix.copy(paths.formBuilder + 'beautify.js',  destVendors + 'form-builder/js');

//backbone
mix.copy(paths.backbone + 'backbone-min.js', destVendors + 'backbone/js');

// dropzone
mix.copy(paths.dropzone + 'dropzone.css', destVendors + 'dropzone/css');
mix.copy(paths.dropzone + 'dropzone.js', destVendors + 'dropzone/js');

//form examples js
mix.copy(srcJs + 'pages/form_examples.js', destJs + 'pages');

// jquery file upload
mix.copy(
    paths.blueimpfileupload + 'css/jquery.fileupload.css',
    destVendors + 'blueimp-file-upload/css'
);
mix.copy(
    paths.blueimpfileupload + 'css/jquery.fileupload-ui.css',
    destVendors + 'blueimp-file-upload/css'
);
mix.copy(
    paths.blueimpfileupload + 'css/jquery.fileupload-noscript.css',
    destVendors + 'blueimp-file-upload/css'
);
mix.copy(
    paths.blueimpfileupload + 'css/jquery.fileupload-ui-noscript.css',
    destVendors + 'blueimp-file-upload/css'
);
mix.copy(
    paths.blueimpfileupload + 'js/vendor/jquery.ui.widget.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(
    paths.blueimpfileupload + 'js/jquery.iframe-transport.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(
    paths.blueimpfileupload + 'js/jquery.fileupload.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(
    paths.blueimpfileupload + 'js/jquery.fileupload-process.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(
    paths.blueimpfileupload + 'js/jquery.fileupload-image.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(
    paths.blueimpfileupload + 'js/jquery.fileupload-audio.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(
    paths.blueimpfileupload + 'js/jquery.fileupload-video.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(
    paths.blueimpfileupload + 'js/jquery.fileupload-validate.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(
    paths.blueimpfileupload + 'js/jquery.fileupload-ui.js',
    destVendors + 'blueimp-file-upload/js'
);
mix.copy(paths.blueimpfileupload + 'img/loading.gif', destVendors + 'blueimp-file-upload/img');

//blueimp-tmpl
mix.copy(paths.blueimptmpl + 'js/tmpl.min.js', destVendors + 'blueimp-tmpl/js');

// blueimp-load-image
mix.copy(paths.imgLoad + 'js/load-image.all.min.js', destVendors + 'blueimp-load-image/js');
mix.copy(paths.imgLoad + 'js/load-image.js', destVendors + 'blueimp-load-image/js');

// blueimp-canvas-to-blob
mix.copy(
    paths.blueimpcanvas + 'js/canvas-to-blob.min.js',
    destVendors + 'blueimp-canvas-to-blob/js'
);

// blueimp-gallery-with-desc
mix.copy(
    paths.blueimpgallerywithdesc + 'css/blueimp-gallery.min.css',
    destVendors + 'blueimp-gallery-with-desc/css'
);
mix.copy(
    paths.blueimpgallerywithdesc + 'js/jquery.blueimp-gallery.min.js',
    destVendors + 'blueimp-gallery-with-desc/js'
);
mix.copy(
    paths.blueimpgallerywithdesc + 'img',
    destVendors + 'blueimp-gallery-with-desc/img',
    false
);
//file upload page;
mix.copy(srcJs + 'pages/main.js', destJs + 'pages');

//fancybox
mix.copy(paths.fancybox + 'dist/css/jquery.fancybox.css', destVendors + 'fancybox/css');
mix.copy(paths.fancybox + 'dist/helpers', destVendors + 'fancybox/helpers');
mix.copy(paths.fancybox + 'lib/jquery.mousewheel.pack.js', destVendors + 'fancybox/js');
mix.copy(paths.fancybox + 'dist/js/jquery.fancybox.pack.js', destVendors + 'fancybox/js');
mix.copy(paths.fancybox + 'dist/img', destVendors + 'fancybox/img');

mix.copy(srcJs + 'pages/jquery_fancy_thumb.js', destJs + 'pages');

//frappe
mix.copy(paths.frappe + 'frappe-charts.min.iife.js', destVendors + 'frappe/');

//grid manager
mix.copy(paths.gridmanager + 'dist/css/jquery.gridmanager.css', destVendors + 'gridmanager/css');
mix.copy(paths.gridmanager + 'demo/css/demo.css', destVendors + 'gridmanager/css');
mix.copy(paths.gridmanager + 'dist/js/jquery.gridmanager.js', destVendors + 'gridmanager/js');

//jasny-bootstrap
mix.copy(paths.jasnyBootstrap + 'css/jasny-bootstrap.css', destVendors + 'jasny-bootstrap/css');
mix.copy(paths.jasnyBootstrap + 'js/jasny-bootstrap.js', destVendors + 'jasny-bootstrap/js');

// bootstrap3-wysihtml5-bower
mix.copy(
    paths.wysihtml5 + 'bootstrap3-wysihtml5.min.css',
    destVendors + 'bootstrap3-wysihtml5-bower/css'
);
mix.copy(
    paths.wysihtml5 + 'bootstrap3-wysihtml5.all.min.js',
    destVendors + 'bootstrap3-wysihtml5-bower/js'
);
mix.copy(
    paths.wysihtml5 + 'bootstrap3-wysihtml5.min.js',
    destVendors + 'bootstrap3-wysihtml5-bower/js'
);

//jquery-steps

mix.copy(paths.jquery_steps + 'demo/css/jquery.steps.css', destVendors + 'jquery_steps/css');
mix.copy(paths.jquery_steps + 'build/jquery.steps.min.js', destVendors + 'jquery_steps/js');
mix.copy(srcJs + 'pluginjs/validate.js', destJs + 'pluginjs');

//summer note
mix.copy(paths.summernote + 'summernote.css', destVendors + 'summernote/css');
mix.copy(paths.summernote + 'summernote.min.js', destVendors + 'summernote/js');
mix.copy(paths.summernote + 'summernote-bs4.css', destVendors + 'summernote/css');
mix.copy(paths.summernote + 'summernote-lite.css', destVendors + 'summernote/css');
mix.copy(paths.summernote + 'summernote-bs4.min.js', destVendors + 'summernote/js');
mix.copy(paths.summernote + 'summernote-lite.js', destVendors + 'summernote/js');
mix.copy(paths.summernote + 'font', destVendors + 'summernote/css/font');

mix.copy(paths.ckeditor + 'ckeditor.js', destVendors + 'ckeditor/js');
mix.copy(paths.ckeditor + 'adapters/jquery.js', destVendors + 'ckeditor/js');
mix.copy(paths.ckeditor + 'config.js', destVendors + 'ckeditor/js');
mix.copy(paths.ckeditor + 'skins/', destVendors + 'ckeditor/js/skins', false);
mix.copy(paths.ckeditor + 'plugins/', destVendors + 'ckeditor/js/plugins');
mix.copy(paths.ckeditor + 'lang', destVendors + 'ckeditor/js/lang');
mix.copy(paths.ckeditor + 'styles.js', destVendors + 'ckeditor/js');
mix.copy(paths.ckeditor + 'contents.css', destVendors + 'ckeditor/js');

// starability
mix.copy(paths.starability + '/starability-css/starability-all.css', destVendors + 'starability');

// bootstrap-star-rating
mix.copy(
    paths.bootstrapStarRating + 'css/star-rating.min.css',
    destVendors + 'bootstrapStarRating/css'
);
mix.copy(
    paths.bootstrapStarRating + 'js/star-rating.min.js',
    destVendors + 'bootstrapStarRating/js'
);
mix.copy(paths.bootstrapStarRating + 'img', destVendors + 'bootstrapStarRating/img');
mix.copy(
    paths.bootstrapStarRating + 'themes/krajee-fa',
    destVendors + 'bootstrapStarRating/themes'
);

mix.copy(srcJs + 'pages/custom_rating.js', destJs + 'pages');
mix.copy(srcCss + 'pages/custom_rating.css', destCss + 'pages');

//autogrow
mix.copy(paths.autogrow + 'js/jQuery-autogrow.js', destVendors + 'autogrow/js');

// trumbowyg
mix.copy(paths.trumbowyg + 'ui/trumbowyg.min.css', destVendors + 'trumbowyg/css');
mix.copy(paths.trumbowyg + 'ui/trumbowyg.css', destVendors + 'trumbowyg/css');
mix.copy(
    paths.trumbowyg + 'plugins/colors/ui/trumbowyg.colors.min.css',
    destVendors + 'trumbowyg/css'
);
mix.copy(paths.trumbowyg + 'trumbowyg.js', destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'plugins/base64/trumbowyg.base64.min.js', destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'plugins/colors/trumbowyg.colors.min.js', destVendors + 'trumbowyg/js');
mix.copy(
    paths.trumbowyg + 'plugins/noembed/trumbowyg.noembed.min.js',
    destVendors + 'trumbowyg/js'
);
mix.copy(
    paths.trumbowyg + 'plugins/pasteimage/trumbowyg.pasteimage.min.js',
    destVendors + 'trumbowyg/js'
);
mix.copy(
    paths.trumbowyg + 'plugins/preformatted/trumbowyg.preformatted.min.js',
    destVendors + 'trumbowyg/js'
);
mix.copy(paths.trumbowyg + 'plugins/upload/trumbowyg.upload.min.js', destVendors + 'trumbowyg/js');
mix.copy(paths.trumbowyg + 'ui/icons.svg', destVendors + 'trumbowyg/css/ui');
// bootstrapvalidator
mix.copy(
    paths.bootstrapValidator + 'css/bootstrapValidator.min.css',
    destVendors + 'bootstrapvalidator/css'
);
mix.copy(
    paths.bootstrapValidator + 'js/bootstrapValidator.min.js',
    destVendors + 'bootstrapvalidator/js'
);

//select2
mix.copy(paths.select2 + 'css/select2.min.css', destVendors + 'select2/css');
mix.copy(paths.select2 + 'js/select2.js', destVendors + 'select2/js');
mix.copy(paths.select2 + 'js/select2.full.js', destVendors + 'select2/js');

mix.copy(paths.select2BootstrapTheme + 'select2-bootstrap.css', destVendors + 'select2/css');

//icheck
mix.copy(paths.icheck + 'icheck.js', destVendors + 'iCheck/js');
mix.copy(paths.icheck + 'skins/', destVendors + 'iCheck/css', false);

//hover
mix.copy(paths.hover + 'hover-min.css', destVendors + 'hover/css');

//countUp js
mix.copy(paths.countupjs + 'countUp.js', destVendors + 'countUp.js/js');

//bower-jquery-easyPieChart
mix.copy(
    paths.jqueryeasypiechart + 'jquery.easypiechart.min.js',
    destVendors + 'bower-jquery-easyPieChart/js'
);
mix.copy(
    paths.jqueryeasypiechart + 'easypiechart.min.js',
    destVendors + 'bower-jquery-easyPieChart/js'
);
mix.copy(srcJs + 'pages/jquery.easingpie.js', destVendors + 'bower-jquery-easyPieChart/js');

//moment
mix.copy(paths.moment + 'min/moment.min.js', destVendors + 'moment/js');

//underscore
mix.copy(paths.underscore + 'underscore-min.js', destVendors + 'underscore/js');

//datepicker
mix.copy(srcJs + 'pages/datepicker.js', destJs + 'pages');

//bootstrap-datetimepicker
mix.copy(
    paths.datetimepicker + 'css/bootstrap-datetimepicker.min.css',
    destVendors + 'datetimepicker/css'
);
mix.copy(
    paths.datetimepicker + 'js/bootstrap-datetimepicker.min.js',
    destVendors + 'datetimepicker/js'
);

//clockface
mix.copy(paths.clockface + 'css/clockface.css', destVendors + 'clockface/css');
mix.copy(paths.clockface + 'js/clockface.js', destVendors + 'clockface/js');

//Buttons
mix.copy(paths.buttons + 'css/buttons.css', destVendors + 'Buttons/css');
mix.copy(paths.buttons + 'showcase/js/scrollto.js', destVendors + 'Buttons/js');
mix.copy(paths.buttons + 'js/buttons.js', destVendors + 'Buttons/js');

//bootstrap color picker
mix.copy(paths.colorpicker + 'css/bootstrap-colorpicker.min.css', destVendors + 'colorpicker/css');
mix.copy(paths.colorpicker + 'js/bootstrap-colorpicker.min.js', destVendors + 'colorpicker/js');
mix.copy(
    paths.colorpicker + 'img/bootstrap-colorpicker',
    destVendors + 'colorpicker/img/bootstrap-colorpicker'
);

//owl-carousel
mix.copy(paths.owlcarousel + 'owl.carousel.css', destVendors + 'owl_carousel/css');
mix.copy(paths.owlcarousel + 'owl.theme.css', destVendors + 'owl_carousel/css');
mix.copy(paths.owlcarousel + 'owl.transitions.css', destVendors + 'owl_carousel/css');
mix.copy(paths.owlcarousel + 'grabbing.png', destVendors + 'owl_carousel/css');
mix.copy(paths.owlcarousel + 'owl.carousel.min.js', destVendors + 'owl_carousel/js');

//advanced modals
// mix.copy(paths.modal + 'css',  destVendors + 'modal/css');
mix.copy(srcCss + 'pages/advmodals.css', destCss + 'pages');
// mix.copy(paths.modal + 'js/',  destVendors + 'modal/js');

// bootstrap tagsinput
mix.copy(paths.tagsinput + 'dist/bootstrap-tagsinput.css', destVendors + 'bootstrap-tagsinput/css');
mix.copy(paths.tagsinput + 'examples/assets/app.css', destVendors + 'bootstrap-tagsinput/css');
mix.copy(paths.tagsinput + 'examples/assets/app_bs3.js', destVendors + 'bootstrap-tagsinput/js');
mix.copy(paths.tagsinput + 'dist/bootstrap-tagsinput.js', destVendors + 'bootstrap-tagsinput/js');

//typeahead
mix.copy(paths.typeaheadjs + 'bloodhound.min.js', destVendors + 'typeahead.js/js');
mix.copy(paths.typeaheadjs + 'typeahead.bundle.min.js', destVendors + 'typeahead.js/js');

mix.copy(srcJs + 'tags_data/cities.json', destJs + 'tags_data');
mix.copy(srcJs + 'tags_data/citynames.json', destJs + 'tags_data');
mix.copy(srcJs + 'pages/Categorizing_tags.js', destJs + 'pages');

//sortable list
mix.copy(srcCss + 'pages/sortable_list.css', destCss + 'pages');
mix.copy(paths.sortablejs + 'Sortable.js', destVendors + 'sortablejs/js');
// mix.copy(paths.sortable + 'st/app.js',  destVendors + 'Sortablejs/js');
mix.copy(srcJs + 'pages/sortable_list.js', destJs + 'pages');

// toastr
mix.copy(paths.toastr + 'build/toastr.css', destVendors + 'toastr/css');
mix.copy(paths.toastr + 'toastr.js', destVendors + 'toastr/js');
mix.copy(srcJs + 'pages/ui-toastr.js', destJs);

//noty
mix.copy(paths.noty + 'lib/noty.css', destVendors + 'noty/css');
mix.copy(paths.noty + 'lib/noty.js', destVendors + 'noty/js');
mix.copy(srcJs + 'pages/jquery.noty.packaged.min.js', destJs + 'pages');

// bootstrap progressbar
mix.copy(
    paths.progressbar + 'css/bootstrap-progressbar-3.3.4.css',
    destVendors + 'bootstrap-progressbar/css'
);
mix.copy(paths.progressbar + 'bootstrap-progressbar.js', destVendors + 'bootstrap-progressbar/js');

// bootstrap touchspin
mix.copy(
    paths.touchspin + 'jquery.bootstrap-touchspin.css',
    destVendors + 'bootstrap-touchspin/css'
);
mix.copy(paths.touchspin + 'jquery.bootstrap-touchspin.js', destVendors + 'bootstrap-touchspin/js');

// bootstrap multiselect
mix.copy(
    paths.multiselect + 'css/bootstrap-multiselect.css',
    destVendors + 'bootstrap-multiselect/css'
);
mix.copy(
    paths.multiselect + 'js/bootstrap-multiselect.js',
    destVendors + 'bootstrap-multiselect/js'
);

// bootstrap switch
mix.copy(
    paths.switch + 'css/bootstrap3/bootstrap-switch.css',
    destVendors + 'bootstrap-switch/css'
);
mix.copy(paths.switch + 'js/bootstrap-switch.js', destVendors + 'bootstrap-switch/js');

// font-awesome
mix.copy(paths.fontawesome + 'css/all.css', 'public/css');
mix.copy(srcJs + 'pages/icons.js', destJs + 'pages');

// jquery-spinner
mix.copy(paths.spinner + 'input-spinner.min.css', destVendors + 'jquery-spinner/css');
mix.copy(paths.spinner + 'input-spinner.min.js', destVendors + 'jquery-spinner/js');

// bootstrap-timepicker
mix.copy(paths.timepicker + 'css/timepicker.less', destVendors + 'bootstrap-timepicker/css');
mix.copy(paths.timepicker + 'js/bootstrap-timepicker.js', destVendors + 'bootstrap-timepicker/js');

// animate
mix.copy(paths.animate + 'animate.min.css', destVendors + 'animate');

// ion.rangeslider
mix.copy(paths.rangeslider + 'css/ion.rangeSlider.css', destVendors + 'ion_rangeslider/css');
mix.copy(paths.rangeslider + 'js/ion.rangeSlider.js', destVendors + 'ion_rangeslider/js');

// seiyria-bootstrap-slider
mix.copy(
    paths.bootstrapSlider + 'css/bootstrap-slider.min.css',
    destVendors + 'bootstrap-slider/css'
);
mix.copy(paths.bootstrapSlider + 'bootstrap-slider.js', destVendors + 'bootstrap-slider/js');

// knob
mix.copy(paths.knob + 'jquery.knob.js', destVendors + 'jquery-knob/js');

//datatables
mix.copy(paths.datatables + 'js/jquery.dataTables.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbs4 + 'js/dataTables.bootstrap4.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbs4 + 'css/dataTables.bootstrap4.css', destVendors + 'datatables/css');
mix.copy(paths.datatablesbutton + 'js/buttons.print.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/dataTables.buttons.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbuttonsbs4 + 'css/buttons.bootstrap4.css', destVendors + 'datatables/css');
mix.copy(paths.datatablesbuttonsbs4 + 'js/buttons.bootstrap4.js', destVendors + 'datatables/js');
mix.copy(paths.datatablescolreorder + 'js/dataTables.colReorder.js', destVendors + 'datatables/js');
mix.copy(
    paths.datatablescolreorderbs4 + 'css/colReorder.bootstrap4.css',
    destVendors + 'datatables/css'
);
mix.copy(paths.datatablesresponsive + 'js/dataTables.responsive.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesrowreorder + 'js/dataTables.rowReorder.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.html5.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.colVis.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesbutton + 'js/buttons.print.min.js', destVendors + 'datatables/js');
mix.copy(
    paths.datatablesrowreorderbs4 + 'css/rowReorder.bootstrap4.css',
    destVendors + 'datatables/css'
);
mix.copy(paths.datatablesscroll + 'js/dataTables.scroller.js', destVendors + 'datatables/js');
mix.copy(paths.datatablesscrollbs4 + 'css/scroller.bootstrap4.css', destVendors + 'datatables/css');
mix.copy(paths.pdfmake + 'pdfmake.js', destVendors + 'datatables/js');
mix.copy(paths.pdfmake + 'vfs_fonts.js', destVendors + 'datatables/js');
mix.copy(paths.jeditable + 'jquery.jeditable.js', destVendors + 'jeditable/js');

//datatables page
mix.copy(srcJs + 'pages/table-advanced.js', destJs + 'pages');
mix.copy(srcCss + 'pages/tables.css', destCss + 'pages');
mix.copy(srcJs + 'pages/table-advanced2.js', destJs + 'pages');
mix.copy(srcJs + 'pages/table-editable.js', destJs + 'pages');
mix.copy(srcJs + 'pages/data.txt', destJs + 'pages');
mix.copy(srcJs + 'pages/table-responsive.js', destJs + 'pages');

//flot charts

mix.copy(paths.flotchart + 'jquery.flot.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.stack.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.crosshair.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.time.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.selection.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.symbol.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.resize.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.categories.js', destVendors + 'flotchart/js');
mix.copy(paths.flotchart + 'jquery.flot.pie.js', destVendors + 'flotchart/js');
mix.copy(paths.flottooltip + 'jquery.flot.tooltip.js', destVendors + 'flot_tooltip/js');
mix.copy(srcCss + 'pages/flot.css', destCss + 'pages');
mix.copy(srcJs + 'pages/customcharts.js', destJs + 'pages');

//animatechart page
mix.copy(paths.animatechart + 'jquery.flot.animator.js', destVendors + 'animatechart/js');

//Chart.js
mix.copy(paths.chartjs + 'Chart.js', destVendors + 'chartjs/js');

// fullcalendar
mix.copy(paths.fullcalendar + 'fullcalendar.css', destVendors + 'fullcalendar/css');
mix.copy(paths.fullcalendar + 'fullcalendar.print.css', destVendors + 'fullcalendar/css');
mix.copy(paths.fullcalendar + 'fullcalendar.min.js', destVendors + 'fullcalendar/js');

// bootstrap-datepicker
mix.copy(paths.datepicker + 'js/bootstrap-datepicker.js', destVendors + 'bootstrap-datepicker/js');
mix.copy(
    paths.datepicker + 'css/bootstrap-datepicker.css',
    destVendors + 'bootstrap-datepicker/css'
);

//bootstrap treeview
mix.copy(srcCss + 'pages/bootstrap-treeview.min.css', destCss + 'pages');
mix.copy(srcCss + 'pages/bootstrap-treeview.css', destCss + 'pages');
mix.copy(srcJs + 'pages/bootstrap-treeview.min.js', destJs + 'pages');

//jstree
mix.copy(paths.jstree + 'themes/default/', destVendors + 'jstree/css');
mix.copy(paths.jstree + 'jstree.min.js', destVendors + 'jstree/js');
mix.copy(srcJs + 'pages/treeview_jstree.js', destJs + 'pages');
mix.copy(srcCss + 'pages/treeview_jstree.css', destCss + 'pages');

// Sweet Alert
mix.copy(paths.sweetalert2 + 'dist/sweetalert2.css', destVendors + 'sweetalert/css');
mix.copy(paths.sweetalert2 + 'dist/sweetalert2.js', destVendors + 'sweetalert/js');

mix.copy(srcJs + 'pages/custom_sweetalert.js', destJs + 'pages');

// gmaps
mix.copy(paths.gmaps + 'examples/examples.css', destVendors + 'gmaps/css');
mix.copy(paths.gmaps + 'gmaps.min.js', destVendors + 'gmaps/js');
mix.copy(srcJs + 'pages/maps_api.js', destJs + 'pages');
mix.copy(srcJs + 'pages/custommaps.js', destJs + 'pages');
mix.copy(srcJs + 'pages/adv_maps.js', destJs + 'pages');

// highcharts
mix.copy(paths.highcharts + 'highcharts.js', destVendors + 'highcharts');

// bower-jvectormap
mix.copy(paths.jvectormap + 'jquery-jvectormap-1.2.2.css', destVendors + 'bower-jvectormap/css');
mix.copy(
    paths.jvectormap + 'jquery-jvectormap-1.2.2.min.js',
    destVendors + 'bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js'
);
mix.copy(
    paths.jvectormap + 'jquery-jvectormap-world-mill-en.js',
    destVendors + 'bower-jvectormap/js/jquery-jvectormap-world-mill-en.js'
);

//jvector map
mix.copy(srcCss + 'pages/jqvmap.css', destCss + 'pages');
mix.copy(paths.jqvmap + 'dist/jquery.vmap.js', destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.world.js', destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.usa.js', destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.europe.js', destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.germany.js', destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.russia.js', destVendors + 'jqvmap/js');
mix.copy(paths.jqvmap + 'examples/js/jquery.vmap.sampledata.js', destVendors + 'jqvmap/js');

//c3 charts
mix.copy(paths.c3 + 'c3.min.css', destVendors + 'c3');
mix.copy(paths.c3 + 'c3.min.js', destVendors + 'c3');
mix.copy(paths.d3 + 'build/d3.min.js', destVendors + 'd3');
mix.copy(paths.d3pie + 'd3pie/d3pie.min.js', destVendors + 'd3pie');
mix.copy(paths.morrisjs + 'morris.css', destVendors + 'morrisjs');
mix.copy(paths.morrisjs + 'morris.min.js', destVendors + 'morrisjs');

// Jcrop
mix.copy(paths.jcrop + 'css/jquery.Jcrop.css', destVendors + 'Jcrop/css');
mix.copy(paths.jcrop + 'css/Jcrop.gif', destVendors + 'Jcrop/css');
mix.copy(srcCss + 'pages/cropcustom.css', destCss + 'pages');
mix.copy(paths.jcrop + 'js/jquery.Jcrop.min.js', destVendors + 'Jcrop/js');
mix.copy(paths.jcrop + 'js/jquery.color.js', destVendors + 'Jcrop/js');
mix.copy(srcJs + 'pages/cropcustom.js', destJs + 'pages');

//jquery input-mask
mix.copy(paths.inputmask, destVendors + 'inputmask');

//bootstrap-maxlength
mix.copy(paths.maxlength + 'bootstrap-maxlength.js', destVendors + 'bootstrap-maxlength/js');

// invoice page
mix.copy(srcCss + 'pages/invoice.css', destCss + 'pages');
mix.copy(srcJs + 'pages/invoice.js', destJs + 'pages');

// 404 page
mix.copy(srcCss + 'pages/404.css', destCss + 'pages');
mix.copy(srcJs + '404.js', destJs);

// 500 page
mix.copy(srcCss + 'pages/500.css', destCss + 'pages');

// login 2 page
mix.copy(srcJs + 'TweenLite.min.js', destJs);
mix.copy(srcJs + 'pages/login.js', destJs + 'pages');
mix.copy(srcJs + 'pages/login2.js', destJs + 'pages');
mix.copy(srcCss + 'pages/login2.css', destCss + 'pages');
mix.copy(srcJs + 'pages/register2.js', destJs + 'pages');

// news page
mix.copy(srcCss + 'pages/news.css', destCss + 'pages');

// news item page
mix.copy(srcCss + 'pages/blog.css', destCss + 'pages');

// tasks page
mix.copy(srcCss + 'pages/todolist.css', destCss + 'pages');
mix.copy(srcCss + 'only_dashboard.css', destCss + 'pages');
mix.copy(srcJs + 'tasklist.js', destJs + 'pages');

// indexpage
mix.copy(srcJs + 'dashboard.js', destJs + 'pages');
mix.copy(srcJs + 'todolist.js', destJs + 'pages');

//compose page
mix.copy(srcJs + 'pages/add_newblog.js', destJs + 'pages');

// inbox page
mix.copy(srcCss + 'pages/alertmessage.css', destCss + 'pages');
mix.copy(srcCss + 'pages/mail_box.css', destCss + 'pages');
mix.copy(srcJs + 'pages/mail_box.js', destJs + 'pages');

// gallery page
mix.copy(srcCss + 'pages/animated-masonry-gallery.css', destCss + 'pages');
mix.copy(srcJs + 'pages/gallery.js', destJs + 'pages');
mix.copy(srcJs + 'pages/jquery.isotope.min.js', destJs + 'pages');
mix.copy(srcJs + 'pages/animated-masonry-gallery.js', destJs + 'pages');

//imgmagnify
mix.copy(paths.magnify + 'css/bootstrap-magnify.css', destVendors + 'bootstrap-magnify');
mix.copy(paths.magnify + 'js/bootstrap-magnify.js', destVendors + 'bootstrap-magnify');

// calendar page
mix.copy(srcCss + 'pages/calendar_custom.css', destCss + 'pages');
mix.copy(srcJs + 'pages/calendar.js', destJs + 'pages');

// pie chart page
mix.copy(srcCss + 'pages/piecharts.css', destCss + 'pages');
mix.copy(srcJs + 'pages/custompiecharts.js', destJs + 'pages');

//animation charts page
mix.copy(srcCss + 'pages/charts.css', destCss + 'pages');
mix.copy(srcCss + 'jquery.circliful.css', destVendors + 'animationcharts');
mix.copy(srcJs + 'jquery.circliful.min.js', destVendors + 'animationcharts');
mix.copy(srcJs + 'pages/animation-chart.js', destJs + 'pages');

// js charts page
mix.copy(srcCss + 'pages/jscharts.css', destCss + 'pages');
mix.copy(srcJs + 'pages/chartjs.js', destJs + 'pages');

// sparkline charts page
mix.copy(srcCss + 'pages/sparklinecharts.css', destCss + 'pages');
mix.copy(srcJs + 'pages/sparkline.js', destJs + 'pages');
mix.copy(srcJs + 'jquery.sparkline.js', destVendors + 'sparklinecharts');
mix.copy(srcJs + 'jquery.flot.spline.js', destVendors + 'splinecharts');

// editable datatables pages
mix.copy(srcCss + 'pages/tables.css', destCss + 'pages');
mix.copy(srcJs + 'pages/table-editable.js', destJs + 'pages');
mix.copy(srcJs + 'pages/table-responsive.js', destJs + 'pages');

// circle sliders (knob) page
mix.copy(srcJs + 'pages/knob_page.js', destJs + 'pages');

// slider page
mix.copy(srcCss + 'pages/ion.css', destCss + 'pages');
mix.copy(srcJs + 'pages/sliders.js', destJs + 'pages');

// transition page
mix.copy(srcCss + 'pages/transitions.css', destCss + 'pages');
mix.copy(srcJs + 'pages/transitions.js', destJs + 'pages');

// pickers page
mix.copy(srcJs + 'pages/pickers.js', destJs + 'pages');

// portlet draggable page
mix.copy(srcCss + 'pages/portlet.css', destCss + 'pages');

// general components page
mix.copy(srcCss + 'pages/alertmessage.css', destCss + 'pages');
mix.copy(srcJs + 'pages/general.js', destJs + 'pages');

// session timeout page
mix.copy(srcCss + 'pages/session_timeout.css', destCss + 'pages');
mix.copy(srcJs + 'jquery.sessionTimeout.min.js', destJs + 'pages');

// notifications page
mix.copy(srcCss + 'pages/fluid.css', destCss + 'pages');
mix.copy(srcCss + 'pages/toastr.css', destCss + 'pages');
mix.copy(srcJs + 'pages/noty_script.js', destJs + 'pages');

// timeline
mix.copy(srcCss + 'pages/timeline.css', destCss + 'pages');
mix.copy(srcCss + 'pages/timeline2.css', destCss + 'pages');

// tagsinputs page
mix.copy(srcCss + 'pages/tagsinput.css', destCss + 'pages');

//toastr page
mix.copy(srcCss + 'pages/toastr.css', destCss + 'pages');

// userprofile page
mix.copy(srcCss + 'pages/user_profile.css', destCss + 'pages');
mix.copy(srcJs + 'pages/user_profile.js', destJs + 'pages');

//adduser page
mix.copy(srcJs + 'pages/adduser.js', destJs + 'pages');
mix.copy(srcJs + 'pages/edituser.js', destJs + 'pages');

// carousel page
mix.copy(srcCss + 'pages/carousel.css', destCss + 'pages');
mix.copy(srcJs + 'carousel.js', destJs + 'pages');

// color-picker page
mix.copy(srcJs + 'pages/color-picker.js', destJs + 'pages');

// x-editable
mix.copy(
    paths.xeditable + 'bootstrap3-editable/css/bootstrap-editable.css',
    destVendors + 'x-editable/css'
);
mix.copy(
    paths.xeditable + 'bootstrap3-editable/js/bootstrap-editable.js',
    destVendors + 'x-editable/js'
);
mix.copy(paths.xeditable + 'bootstrap3-editable/img', destVendors + 'x-editable/img');

mix.copy(
    paths.xeditable + 'inputs-ext/typeaheadjs/lib/typeahead.js',
    destVendors + 'x-editable/js'
);
mix.copy(
    paths.xeditable + 'inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css',
    destVendors + 'x-editable/css'
);
mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/typeaheadjs.js', destVendors + 'x-editable/js');
mix.copy(paths.xeditable + 'inputs-ext/address/address.js', destVendors + 'x-editable/js');

// x-editable page
mix.copy(srcCss + 'x-select.css', destVendors + 'x-editable/css');
mix.copy(srcCss + 'x-selectbootstrap.css', destVendors + 'x-editable/css');
mix.copy(srcCss + 'pages/inlinedit.css', destCss + 'pages');
mix.copy(srcJs + 'demo.js', destJs + 'pages');
mix.copy(srcJs + 'demo-mock.js', destJs + 'pages');

// jquery-mockjax
mix.copy(paths.jquerymockjax + 'jquery.mockjax.js', destVendors + 'jquery-mockjax/js');

// tabs_accordions page
mix.copy(srcCss + 'pages/tab.css', destCss + 'pages');
mix.copy(srcJs + 'pages/tabs_accordions.js', destJs + 'pages');

// buttons page
mix.copy(srcCss + 'pages/buttons.css', destCss + 'pages');
mix.copy(srcJs + 'pages/custom_buttons.js', destJs + 'pages');

//animated icons and font icons page
mix.copy(srcCss + 'pages/icon.css', destCss + 'pages');

// login page
mix.copy(paths.bootstrap + 'css/bootstrap.min.css', destCss);
mix.copy(srcCss + 'pages/login.css', destCss + 'pages');

// form layouts
mix.copy(srcCss + 'pages/form_layouts.css', destCss + 'pages');
mix.copy(srcJs + 'pages/form_layouts.js', destJs + 'pages');

//google maps
mix.copy(srcCss + 'pages/googlemaps_custom.css', destCss + 'pages');

//advanced maps
mix.copy(srcCss + 'pages/advancedmaps_custom.css', destCss + 'pages');

// form elements page
mix.copy(srcCss + 'pages/formelements.css', destCss + 'pages');
mix.copy(srcJs + 'pages/formelements.js', destJs + 'pages');
mix.copy(srcJs + 'pages/autogrow.js', destJs + 'pages');
mix.copy(paths.card + 'lib', destVendors + 'card/lib');
mix.copy(paths.card + 'dist/jquery.card.js', destVendors + 'card/js');

// form validation page
mix.copy(srcCss + 'pages/form2.css', destCss + 'pages');
mix.copy(srcCss + 'pages/form3.css', destCss + 'pages');
mix.copy(srcJs + 'pages/validation.js', destJs + 'pages');
mix.copy(paths.intltelinput + 'build', destVendors + 'intl-tel-input/');

// form editor page
mix.copy(srcCss + 'pages/editor.css', destCss + 'pages');
mix.copy(srcJs + 'pages/editor.js', destJs + 'pages');

// form editor2 page
mix.copy(srcJs + 'pages/editor2.js', destJs + 'pages');

// image magnifier page css
mix.copy(srcCss + 'pages/image_magnifier.css', destCss + 'pages');

// form builder2 page
mix.copy(srcCss + 'pages/formbuilder1.css', destCss + 'pages');
mix.copy(srcJs + 'pages/form_builder2.js', destJs + 'pages');

//button builder page
mix.copy(srcCss + 'pages/buttonbuilder2.css', destCss + 'pages');
mix.copy(srcJs + 'pages/buttonbuilder.js', destJs + 'pages');
mix.copy(srcJs + 'pages/scripts.min.js', destJs + 'pages');

// page builder
mix.copy(srcCss + 'pages/grid_manager.css', destCss + 'pages');
mix.copy(srcJs + 'pages/grid_manager.js', destJs + 'pages');

//nestable list page
mix.copy(srcCss + 'pages/sortable.css', destCss + 'pages');
mix.copy(paths.html5sortable + 'html.sortable.js', destVendors + 'html5sortable/js');
mix.copy(paths.nestablelist + 'jquery.nestable.js', destVendors + 'nestable-list/js');
mix.copy(srcJs + 'pages/ui-nestable.js', destJs + 'pages');
//sifter
mix.copy(paths.sifter + 'sifter.js', destVendors + 'sifter/sifter.js');

// micrplugin
mix.copy(paths.microplugin + 'microplugin.js', destVendors + 'microplugin/microplugin.js');

//form wizard page
mix.copy(srcCss + 'pages/wizard.css', destCss + 'pages');
mix.copy(srcJs + 'pages/form_wizard.js', destJs + 'pages');
mix.copy(paths.twtrBootstrapWizard + 'jquery.bootstrap.wizard.js', destVendors + 'bootstrapwizard');
mix.copy(srcJs + 'pages/form_wizard.js', destJs + 'pages');

//accordianform wizard page
mix.copy(srcCss + 'pages/accordionformwizard.css', destCss + 'pages');
mix.copy(srcJs + 'pages/accordionformwizard.js', destJs + 'pages');
mix.copy(paths.accwizard + 'acc-wizard.min.css', destVendors + 'acc-wizard');
mix.copy(paths.accwizard + 'acc-wizard.min.js', destVendors + 'acc-wizard');

// selectize
mix.copy(paths.selectize + '/css/selectize.css', destVendors + 'selectize/css');
mix.copy(paths.selectize + '/css/selectize.bootstrap3.css', destVendors + 'selectize/css');
mix.copy(paths.selectize + '/js/selectize.js', destVendors + 'selectize/js');
mix.copy(paths.selectize + '/js/selectize.min.js', destVendors + 'selectize/js');
mix.copy(srcJs + 'pages/custom_elements.js', destJs + 'pages');
mix.copy(srcJs + 'pages/radio_checkbox.js', destJs + 'pages');

// lockscreen builder
mix.sass(srcSass + 'pages/lockscreen.scss', destCss + 'pages');
mix.copy(srcJs + 'lockscreen.js', destJs + 'pages');

// default layout page

mix.copy(srcJs + 'livicons-1.4.min.js', destJs);
mix.copy(srcJs + 'josh.js', destJs);
mix.copy(paths.raphael + 'raphael.min.js', destJs);
mix.copy(paths.holderjs + 'holder.js', destJs);
mix.copy(paths.holderjs + 'holder.min.js', destJs);

//form builder2
mix.copy(srcCss + 'pages/form_builder2.css', destCss + 'pages');
mix.copy(paths.formBuilder + 'beautify-html.js', destVendors + 'form-builder/js');
mix.copy(paths.formBuilder + 'beautify-css.js', destVendors + 'form-builder/js');
mix.copy(paths.formBuilder + 'beautify.js', destVendors + 'form-builder/js');

mix.copy(srcCss + 'pages/pickers.css', destCss + 'pages');

//jtable
mix.copy(paths.jTable + 'jquery.jtable.js', destVendors + 'jtable/js');
mix.copy(
    paths.jTable + 'lib/themes/metro/blue/jtable.css',
    destVendors + 'jtable/themes/metro/blue/'
);
// mix.copy(resourcesAssets + 'img/edit.png',  destVendors + 'jtable/themes/metro/');
// mix.copy(resourcesAssets + 'img/delete.png',  destVendors + 'jtable/themes/metro/');
mix.copy(paths.jTable + 'lib/themes/metro/add.png', destVendors + 'jtable/themes/metro/');
mix.copy(paths.jTable + 'lib/themes/metro/column-asc.png', destVendors + 'jtable/themes/metro/');
mix.copy(paths.jTable + 'lib/themes/metro/column-desc.png', destVendors + 'jtable/themes/metro/');
mix.copy(
    paths.jTable + 'lib/themes/metro/column-sortable.png',
    destVendors + 'jtable/themes/metro/'
);
mix.copy(
    paths.jTable + 'lib/themes/metro/blue/loading.gif',
    destVendors + 'jtable/themes/metro/blue/'
);
mix.copy(srcCss + 'pages/jtable.css', destCss + 'pages');
mix.copy(srcCss + 'pages/jtablemetroblue_jquery-ui.css', destCss + 'pages');

// Custom Styles
// wow
mix.copy(paths.wow + 'wow.min.js', destVendors + 'wow/js');
// Custom Styles

//products page
mix.copy(srcCss + 'pages/log_viewer.css', destCss + 'pages');

//jquery-ui

//products page
mix.copy(srcJs + 'pages/jquery-ui.min.js', destJs + 'pages');

//x-editable
mix.copy(srcJs + 'pages/xeditable-bs4.js', destJs + 'pages');

//dymanic dashboard
mix.copy(srcCss + 'pages/dashboard2.css', destCss + 'pages');

//minisidebar
mix.copy(srcCss + 'pages/minisidebar.css', destCss + 'pages');

// Fixed menu layout
mix.copy(srcCss + 'pages/fixedmenu.css', destCss + 'pages');
//news-ticker
mix.copy(paths.jquery_newsTicker + 'jquery.newsTicker.js', destVendors + 'jquery_newsTicker/js/');

// /* bootstrap4 conversion css*/
mix.copy(srcCss + 'custom.css', destCss + 'custom.css');

//slim menu
mix.copy(paths.slimmenu + 'css/slimmenu.min.css', destVendors + 'slimmenu/css/');
mix.copy(paths.slimmenu + 'js/jquery.slimmenu.min.js', destVendors + 'slimmenu/js/');
mix.copy(srcCss + 'horizontal_menu.css', destCss + 'horizontal_menu.css');

//buttons css
mix.sass(srcSass + 'plugins/buttons/buttons.scss', destCss);
mix.sass(resourcesAssets + 'sass/bootstrap.scss', destCss + 'bootstrap.css');

//awesome-bootstra-checkboxes
mix.sass(
    srcSass + 'plugins/awesome-bootstrap-checkbox.scss',
    destCss + 'plugins/awesome-bootstrap-checkbox.css'
);

//css section
// Custom Styles
//black color scheme
mix.combine(
    [
        destCss + 'bootstrap.css',
        paths.fontawesome + 'css/all.min.css',
        paths.bootstrapValidator + 'css/bootstrapValidator.min.css',
        srcCss + 'styles/black.css',
        srcCss + 'metisMenu.css',
        srcCss + 'custom.css',
        srcCss + 'pages/custom.css',

        // srcCss + 'pages/fixedmenu.css'
    ],
    destCss + 'app.css'
);

//white color scheme
mix.combine(
    [
        /*replace "black.css" with "white.css" to apply white theme for template*/
        // srcCss + 'bootstrap.min.css',
        destCss + 'bootstrap.css',
        paths.fontawesome + 'css/all.min.css',
        paths.bootstrapValidator + 'css/bootstrapValidator.min.css',
        srcCss + 'styles/white.css',
        srcCss + 'metisMenu.css',
        srcCss + 'custom.css',
        srcCss + 'pages/custom.css',
    ],
    destCss + 'app_white.css'
);



// all global js files into app.js
mix.combine(
    [
        paths.jquery + 'jquery.min.js',
        paths.popperjs + 'popper.min.js',
        paths.bootstrap + 'js/bootstrap.min.js',
        vendors + 'raphael/raphael.min.js',
        srcJs + 'livicons-1.4.min.js',
        srcJs + 'metisMenu.js',
        srcJs + 'josh.js',
        srcJs + 'pages/minisidebar.js',
        srcJs + 'jquery-slimscroll.js',
        vendors + 'holderjs/holder.min.js',
        paths.bootstrapValidator + 'js/bootstrapValidator.min.js',
    ],
    destJs + 'admin.js'
);
