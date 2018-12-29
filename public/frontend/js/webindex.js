window.onerror=function()
{
	return true;//屏蔽系统错误提示事件
}
/*解决 IE6 不支持 li:hover 的方法*/
sfHover = function() {  
    var sfEls = document.getElementsByTagName("li");  
    for (var i = 0; i < sfEls.length; i++) {  
        sfEls[i].onmouseover = function() {  
            this.className += " sfhover"  
        }  
        sfEls[i].onmouseout = function() {  
            this.className = this.className.replace(new RegExp(" sfhover\\b"), "")  
        }  
    }  
}  
if (window.attachEvent) window.attachEvent("onload", sfHover);
//首页导航效果
if($("submenu")){
	var _submenu = $("#submenu").find('.submenu1');
	var _time = 100;
	function autoScrollDown(){
		if($(".nav-submenu").css("height") == '0px'){
			if(!-[1,] && !window.XMLHttpRequest){
				$(".nav-submenu").css({"height":"435px","border-bottom":"0px solid #2db3a6"}).find('.submenu1').eq(0).animate({top:'0px'},_time,function(){
					_submenu.eq(1).css("top","0px").animate({top:'109px'},_time,function(){
						_submenu.eq(2).css("top","109px").animate({top:'218px'},_time,function(){
							_submenu.eq(3).css("top","218px").animate({top:'326px'},_time);
						})
					});
				});
			}else{
				$(".nav-submenu").css({"height":"435px","border-bottom":"0px solid #2db3a6"}).find('.submenu1').eq(0).animate({bottom:'-109px'},_time,function(){
					_submenu.eq(1).css("bottom","-109px").animate({bottom:'-218px'},_time,function(){
						_submenu.eq(2).css("bottom","-218px").animate({bottom:'-326px'},_time,function(){
							_submenu.eq(3).css("bottom","-326px").animate({bottom:'-435px'},_time);
						})
					});
				
				});
			}
		}
	}

	function autoScrollUp(){
		$(".nav-submenu").css({"height":"0px","border-bottom":"0px solid #2db3a6"}).find('.submenu1').stop().css("bottom","0px");
		$(".nav-submenu-xl").hide().children('div').hide();
		_submenu.removeClass('submenu1-hover');
	}
	$(".navL").hover(function(){clearTimeout(_autoscroll);autoScrollDown();},function(){autoScrollUp();});
	var _autoscroll = setTimeout(function(){autoScrollUp();},5000);
	$(function(){
	  //$(".nav-l").addClass("nav-l-hover");
	  autoScrollDown();
	}); 
	_submenu.hover(function(){
		_submenu.removeClass('submenu1-hover').eq($(this).index()).addClass('submenu1-hover');
		$(".nav-submenu-xl").show().children('div').hide().eq($(this).index()).show();
	});
}
//页面右侧弹出效果
if($('swt-right-index')){
	$("#swt-right-index ul li").hover(function(){
		$(this).children("a").addClass("swt-hover");
		$(this).stop().animate({right:"5px"},200);
	},function(){
		    $(this).animate({right:"0px"},200,function(){
			$(this).stop().children("a").removeClass("swt-hover");
		});
	});
}
$(window).scroll(function(){
	var scrolltop=$(this).scrollTop();
	if(scrolltop>=200){$(".swt-right-index6").show();}
	else{$(".swt-right-index6").hide();}
});
//中间弹框第一次弹出时间
setTimeout("openM()",10000);//10000
function openM(){
	$("#online_main").fadeIn(1000);
}
function openMdivM(){
	$("#online_main").fadeIn(1000);
}
$(function() {
	$("#xmswtgb1,#xmswtgb2,#Close_online_main").click(function(){
		setTimeout("openMdivM()", 30000);
		$("#online_main").animate({width:'0px',height:'0px',left:'130%',top: '120%'},1000);
		$("#online_main").fadeOut(1000).delay(5000).animate({width:'450px',height:'340px',left:'-450px',top:'-340px'},1000);
		$("#divM_suoxiao").show().animate({right:0,bottom:0},1000).animate({opacity:1},1000).delay(28000).fadeOut(1000).animate({right:-314,bottom:-187,opacity:0});
		$("#online_main").fadeOut().stop().animate({left:'50%',top:'50%',opacity:0},26000,'swing');
		$("#online_main").stop().animate({left:'50%',top:'50%',opacity:1},0,'swing');
	});
	$("#divM_suoxiao_b").click(function(){$("#divM_suoxiao").hide();});	
});
/*! jQuery.kinMaxShow v1.1 2013-08-27 | mr.kin@foxmail.com */
eval((function(a,b){return a.replace(/\w+/g, function(ss){ return b[parseInt(ss, 36)]; }); })("(0($){\r$.1.2 = 0(3){\r4 5 = {\r6:7,\r8:9,\ra:b,\rc:d,\re:\'f\',\rg:\'h h\',\ri:{\rj:\'k\',\rl:m,\rn:{o:\'p\',6:\'p\',q:\'p\',r:\'s\',t:\'s\',u:\'s\',v:\"#w\",x:\"y z #10\",11:\"#12\",13:\'h\',14:\'15\',16:\"17\",18:\'19\'},\r1a:{v:\"#1b\",x:\"y z #1c\",11:\"#1d\"}\r},\r1e:0(1f,1g){}\r};\r1h = 1i.1j(d,{},5,3);\r4 1k = {};\r1k.1l = $(1m).1l;\r1n($(1m).1o>1p){\r$.1q(\'2 1q[1r 1s 1t 1u 1v]\');\r1w m;\r}\r1k.1x = 1m;\r1k.1f = 1y;\r1k.1z = 1y;\r1k.20 = $(1k.1x).21(\'22\').20();\r1k.23 = \'24\' + 1k.1l.25(\/\\26\/27,\'\') + \'28\';\r1k.29 = {};\r1k.1 = {};\r1k.2a = 0(){\r$(1k.1x).2b({o:\'2c%\',6:1h.6,2d:\'2e\',2f:\'2g\'}).21(\'22\').2h(1k.23+\'2i\').2j();\r1k.2k();\r};\r1k.2k = 0(){\r1k.2l();\r1k.2m();\r};\r1k.2l = 0(){\r$(1k.1x).21(\'22\').2n(\'<22 2o=\"\'+1k.23+\'2p\"><\/22>\');\r$(\'.\'+1k.23+\'2i\',1k.1x).2q(0() {\r4 2r = $(1m).21(\'2r\');\r1n(2r.1o){\r4 2s = 2r.21(\'2t\').2u(\'2v\');\r2r.21(\'2t\').2w();\r2r.2h(1k.23+\'2x\');\r}2y{\r4 2s = $(1m).21(\'2t\').2u(\'2v\');\r$(1m).21(\'2t\').2w();\r}\r$(1m).2b({v:\'2z(\'+2s+\') 30-31 \'+1h.g,\'32-1f\':1p});\r});\r$(\'.\'+1k.23+\'2i\',1k.1x).33(1y).2b(\'32-1f\',\'34\');\r1n(1h.i.n.35!=\'36\'){\r4 37 = \'\';\r38(39=1p;39<=1k.20;39++){\r1n(1h.i.l){\r37+=\'<3a>\'+39+\'<\/3a>\';\r}2y{\r37+=\'<3a> <\/3a>\';\r}\r}\r$(1k.1x).3b(\'<3c 2o=\"\'+1k.23+\'i\">\'+37+\'<\/3c>\');\r$(\'.\'+1k.23+\'i 3a\',1k.1x).33(1y).2h(1k.23+\'1a\');\r}\r1k.3d();\r$(\'.\'+1k.23+\'2i:3e(1y)\',1k.1x).2b(\'32-1f\',1p).2b({3f:1y});\r$(\'.\'+1k.23+\'2i\',1k.1x).3g();\r$(1k.1x).2b({2d:\'3h\',3i:\'3h\',35:\'3j\'});\r};\r1k.3d = 0(){\r4 3k = \'<3l 3m=\"3n\/2b\">\';\r3k+= 1k.1l+\' *{ 3o:1y;3p:1y;} \';\r3k+= 1k.1l+\' .\'+1k.23+\'2p{o:2c%;6:\'+3q(1h.6)+\'3r;2f:2g;32-1f:1p;} \';\r3k+= 1k.1l+\' .\'+1k.23+\'2p .\'+1k.23+\'2i{o:2c%;6:\'+3q(1h.6)+\'3r;2f:3s;2d:2e;} \';\r3k+= 1k.1l+\' .\'+1k.23+\'2p .\'+1k.23+\'2i 2r.\'+1k.23+\'2x{o:2c%;6:\'+3q(1h.6)+\'3r;35:3j;3n-3t:36;3p:1y;3o:1y;v:3u;3n-3v:1y;3w:36;2j-1a:3x(1m.3y=d);} \';\r1n(1h.i.n.35!=\'36\'){\r3k+= 1k.1l+\' .\'+1k.23+\'i{\'+1k.1.3z(1h.i.n,[\'40\',\'r\',\'t\',\'19\'],d)+\';2f:3s;41-3l:36;32-1f:34;2d:2e;42:1p;}\';\r3k+= 1k.1l+\' .\'+1k.23+\'i 3a{\'+1k.1.3z(1h.i.n,[\'40\',\'r\',\'t\',\'19\'])+\';43:44;-45-3n-20-46:36;}\';\r3k+= 1k.1l+\' .\'+1k.23+\'i 3a.\'+1k.23+\'1a{\'+1k.1.3z(1h.i.1a,[\'40\',\'r\',\'t\',\'19\'])+\';43:47;}\';\r}\r3k+= \'<\/3l>\';\r$(1k.1x).48(3k);\r}\r1k.2m = 0(){\r1h.1e.49($(\'.\'+1k.23+\'2i:33(\'+1k.1f+\')\',1k.1x),1k.1f,\'4a\');\r4 4b;\r$(\'.\'+1k.23+\'i\',1k.1x).4c(\'3a\',1h.i.j,0(){\r4d = 1m;\r0 4e(){\r1k.1f = $(4d).1f();\r1k.4f();\r}\r1n(1h.i.j==\'4g\'){\r4b = 4h(4e,4i);\r}2y{\r4e();\r}\r})\r1n(1h.i.j==\'4g\'){\r$(\'.\'+1k.23+\'i\',1k.1x).4c(\'3a\',\'4j\',0(){\r4k(4b);\r})\r}\r1k.1f = 1p;\r1k.1z = 1y;\r1k.29.4l = 4m(1k.4f,1h.8*b+1h.a);\r1n(1h.c){\r$(1k.1x).4n(0(){\r4o(1k.29.4l);\r},0(){\r1k.29.4l = 4m(1k.4f,1h.8*b+1h.a);\r})\r}\r};\r1k.4f = 0(){\r1h.1e.49($(\'.\'+1k.23+\'2i:33(\'+(1k.1z)+\')\',1k.1x),1k.1z,\'4p\');\r1n(1h.i.n.35!=\'36\'){\r$(\'3c.\'+1k.23+\'i 3a\',1k.1x).4q(1k.23+\'1a\');\r$(\'3c.\'+1k.23+\'i 3a\',1k.1x).33(1k.1f).2h(1k.23+\'1a\');\r}\r$(\'.\'+1k.23+\'2i:4r\',1k.1x).4s(d,m);\r$(\'.\'+1k.23+\'2i\',1k.1x).2b(\'32-1f\',1p);\r$(\'.\'+1k.23+\'2i\',1k.1x).33(1k.1f).2b({3f:1y,\'32-1f\':34});\r$(\'.\'+1k.23+\'2i\',1k.1x).33(1k.1f).4t({3f:1p},1h.a,1h.e,0(){\r$(\'.\'+1k.23+\'2p .\'+1k.23+\'2i:4u(:33(\'+1k.1f+\'))\',1k.1x).2b({3f:1y});\r1h.1e.49($(\'.\'+1k.23+\'2i:33(\'+1k.1f+\')\',1k.1x),1k.1f,\'4a\');\r1k.1z = 1k.1f;\r1n(1k.1f==1k.20-1p){\r1k.1f=1y;\r}2y{\r1k.1f++;\r}\r}\r);\r};\r1k.4v = 0(){\r1k.2a();\r};\r1k.1.3z = 0(4w,4x,4y){\r4y = 4y?d:m;\r4 4z = 50.51.52(\"53\")!=-1p;\r4 3l = \'\';\r1n(4y){\r38 (4 54 55 4w){\r1n($.56(54,4x)!=-1p){\r57 = 54.25(\/([58-59])\/,5a);\r1n(57==\'3f\' && 4z){\r3l +=\"5b:5c(3f=\"+(4w[54]*2c)+\");\";\r}2y{\r3l +=57+\":\"+4w[54]+\";\";\r}\r}\r};\r}2y{\r38 (4 54 55 4w){\r1n($.5d(4x)){\r1n($.56(54,4x)==-1p){\r57 = 54.25(\/([58-59])\/,5a);\r1n(57==\'3f\' && 4z){\r3l +=\"5b:5c(3f=\"+(4w[54]*2c)+\");\";\r}2y{\r3l +=57+\":\"+4w[54]+\";\";\r}\r}\r}2y{\r57 = 54.25(\/([58-59])\/,5a);\r1n(57==\'3f\' && 4z){\r3l +=\"5b:5c(3f=\"+(4w[54]*2c)+\");\";\r}2y{\r3l +=57+\":\"+4w[54]+\";\";\r}\r}\r};\r}\r0 5a(5e){\r4 5f=\'\';\r5f = \'-\'+5e.5g();\r1w 5f;\r};\r1w 3l;\r};\r1k.4v();\r}\r})(1i)", "function|fn|kinMaxShow|user_options|var|default_options|height|500|intervalTime|6|switchTime|1000|hoverPause|true|easing|linear|imageAlign|center|button|switchEvent|click|showIndex|false|normal|width|14px|lineHeight|right|10px|bottom|fontSize|background|cccaca|border|1px|solid|ffffff|color|666666|textAlign|marginRight|8px|fontFamily|Verdana|float|left|focus|CC0000|FF0000|000000|callback|index|action|options|jQuery|extend|k|selector|this|if|length|1|error|More|than|one|selected|object|return|self|0|lindex|size|children|div|prename|KMSPrefix_|replace|W|ig|_|data|onload|css|100|overflow|hidden|position|relative|addClass|image_item|hide|init|setLayout|setAnimate|wrapAll|class|image_box|each|a|image|img|attr|src|remove|coverlink|else|url|no|repeat|z|eq|2|display|none|button_list|for|i|li|append|ul|setCSS|gt|opacity|show|visible|visibility|block|cssCode|style|type|text|margin|padding|parseInt|px|absolute|decoration|transparent|indent|outline|expression|hideFocus|objToCss|top|list|_zoom|cursor|pointer|webkit|adjust|default|prepend|call|fadeIn|overDelayTimer|delegate|_this|setChange|setOpacity|mouseover|setTimeout|200|mouseout|clearTimeout|moveTimer|setInterval|hover|clearInterval|fadeOut|removeClass|animated|stop|animate|not|run|obj|excArr|excFlag|isIE|navigator|userAgent|indexOf|MSIE|key|in|inArray|pKey|A|Z|KtoLowerCase|filter|alpha|isArray|word|str|toLowerCase".split("|")));
$("#kinMaxShow2").kinMaxShow({
	       //幻灯片高度 默认500
			height:435,
			//幻灯片切换间隔时间 单位:秒
			intervalTime:5,
			//幻灯片切换时间 单位：毫秒 ,若设置为0 则无切换效果 直接跳到下一张
			switchTime:1000,
			//擦除效果(切换)  默认linear,jQuery自带有 "linear" 和 "swing" ,如需要其他擦除效果请使用 jquery.easing.js  插件
			easing:'swing',
			//图片对齐方式
			imageAlign:'center center',
			//imageAlign:"center top",
			//按钮及样式控制
			button:{
					//按钮鼠标切换事件 可选事件 click、mouseover
					switchEvent:'mouseover',
					//按钮上是否显示索引数字，true从1开始，默认不显示false
					showIndex:false,
					//按钮样式
					//正常 按钮样式  支持常规CSS样式，方法同jQuery css({key:val,……})
					normal:{width:'10px',height:'10px',lineHeight:'10px',right:'44%',bottom:'10px',fontSize:'10px',background:"#cccaca",border:"1px solid #ffffff",color:"#666666",textAlign:'center',marginRight:'8px',fontFamily:"Verdana",float:'left'},
					//当前 按钮样式
					focus:{background:"#2db3a6",border:"1px solid #2db3a6",color:"#fff"}
				}
			/*button:{
					showIndex:false,
					normal:{background:'none',marginRight:'8px',border:'0',right:'44%',bottom:'20px'},
					focus:{background:'none',border:'0'}
				}*/
});
//活动轮播
$("#kinMaxShowHd").kinMaxShow({
	   //幻灯片高度 默认500
		height:105,
		//幻灯片切换间隔时间 单位:秒
		intervalTime:3,
		//幻灯片切换时间 单位：毫秒 ,若设置为0 则无切换效果 直接跳到下一张
		switchTime:800,
		//擦除效果(切换)  默认linear,jQuery自带有 "linear" 和 "swing" ,如需要其他擦除效果请使用 jquery.easing.js  插件
		easing:'swing',
		//图片对齐方式
		imageAlign:'center center',
		//imageAlign:"center top",
		//按钮及样式控制
		button:{
				showIndex:false,
				normal:{background:'none',marginRight:'8px',border:'0',right:'44%',bottom:'20px'},
				focus:{background:'none',border:'0'}
			}
});
(function(a){
    a.fn.desSlideshow=function(p){
        var p=p||{};
        var autoplay=p&&p.autoplay?p.autoplay:"enable";
        var slideshow_width=p&&p.slideshow_width?p.slideshow_width:"600";
        var slideshow_height=p&&p.slideshow_height?p.slideshow_height:"250";
        var thumbnail_width=p&&p.thumbnail_width?p.thumbnail_width:"200";
        var time_Interval = p&&p.time_Interval?p.time_Interval:"4000";
        var directory=p&&p.directory?p.directory:"images";
        slideshow_height = parseInt(slideshow_height);
        slideshow_width = parseInt(slideshow_width);
        time_Interval = parseInt(time_Interval);
        var g=a(this);
        var current = -1;
        var y=g.children(".switchBigPic").children("div").length;
        var v;
        var w;
        if(y==0){
            g.append("Require content");
            return null
        }
        init();
        if(autoplay == "enable"){
            g.find(".switchBigPic").css("display","block");
            g.find(".nav").css("display","block");
            g.css("background","none");
            play();
        }else{
            g.find(".switchBigPic").css("display","block");
            g.find(".nav").css("display","block");
            g.css("background","none");
            current = 0;
            showpic();
        }
        g.find(".nav").children("li").hover(
            function(){
                var index = g.find(".nav").children("li").index($(this));
                if(index != current){
                    current = index;
                    showpic();
                }
            },
            function(){}
        );
        g.hover(
            function(){},
            function(){
                if(autoplay == "enable"){
                    v=setTimeout(play,time_Interval);
                }
            }
        );
        function init(){
            g.css("width",slideshow_width+"px").css("height",slideshow_height+"px").css("position","relative").css("overflow","hidden");
            g.find("a").css("color","#000");
            g.find("img").css("border","none");
            g.find("ul").css("margin","0px").css("padding","0px");
            g.find("li").css("margin","0px").css("padding","0px").css("list-style","none");
            g.find(".switchBigPic").css("position","relative");
            g.find(".switchBigPic").children("div").css("position","absolute").css("bottom","0px").css("overflow","hidden");
            g.find(".switchBigPic").children("div").hide();
        }
        function showpic(){
            clearTimeout(v);
            g.find(".nav").children("li").css("background-image","url("+directory+"LHlibg.jpg)").css("border-bottom","0px solid #CCCCCC").css("width","198px").css("left","0px");
			g.find(".nav").children("li").children("h3").css("color","#000").css("font-size","14px").css("padding-left","0px");
            g.find(".nav").children("li").eq(current).css("background-image","url("+directory+"LHlibgon.gif)").css("background-position","left center").css("border-bottom","none").css("width","208px").css("left","-10px");
			g.find(".nav").children("li").eq(current).children("h3").css("color","#fff").css("font-size","14px").css("padding-left","10px");
            g.find(".switchBigPic").children("div").fadeOut();
            g.find(".switchBigPic").children("div").eq(current).fadeIn();
            w = current;
        }
        function play(){
            current++;
            if(current>=y){
                current=0
            }
            showpic();
            v=setTimeout(play,time_Interval);
        }
    }
})(jQuery);
$(function() {
        $("#desSlideshow1").desSlideshow({
            autoplay: 'enable',//option:enable,disable
            slideshow_width: '649',//slideshow window width
            slideshow_height: '340',//slideshow window height
            thumbnail_width: '198',//thumbnail width
            time_Interval: '4000',//Milliseconds
            directory: 'images/'// flash-on.gif and flashtext-bg.jpg directory
        });
});

