$(function(){
	$('#menu-left a').click(function(){
		let file = $(this).attr('data-file');
		//console.log(file);
		$('#content-body').load('/media/pages/'+file);
	});
});

const myfunc = () => ({
	
});

const myfunc2 = () => {
	
};