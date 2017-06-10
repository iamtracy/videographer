jQuery(document).ready(function($) {
    var theater = $('#theater');

    $('.card').click(function() {
        var url = $(this).data('getframe');
        var id = $(this).data('id');
        var iframe = $('.' + id);
        if (url.indexOf('youtube') > -1) {
            var youtube = 'https://www.youtube.com/embed/';
            var youtubeId = url.split('v=')[1];
            theater.attr('src', youtube + youtubeId + '?autoplay=1');
        } else {
            var vimeo = 'https://player.vimeo.com/video/';
            var vimeoId = url.replace(/^.+\/([^\/]*)$/, '$1');
            theater.attr('src', vimeo + vimeoId + '?autoplay=1');
        }
    });

});