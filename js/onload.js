"use strict";

class Slide {
    
    constructor (title, inf, href, linkTitle) {
        this.title = title;
        this.inf = inf;
        this.href = href;
        this.linkTitle = linkTitle;
    }
}

var slides = [
    new Slide(
        "Сайт купли-продажи недвижимости",
        "Сайт с каталогом продающегося недвижимого имущества на любой вкус.",
        "#",
        "site1.ru"
    ),
    new Slide(
        "Юридическая фирма AvanGuard",
        "Сибирская юридическая фирма, занимающаяся правовой стороной бизнеса по различным направлениям.",
        "http://businessserv.ru",
        "businessserv.ru"
    ),
    new Slide(
        "Такси CabHub",
        "Лучшая фирма такси города Новосибирска.",
        "#",
        "cabhub.ru"
    ),
    new Slide(
        "Онлайн-казино Golden Chance",
        "Сайт казино с выгодными предложениями и  большими выиграшами.",
        "#",
        "goldenchance.com"
    ),
    new Slide(
        "Сайт туристического агенства",
        "Туристическое агенство предоставляющая возможность посетить многие государства Европы, Азии и частично Африки.",
        "#",
        "site5.ru"
    ),
    new Slide(
        "Сайт медицинской клиники",
        "Частная медицинская клиника, предоставляющая широкий спектр лечебных услуг.",
        "#",
        "site6.ru"
    ),
    new Slide(
        "Photographer",
        "Сайт-визитка профессионального фотографа из Новосибирска.",
        "#",
        "site7.ru"
    )
];

class Gallery {
    
    constructor () {
        this.currImgNum = 0;
        this.prevImgNum = -1;
        this.direction = "toLeft"; // движение картинки по слайду
        this.interval = null;
        this.setNextSlide(null);
        this.startTimer();
    }
    
    startTimer() {
        var thisClass = this;
        this.interval = setInterval(
            function(){
                thisClass.setNextSlide(null);
            }, 10000
        );
    }
    
    setNextSlide(num) {
        this.prevImgNum = this.currImgNum;
        if (num !== null) {
            this.currImgNum = num;
        }
        else {
            this.currImgNum += 1;
        }
        
        if (this.currImgNum > this.prevImgNum) { 
            this.direction = "toLeft";
            if (this.currImgNum === 8) {
                this.currImgNum = 1;
                this.direction = "toLeft";
            }
        }
        else {
            this.direction = "toRight";
        }
        
        this.setNextImage();
        this.disableCurrIcon();
    }
    
    disableCurrIcon () {
        $("#selectBar a").removeClass("disabled");
        $("#selectBar a:nth-of-type(" + (this.currImgNum + 1) + ")").addClass("disabled");
    }
    
    setNextImage () {
        var thisClass = this;
        
        $("#galleryWrapper").css("backgroundImage", "url(images/forGallery/" + thisClass.prevImgNum + ".jpg)");
        $("#gallerySubLayer").css("opacity","0");
        $("#gallerySubLayer").css("backgroundImage","url(images/forGallery/" + thisClass.currImgNum + ".jpg)");
        $("#gallerySubLayer").animate(
            {opacity:"1"},
           750
        );
        $.when(
            $("#gallery img").animate(
                    {opacity:"0"},
                    150
            ),
            $("#infInGallery").animate(
                {opacity:"0"},
                150
            )
        ).then(
            function () {
                $("#infInGallery a").attr("title", "");
                $("#infInGallery a").css("pointer-events", "auto");
                $("#infInGallery a").css("text-decoration", "underline");
                   $("#infInGallery a").css("color", "#8BCB47");
                $("#gallery img").attr("src", "images/maketsForGallery/" + thisClass.currImgNum + ".png");
                $("#infInGallery label").text( slides[ thisClass.currImgNum - 1 ].title );
                $("#infInGallery p").text( slides[ thisClass.currImgNum - 1 ].inf );
                $("#infInGallery a").attr("href", slides[ thisClass.currImgNum - 1 ].href);
              
                $("#infInGallery a").text(slides[ thisClass.currImgNum - 1 ].linkTitle);
                if (slides[ thisClass.currImgNum - 1 ].href === "#") {
                   $("#infInGallery a").text("сайт в разработке");
                   $("#infInGallery a").css("color", "#FFAE00");
                   $("#infInGallery a").css("text-decoration", "none");
                   $("#infInGallery a").css("pointer-events", "none");
                }
                
                if (thisClass.direction === "toLeft") {
                    $("#gallery img").css("right", "-1000px");
                    $("#infInGallery").css("right", "-1274px");
                }
                else {
                    $("#gallery img").css("right", "2031px");
                    $("#infInGallery").css("right", "1784px");
                }
                $(".currentSlide").css("left", (thisClass.currImgNum - 1) * 140 + "px");
            }
        ).then(
            function () {
                if (thisClass.direction === "toLeft") {
                    $("#gallery img").animate({right:"397px"}, 300);
                    $("#infInGallery").animate({right:"-1274"}, 150);
                    $("#infInGallery").animate({right:"93px"}, 300);
                }
                else {
                    $("#gallery img").animate({right:"397px"}, 300);
                    $("#infInGallery").animate({right:"1784px"}, 150);
                    $("#infInGallery").animate({right:"93px"}, 300);
                }
                $("#gallery img").css("opacity", "1");
                $("#infInGallery").css("opacity", "1");
            }
        );
    }
    
    subForClick(num) {
        if (num !== this.currImgNum) {
            this.setNextSlide(num);
            clearInterval(this.interval);
            this.startTimer();
        }
    }
    
}

