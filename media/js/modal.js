$(function(){
	var fx = {
		"initModal" : function(){
			if($('.modal-window').length == 0){
				$('<div>').attr('id', 'overlay').fadeIn(2000).appendTo('body')
				return $('<div>').addClass('modal-window').appendTo('body');
			}else{
				return $('.modal-window');
			}
		}
	}
	$('.tbl_link').click(function(e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		//console.log(id);
		var modal = fx.initModal();
		$.ajax({
			url: '/ajax.php',
			type: 'Post',
			data: 'id='+id,
			timeout: 3000,
			beforeSend: function(){
				console.log('loader');
				$('<div>').addClass('load').html('<img src="/media/img/loader.gif">').appendTo(modal);
			},
			success: function(data){
				$('.load').hide();
				modal.append(data);
			},
			error: function(xhr, status){
				console.log(status);
			}
		});
		$('<a>').attr('href','#')
				.addClass('modal-close')
				.html('&times;')
				.click(function(e){
					e.preventDefault();
					modal.remove();
					$('#overlay').remove();
				})
				.appendTo(modal);
	});
});