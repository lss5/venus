import './bootstrap';

import * as bootstrap from 'bootstrap';

import.meta.glob([
    '../fonts/**',
    '../images/**',
]);

import jQuery from 'jquery';
window.$ = jQuery;

$('form#contact-form').submit(function(e) {
    e.preventDefault();
    
    var url = $(this).attr("action");
    var form = this;

    $(this).find('input[name="name"]').siblings('div').html('');
    $(this).find('input[name="phone"]').siblings('div').html('');
    $(this).find('input[name="politics"]').siblings('div').html('');

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: url,
        data:$(form).serialize(),
        processData: false,
        success: (response) => {
            $(form).siblings('div[role="alert"]').removeClass('d-none');
            $(form).find('button[type="submit"]').addClass('disabled');
        },
        error: (response) => {
            if (response.status === 422) {
                $.each(response.responseJSON.errors, function(key, value) {
                    $(form).find('input[name="'+key+'"]').siblings('div').html(value);
                });
            } else {
                alert('Необходимо перезагрузить страницу');
            }
        }
    });

});
