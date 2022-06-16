$( document ).ready(function() {


    var rhtht = $('.order-chart').height();
    $('.order-info').css("min-height", rhtht);

    $(".mobilenav-bar").on("click", function(){
	    $('.mobile-menu').toggleClass('active');
	    $('.main-cont').toggleClass('slided_body');
	});

	$(".show-more-clk").on("click", function(){
		$(this).toggleClass('fa-angle-up');
		$(this).toggleClass('fa-angle-down');
	    $('.show-more').toggleClass('active');
	});

    $(".close-pop").on("click", function(){
        $(this).parents('body').find('.popup, .overlay').fadeOut();
    });

    $(".fgt-pass").on("click", function(){
        $(this).parents('.login-func').find('.hide-login').hide();
        $(this).parents('.login-func').find('.show-fg').fadeIn();
    });

    $(".fgt-pass-login").on("click", function(){
        $(this).parents('.login-func').find('.show-fg').hide();
        $(this).parents('.login-func').find('.hide-login').fadeIn();
    });




     cCheckbox('.addCheckbox');

     cSelect('.addSelect');

     xfilebrowse('.addFile');

     xRadio('.cRadio');

     if($('.editor').lenght)
     {
         tinymce.init({
             selector: '.editor',
             plugins: "emoticons"
         });
     }

    $(".tabs a").on("click", function(){
        var tabc = $(this).data('tabc');
        $('.tabs a').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();
        $('.'+tabc).fadeIn();
    });

    $(".tabs-comm a").on("click", function(){
        var tabcs = $(this).data('tabcomm');
        $('.tabs-comm a').removeClass('active');
        $(this).addClass('active');
        $('.tab-contents').hide();
        $('.'+tabcs).fadeIn();
    });

    $(".all-members-list ul li .rft .options, .my-topics-pg .main-content .cat-topics .topic-thread ul li .c-lft .more-actions").on("click", function(){
        $('.extra-opt').hide();
        $(this).next().fadeIn();
    });



});

$(document).mouseup(function(e)
{
    var container = $(".extra-opt");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.fadeOut();
    }
});

// $(window).on("load",function(){
//     $("#scr-content, .scrl-cont").mCustomScrollbar({
//         theme:"minimal"
//     });
// });

function cCheckbox(tgt){
    $(tgt+' input[type=checkbox]').each(function(){
        if(!$(this).parent().hasClass('cCheckbox')){
                $(this).fadeTo(0,0).wrap('<div class="cCheckbox" style="position:relative;" />');
                $(this).css({'position':'absolute','width':'100%','height':'100%','left':'0','top':'0','z-index':'10', 'cursor':'pointer'});
                if($(this).is(':checked')){$(this).parent().addClass('checked');}
                $(this).on('change',function(){
                if($(this).is(':checked')){
                    $(this).parent().addClass('checked');
                } else {
                    $(this).parent().removeClass('checked');
                }
            });
        }
    });
}

function cSelect(tgt) {
    $(tgt + ' select').each(function() {
        var $this = $(this),
            val = $this.children('option:first-child').text();
        if (!$this.parent().hasClass('cSelect')) {
            $this.wrap('<div class="cSelect" style="position:relative;" />');
            $this.parent().append('<p>' + val + '</p>');
            $this.css({
                'position': 'absolute',
                'top': '0px',
                'left': '0px',
                'width': '100%',
                'height': '100%',
                'z-index': '10',
                'opacity': 0
            });
            $this.on('change', function() {
                val = $(this).val();
                $(this).parent().children('p').text(val);
                $(this).blur();
            });
            $(this).focus(function() {
                $(this).parent().addClass('drop');
            }).blur(function() {
                $(this).parent().removeClass('drop');
            });
        }
    });
}


function xfilebrowse(tgt){
    $(tgt+' input[type=file]').each(function() {
        $(this).wrap('<div class="upldwrap" />');
        $(this).parent().append('<input type="text" value="No File Selected" /> <input type="button" class="primary-btn blue" value="Upload File" />');
        $(this).css('opacity', 0);
        $(this).on('change', function() {
            var txt = $(this).val();
            txt = txt.replace(/\\/g, '/').replace(/.*\//, '');
            $(this).siblings('input[type=text]').val(txt);
        })
    });
}

function xRadio(tgt) {
    $(tgt + ' input:radio').each(function(e) {
        if (!$(this).parent().hasClass('xRadio')) {
            $(this).fadeTo(0, 0).wrap('<div class="xRadio" style="position:relative;" />');
            $(this).css({
                'position': 'absolute',
                'width': '100%',
                'height': '100%',
                'left': '0',
                'top': '0',
                'z-index': '10'
            });
            if ($(this).is(':checked')) {
                $(this).parent().addClass('checked');
            }
            $(this).on('change', function() {
                var nam = $(this).attr('name');
                if ($(this).is(':checked')) {
                    $('input:radio[name="' + nam + '"]').parent(".xRadio").removeClass('checked');
                    $(this).parent().addClass('checked');
                }
            });
            $(this).parent().next('label').on('click', function() {
                $(this).prev().find('input:radio').trigger('click');
            });
        }
    });
}

function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});


$(".notification").click(function(){
    $("#notify-dp").fadeToggle();
});

$(".messages").click(function(){
    $("#message-dp").fadeToggle();
});

$(".after-logged-info").click(function(){
    $(".account-dropdown").fadeToggle();
});

$(".header .cart").click(function(){
    $(".cart-dropdown").fadeToggle();
});

$(document).on("click", function(event){
    var $trigger = $(".notification");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $("#notify-dp").fadeOut();
    }            
});
$(document).on("click", function(event){
    var $trigger = $(".header .cart");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".cart-dropdown").fadeOut();
    }            
});
$(document).on("click", function(event){
    var $trigger = $(".messages");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $("#message-dp").fadeOut();
    }            
});
$(document).on("click", function(event){
    var $trigger = $(".after-logged-info");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".account-dropdown").fadeOut();
    }            
});







function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});