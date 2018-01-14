jQuery(document).ready(function() {
    jQuery('.ksm-categories a, .ksm-categories .caret').on('click', function(e) {

        var li = jQuery(this).parent('li');
        var a = li.children('a');
        var level = a.attr('level');
        var next_level = eval(level) + 1;
        var next_level = li.find('.menu-list-' + next_level);

        console.log(li);
        console.log(a);
        console.log(e.target);

        if ((!next_level.is('.hide') || next_level.find('li').length == 0) && !jQuery(e.target).hasClass('caret'))
            return true;

        if (!li.hasClass('colapsed')) {
            jQuery('.ksm-categories .menu-list-' + level + ' ul').slideUp(400, function() {
                jQuery(this).addClass('hide');
                jQuery(this).parents('li').removeClass('colapsed');
            });
            next_level.slideDown(400, function() {
                jQuery(this).removeClass('hide');
                jQuery(this).parents('li').addClass('colapsed');
            });
        } else {
            next_level.slideUp(400, function() {
                jQuery(this).addClass('hide');
                jQuery(this).parents('li').removeClass('colapsed');
            });
        }
        return false;
    });
});