function showRequestBlock() {
    $("#requestWrapper").css("display", "block");
    $("#requestWrapper").css("opacity", "0");
    $("#requestDiv").css("display", "block");
    $("#requestWrapper").css("background", "rgba(0,0,0,0.8)");
    $("#requestDiv").css("opacity", "0");
    $.when(
            $("#requestWrapper").animate(
                {"opacity":"1"}, 100
            )
    ).then(
        function () {
            $("#requestDiv").animate( 
                {"opacity":"0"}, 200
            );
    
        }
    ).then(
        function () {
            $("#requestDiv").animate( 
                {"opacity":"1"}, 200
            );
        }
    );
}

function hideRequestBlock() {
    $.when(
        $("#requestDiv").animate( 
            {"opacity":"0"}, 200
        )
    ).then(
        function () {
            $("#requestDiv").css("display", "none");
            $("#requestWrapper").animate( 
                {"opacity":"0"}, 200
            );
        }    
    ).then(
        function () {
            $("#requestWrapper").css("display", "none");
        }    
    );
}

/*function scrollToSection (linkNum, sectionName = "$top$") {
    var scroll;
    if (sectionName === "$top$") { scroll = 0; }
    scroll = $(sectionName).offset().top-43; 
    
    $("#navi a:nth-of-type(" + linkNum + ")").click(
        function () {
            $("html").animate(
                {
                    scrollTop: scroll
                }, 
                Math.abs(($(window).scrollTop()-(scroll))/1)*1.5
            );
        }
    );
}*/

class ValidForm {
    
    constructor () { }
    
    static displayMessage (text, color) {
                        
        $("#error").html(text);
        $("#error").css("display", "block");
        $("#error").css("color", color);
        
    }
    static hideMessage () {
        $("#error").css("display", "none");
    }  

    static formValid () {
        var res = true;
        
        this.hideMessage();
        
        var userName = document.querySelector("input[name='userName']");
        var userEmail = document.querySelector("input[name='userEmail']");
        var userTel = document.querySelector("input[name='userTel']");
        var userMessage = document.querySelector("textarea[name='userMessage']");
        
        if(userName.value==="" || userEmail.value==="" || userTel.value==="" || userMessage.value==="") 
        {
            if (userName.value === "") { userName.style.outline = "1px solid red"; }
            if (userEmail.value === "") { userEmail.style.outline = "1px solid red"; }
            if (userTel.value === "") { userTel.style.outline = "1px solid red"; }
            if (userMessage.value === "") { userMessage.style.outline = "1px solid red"; }
            this.displayMessage("Не все поля заполнены", "red");
            res = false;
        }
        
        return res;
    }
    static sendApply() {
        var thisClass = this;
        jQuery.ajax({
            url: "send",
            type: "POST",
            dataType: "html",
            data: jQuery("#requestForm").serialize(),  // Сеарилизуем объект
            success: 
                function(response) { 
                    thisClass.displayMessage("Заявка успешно отправлена", "#8BCB47");
                    $("#requestForm").css("display", "none");
                    $("#requestDiv p:first-of-type").css("display", "none"); 
                },
            error:
                function(response) { 
                    thisClass.displayMessage("Ошибка при отправке", "red");
                    $("#requestForm").css("display", "none");
                    $("#requestDiv p:first-of-type").css("display", "none");
                }
        });
    }
}

$(document).ready(function(){
    
    var myGallery = new Gallery();
    
    $("#selectBar a:nth-of-type(2)").click( function () { myGallery.subForClick(1); } );
    $("#selectBar a:nth-of-type(3)").click( function () { myGallery.subForClick(2); } );
    $("#selectBar a:nth-of-type(4)").click( function () { myGallery.subForClick(3); } );
    $("#selectBar a:nth-of-type(5)").click( function () { myGallery.subForClick(4); } );
    $("#selectBar a:nth-of-type(6)").click( function () { myGallery.subForClick(5); } );
    $("#selectBar a:nth-of-type(7)").click( function () { myGallery.subForClick(6); } );
    $("#selectBar a:nth-of-type(8)").click( function () { myGallery.subForClick(7); } );
    
    $("#infInHeader a").click( function () { showRequestBlock(); } );
    $("#aboutPackages p a").click( function () { showRequestBlock(); } );
                
    $("#requestWrapper").click( function () { hideRequestBlock(); } );
    $("#requestDiv img").click( function () { hideRequestBlock(); } );
    
    var $menu = $("#subNav");
    var from = "";
            
    if($(window).scrollTop()>=377) {
        $menu.css("top", "0");
        from = "bottom";
    }  
    else if($(window).scrollTop()<377) {
        $menu.css("top", "-43px");
        from = "top";
    }

    $(window).scroll(function() {
        if($(window).scrollTop()>=377) {
            if (from === "top") {
                from = "bottom";
                $menu.animate(
                    {
                        top: "0"
                    }, 200
                );
            }
        }  
        else if($(window).scrollTop()<377) {
            if (from === "bottom") {
                from = "top";
                $menu.animate(
                    {
                        top: "-45px"
                    }, 200
                );
            }
        }
    });

    $("#requestDiv form input[name='userName']").focus(
        function () {
            $("#requestDiv form input[name='userName']").css("outline", "none");
        }
    );
    $("#requestDiv form input[name='userTel']").focus(
        function () {
            $("#requestDiv form input[name='userTel']").css("outline", "none");
        }
    ); 
    $("#requestDiv form input[name='userEmail']").focus(
        function () {
            $("#requestDiv form input[name='userEmail']").css("outline", "none");
        }
    ); 
    $("#requestDiv form textarea").focus(
        function () {
            $("#requestDiv form textarea").css("outline", "none");
        }
    );            
    $('#btn').click(
        function () {
                setTimeout(
                    function () {
                        if (ValidForm.formValid() === true) {
                            ValidForm.sendApply();
                        }
                    },
                    500
                );
            return false;
        }
    );
});