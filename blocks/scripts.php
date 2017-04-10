<script src="js/jquery-2.1.3.min.js"></script>

<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!-- Маска поля ввода !-->
<script src="js/inputmask.js"></script>
<script src="js/jquery.inputmask.js"></script>

<!-- Плавное появление блоков !-->
<script src="js/scrollReveal.js"></script>

<!-- Плавные анимации !-->
<script src="js/jquery.easing.js"></script>

<!-- AJAX-форма !-->
<script src="js/jquery.form.js"></script>

<!-- Кроссбраузерность форм !-->
<script type="text/javascript" src="js/modernizr-2.5.3.forms.js"></script>
<script type="text/javascript" data-webforms2-support="validation" src="js/html5forms.js"></script>

<!-- Карусель и модальные окна !-->
<script src="js/owl/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>

<!-- Textillate -->
<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.textillate.js"></script>

<!-- Карта -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUaCNfcDZQL7nZK07DQmAHsEetCCMIQ5w&callback=initMap" async defer></script>
<script>
  function initMap() {
    var myLatLng = {lat: 55.726542, lng: 37.639794};

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      zoom: 15,
	  noClear: true
    });
  }
</script>

<script src="js/scripts.min.js"></script>