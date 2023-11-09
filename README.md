<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

composer require laravel/breeze --dev

php artisan breeze:install

composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap --auth

NELLE FORTM REQUESTS

```php
public function authorize(): bool
{
    // return true;
    return Auth::id() === 1; // SOLOUSER ID 1 PUO' CREARE
}
```
```php
public function authorize(): bool
    {
        // return true;
        return Auth::id() === 1; // SOLOUSER ID 1 PPUO' AGGIORNARE
    }
```
## EXAMPLE PAGINATION:

php artisan vendor:publish

ON THE PageController:

```php
public function home()
{
    $trains = Train::all();

    $sorted_trains = Train::orderBy('departure_time', 'asc')->paginate(3);

    //compact() CREATES AN ARRAY FROM THE $sorted_trains COLLECTION
    return view('home', compact('sorted_trains'));
}
```
ON THE VIEW MARKUP (houses.blade.php IN THIS EXAMPLE):

```php
<div class="my-3">
    {{$sorted_trains->links('pagination::bootstrap-5')}}
</div>
```

