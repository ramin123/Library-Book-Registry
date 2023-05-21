/**
 * Created by user on 29/7/16.
 */
// add this function to initialize
var useOnComplete = false,
    useEasing = false,
    useGrouping = false,
    options = {
        useEasing: useEasing, // toggle easing
        useGrouping: useGrouping, // 1,000,000 vs 1000000
        separator: ',', // character to use as a separator
        decimal: '.', // character to use as a decimal
    };

var demo = new CountUp('count1', 12.52, 9500, 0, 6, options);
demo.start();
var demo = new CountUp('count2', 1, 9000, 0, 6, options);
demo.start();
var demo = new CountUp('count3', 24.02, 50000, 0, 6, options);
demo.start();
var demo = new CountUp('count4', 1254, 8000, 0, 6, options);
demo.start();
var demo = new CountUp('count5', 1254, 5000, 0, 6, options);
demo.start();
var demo = new CountUp('count6', 1254, 6000, 0, 6, options);
demo.start();

var my_posts = $('[rel=tooltip]');

var size = $(window).width();
for (i = 0; i < my_posts.length; i++) {
    the_post = $(my_posts[i]);

    if (the_post.hasClass('invert') && size >= 767) {
        the_post.tooltip({
            placement: 'left',
        });
        the_post.css('cursor', 'pointer');
    } else {
        the_post.tooltip({
            placement: 'right',
        });
        the_post.css('cursor', 'pointer');
    }
}
