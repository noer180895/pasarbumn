$(document).ready(function(){    
    $('.box_price>div>input[type="button"]').on('click',function(){
        window.open(global['base_url']+'index.php/main/hasil/','_top');
    });
    $(".button_close").on('click',function(){
    	$(this).parent().hide();
    });
    $(".box_filter_flight>div>div.trigger_box_popup").on('click',function(){
    	var allChild = $('.box_filter_flight>div');
    	for(var i=0; i<allChild.length; i++){
    		$(allChild[i]).find("div.box_popup").hide();
    	}
    	$(this).parent().find("div.box_popup").show();
    });
    $('.trigger_other_date').on('click',function(){
    	$('.box_service').show();
    });
});