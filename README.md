Welcome to the tp wiki!

Twitter Official Api For Laravel 5.4 or Upper version. Credit Goes to [Twitter PHP](https://github.com/dg/twitter-php)
# Installation

`composer require takielias/tp`

# Add providers in Config/App.php

`    takielias\tp\TpServiceProvider::class,`

# Add aliases in Config/App.php

`    'Tp' => takielias\tp\Facades\Tp::class,`

Now you can use it as

You can get your Twitter App credential From [Twitter Apps](https://apps.twitter.com/)

$Twitter = new takielias\tp\Tp($consumerKey, $consumerSecret, $accessToken = null, $accessTokenSecret = null);
$Twitter->send('Testing TP For laravel');

***

Twitter API Task Documentation [Twitter PHP](https://github.com/dg/twitter-php)
