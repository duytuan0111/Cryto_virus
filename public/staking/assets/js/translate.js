 function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false, layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
}
function triggerHtmlEvent(element, eventName) {

  var event;
  if (document.createEvent) {
    event = document.createEvent('HTMLEvents');
    event.initEvent(eventName, true, true);
    element.dispatchEvent(event);
  } else {
    event = document.createEventObject();
    event.eventType = eventName;
    element.fireEvent('on' + event.eventType, event);
  }
}

jQuery('.lang-select').click(function() {
  var theLang = jQuery(this).attr('data-lang');
  jQuery('.goog-te-combo').val(theLang);
  window.location = jQuery(this).attr('href');
  location.reload(true);
  $(document).ready(function() {
    document.getElementById('lang_es').innerHTML  = '&nbsp' + theLang;
    document.getElementById('lang_selected').value  = theLang;

  });
  
});

var theLang = jQuery('.lang-select').attr('data-lang');
var gg2  = document.getElementById('google_translate_element');
var gg   = $('.goog-te-combo');
var data = $('.goog-te-combo option:selected').text();
var trans = jQuery('select.goog-te-combo');
var gObj = $('.goog-te-combo');
var db = gg.get(0);
var lang_selected = document.getElementById('lang_selected').value;
