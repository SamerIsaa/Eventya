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
</script>

<script>
    function initMap() {
        var myLatLng = {lat: parseFloat( "{{ $location->latitude }}" ), lng: parseFloat( "{{ $location->langitude }}" )};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 15
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: 'Hello World!'
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx6zAa5MrsK6fgwD8bbY1vqDqILtB87hk&callback=initMap"
        async defer></script>