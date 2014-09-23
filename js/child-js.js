//*** Fading in Tagline and phone number ******//
jQuery(document).ready(function () {
    jQuery('#header-banner span.invest').delay(200).fadeTo('slow', 1);
    jQuery('#header-banner span.lease').delay(900).fadeTo('slow', 1);
    jQuery('#header-banner span.manage').delay(1800).fadeTo('slow', 1);
    jQuery('#header-banner span.phone').delay(2400).fadeTo('slow', 1);

});

//*** Make first letter bigger for h2 ******//
jQuery('.fusion-column > h2').children().andSelf().each(function () {
    jQuery(this).html(capitalize_first_letter(jQuery(this).text()));
});


function capitalize_first_letter(str) {
    return str.replace(/\b[A-Z]/g, '<span class="first-letter">$&</span>');
}