$(document).ready(function() {
    $(function() { 
        var header = $(".clearHeader");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) { 
                header.removeClass('clearHeader').addClass("darkHeader");
            } else {
                header.removeClass("darkHeader").addClass('clearHeader');
            }
        });
    });
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open'); 
    }),  
    $(".menu ul li a").click(function() {
        $('#toggle').toggleClass('active');
        $('#overlay').toggleClass('open');    
    }),
    $('.menu ul li a[href^="#"]').on("click", function(e) {
        e.preventDefault();
        var t = this.hash,
            n = $(t);
        $("html, body").stop().animate({
            scrollTop: n.offset().top - 63
        }, 500, "swing", function() {}) 
    }),
    function(e) {
        e.fn.loadScroll = function(t) {
            var n, i, o = e(window),
                r = this;
            r.one("loadScroll", function() {
                if (this.getAttribute("data-src")) {
                    if (this.setAttribute("src", this.getAttribute("data-src")), this.removeAttribute("data-src"), !t) return !1;
                    e(this).hide().fadeIn(t).add("img").removeAttr("style")
                }
            }), o.scroll(function() {
                n = r.filter(function() {
                    var t = o.scrollTop(),
                        n = o.height(),
                        i = e(this).offset().top;
                    return i + e(this).height() >= t && i <= t + n
                }), i = n.trigger("loadScroll"), r = r.not(i)
            })
        }
    }(jQuery), $(function() {
        $("img").loadScroll(500)
    })
});
$(document).ready(function () {
    $('.toggle').click(function () {
        $('.sidebar-contact').toggleClass('active')
        $('.toggle').toggleClass('active')
    })
})


