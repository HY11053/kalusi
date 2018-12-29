//固定顶部位置
//$("html,body").animate({scrollTop:$(".logo").offset().top},300);//1000是ms,也可以用slow代替
//返回顶部输出
function go_top(){
	var go_top = '<div id="go_top" class="noshow">';
		go_top += '<div class="foot_top" title="点击返回顶部"></div></div><div id="copyToClipboard"></div>';
		$("body").append(go_top);
}
// go_top();
//返回顶部输出结束


//获取范围内的随机数
function random(min,max){
    return Math.floor(min+Math.random()*(max-min));
}

//右边导航动态输出 结束



//切换函数
function hover_cur(btn,cnt,cur,ant){
	var btn = $(btn);  
	var cnt = $(cnt);
	var ant = $(ant);
	btn.mouseover(function(){
		var current = $(this).index();
		cnt.hide().eq(current).show();
		ant.hide().eq(current).show();
		if(cur != null){
			btn.removeClass(cur).eq(current).addClass(cur);
		}
	}).eq(0).trigger("mouseenter");
}
//导航项目下滑开始
$('.nav_item').hover(function(){
		$(this).find(".nav_item_i").addClass('hover')
		$(this).find(".item_menu").animate({height:'show' },300);
	},function (){ 
		$(this).find(".item_menu").stop(true, true).hide();
		$('.item_menu_con').stop(true, true).hide();
		$('.item_menu ul.fl li').removeClass('hover');
		$(this).find(".nav_item_i").removeClass('hover')
	}
);
$('.item_menu ul.fl li').mouseover(function(){
		var current = $(this).index();
		$('.item_menu_con').hide().eq(current).show()
		$('.item_menu ul.fl li').removeClass('hover').eq(current).addClass('hover')
});
//导航项目结束
$(document).ready(function(){
	 
	
	//导航立体效果
	$(".nav_son li a").hover(function() {
		$(".out",	this).stop().animate({'top':	'44px'},	300); // move down - hide
		$(".over",	this).stop().animate({'top':	'0px'},		300); // move down - show

	}, function() {
		$(".out",	this).stop().animate({'top':	'0px'},		300); // move up - show
		$(".over",	this).stop().animate({'top':	'-44px'},	300); // move up - hide
	});	
	//导航立体结束
	//底部材料
	jQuery(".footer_slide").slide({ mainCell:".bd ul",effect:"leftLoop",vis:6,trigger:"click"});

	//右边固定商务通数字值
	$('.fixed_swt_num em').html(random(80,50));

	//微信图片放大
	$(".head_media .weixin").hover(function() {
		$(this).find("b").fadeIn();
	}, function() {
		$(this).find("b").stop(true, true).fadeOut();
	});
	
	//右边微信图片放大
	$(".weixin a").hover(function() {
		$(this).find("span").fadeIn();
	}, function() {
		$(this).find("span").stop(true, true).fadeOut();
	});

	//头部热门搜索
	$(".search_tag").hover(function() {
		$(this).find("div").animate({
			height: 'show'
		}, 250);
		$(this).find("span").addClass('hover');
	}, function() {
		$(this).find("div").stop(true, true).animate({
			height: 'hide'
		}, 250);;
		$(this).find("span").removeClass('hover');
	});

	//点击返回顶部
	$(".fixed_swt .top").click(function() {
		$('body,html').animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
	//图片延时加载
	var img_onload = function() {
			var _lazyImgs = [];

			function getElementTop(elm) {
				var flag = elm;
				var top = flag.offsetTop;
				while (flag = flag.offsetParent) {
					top += flag.offsetTop;
				}
				return top;
			}

			function getLazyImgs() {
				var imgs = document.getElementsByTagName("img");
				var lazyImgs = [];
				for (var i = 0; i < imgs.length; i++) {
					if (imgs[i].getAttribute("_src")) {
						lazyImgs.push(imgs[i]);
					}
				}
				return lazyImgs;
			}

			function imgOnLoadCheck(imgs) {
				var imgGroup = imgs;

				function imgCheck() {
					if (imgGroup.length <= 0) {
						return;
					}
					var screenHeight = document.documentElement.clientHeight;
					var screenScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
					for (var i = 0; i < imgGroup.length;) {
						if (!imgGroup[i].screenTop) {
							imgGroup[i].screenTop = getElementTop(imgGroup[i]);
						}
						if (getElementTop(imgGroup[i]) >= screenScrollTop && getElementTop(imgGroup[i]) <= screenScrollTop + screenHeight) {
							imgGroup[i].src = imgGroup[i].getAttribute("_src");
							imgGroup.splice(i, 1);
						} else {
							i++;
						}
					}
					setTimeout(imgCheck, 200)
				}
				imgCheck();
			}
			return {
				init: function() {
					_lazyImgs = getLazyImgs();

					imgOnLoadCheck(_lazyImgs);
				}
			}
		}
		img_onload().init();
	
});


/*	
 *	焦点图插件
 */
(function($){
	$.fn.slide=function(options){
		$.fn.slide.deflunt={
		effect : "fade", //效果 || fade：渐显； || top：上滚动；|| left：左滚动；|| topLoop：上循环滚动；|| leftLoop：左循环滚动；|| topMarquee：上无缝循环滚动；|| leftMarquee：左无缝循环滚动；
		autoPlay:false, //自动运行
		delayTime : 500, //效果持续时间
		interTime : 2500,//自动运行间隔。当effect为无缝滚动的时候，相当于运行速度。
		defaultIndex : 0,//默认的当前位置索引。0是第一个
		titCell:".hd li",//导航元素
		mainCell:".bd",//内容元素的父层对象
		trigger: "mouseover",//触发方式 || mouseover：鼠标移过触发；|| click：鼠标点击触发；
		scroll:1,//每次滚动个数。
		vis:1,//visible，可视范围个数，当内容个数少于可视个数的时候，不执行效果。
		titOnClassName:"on",//当前位置自动增加的class名称
		autoPage:false,//系统自动分页，当为true时，titCell则为导航元素父层对象，同时系统会在titCell里面自动插入分页li元素(1.2版本新增)
		prevCell:".prev",//前一个按钮元素。
		nextCell:".next"//后一个按钮元素。
		};

		return this.each(function() {
			var opts = $.extend({},$.fn.slide.deflunt,options);
			var index=opts.defaultIndex;
			var prevBtn = $(opts.prevCell, $(this));
			var nextBtn = $(opts.nextCell, $(this));
			var navObj = $(opts.titCell, $(this));//导航子元素结合
			var navObjSize = navObj.size();
			var conBox = $(opts.mainCell , $(this));//内容元素父层对象
			var conBoxSize=conBox.children().size();
			var slideH=0;
			var slideW=0;
			var selfW=0;
			var selfH=0;
			var autoPlay = opts.autoPlay;
			var inter=null;//setInterval名称 
			var oldIndex = index;

			if(conBoxSize<opts.vis) return; //当内容个数少于可视个数，不执行效果。

			//处理分页
			if( navObjSize==0 )navObjSize=conBoxSize;
			if( opts.autoPage ){
				var tempS = conBoxSize-opts.vis;
				navObjSize=1+parseInt(tempS%opts.scroll!=0?(tempS/opts.scroll+1):(tempS/opts.scroll)); 
				navObj.html(""); 
				for( var i=0; i<navObjSize; i++ ){ navObj.append("<li>"+(i+1)+"</li>") }
				var navObj = $("li", navObj);//重置导航子元素对象
			}

			conBox.children().each(function(){ //取最大值
				if( $(this).width()>selfW ){ selfW=$(this).width(); slideW=$(this).outerWidth(true);  }
				if( $(this).height()>selfH ){ selfH=$(this).height(); slideH=$(this).outerHeight(true);  }
			});

			switch(opts.effect)
			{
				case "top": conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+opts.vis*slideH+'px"></div>').css( { "position":"relative","padding":"0","margin":"0"}).children().css( {"height":selfH} ); break;
				case "left": conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+opts.vis*slideW+'px"></div>').css( { "width":conBoxSize*slideW,"position":"relative","overflow":"hidden","padding":"0","margin":"0"}).children().css( {"float":"left","width":selfW} ); break;
				case "leftLoop":
				case "leftMarquee":
					conBox.children().clone().appendTo(conBox).clone().prependTo(conBox); 
					conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+opts.vis*slideW+'px"></div>').css( { "width":conBoxSize*slideW*3,"position":"relative","overflow":"hidden","padding":"0","margin":"0","left":-conBoxSize*slideW}).children().css( {"float":"left","width":selfW}  ); break;
				case "topLoop":
				case "topMarquee":
					conBox.children().clone().appendTo(conBox).clone().prependTo(conBox); 
					conBox.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+opts.vis*slideH+'px"></div>').css( { "height":conBoxSize*slideH*3,"position":"relative","padding":"0","margin":"0","top":-conBoxSize*slideH}).children().css( {"height":selfH} ); break;
			}

			//效果函数
			var doPlay=function(){
				switch(opts.effect)
				{
					case "fade": case "top": case "left": if ( index >= navObjSize) { index = 0; } else if( index < 0) { index = navObjSize-1; } break;
					case "leftMarquee":case "topMarquee": if ( index>= 2) { index=1; } else if( index<0) { index = 0; } break;
					case "leftLoop": case "topLoop":
						var tempNum = index - oldIndex; 
						if( navObjSize>2 && tempNum==-(navObjSize-1) ) tempNum=1;
						if( navObjSize>2 && tempNum==(navObjSize-1) ) tempNum=-1;
						var scrollNum = Math.abs( tempNum*opts.scroll );
						if ( index >= navObjSize) { index = 0; } else if( index < 0) { index = navObjSize-1; }
					break;
				}
				switch (opts.effect)
				{
					case "fade":conBox.children().stop(true,true).eq(index).fadeIn(opts.delayTime).siblings().hide();break;
					case "top":conBox.stop(true,true).animate({"top":-index*opts.scroll*slideH},opts.delayTime);break;
					case "left":conBox.stop(true,true).animate({"left":-index*opts.scroll*slideW},opts.delayTime);break;
					case "leftLoop":
						if(tempNum<0 ){
								conBox.stop(true,true).animate({"left":-(conBoxSize-scrollNum )*slideW},opts.delayTime,function(){
								for(var i=0;i<scrollNum;i++){ conBox.children().last().prependTo(conBox); }
								conBox.css("left",-conBoxSize*slideW);
							});
						}
						else{
							conBox.stop(true,true).animate({"left":-( conBoxSize + scrollNum)*slideW},opts.delayTime,function(){
								for(var i=0;i<scrollNum;i++){ conBox.children().first().appendTo(conBox); }
								conBox.css("left",-conBoxSize*slideW);
							});
						}break;// leftLoop end

					case "topLoop":
						if(tempNum<0 ){
								conBox.stop(true,true).animate({"top":-(conBoxSize-scrollNum )*slideH},opts.delayTime,function(){
								for(var i=0;i<scrollNum;i++){ conBox.children().last().prependTo(conBox); }
								conBox.css("top",-conBoxSize*slideH);
							});
						}
						else{
							conBox.stop(true,true).animate({"top":-( conBoxSize + scrollNum)*slideH},opts.delayTime,function(){
								for(var i=0;i<scrollNum;i++){ conBox.children().first().appendTo(conBox); }
								conBox.css("top",-conBoxSize*slideH);
							});
						}break;//topLoop end

					case "leftMarquee":
						var tempLeft = conBox.css("left").replace("px",""); 

						if(index==0 ){
								conBox.animate({"left":++tempLeft},0,function(){
									if( conBox.css("left").replace("px","")>= 0){ for(var i=0;i<conBoxSize;i++){ conBox.children().last().prependTo(conBox); }conBox.css("left",-conBoxSize*slideW);}
								});
						}
						else{
								conBox.animate({"left":--tempLeft},0,function(){
									if(  conBox.css("left").replace("px","")<= -conBoxSize*slideW*2){ for(var i=0;i<conBoxSize;i++){ conBox.children().first().appendTo(conBox); }conBox.css("left",-conBoxSize*slideW);}
								});
						}break;// leftMarquee end

						case "topMarquee":
						var tempTop = conBox.css("top").replace("px",""); 
							if(index==0 ){
									conBox.animate({"top":++tempTop},0,function(){
										if( conBox.css("top").replace("px","") >= 0){ for(var i=0;i<conBoxSize;i++){ conBox.children().last().prependTo(conBox); }conBox.css("top",-conBoxSize*slideH);}
									});
							}
							else{
									conBox.animate({"top":--tempTop},0,function(){
										if( conBox.css("top").replace("px","")<= -conBoxSize*slideH*2){ for(var i=0;i<conBoxSize;i++){ conBox.children().first().appendTo(conBox); }conBox.css("top",-conBoxSize*slideH);}
									});
							}break;// topMarquee end


				}//switch end
					navObj.removeClass(opts.titOnClassName).eq(index).addClass(opts.titOnClassName);
					oldIndex=index;
			};
			//初始化执行
			doPlay();

			//自动播放
			if (autoPlay) {
					if( opts.effect=="leftMarquee" || opts.effect=="topMarquee"  ){
						index++; inter = setInterval(doPlay, opts.interTime);
						conBox.hover(function(){if(autoPlay){clearInterval(inter); }},function(){if(autoPlay){clearInterval(inter);inter = setInterval(doPlay, opts.interTime);}});
					}else{
						 inter=setInterval(function(){index++; doPlay() }, opts.interTime); 
						$(this).hover(function(){if(autoPlay){clearInterval(inter); }},function(){if(autoPlay){clearInterval(inter); inter=setInterval(function(){index++; doPlay() }, opts.interTime); }});
					}
			}

			//鼠标事件
			var mst;
			if(opts.trigger=="mouseover"){
				navObj.hover(function(){ clearTimeout(mst); index=navObj.index(this); mst = window.setTimeout(doPlay,200); }, function(){ if(!mst)clearTimeout(mst); });
			}else{ navObj.click(function(){index=navObj.index(this);  doPlay(); })  }
			nextBtn.click(function(){ index++; doPlay(); });
			prevBtn.click(function(){  index--; doPlay(); });

    	});//each End

	};//slide End

})(jQuery);



