
(function ($) {

	function createPosts(_POST) {

		// selectors
		const response = $('#response');
		const submit = $('#submit');
		const spinner = $('.spinner');

		//
		if ('undefined' === typeof _POST) {
			_POST = {};
		}

		//
		_POST._ajax_nonce = my_ajax_obj.nonce;
		_POST.action = 'my_create_product';

		//
		$.ajax({
			dataType: 'json',
			type: 'POST',
			url: window.ajaxurl,
			data: _POST,
			beforeSend: function () {
				submit.prop('disabled', true);
				spinner.addClass('is-active');
			},
			success: function (data, textStatus, jqXHR) {
				if (data.offset < data.total) {
					_POST.offset = data.offset;
					createPosts(_POST);

					response.append('<div class="notice is-dismissible notice-success"><p>Criados: ' + data.posts_created + '.</p><button type="button" class="notice-dismiss"></button></div>');
				} else {
					response.append('<div class="notice is-dismissible notice-success"><p>Criados: ' + data.posts_created + '.</p><button type="button" class="notice-dismiss"></button></div>');

					spinner.removeClass('is-active');
					submit.removeAttr('disabled');

				}
			},
			fail: function (data, textStatus, xhr) {
				response.append('<div class="notice is-dismissible notice-success"><p>Erro ao criar.</p><button type="button" class="notice-dismiss"></button></div>');

				spinner.removeClass('is-active');
				submit.removeProp('disabled');

			}
		});
	};

	// Document Ready Actions
	$(document).ready(() => {
		$("#action").submit(function (event) {
			event.preventDefault();

			createPosts();
		});
	});

})(jQuery);