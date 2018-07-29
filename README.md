# tp
Twitter Official Api For Laravel 5.4 or Upper version.
Credit Goes to https://github.com/dg/twitter-php

Installation

composer require takielias/tp

Add providers in Config/App.php

        takielias\tp\TpServiceProvider::class,

Add aliases Provider in Config/App.php

        'Tp' => takielias\tp\Facades\Tp::class,
        
Now you can use it as

You can get your Twitter App credential From https://apps.twitter.com/

    $Twitter = new takielias\tp\Tp($consumerKey, $consumerSecret, $accessToken = null, $accessTokenSecret = null);
    $Twitter->send('Testing TP For laravel');




