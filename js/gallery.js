$(function(){
	var fx={
	"initModal":function(){
		if($('modal_window').length==0){
			$('<div>').addClass('overlay').fadeTo(2000,0.7).appendTo('body'); //дома
			return $('<div>').addClass('modal_window').fadeTo(2000,1).appendTo('body');
		}else{
			return $('.modal_window');
			}	
	},
	};
	$('.gallery img').bind('click',function(event){
		event.preventDefault(); //отменяет действие по умолчанию
		//$(this).addClass('active');
		var data=$(this).attr('id');
		modal=fx.initModal();
		$('<a>').attr('href', '#').addClass('modal-close-btn').html('&times;')
        .click(function(event){
			event.preventDefault();
			//$(modal).remove();
			//$('.overlay').remove();
			$(modal).fadeOut('slow',function(){
				$(this).remove();
				});
				$('.overlay').fadeOut('slow',function(){
				$(this).remove();
				});
            })
        .appendTo(modal);
		$.ajax({'url':'ajax.php',
				'data':'id='+data,
				'type':'POST',
				'success':function(ok){
					modal.append(ok);
				},
				'error':function(msg){
					modal.append(msg);
				}
		});
	});

});