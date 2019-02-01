# PHP-Login-With-Twitter
Login with Twitter account via PHP &amp; Mysqli  
![Login-With-Twitter-By-carry0987](./image/sign-in-with-twitter.svg)

## Usage
If you don't have `Twitter API Client`, just go here to generate yours:
https://apps.twitter.com/app/new

Then enter the `API-Key` &amp; `API-Secret` [here](https://github.com/carry0987/PHP-Login-With-Twitter/blob/master/twitter_config.php#L10-L12), and also set your `Redirect-URL`:
```php
$consumerKey = 'Your_Twitter_API_Key';
$consumerSecret = 'Your_Twitter_API_Secret';
$redirectURL = 'Your_Twitter_API_Redirect_URL';
