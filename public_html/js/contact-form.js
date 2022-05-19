/*
--------------------------------
Ajax Contact Form
--------------------------------
+ https://github.com/mehedidb/Ajax_Contact_Form
+ A Simple Ajax Contact Form developed in PHP with HTML5 Form validation.
+ Has a fallback in jQuery for browsers that do not support HTML5 form validation.
+ version 1.0.1
+ Copyright 2016 Mehedi Hasan Nahid
+ Licensed under the MIT license
+ https://github.com/mehedidb/Ajax_Contact_Form
*/

(function ($, window, document, undefined) {
    'use strict';

    var $form = $('#contact-form');

    $form.submit(function (e) {
        // remove the error class
        $('.form-group').removeClass('has-error');
        $('.help-block').remove();

        // get the form data
        var formData = {
            'name' : $('input[name="fname"]').val(),
            'email' : $('input[name="femail"]').val(),
            'person' : $('input[name="fperson"]').val(),
            'date' : $('input[name="fdate"]').val(),
            'time' : $('input[name="ftime"]').val(),
            'mobile' : $('input[name="mobile"]').val(),
            'message' : $('textarea[name="fmessage"]').val()
        };

        // process the form
        $.ajax({
            type : 'POST',
            url  : 'process.php',
            data : formData,
            dataType : 'json',
            encode : true
        }).done(function (data) {
            // handle errors
            if (!data.success) {
                if (data.errors.name) {
                    $('#name-field').addClass('has-error');
                    $('#name-field').find('.col-md-6').append('<span class="help-block">' + data.errors.name + '</span>');
                }
                if (data.errors.email) {
                    $('#email-field').addClass('has-error');
                    $('#email-field').find('.col-md-6').append('<span class="help-block">' + data.errors.email + '</span>');
                }
                if (data.errors.person) {
                    $('#person-field').addClass('has-error');
                    $('#person-field').find('.col-md-6').append('<span class="help-block">' + data.errors.person + '</span>');
                }
                if (data.errors.date) {
                    $('#date-field').addClass('has-error');
                    $('#date-field').find('.col-md-6').append('<span class="help-block">' + data.errors.date + '</span>');
                }
                if (data.errors.time) {
                    $('#time-field').addClass('has-error');
                    $('#time-field').find('.col-md-6').append('<span class="help-block">' + data.errors.time + '</span>');
                }
                if (data.errors.mobile) {
                    $('#mobile-field').addClass('has-error');
                    $('#mobile-field').find('.col-md-6').append('<span class="help-block">' + data.errors.mobile + '</span>');
                }
                if (data.errors.message) {
                    $('#message-field').addClass('has-error');
                    $('#message-field').find('.col-md-12').append('<span class="help-block">' + data.errors.message + '</span>');
                }
            } else {
                // display success message
                $form.html('<div class="alert alert-success">' + data.message + '</div>');
            }
        }).fail(function (data) {
            // for debug
            console.log(data)
        });

        e.preventDefault();
    });
}(jQuery, window, document));
