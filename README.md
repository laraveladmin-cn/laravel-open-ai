# OpenAI API Client in PHP LARAVEL

<br />

<br />


# Use extension packs

| Project Name           | Required PHP Version | Description                                                                                                                                                | Type (Official / Community) | Support                                                                                                                                |
|------------------------|----------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------|-----------------------------|----------------------------------------------------------------------------------------------------------------------------------------|
| **orhanerday/open-ai** | **PHP 7.4+**         | **Most downloaded, forked, contributed, huge community supported, and used PHP SDK for OpenAI GPT-3 and DALL-E. It also supports chatGPT-like streaming.** | Community                   | Available, ([Community driven Discord Server](https://discord.gg/xpGUD528XJ) or personal mail [orhan@duck.com](mailto:orhan@duck.com)) |


<br />

## Publish config file:

```php
php artisan vendor:publish --provider="LaravelAdmin\LaravelOpenAi\ServiceProvider"
```

## About this package config in ".env"
```env
OPENAI_API_KEY=
OPENAI_BASE_URI=
OPENAI_ORGANIZATION=
OPENAI_PROXY=
```


```php
<?php
use LaravelAdmin\LaravelOpenAi\Facades\OpenAI;
$chat = OpenAI::chat([
   'model' => 'gpt-3.5-turbo',
   'messages' => [
       [
           "role" => "system",
           "content" => "You are a helpful assistant."
       ],
       [
           "role" => "user",
           "content" => "Who won the world series in 2020?"
       ],
       [
           "role" => "assistant",
           "content" => "The Los Angeles Dodgers won the World Series in 2020."
       ],
       [
           "role" => "user",
           "content" => "Where was it played?"
       ],
   ],
   'temperature' => 1.0,
   'max_tokens' => 4000,
   'frequency_penalty' => 0,
   'presence_penalty' => 0,
]);


var_dump($chat);
echo "<br>";
echo "<br>";
echo "<br>";
// decode response
$d = json_decode($chat);
// Get Content
echo($d->choices[0]->message->content);
```
## Use more documentation reference

[https://packagist.org/packages/orhanerday/open-ai](https://packagist.org/packages/orhanerday/open-ai)
