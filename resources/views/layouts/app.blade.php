<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if (env('IS_DEMO'))
        <x-demo-metas></x-demo-metas>
    @endif

    <link rel="apple-touch-icon" sizes="76x76" hreff="{{  asset('/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{  asset('/assets/img/favicon.png')}}">
    <title>
        Ekosfera
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{  asset('/assets/css/nucleo-icons.css" rel="stylesheet')}}" />
    <link href="{{  asset('/assets/css/nucleo-svg.css" rel="stylesheet')}}" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100 {{ (\Request::is('rtl') ? 'rtl' : (Request::is('virtual-reality') ? 'virtual-reality' : '')) }} ">
   
    @auth
        @yield('auth')
    @endauth
    @guest
        @yield('guest')
    @endguest
    
    <!--   Core JS Files   -->
    <script src="{{  asset('/assets/js/core/popper.min.js')}}"></script>
    <script src="{{  asset('/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{  asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{  asset('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script src="{{  asset('/assets/js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{  asset('/assets/js/plugins/chartjs.min.js')}}"></script>
    <script src="{{  asset('js/app.js') }}"></script>
    <script src="{{  mix('js/app.js') }}"></script>

    <script src="{{ asset('sw.js') }}"></script>
    @stack('dashboard')
    <script>
        // Alert message
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
            damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        setTimeout(function() {
            var errorAlert = document.getElementById('alert');
            if (errorAlert) {
                errorAlert.classList.add('fade-out');
                setTimeout(function() {
                    errorAlert.style.display = 'none';
                }, 500); // Adjust the duration of the fade-out animation
            }
        }, 7000);
        
        // User and type search 
        const typeSearchInput = document.getElementById('type_search');
        const clientSearchInput = document.getElementById('client_search');
    
        const typeSelectElement = document.querySelector('select[name="type_id"]');
        const clientSelectElement = document.querySelector('select[name="client_id"]');
    
        const typeOptions = Array.from(typeSelectElement.options);
        const clientOptions = Array.from(clientSelectElement.options);
    
        function updateOptions(inputElement, selectElement, options) {
            const searchValue = inputElement.value.toLowerCase();
    
            const filteredOptions = options.filter(option => option.textContent.toLowerCase().includes(searchValue));
    
            selectElement.innerHTML = '';
    
            filteredOptions.forEach(option => {
                selectElement.appendChild(option.cloneNode(true));
            });
        }
    
        typeSearchInput.addEventListener('input', function() {
            updateOptions(typeSearchInput, typeSelectElement, typeOptions);
        });
    
        clientSearchInput.addEventListener('input', function() {
            updateOptions(clientSearchInput, clientSelectElement, clientOptions);
        });
        
        // Add price to weight
        $(document).ready(function(){
            updatePrice();
    
            $('#type_id, #sale').change(function(){
                updatePrice();
            });
    
            function updatePrice() {
                var selectedType = $('#type_id').find(':selected');
                var price = selectedType.data('price');
                var weight = $('#sale').val();
    
                if ($.isNumeric(weight)) {
                    var totalPrice = price * weight;
    
                    var formattedPrice = totalPrice.toLocaleString('en-US').replace(/,/g, ' ');
    
                    $('#price_display').text('Umumiy narx: ' + formattedPrice + ' so‘m');
                } else {
                    $('#price_display').text('Iltimos vazn va turni kiriting.');
                }
            }
        });
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{  asset('/assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
</body>
</html>
