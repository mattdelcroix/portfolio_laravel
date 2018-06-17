//Flash gestion
$('div.alert').not('.alert-important').delay(3000).slideUp(300);

//lightbox gestion
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
