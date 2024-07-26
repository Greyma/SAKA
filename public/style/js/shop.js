(function ($) {
    $('input[name="search-shop"]').on('input', function() {
        var searchValue = $(this).val();
        var newSlides = '';

        if (searchValue !== '') {
            newSlides = `
                <div class="list border-bottom">
                    <div class="d-flex flex-column ml-3">
                        <span>Client communication policy</span>
                        <small>#politics - may - @max</small>
                    </div>
                </div>
                <div class="list border-bottom">
                    <div class="d-flex flex-column ml-3">
                        <span>Major activity done</span>
                        <small>#news - nov - @settings</small>
                    </div>
                </div>
                <div class="list border-bottom">
                    <div class="d-flex flex-column ml-3">
                        <span>Calling to USA Clients</span>
                        <small>#entertainment - dec - @tunes</small>
                    </div>
                </div>
                <div class="list">
                    <div class="d-flex flex-column ml-3">
                        <span>Client communication policy</span>
                        <small>#politics - may - @max</small>
                    </div>
                </div>
            `;
        }

        $('.addsearch').html(newSlides);
    });

     function respensive(){
        $(".row").removeClass("row-cols-4")
        $(".row").removeClass("row-cols-2")
        $(".row").removeClass("row-cols-3")
        if ($(window).width() < 1500) {

            if($(window).width() > 1000){
                $(".row").addClass("row-cols-3");
            }else{
                $(".row").addClass("row-cols-2");
            }

        } else {
            $(".row").addClass("row-cols-4");
        } 
    }

    respensive();

    $(window).resize(function() {
        respensive();
    });

    $(".text-overlay").on("mouseenter",function(){
        $(this).html("Si Dah Dah");
    }).on("mouseleave",function(){        
        $(this).html("Discovery set Nomade");
    });


})(jQuery);
