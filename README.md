## stripe
 Laravel stripe integration with official stripe php package
## Usage <br>
Setup the repository <br>
```
git clone https://github.com/coswat/stripe.git
cd stripe
composer install
cp .env.example .env 
php artisan key:generate
php artisan cache:clear && php artisan config:clear 
php artisan serve 
```
### Setup your stripe credentials in the ```.env``` file <br>
```
STRIPE_PK=
STRIPE_SK=
```

<p align="center"><a href="https://github.com/coswat/google-login#coswat"><img src="http://randojs.com/images/barsSmallTransparentBackground.gif" alt="Animated footer bars" width="100%"/></a></p>
<br/>
<p align="center"><a href="https://github.com/coswat/google-login#"><img src="http://randojs.com/images/backToTopButtonTransparentBackground.png" alt="Back to top" height="29"/></a></p>