$(function(){
    $(".newsleft > div.condiv").not(":first").hide();
	$(".newsleft .title a").hover(function(){
		var sindex = $(".newsleft .title a").index(this);
		$(this).addClass('titOn').siblings().removeClass('titOn');
        $(".newsleft > div.condiv").eq(sindex).show().siblings("div.condiv").hide();		
	});
	$(".shishangleftL a").not(":first").hide();
	$(".shishangleftR ul li").hover(function(){
		var sindex = $(".shishangleftR ul li").index(this);
		$(this).addClass('sfhover').siblings().removeClass('sfhover');
        $(".shishangleftL a").eq(sindex).show().siblings(".shishangleftL a").hide();		
	});
	$(".alzjmxcon > div.tabs-panel").not(":first").hide();
	$(".tabs-trigger a:first").addClass('titOn');
	$(".tabs-trigger a").hover(function(){
	    $(".tabs-trigger a").removeClass('titOn');
		var sindex = $(".tabs-trigger a").index(this);
		$(this).addClass('titOn').siblings().removeClass('titOn');
        $(".alzjmxcon > div.tabs-panel").eq(sindex).show().siblings("div.tabs-panel").hide();		
	});
    $(".flkmcon > div.flkmconcon").not(":first").hide();
    $(".flkmtitle a").hover(function(){
		var sindex = $(".flkmtitle a").index(this);
		$(this).addClass('current').siblings().removeClass('current');
        $(".flkmcon > div.flkmconcon").eq(sindex).show().siblings("div.flkmconcon").hide();		
	});
	$(".flkmconBLR > .tab_trigger span").hover(function(){
		var sindex = $(".flkmconBLR > .tab_trigger span").index(this);
		$(this).addClass('current').siblings().removeClass('current');
        $(".flkmconBLR > ul.tab_panel").eq(sindex).show().siblings("ul.tab_panel").hide();		
    });
	$(".newsright .condiv").jCarouselLite({
			auto: 5000,
			speed: 400,
			visible: 1
	});	
	$(".footertop .concon").jCarouselLite({
		    btnPrev: ".footertop .conleft",
		    btnNext: ".footertop .conright", 
			auto: 5000,
			speed: 400,
			visible: 5
	});
	$(".footertop .concon2").jCarouselLite({
		    btnPrev: ".footertop .conleft2",
		    btnNext: ".footertop .conright2", 
			auto: 5000,
			speed: 400,
			visible: 5
	});
	$(".footertopcon > div.content").not(":first").hide();
	$(".footertoptit ul li").each(function(){
		$(".footertoptit ul li").hover(function(){
			var sindex = $(".footertoptit ul li").index(this);
			$(this).addClass('titOn').siblings().removeClass('titOn');
			$(".footertopcon > div.content").eq(sindex).show().siblings("div.content").hide();		
		})
	});

});
/*!
 * jquery.pager.js 0.0.1 - https://github.com/yckart/jquery.pager.js
 * Copyright (c) 2012 Yannick Albert (http://yckart.com)
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php).
 * 2013/03/16
 **/