//旋转木马
jQuery.extend({roundabout_shape:{def:'lazySusan',lazySusan:function(r,a,t){return{x:Math.sin(r+a),y:(Math.sin(r+3*Math.PI/2+a)/8)*t,z:(Math.cos(r+a)+1)/2,scale:(Math.sin(r+Math.PI/2+a)/2)+0.5}}}});jQuery.fn.roundabout=function(){var options=(typeof arguments[0]!='object')?{}:arguments[0];options={bearing:(typeof options.bearing=='undefined')?0.0:parseFloat(options.bearing%360.0,4),tilt:(typeof options.tilt=='undefined')?0.0:parseFloat(options.tilt,4),minZ:(typeof options.minZ=='undefined')?100:parseInt(options.minZ,10),maxZ:(typeof options.maxZ=='undefined')?400:parseInt(options.maxZ,10),minOpacity:(typeof options.minOpacity=='undefined')?0.40:parseFloat(options.minOpacity,2),maxOpacity:(typeof options.maxOpacity=='undefined')?1.00:parseFloat(options.maxOpacity,2),minScale:(typeof options.minScale=='undefined')?0.40:parseFloat(options.minScale,2),maxScale:(typeof options.maxScale=='undefined')?1.00:parseFloat(options.maxScale,2),duration:(typeof options.duration=='undefined')?600:parseInt(options.duration,10),btnNext:options.btnNext||null,btnPrev:options.btnPrev||null,easing:options.easing||'swing',clickToFocus:(options.clickToFocus!==false),focusBearing:(typeof options.focusBearing=='undefined')?0.0:parseFloat(options.focusBearing%360.0,4),shape:options.shape||'lazySusan',debug:options.debug||false,childSelector:options.childSelector||'li',startingChild:(typeof options.startingChild=='undefined')?null:parseInt(options.startingChild,10)};this.each(function(i){var ref=jQuery(this);var childSelector=options.childSelector;var children=ref.children(childSelector);var period=360.0/children.length;var startingBearing=(options.startingChild===null)?options.bearing:options.startingChild*period;ref.addClass('roundabout-holder').css('padding',0).css('position','relative').css('z-index',options.minZ).attr('bearing',startingBearing).attr('tilt',options.tilt).attr('minZ',options.minZ).attr('maxZ',options.maxZ).attr('minOpacity',options.minOpacity).attr('maxOpacity',options.maxOpacity).attr('minScale',options.minScale).attr('maxScale',options.maxScale).attr('duration',options.duration).attr('easing',options.easing).attr('clickToFocus',options.clickToFocus).attr('focusBearing',options.focusBearing).attr('animating','0').attr('childInFocus',-1).attr('shape',options.shape).attr('period',period).attr('debug',options.debug).attr('childSelector',options.childSelector).fadeIn("slow");children.each(function(i){var degrees=period*i;var startPos;jQuery(this).addClass('roundabout-moveable-item').css('position','absolute').attr('degrees',degrees);startPos=[jQuery(this).width(),jQuery(this).height(),parseInt(jQuery(this).css('font-size'),10)];jQuery(this).attr('startPos',startPos.join(','));if(options.clickToFocus===true){jQuery(this).click(function(e){if(!jQuery.roundabout_isInFocus(ref,degrees)){e.preventDefault();if(ref.attr('animating')=='0'){ref.roundabout_animateAngleToFocus(degrees)}return false}})}});if(options.btnNext){jQuery(options.btnNext).click(function(e){e.preventDefault();if(ref.attr('animating')=='0'){ref.roundabout_animateToNextChild()}return false})}if(options.btnPrev){jQuery(options.btnPrev).click(function(e){e.preventDefault();if(ref.attr('animating')=='0'){ref.roundabout_animateToPreviousChild()}return false})}ref.roundabout_updateChildPositions()});return this};jQuery.fn.roundabout_setTilt=function(newTilt){this.each(function(i){jQuery(this).attr('tilt',newTilt);jQuery(this).roundabout_updateChildPositions()});return this};jQuery.fn.roundabout_setBearing=function(newBearing){this.each(function(i){jQuery(this).attr('bearing',parseFloat(newBearing%360,4));jQuery(this).roundabout_updateChildPositions()});if(typeof arguments[1]==='function'){var callback=arguments[1];setTimeout(function(){callback()},0)}return this};jQuery.fn.roundabout_adjustBearing=function(delta){delta=parseFloat(delta,4);if(delta!==0){this.each(function(i){jQuery(this).attr('bearing',jQuery.roundabout_getBearing(jQuery(this))+delta);jQuery(this).roundabout_updateChildPositions()})}return this};jQuery.fn.roundabout_adjustTilt=function(delta){delta=parseFloat(delta,4);this.each(function(i){jQuery(this).attr('tilt',parseFloat(jQuery(this).attr('tilt'),4)+delta);jQuery(this).roundabout_updateChildPositions()});return this};jQuery.fn.roundabout_animateToBearing=function(bearing){bearing=parseFloat(bearing,4);var currentTime=new Date();var data=(typeof arguments[3]!=='object')?null:arguments[3];var duration=(typeof arguments[1]=='undefined')?null:arguments[1];var easingType=(typeof arguments[2]!='undefined')?arguments[2]:null;this.each(function(i){var ref=jQuery(this),timer,easingFn,newBearing;var thisDuration=(duration===null)?parseInt(ref.attr('duration'),10):duration;var thisEasingType=(easingType!==null)?easingType:ref.attr('easing')||'swing';if(data===null){data={timerStart:currentTime,start:jQuery.roundabout_getBearing(ref),totalTime:thisDuration}}timer=currentTime-data.timerStart;if(timer<thisDuration){ref.attr('animating','1');if(typeof jQuery.easing.def=='string'){easingFn=jQuery.easing[thisEasingType]||jQuery.easing[jQuery.easing.def];newBearing=easingFn(null,timer,data.start,bearing-data.start,data.totalTime)}else{newBearing=jQuery.easing[thisEasingType]((timer/data.totalTime),timer,data.start,bearing-data.start,data.totalTime)}ref.roundabout_setBearing(newBearing,function(){ref.roundabout_animateToBearing(bearing,thisDuration,thisEasingType,data)})}else{bearing=(bearing<0)?bearing+360:bearing%360;ref.attr('animating','0');ref.roundabout_setBearing(bearing)}});return this};jQuery.fn.roundabout_animateToDelta=function(delta){var duration,easing;if(typeof arguments[1]!=='undefined'){duration=arguments[1]}if(typeof arguments[2]!=='undefined'){easing=arguments[2]}this.each(function(i){delta=jQuery.roundabout_getBearing(jQuery(this))+delta;jQuery(this).roundabout_animateToBearing(delta,duration,easing)});return this};jQuery.fn.roundabout_animateToChild=function(childPos){var duration,easing;if(typeof arguments[1]!=='undefined'){duration=arguments[1]}if(typeof arguments[2]!=='undefined'){easing=arguments[2]}this.each(function(i){var ref=jQuery(this);if(parseInt(ref.attr('childInFocus'),10)!==childPos&&ref.attr('animating','0')){var child=jQuery(ref.children(ref.attr('childSelector'))[childPos]);ref.roundabout_animateAngleToFocus(parseFloat(child.attr('degrees'),4),duration,easing)}});return this};jQuery.fn.roundabout_animateToNextChild=function(){var duration,easing;if(typeof arguments[0]!=='undefined'){duration=arguments[0]}if(typeof arguments[1]!=='undefined'){easing=arguments[1]}this.each(function(i){if(jQuery(this).attr('animating','0')){var bearing=360.0-jQuery.roundabout_getBearing(jQuery(this));var period=parseFloat(jQuery(this).attr('period'),4),j=0,range;while(true){range={lower:period*j,upper:period*(j+1)};if(bearing<=range.upper&&bearing>range.lower){jQuery(this).roundabout_animateToDelta(bearing-range.lower,duration,easing);break}j++}}});return this};jQuery.fn.roundabout_animateToPreviousChild=function(){var duration,easing;if(typeof arguments[0]!=='undefined'){duration=arguments[0]}if(typeof arguments[1]!=='undefined'){easing=arguments[1]}this.each(function(i){if(jQuery(this).attr('animating','0')){var bearing=360.0-jQuery.roundabout_getBearing(jQuery(this));var period=parseFloat(jQuery(this).attr('period'),4),j=0,range;while(true){range={lower:period*j,upper:period*(j+1)};if(bearing>=range.lower&&bearing<range.upper){jQuery(this).roundabout_animateToDelta(bearing-range.upper,duration,easing);break}j++}}});return this};jQuery.fn.roundabout_animateAngleToFocus=function(target){var duration,easing;if(typeof arguments[1]!=='undefined'){duration=arguments[1]}if(typeof arguments[2]!=='undefined'){easing=arguments[2]}this.each(function(i){var delta=jQuery.roundabout_getBearing(jQuery(this))-target;delta=(Math.abs(360.0-delta)<Math.abs(0.0-delta))?360.0-delta:0.0-delta;delta=(delta>180)?-(360.0-delta):delta;if(delta!==0){jQuery(this).roundabout_animateToDelta(delta,duration,easing)}});return this};jQuery.fn.roundabout_updateChildPositions=function(){this.each(function(i){var ref=jQuery(this);var inFocus=-1;var data={bearing:jQuery.roundabout_getBearing(ref),tilt:parseFloat(ref.attr('tilt'),4),stage:{width:Math.floor(ref.width()*0.9),height:Math.floor(ref.height()*0.9)},animating:ref.attr('animating'),inFocus:parseInt(ref.attr('childInFocus'),10),focusBearingRad:jQuery.roundabout_degToRad(parseFloat(ref.attr('focusBearing'),4)),shape:jQuery.roundabout_shape[ref.attr('shape')]||jQuery.roundabout_shape[jQuery.roundabout_shape.def]};data.midStage={width:data.stage.width/2,height:data.stage.height/2};data.nudge={width:data.midStage.width+data.stage.width*0.05,height:data.midStage.height+data.stage.height*0.05};data.zValues={min:parseInt(ref.attr('minZ'),10),max:parseInt(ref.attr('maxZ'),10)};data.zValues.diff=data.zValues.max-data.zValues.min;data.opacity={min:parseFloat(ref.attr('minOpacity'),2),max:parseFloat(ref.attr('maxOpacity'),2)};data.opacity.diff=data.opacity.max-data.opacity.min;data.scale={min:parseFloat(ref.attr('minScale'),2),max:parseFloat(ref.attr('maxScale'),2)};data.scale.diff=data.scale.max-data.scale.min;ref.children(ref.attr('childSelector')).each(function(i){if(jQuery.roundabout_updateChildPosition(jQuery(this),ref,data,i)&&data.animating=='0'){inFocus=i;jQuery(this).addClass('roundabout-in-focus')}else{jQuery(this).removeClass('roundabout-in-focus')}});if(inFocus!==data.inFocus){jQuery.roundabout_triggerEvent(ref,data.inFocus,'blur');if(inFocus!==-1){jQuery.roundabout_triggerEvent(ref,inFocus,'focus')}ref.attr('childInFocus',inFocus)}});return this};jQuery.roundabout_getBearing=function(el){return parseFloat(el.attr('bearing'),4)%360};jQuery.roundabout_degToRad=function(degrees){return(degrees%360.0)*Math.PI/180.0};jQuery.roundabout_isInFocus=function(el,target){return(jQuery.roundabout_getBearing(el)%360===(target%360))};jQuery.roundabout_triggerEvent=function(el,child,eventType){return(child<0)?this:jQuery(el.children(el.attr('childSelector'))[child]).trigger(eventType)};jQuery.roundabout_updateChildPosition=function(child,container,data,childPos){var ref=jQuery(child),out=[];var startPos=ref.attr('startPos').split(',');var itemData={startWidth:startPos[0],startHeight:startPos[1],startFontSize:startPos[2],degrees:parseFloat(ref.attr('degrees'),4)};var rad=jQuery.roundabout_degToRad((360.0-itemData.degrees)+data.bearing);while(rad<0){rad=rad+Math.PI*2}while(rad>Math.PI*2){rad=rad-Math.PI*2}var factors=data.shape(rad,data.focusBearingRad,data.tilt);factors.scale=(factors.scale>1)?1:factors.scale;factors.adjustedScale=(data.scale.min+(data.scale.diff*factors.scale)).toFixed(4);factors.width=factors.adjustedScale*itemData.startWidth;factors.height=factors.adjustedScale*itemData.startHeight;ref.css('left',((factors.x*data.midStage.width+data.nudge.width)-factors.width/2.0).toFixed(2)+'px').css('top',((factors.y*data.midStage.height+data.nudge.height)-factors.height/2.0).toFixed(2)+'px').css('width',factors.width.toFixed(2)+'px').css('height',factors.height.toFixed(2)+'px').css('opacity',(data.opacity.min+(data.opacity.diff*factors.scale)).toFixed(2)).css('z-index',parseInt(data.zValues.min+(data.zValues.diff*factors.z),10)).css('font-size',(factors.adjustedScale*itemData.startFontSize).toFixed(2)+'px').attr('current-scale',factors.adjustedScale);if(container.attr('debug')=='true'){out.push('<div style="font-weight: normal; font-size: 10px; padding: 2px; width: '+ref.css('width')+'; background-color: #ffc;">');out.push('<strong style="font-size: 12px; white-space: nowrap;">Child '+childPos+'</strong><br />');out.push('<strong>left:</strong> '+ref.css('left')+'<br /><strong>top:</strong> '+ref.css('top')+'<br />');out.push('<strong>width:</strong> '+ref.css('width')+'<br /><strong>opacity:</strong> '+ref.css('opacity')+'<br />');out.push('<strong>z-index:</strong> '+ref.css('z-index')+'<br /><strong>font-size:</strong> '+ref.css('font-size')+'<br />');out.push('<strong>scale:</strong> '+ref.attr('current-scale'));out.push('</div>');ref.html(out.join(''))}return jQuery.roundabout_isInFocus(container,itemData.degrees)};

