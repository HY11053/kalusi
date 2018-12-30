function hover_cur_index(btn,cnt,cur,num){
	var btn = $(btn);  
	var cnt = $(cnt);
	btn.mouseover(function(){
		var current = $(this).index();
		cnt.hide().eq(current).show();
		if(cur != null){
			btn.removeClass(cur).eq(current).addClass(cur);
		}
	}).eq(num).trigger("mouseenter");
}


$(document).ready(function(){
	$('.banner').hover(function(){
			$('.banner .prev').fadeIn();
			$('.banner .next').fadeIn();
		},function (){ 
			$('.banner .prev').stop(true, true).fadeOut();
			$('.banner .next').stop(true, true).fadeOut();
		}
	 );
	jQuery(".banner").slide({ mainCell:".bd ul",effect:"fade",trigger:"click",autoPlay:true});

	hover_cur('.activity_list ul li','','first');

	hover_cur('.star_nav ul li','.star_img_ul','hover');

	jQuery(".main_expert").slide({ mainCell:".bd ul",effect:"leftLoop",vis:4,trigger:"click"});

	jQuery(".expert_invite").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});

	hover_cur('.main_2 ul li.h','.main_case_con','hover');

	jQuery(".immortal_case").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});

	hover_cur('.main_3 ul li.h','.main_woman_con','hover');
	$(".main_woman_con a").hover(function() {
		$(this).find("p").slideDown("fast");
	}, function() {
		$(this).find("p").stop().slideUp();
	});	

	jQuery(".brand_slide").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});

	hover_cur('.main_nav_son ul li','.index_list_con','hover');

	jQuery(".index_list_mbzx").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});
	jQuery(".index_list_mbwzx").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});
	jQuery(".index_list_qb").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});
	jQuery(".index_list_mf").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});
	jQuery(".index_list_yc").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});
	jQuery(".index_list_fx").slide({ mainCell:".bd ul",effect:"leftLoop",trigger:"click"});


});
/*
     FILE ARCHIVED ON 13:12:31 Aug 29, 2018 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 03:59:26 Dec 27, 2018.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  LoadShardBlock: 59.479 (3)
  esindex: 0.009
  captures_list: 239.924
  CDXLines.iter: 10.393 (3)
  PetaboxLoader3.datanode: 106.572 (4)
  exclusion.robots: 165.261
  xauthn.chkprivs: 0.036
  exclusion.robots.policy: 165.246
  RedisCDXSource: 2.006
  PetaboxLoader3.resolve: 12.617
  xauthn.identify: 164.945
  load_resource: 110.996
*/