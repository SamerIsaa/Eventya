<script src="{{ asset('userAssets/js/jquery3.3.1.js') }}"></script>
<script src="{{ asset('userAssets/js/popper.js') }}"></script>
<script src="{{ asset('userAssets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('userAssets/js/main.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    function changeLang($lang) {
        var url = '{{  url('changeLang')  }}';
        var methd = 'POST';
        $.ajax({
            url: url,
            type: methd, //send it through get method
            data: {
                "_token": "{{ csrf_token() }}",
                locale: $lang,
            },
            success: function(response) {
                // alert(response);
                window.location.href = response;
            },
            error: function(xhr) {
            }
        });
    }

    $('select#userMenu').on('change', function() {
        if (this.value === "logout"){
            window.location = '{{ route('user.logout') }}';
        }else if (this.value === "indexSupplier"){
            window.location = '{{ route('supplier.index') }}';
        }
    });
</script>

<script>
    function initMap() {
        var myLatLng = {lat: parseFloat( "{{ $location->latitude }}" ), lng: parseFloat( "{{ $location->langitude }}" )};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 15,
            styles: [
                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#263c3f'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#6b9a76'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#38414e'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#212a37'}]
                },
                {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9ca5b3'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#746855'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#1f2835'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#f3d19c'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{color: '#2f3948'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#17263c'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#515c6d'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#17263c'}]
                }
            ]
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            animation: google.maps.Animation.DROP,
            title: 'Our Location!'
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIiPJXATL1VQa0KhqL9eWDo834B6v9O2M&callback=initMap"
        async defer></script>