jQuery.easing['jswing']=jQuery.easing['swing'];jQuery.extend(jQuery.easing,{def:'easeOutQuad',swing:function(x,t,b,c,d){return jQuery.easing[jQuery.easing.def](x,t,b,c,d);},easeInQuad:function(x,t,b,c,d){return c*(t/=d)*t+b;},easeOutQuad:function(x,t,b,c,d){return-c*(t/=d)*(t-2)+b;},easeInOutQuad:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t+b;return-c/2*((--t)*(t-2)-1)+b;},easeInCubic:function(x,t,b,c,d){return c*(t/=d)*t*t+b;},easeOutCubic:function(x,t,b,c,d){return c*((t=t/d-1)*t*t+1)+b;},easeInOutCubic:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t+b;return c/2*((t-=2)*t*t+2)+b;},easeInQuart:function(x,t,b,c,d){return c*(t/=d)*t*t*t+b;},easeOutQuart:function(x,t,b,c,d){return-c*((t=t/d-1)*t*t*t-1)+b;},easeInOutQuart:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t+b;return-c/2*((t-=2)*t*t*t-2)+b;},easeInQuint:function(x,t,b,c,d){return c*(t/=d)*t*t*t*t+b;},easeOutQuint:function(x,t,b,c,d){return c*((t=t/d-1)*t*t*t*t+1)+b;},easeInOutQuint:function(x,t,b,c,d){if((t/=d/2)<1)return c/2*t*t*t*t*t+b;return c/2*((t-=2)*t*t*t*t+2)+b;},easeInSine:function(x,t,b,c,d){return-c*Math.cos(t/d*(Math.PI/2))+c+b;},easeOutSine:function(x,t,b,c,d){return c*Math.sin(t/d*(Math.PI/2))+b;},easeInOutSine:function(x,t,b,c,d){return-c/2*(Math.cos(Math.PI*t/d)-1)+b;},easeInExpo:function(x,t,b,c,d){return(t==0)?b:c*Math.pow(2,10*(t/d-1))+b;},easeOutExpo:function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b;},easeInOutExpo:function(x,t,b,c,d){if(t==0)return b;if(t==d)return b+c;if((t/=d/2)<1)return c/2*Math.pow(2,10*(t-1))+b;return c/2*(-Math.pow(2,-10*--t)+2)+b;},easeInCirc:function(x,t,b,c,d){return-c*(Math.sqrt(1-(t/=d)*t)-1)+b;},easeOutCirc:function(x,t,b,c,d){return c*Math.sqrt(1-(t=t/d-1)*t)+b;},easeInOutCirc:function(x,t,b,c,d){if((t/=d/2)<1)return-c/2*(Math.sqrt(1-t*t)-1)+b;return c/2*(Math.sqrt(1-(t-=2)*t)+1)+b;},easeInElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;},easeOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b;},easeInOutElastic:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4;}
else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b;},easeInBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b;},easeOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b;},easeInOutBack:function(x,t,b,c,d,s){if(s==undefined)s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b;},easeInBounce:function(x,t,b,c,d){return c-jQuery.easing.easeOutBounce(x,d-t,0,c,d)+b;},easeOutBounce:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b;}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b;}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b;}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b;}},easeInOutBounce:function(x,t,b,c,d){if(t<d/2)return jQuery.easing.easeInBounce(x,t*2,0,c,d)*.5+b;return jQuery.easing.easeOutBounce(x,t*2-d,0,c,d)*.5+c*.5+b;}});
//旋转木马 end


function randomNum(n){ 
    var t='gm'; 
    for(var i=0;i<n;i++){ 
        t+=Math.floor(Math.random()*10); 
    } 
    return t; 
}

/*
     FILE ARCHIVED ON 08:40:04 Aug 29, 2018 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 03:59:00 Dec 27, 2018.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  LoadShardBlock: 52.839 (3)
  esindex: 0.009
  captures_list: 176.774
  CDXLines.iter: 11.389 (3)
  PetaboxLoader3.datanode: 79.566 (4)
  exclusion.robots: 108.607
  xauthn.chkprivs: 0.058
  exclusion.robots.policy: 108.594
  RedisCDXSource: 1.59
  PetaboxLoader3.resolve: 31.373
  xauthn.identify: 108.148
  load_resource: 98.017
*/