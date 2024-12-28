# A Laravel Hindi IN English Date.

A laravel date package which convert AD to BS and vice-versa.

#Installation
1) In order to install Laravel 5 Laravelbsdate, just add the following to your composer.json in require. Then run composer update:

```json
"bhagabat/adbsdate": "master-dev"
```

2) Open your `config/app.php` and add the following to the `providers` array:

```php
Shankhadev\Bsdate\BsdateServiceProvider::class,
```

3) In the same `config/app.php` and add the following to the `aliases ` array: 

```php
'Adbsdate' => Bhagabat\Adbsdate\AdbsdateFacade::class,
```

## Usage

```php
Bsdate::engADtoBS(2016,12,31,'ne_hi'); //For converting AD TO BS (lang ne-hi/ne-en/hi
Bsdate::BStoADeng(2073,09,16); //For converting BS TO AD
// output 
Array
(
    [year] => २०७३
    [month] => ९
    [date] => १६
    [day] => शनिबार
    [nmonth] => पुष
    [num_day] => 
)
```
