<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stripe | Payment Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" media="all" />

    </head>
    <body>
        <div class="paystack-color-bar"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-4">
                    <div class="header">
                        <div class="page-info">
                            <h3 id="page-name" class="page-name">Developer Service Payment</h3>
                            <p class="company-name">BY <span id="company-name">coderswat</span></p>
                        </div>
                        <div class="page-description">
                            <span id="page-description">Payment page for services rendered  by the developer</span>
                        </div>
                    </div>
                    @yield('content')
                                        <div id="paystack-footer" class="paystack-footer animated fadeIn">
                        <a target="_blank" href="https://paystack.com/what-is-paystack">
                            <img alt="Paystack secured badge" src="https://paystack.com/assets/payment/img/paystack-badge-cards.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </body>
</html>