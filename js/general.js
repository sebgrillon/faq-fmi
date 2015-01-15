function captcha() {
	$(document).ready(function() {
	    $(document).one('mousemove', function() {
	        var $form = $('#form1');
	        var action = $form.attr('action').replace('/bot\?', '');
	        $form.attr('action', action);
	    });
	});
}
