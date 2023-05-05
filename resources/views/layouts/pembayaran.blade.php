@extends('layouts.main')

@section('container')
    <div class="fixed z-50 top-0">
        @include('layouts.partials.header')
    </div>

    <section class="xl:flex xl:justify-center xl:w-full md:grid-1">

        <div class="xl:w-3/6 mr-20 pt-20 flex flex-col">
            <button id="pay-button">Pay!</button>

            <form action="/payment" id="submit_form" method="POST">
                @csrf
                <input type="hidden" name="json" id="json_callback">
            </form>

            <script type="text/javascript">
                // For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                payButton.addEventListener('click', function() {
                    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                    window.snap.pay('{{ $snap_token }}', {
                        onSuccess: function(result) {
                            /* You may add your own implementation here */
                            
                            console.log(result);
                            send_response_to_form(result);
                        },
                        onPending: function(result) {
                            /* You may add your own implementation here */
                           
                            console.log(result);
                            send_response_to_form(result);
                        },
                        onError: function(result) {
                            /* You may add your own implementation here */
                            
                            console.log(result);
                            send_response_to_form(result);
                        },
                        onClose: function() {
                            /* You may add your own implementation here */
                            alert('you closed the popup without finishing the payment');
                        }
                    })
                });

                function send_response_to_form(result) {
                    document.getElementById('json_callback').value = JSON.stringify(result);
                    $('#submit_form').submit();
                }
            </script>
        </div>
    </section>


    @include('layouts.partials.footer')
@endsection