(function ($, window) {
    var defaults = {
        perPage: 5, // number of items per page
        startPage: 1, // page to begin on - NOT zero indexed
        infinite: false, // true / false
        useHash: false,
        uuid: "pager",
        init: $.noop
    }, uuid = 1;
    $.fn.pager = function (options) {
        return this.each(function () {
            options = $.extend({}, defaults, options); // set options
            var wrap = options.wrapper = $(this);
            wrap.bind({
                'pager:show': function (e, pageNum) {
                    show(options, pageNum - 1, e);
                },
                'pager:next': function () {
                    next(options);
                },
                'pager:prev': function () {
                    prev(options);
                },
                'pager:first': function () {
                    show(options, 0);
                },
                'pager:last': function () {
                    show(options, options.totalPages - 1);
                },
                'pager:refresh': function (e, newopts) {
                    refresh(options, newopts);
                }
            });
            if(options.useHash) {
                $(window).bind("hashchange.pager", function(e){
                    var hash = location.hash;
                    if(!hash) return show(options, options.startPage-1, e);

                    if( options.uuid === hash.slice(0, hash.lastIndexOf(":")).replace("#", "") ) {
                        show(options, hash.slice(-1) -1, e);
                    } else {
                        show(options, options.currentPage, e);
                    }
                });
            }
            setUp(options);
        });
    };
    function setUp(options) {
        options.uuid = options.uuid + uuid++;
        options.perPage = parseInt(options.perPage);
        options.items = options.wrapper.children();
        options.totalItems = options.items.length;
        options.totalPages = Math.ceil(options.totalItems / options.perPage);
        options.currentPage = parseInt(options.startPage) - 1;
        options.first = isFirstPage(options, options.currentPage);
        options.last = isLastPage(options, options.currentPage);
        options.pages = [];
        if (options.currentPage > options.totalPages - 1) options.currentPage = options.totalPages - 1;
        options.items.hide();
        for (var i = 0; i < options.totalPages; i++) {
            var startItem = options.perPage * i;
            options.pages[i] = options.items.slice(startItem, (startItem + options.perPage));
        }
        $(window).trigger("hashchange.pager");
        options.init.call(this, options.currentPage + 1, options.totalPages);
    }
    function refresh(options, newopts) {
        if (newopts !== undefined) $.extend(options, newopts); // update options
        options.startPage = parseInt(options.currentPage) + 1;
        setUp(options);
    }
    function next(options) {
        if (options.infinite) {
            show(options, (options.last ? 0 : options.currentPage + 1));
        } else {
            show(options, (options.last ? options.totalPages - 1 : options.currentPage + 1));
        }
    }
    function prev(options) {
        if (options.infinite) {
            show(options, (options.first ? options.totalPages - 1 : options.currentPage - 1));
        } else {
            show(options, (options.first ? 0 : options.currentPage - 1));
        }
    }
    function show(options, pageNum, e) {
        if (pageNum > options.totalPages - 1) pageNum = options.totalPages - 1;

        if (!options.pages[options.currentPage].is(':animated')) {
            options.wrapper.trigger('pager:started', options.currentPage + 1);

            $.fn.pager.swapPages(options, pageNum, function () {

                options.currentPage = pageNum;
                options.first = isFirstPage(options, options.currentPage) ? true : false;
                options.last = isLastPage(options, options.currentPage) ? true : false;

                options.wrapper.trigger('pager:finished', [options.currentPage + 1, options.first, options.last]);

            });
            // set hash if available
            if(!e && options.useHash) window.location.hash = options.uuid + ":" + (options.currentPage + 1);
        }
    }
    // public, can override this if neccessary
    $.fn.pager.swapPages = function (options, pageNum, onFinish) {
        options.pages[options.currentPage].hide();
        options.pages[pageNum].show();
        onFinish();
    };
    // utility functions
    function isFirstPage(opts, internalPageNum) {
        return (internalPageNum === 0);
    }
    function isLastPage(options, internalPageNum) {
        return (internalPageNum === options.totalPages - 1);
    }
}(jQuery, window));
$(function () {
	var wrap = $('#wrapper');
	wrap.pager({
		perPage: 6,
		infinite: true,
		useHash: true
	});
	//$('#PPprev').click(function () {wrap.trigger('pager:prev');return false;});
	$('#PPnext').click(function () {
		$(this).find("i").addClass("ad");
		setTimeout(function(){$(this).find("i").removeClass("ad");},400);
		wrap.trigger('pager:next');
		return false;
	});
});
document.getElementById("PPnext").onclick =function(){
	this.getElementsByTagName("i")[0].className = 'ad';
	setTimeout(function(){document.getElementById('PPnext').getElementsByTagName("i")[0].className = '';},400);
}
/* SuperSlide v2.1.1 */
!function(a){a.fn.slide=function(b){return a.fn.slide.defaults={type:"slide",effect:"fade",autoPlay:!1,delayTime:500,interTime:2500,triggerTime:150,defaultIndex:0,titCell:".hd li",mainCell:".bd",targetCell:null,trigger:"mouseover",scroll:1,vis:1,titOnClassName:"on",autoPage:!1,prevCell:".prev",nextCell:".next",pageStateCell:".pageState",opp:!1,pnLoop:!0,easing:"swing",startFun:null,endFun:null,switchLoad:null,playStateCell:".playState",mouseOverStop:!0,defaultPlay:!0,returnDefault:!1},this.each(function(){var c=a.extend({},a.fn.slide.defaults,b),d=a(this),e=c.effect,f=a(c.prevCell,d),g=a(c.nextCell,d),h=a(c.pageStateCell,d),i=a(c.playStateCell,d),j=a(c.titCell,d),k=j.size(),l=a(c.mainCell,d),m=l.children().size(),n=c.switchLoad,o=a(c.targetCell,d),p=parseInt(c.defaultIndex),q=parseInt(c.delayTime),r=parseInt(c.interTime);parseInt(c.triggerTime);var Q,t=parseInt(c.scroll),u=parseInt(c.vis),v="false"==c.autoPlay||0==c.autoPlay?!1:!0,w="false"==c.opp||0==c.opp?!1:!0,x="false"==c.autoPage||0==c.autoPage?!1:!0,y="false"==c.pnLoop||0==c.pnLoop?!1:!0,z="false"==c.mouseOverStop||0==c.mouseOverStop?!1:!0,A="false"==c.defaultPlay||0==c.defaultPlay?!1:!0,B="false"==c.returnDefault||0==c.returnDefault?!1:!0,C=0,D=0,E=0,F=0,G=c.easing,H=null,I=null,J=null,K=c.titOnClassName,L=j.index(d.find("."+K)),M=p=-1==L?p:L,N=p,O=p,P=m>=u?0!=m%t?m%t:t:0,R="leftMarquee"==e||"topMarquee"==e?!0:!1,S=function(){a.isFunction(c.startFun)&&c.startFun(p,k,d,a(c.titCell,d),l,o,f,g)},T=function(){a.isFunction(c.endFun)&&c.endFun(p,k,d,a(c.titCell,d),l,o,f,g)},U=function(){j.removeClass(K),A&&j.eq(N).addClass(K)};if("menu"==c.type)return A&&j.removeClass(K).eq(p).addClass(K),j.hover(function(){Q=a(this).find(c.targetCell);var b=j.index(a(this));I=setTimeout(function(){switch(p=b,j.removeClass(K).eq(p).addClass(K),S(),e){case"fade":Q.stop(!0,!0).animate({opacity:"show"},q,G,T);break;case"slideDown":Q.stop(!0,!0).animate({height:"show"},q,G,T)}},c.triggerTime)},function(){switch(clearTimeout(I),e){case"fade":Q.animate({opacity:"hide"},q,G);break;case"slideDown":Q.animate({height:"hide"},q,G)}}),B&&d.hover(function(){clearTimeout(J)},function(){J=setTimeout(U,q)}),void 0;if(0==k&&(k=m),R&&(k=2),x){if(m>=u)if("leftLoop"==e||"topLoop"==e)k=0!=m%t?(0^m/t)+1:m/t;else{var V=m-u;k=1+parseInt(0!=V%t?V/t+1:V/t),0>=k&&(k=1)}else k=1;j.html("");var W="";if(1==c.autoPage||"true"==c.autoPage)for(var X=0;k>X;X++)W+="<li>"+(X+1)+"</li>";else for(var X=0;k>X;X++)W+=c.autoPage.replace("$",X+1);j.html(W);var j=j.children()}if(m>=u){l.children().each(function(){a(this).width()>E&&(E=a(this).width(),D=a(this).outerWidth(!0)),a(this).height()>F&&(F=a(this).height(),C=a(this).outerHeight(!0))});var Y=l.children(),Z=function(){for(var a=0;u>a;a++)Y.eq(a).clone().addClass("clone").appendTo(l);for(var a=0;P>a;a++)Y.eq(m-a-1).clone().addClass("clone").prependTo(l)};switch(e){case"fold":l.css({position:"relative",width:D,height:C}).children().css({position:"absolute",width:E,left:0,top:0,display:"none"});break;case"top":l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+u*C+'px"></div>').css({top:-(p*t)*C,position:"relative",padding:"0",margin:"0"}).children().css({height:F});break;case"left":l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+u*D+'px"></div>').css({width:m*D,left:-(p*t)*D,position:"relative",overflow:"hidden",padding:"0",margin:"0"}).children().css({"float":"left",width:E});break;case"leftLoop":case"leftMarquee":Z(),l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+u*D+'px"></div>').css({width:(m+u+P)*D,position:"relative",overflow:"hidden",padding:"0",margin:"0",left:-(P+p*t)*D}).children().css({"float":"left",width:E});break;case"topLoop":case"topMarquee":Z(),l.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+u*C+'px"></div>').css({height:(m+u+P)*C,position:"relative",padding:"0",margin:"0",top:-(P+p*t)*C}).children().css({height:F})}}var $=function(a){var b=a*t;return a==k?b=m:-1==a&&0!=m%t&&(b=-m%t),b},_=function(b){var c=function(c){for(var d=c;u+c>d;d++)b.eq(d).find("img["+n+"]").each(function(){var b=a(this);if(b.attr("src",b.attr(n)).removeAttr(n),l.find(".clone")[0])for(var c=l.children(),d=0;d<c.size();d++)c.eq(d).find("img["+n+"]").each(function(){a(this).attr(n)==b.attr("src")&&a(this).attr("src",a(this).attr(n)).removeAttr(n)})})};switch(e){case"fade":case"fold":case"top":case"left":case"slideDown":c(p*t);break;case"leftLoop":case"topLoop":c(P+$(O));break;case"leftMarquee":case"topMarquee":var d="leftMarquee"==e?l.css("left").replace("px",""):l.css("top").replace("px",""),f="leftMarquee"==e?D:C,g=P;if(0!=d%f){var h=Math.abs(0^d/f);g=1==p?P+h:P+h-1}c(g)}},ab=function(a){if(!A||M!=p||a||R){if(R?p>=1?p=1:0>=p&&(p=0):(O=p,p>=k?p=0:0>p&&(p=k-1)),S(),null!=n&&_(l.children()),o[0]&&(Q=o.eq(p),null!=n&&_(o),"slideDown"==e?(o.not(Q).stop(!0,!0).slideUp(q),Q.slideDown(q,G,function(){l[0]||T()})):(o.not(Q).stop(!0,!0).hide(),Q.animate({opacity:"show"},q,function(){l[0]||T()}))),m>=u)switch(e){case"fade":l.children().stop(!0,!0).eq(p).animate({opacity:"show"},q,G,function(){T()}).siblings().hide();break;case"fold":l.children().stop(!0,!0).eq(p).animate({opacity:"show"},q,G,function(){T()}).siblings().animate({opacity:"hide"},q,G);break;case"top":l.stop(!0,!1).animate({top:-p*t*C},q,G,function(){T()});break;case"left":l.stop(!0,!1).animate({left:-p*t*D},q,G,function(){T()});break;case"leftLoop":var b=O;l.stop(!0,!0).animate({left:-($(O)+P)*D},q,G,function(){-1>=b?l.css("left",-(P+(k-1)*t)*D):b>=k&&l.css("left",-P*D),T()});break;case"topLoop":var b=O;l.stop(!0,!0).animate({top:-($(O)+P)*C},q,G,function(){-1>=b?l.css("top",-(P+(k-1)*t)*C):b>=k&&l.css("top",-P*C),T()});break;case"leftMarquee":var c=l.css("left").replace("px","");0==p?l.animate({left:++c},0,function(){l.css("left").replace("px","")>=0&&l.css("left",-m*D)}):l.animate({left:--c},0,function(){l.css("left").replace("px","")<=-(m+P)*D&&l.css("left",-P*D)});break;case"topMarquee":var d=l.css("top").replace("px","");0==p?l.animate({top:++d},0,function(){l.css("top").replace("px","")>=0&&l.css("top",-m*C)}):l.animate({top:--d},0,function(){l.css("top").replace("px","")<=-(m+P)*C&&l.css("top",-P*C)})}j.removeClass(K).eq(p).addClass(K),M=p,y||(g.removeClass("nextStop"),f.removeClass("prevStop"),0==p&&f.addClass("prevStop"),p==k-1&&g.addClass("nextStop")),h.html("<span>"+(p+1)+"</span>/"+k)}};A&&ab(!0),B&&d.hover(function(){clearTimeout(J)},function(){J=setTimeout(function(){p=N,A?ab():"slideDown"==e?Q.slideUp(q,U):Q.animate({opacity:"hide"},q,U),M=p},300)});var bb=function(a){H=setInterval(function(){w?p--:p++,ab()},a?a:r)},cb=function(a){H=setInterval(ab,a?a:r)},db=function(){z||(clearInterval(H),bb())},eb=function(){(y||p!=k-1)&&(p++,ab(),R||db())},fb=function(){(y||0!=p)&&(p--,ab(),R||db())},gb=function(){clearInterval(H),R?cb():bb(),i.removeClass("pauseState")},hb=function(){clearInterval(H),i.addClass("pauseState")};if(v?R?(w?p--:p++,cb(),z&&l.hover(hb,gb)):(bb(),z&&d.hover(hb,gb)):(R&&(w?p--:p++),i.addClass("pauseState")),i.click(function(){i.hasClass("pauseState")?gb():hb()}),"mouseover"==c.trigger?j.hover(function(){var a=j.index(this);I=setTimeout(function(){p=a,ab(),db()},c.triggerTime)},function(){clearTimeout(I)}):j.click(function(){p=j.index(this),ab(),db()}),R){if(g.mousedown(eb),f.mousedown(fb),y){var ib,jb=function(){ib=setTimeout(function(){clearInterval(H),cb(0^r/10)},150)},kb=function(){clearTimeout(ib),clearInterval(H),cb()};g.mousedown(jb),g.mouseup(kb),f.mousedown(jb),f.mouseup(kb)}"mouseover"==c.trigger&&(g.hover(eb,function(){}),f.hover(fb,function(){}))}else g.click(eb),f.click(fb)})}}(jQuery),jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(a,b,c,d,e){return jQuery.easing[jQuery.easing.def](a,b,c,d,e)},easeInQuad:function(a,b,c,d,e){return d*(b/=e)*b+c},easeOutQuad:function(a,b,c,d,e){return-d*(b/=e)*(b-2)+c},easeInOutQuad:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b+c:-d/2*(--b*(b-2)-1)+c},easeInCubic:function(a,b,c,d,e){return d*(b/=e)*b*b+c},easeOutCubic:function(a,b,c,d,e){return d*((b=b/e-1)*b*b+1)+c},easeInOutCubic:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b+c:d/2*((b-=2)*b*b+2)+c},easeInQuart:function(a,b,c,d,e){return d*(b/=e)*b*b*b+c},easeOutQuart:function(a,b,c,d,e){return-d*((b=b/e-1)*b*b*b-1)+c},easeInOutQuart:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b*b+c:-d/2*((b-=2)*b*b*b-2)+c},easeInQuint:function(a,b,c,d,e){return d*(b/=e)*b*b*b*b+c},easeOutQuint:function(a,b,c,d,e){return d*((b=b/e-1)*b*b*b*b+1)+c},easeInOutQuint:function(a,b,c,d,e){return(b/=e/2)<1?d/2*b*b*b*b*b+c:d/2*((b-=2)*b*b*b*b+2)+c},easeInSine:function(a,b,c,d,e){return-d*Math.cos(b/e*(Math.PI/2))+d+c},easeOutSine:function(a,b,c,d,e){return d*Math.sin(b/e*(Math.PI/2))+c},easeInOutSine:function(a,b,c,d,e){return-d/2*(Math.cos(Math.PI*b/e)-1)+c},easeInExpo:function(a,b,c,d,e){return 0==b?c:d*Math.pow(2,10*(b/e-1))+c},easeOutExpo:function(a,b,c,d,e){return b==e?c+d:d*(-Math.pow(2,-10*b/e)+1)+c},easeInOutExpo:function(a,b,c,d,e){return 0==b?c:b==e?c+d:(b/=e/2)<1?d/2*Math.pow(2,10*(b-1))+c:d/2*(-Math.pow(2,-10*--b)+2)+c},easeInCirc:function(a,b,c,d,e){return-d*(Math.sqrt(1-(b/=e)*b)-1)+c},easeOutCirc:function(a,b,c,d,e){return d*Math.sqrt(1-(b=b/e-1)*b)+c},easeInOutCirc:function(a,b,c,d,e){return(b/=e/2)<1?-d/2*(Math.sqrt(1-b*b)-1)+c:d/2*(Math.sqrt(1-(b-=2)*b)+1)+c},easeInElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(1==(b/=e))return c+d;if(g||(g=.3*e),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return-(h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g))+c},easeOutElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(1==(b/=e))return c+d;if(g||(g=.3*e),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return h*Math.pow(2,-10*b)*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInOutElastic:function(a,b,c,d,e){var f=1.70158,g=0,h=d;if(0==b)return c;if(2==(b/=e/2))return c+d;if(g||(g=e*.3*1.5),h<Math.abs(d)){h=d;var f=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return 1>b?-.5*h*Math.pow(2,10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+c:.5*h*Math.pow(2,-10*(b-=1))*Math.sin((b*e-f)*2*Math.PI/g)+d+c},easeInBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),d*(b/=e)*b*((f+1)*b-f)+c},easeOutBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),d*((b=b/e-1)*b*((f+1)*b+f)+1)+c},easeInOutBack:function(a,b,c,d,e,f){return void 0==f&&(f=1.70158),(b/=e/2)<1?d/2*b*b*(((f*=1.525)+1)*b-f)+c:d/2*((b-=2)*b*(((f*=1.525)+1)*b+f)+2)+c},easeInBounce:function(a,b,c,d,e){return d-jQuery.easing.easeOutBounce(a,e-b,0,d,e)+c},easeOutBounce:function(a,b,c,d,e){return(b/=e)<1/2.75?d*7.5625*b*b+c:2/2.75>b?d*(7.5625*(b-=1.5/2.75)*b+.75)+c:2.5/2.75>b?d*(7.5625*(b-=2.25/2.75)*b+.9375)+c:d*(7.5625*(b-=2.625/2.75)*b+.984375)+c},easeInOutBounce:function(a,b,c,d,e){return e/2>b?.5*jQuery.easing.easeInBounce(a,2*b,0,d,e)+c:.5*jQuery.easing.easeOutBounce(a,2*b-e,0,d,e)+.5*d+c}});
//切换
jQuery(".zjconM").slide({mainCell:".zjconMcon ul",autoPlay:true,interTime:4000,delayTime:600});
/*Lazy Load - jQuery plugin for lazy loading images --Version:  1.7.2*/
(function(a,b){$window=a(b),a.fn.lazyload=function(c){function f(){var b=0;d.each(function(){var c=a(this);if(e.skip_invisible&&!c.is(":visible"))return;if(!a.abovethetop(this,e)&&!a.leftofbegin(this,e))if(!a.belowthefold(this,e)&&!a.rightoffold(this,e))c.trigger("appear");else if(++b>e.failure_limit)return!1})}var d=this,e={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!0,appear:null,load:null};return c&&(undefined!==c.failurelimit&&(c.failure_limit=c.failurelimit,delete c.failurelimit),undefined!==c.effectspeed&&(c.effect_speed=c.effectspeed,delete c.effectspeed),a.extend(e,c)),$container=e.container===undefined||e.container===b?$window:a(e.container),0===e.event.indexOf("scroll")&&$container.bind(e.event,function(a){return f()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,c.one("appear",function(){if(!this.loaded){if(e.appear){var f=d.length;e.appear.call(b,f,e)}a("<img />").bind("load",function(){c.hide().attr("src",c.data(e.data_attribute))[e.effect](e.effect_speed),b.loaded=!0;var f=a.grep(d,function(a){return!a.loaded});d=a(f);if(e.load){var g=d.length;e.load.call(b,g,e)}}).attr("src",c.data(e.data_attribute))}}),0!==e.event.indexOf("scroll")&&c.bind(e.event,function(a){b.loaded||c.trigger("appear")})}),$window.bind("resize",function(a){f()}),f(),this},a.belowthefold=function(c,d){var e;return d.container===undefined||d.container===b?e=$window.height()+$window.scrollTop():e=$container.offset().top+$container.height(),e<=a(c).offset().top-d.threshold},a.rightoffold=function(c,d){var e;return d.container===undefined||d.container===b?e=$window.width()+$window.scrollLeft():e=$container.offset().left+$container.width(),e<=a(c).offset().left-d.threshold},a.abovethetop=function(c,d){var e;return d.container===undefined||d.container===b?e=$window.scrollTop():e=$container.offset().top,e>=a(c).offset().top+d.threshold+a(c).height()},a.leftofbegin=function(c,d){var e;return d.container===undefined||d.container===b?e=$window.scrollLeft():e=$container.offset().left,e>=a(c).offset().left+d.threshold+a(c).width()},a.inviewport=function(b,c){return!a.rightofscreen(b,c)&&!a.leftofscreen(b,c)&&!a.belowthefold(b,c)&&!a.abovethetop(b,c)},a.extend(a.expr[":"],{"below-the-fold":function(c){return a.belowthefold(c,{threshold:0,container:b})},"above-the-top":function(c){return!a.belowthefold(c,{threshold:0,container:b})},"right-of-screen":function(c){return a.rightoffold(c,{threshold:0,container:b})},"left-of-screen":function(c){return!a.rightoffold(c,{threshold:0,container:b})},"in-viewport":function(c){return!a.inviewport(c,{threshold:0,container:b})},"above-the-fold":function(c){return!a.belowthefold(c,{threshold:0,container:b})},"right-of-fold":function(c){return a.rightoffold(c,{threshold:0,container:b})},"left-of-fold":function(c){return!a.rightoffold(c,{threshold:0,container:b})}})})(jQuery,window);
$(function(){
	$('img.lazy').lazyload({
		effect:'fadeIn'
	});
});

/*
     FILE ARCHIVED ON 08:47:10 Aug 29, 2018 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 03:58:37 Dec 27, 2018.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  LoadShardBlock: 47.43 (3)
  esindex: 0.008
  captures_list: 132.823
  CDXLines.iter: 10.989 (3)
  PetaboxLoader3.datanode: 82.549 (4)
  exclusion.robots: 69.279
  xauthn.chkprivs: 0.056
  exclusion.robots.policy: 69.267
  RedisCDXSource: 2.611
  PetaboxLoader3.resolve: 112.628
  xauthn.identify: 68.84
  load_resource: 196.29
*/