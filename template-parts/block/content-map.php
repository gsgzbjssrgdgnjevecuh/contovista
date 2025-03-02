<?php
/**
 * Block Name: Map
 */

$map = get_field( 'google_map' );
$stick = ( get_field( 'stick_this_section_to_the_footer' ) ) ? 'map--footer-stick' : ' ';
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';
?>



<section 
  class="map <?php echo $stick; ?> section logo-color logo-color-dark" 
  id="map"
  data-lat="<?php echo esc_attr($map['lat']); ?>" 
  data-lng="<?php echo esc_attr($map['lng']); ?>" 
  <?php echo $sectionId; ?>
  >
</section>  

<script>
  const mapStyles = [
    {
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "elementType": "labels.text",
      "stylers": [
        {
          "color": "#00294b"
        }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#00294b"
        }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#ffffff"
        }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#bdbdbd"
        }
      ]
    },
    {
      "featureType": "landscape.natural",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5eaed"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#ccd4db"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#16bba7"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#ccd4db"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#ccd4db"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#00294b"
        }
      ]
    },
    {
      "featureType": "transit.line",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#8094a5"
        }
      ]
    },
    {
      "featureType": "transit.station",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#455b73"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#8094a5"
        }
      ]
    }
  ]
  const icon = templateUrl + "/static/img/contovista-pin.svg",
        map = document.querySelector('#map'),
        latitude = parseFloat( map.dataset.lat ),
        longitude = parseFloat( map.dataset.lng) ;

        console.log(latitude);

  function initMap() {
    const center = new google.maps.LatLng(latitude, longitude);
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: center,
      styles: mapStyles 
    });

    new google.maps.Marker({
      position: map.getCenter(),
      icon: icon,
      map: map,
    });
  }

  window.initMap = initMap;
</script>

<script async="false" type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDtE1EVvCuNNr2V8uNIV-pzjK00V_XYSJY&#038;callback=initMap&#038;v=weekly&#038;ver=1.0.0' id='re-google-maps-api-js'></script>
 