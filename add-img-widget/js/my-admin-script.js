(function($){
$(document).ready(function(){
	var img_wid=(function(){
		var frame,$blk,$inp,$butt;
		var init=function(element){
			$blk=$(element);
			$inp=$blk.find('input');
			$butt=$blk.find('button');
			listend();
  		}
		var listend=function(){
			$butt.on('click',clk_func);
		}
		var clk_func=function(event){
			event.preventDefault();   
 		    if ( frame ) {
		      frame.open();
		      return;
		    }
  		    frame = wp.media({
		      title: 'Select or Upload Media',
		      button: {
		        text: 'Use this media'
		      },
		      multiple: false  
		    });
		    frame.on( 'select', function() {
            var attachment = frame.state().get('selection').toJSON();
 		     $inp.val(attachment[0].url);
  		    });
  		    frame.open();
		}
		return {
			'init':function(element){ init(element);}
		}
	})();
	var img_wid_01= img_wid.init('.img-wid-blk');
})
	
})(jQuery);