"use strict";
/* Variables

/* jQuery
----------------------------------- */
jQuery(document).ready(function($){
  $('.what_is_this').tooltip();
  $('.track_item').on('click',function(){
  	if($(this).attr('for')!='img-1'){
  		$('#img-1').removeAttr('checked');
  	}else if($(this).attr('for')=='img-1'){
  		$('#img-1').attr('checked', 'checked');
  	}
  });
});