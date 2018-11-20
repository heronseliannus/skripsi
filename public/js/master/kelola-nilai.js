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

    var $form = $('#kelolanilai-form');

    $form.submit(function (a) {
        // remove the error class
        $('.form-group').removeClass('has-error');
        $('.help-block').remove();

        // get the form data
        var formNilai = {
            'first_name' : $('input[name="form-firstname"]').val(),
            'last_name' : $('input[name="form-lastname"]').val(),
            'nilai1' : $('textarea[name="form-nilai1"]').val(),
            'nilai2' : $('textarea[name="form-nilai2"]').val(),
            'nilai3' : $('textarea[name="form-nilai3"]').val(),
            'nilai4' : $('textarea[name="form-nilai4"]').val(),
        };
        
        console.log("FORM Nilai", formNilai)
        // process the form
        $.ajax({
            type : 'POST',
            url  : '/nilai',
            data : formNilai,
            dataType : 'json',
            encode : true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        }).done(function (nilai) {
            // handle errors
            if (!data.success) {
                console.log("nilai", nilai)
                // if (data.errors.name) {
                //     $('#name-field').addClass('has-error');
                //     $('#name-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.name + '</span>');
                // }

                // if (data.errors.email) {
                //     $('#email-field').addClass('has-error');
                //     $('#email-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.email + '</span>');
                // }

                // if (data.errors.subject) {
                //     $('#subject-field').addClass('has-error');
                //     $('#subject-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.subject + '</span>');
                // }

                // if (data.errors.message) {
                //     $('#message-field').addClass('has-error');
                //     $('#message-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.message + '</span>');
                // }
            } else {
                // display success message
                $form.html('<div class="alert alert-success">' + nilai.message + '</div>');
            }
        }).fail(function (nilai) {
            // for debug
            console.log(nilai)
        });

        e.preventDefault();
        
    });
}(jQuery, window, document));
