<script>
    function CountChars(e, t, a, s, o, n) {
        var u = s.val().replace(/{.*}/g, "").length;
        o.text(u), 0 !== u && $(e + "MSG").removeClass("_hide"),
        "paste" === n || (u > a ? ($(e + "MSG").addClass("_green"),
            $(e + "Tip").text("")) : u < a && ($(e + "MSG").removeClass("_green"),
            $(e + "Tip").text(u + " {{ __('google_seo.letter_min_tip') }} " + a + " {{__('google_seo.letter')}} ")).addClass("_red"),
            u > t ? ($(e + "MSG").addClass("_red"), $(e + "Tip").text(" {{ __('google_seo.letter_max_tip') }} " + t + " {{__('google_seo.letter')}} "))
                : u < t && $(e + "MSG").removeClass("_red"))
    }
    $(document).ready(function() {
        var  minT = $('#minT').val();
        var  maxT = $('#maxT').val();
        var  minD = $('#minD').val();
        var  maxD = $('#maxD').val();

        var e = $("#g_title_ar"), t = $("#Count_g_title_ar");
        CountChars("#g_title_ar", maxT, minT, e, t, "");
        e.keyup(function() {
            CountChars("#g_title_ar", maxT, minT, e, t, "")
        }).mouseout(function() {
            CountChars("#g_title_ar", maxT, minT, e, t, "")
        });

        var f = $("#g_title_en"), g = $("#Count_g_title_en");
        CountChars("#g_title_en", maxT, minT, f, g, "");
        f.keyup(function() {
            CountChars("#g_title_en", maxT, minT, f, g, "")
        }).mouseout(function() {
            CountChars("#g_title_en", maxT, minT, f, g, "")
        });

        var a = $("#g_des_ar") , s = $("#Count_g_des_ar");
        CountChars("#g_des_ar", maxD, minD, a, s, "");
        a.keyup(function() {
            CountChars("#g_des_ar", maxD, minD, a, s, "")
        }).mouseout(function() {
            CountChars("#g_des_ar", maxD, minD, a, s, "")
        });


        var z = $("#g_des_en") , w = $("#Count_g_des_en");
        CountChars("#g_des_en", maxD, minD, z, w, "");
        z.keyup(function() {
            CountChars("#g_des_en", maxD, minD, z, w, "")
        }).mouseout(function() {
            CountChars("#g_des_en", maxD, minD, z, w, "")
        });


        // var a = $("#Desc") , s = $("#DescCount");
        // CountChars("#desc", maxD, minD, a, s, "");
        // a.keyup(function() {
        //     CountChars("#desc", maxD, minD, a, s, "")
        // }).mouseout(function() {
        //     CountChars("#desc", maxD, minD, a, s, "")
        // });



    });

    $(document).ready(function(){
        // $("#Title").keyup(function(){
        //     var currentText = $(this).val();
        //     $(".google_title").text(currentText);
        // });
        //
        // $("#Desc").keyup(function(){
        //     var currentTextDes = $(this).val();
        //     $(".google_des").text(currentTextDes);
        // });

        // $("#Slug").keyup(function(){
        //     var currentTextDes = $(this).val();
        //     var getThisRoute =  $('#thisRoute').val();
        //     var newTextUrl = getThisRoute+currentTextDes;
        //     let str = newTextUrl;
        //     let output = str.replace(/\s+/g, '-').toLowerCase();
        //     $(".google_url").text(output);
        // });

    });
</script>
