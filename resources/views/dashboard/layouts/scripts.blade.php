<script src="{{asset('dashboardAssets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboardAssets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>


<!--end::Base Scripts -->

<!--begin::Page Vendors -->
<script src="{{asset('dashboardAssets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAIiPJXATL1VQa0KhqL9eWDo834B6v9O2M&libraries=places" type="text/javascript"></script>
<script src="{{ asset('dashboardAssets/vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Snippets -->
<script src="{{ asset('dashboardAssets/demo/default/custom/crud/forms/widgets/dropzone.js') }}" type="text/javascript"></script>
{{--<script src="{{ asset('dashboardAssets/demo/default/custom/components/maps/google-maps.js') }}" type="text/javascript"></script>--}}

<script src="{{ asset('dashboardAssets/demo/default/custom/crud/forms/widgets/summernote.js') }}" type="text/javascript"></script>
<script src="{{asset('dashboardAssets/app/js/dashboard.js')}}" type="text/javascript"></script>
<script>
    var latitude = "{{ $location->latitude }}";
    var langitude = "{{ $location->langitude }}";
    var GoogleMapsDemo = {
        init: function () {
            var location  = {lat: parseFloat( latitude), lng: parseFloat( langitude)};
            map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 15
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                draggable:true
            });

            var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
            google.maps.event.addListener(searchBox,'places_changed' , function () {
                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                var i , place ;

                for (i = 0 ; place = places[i] ; i++){
                    bounds.extend(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                }
                map.fitBounds(bounds);
                map.setZoom(15);
            });

            google.maps.event.addListener(marker, 'position_changed' , function () {
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                $('#lng').val(lng);
                $('#lat').val(lat);
            });

        }
    };
    jQuery(document).ready(function () {
        GoogleMapsDemo.init()
    });
</script>