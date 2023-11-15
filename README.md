<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## INSTALLARE BREEZE AUTHENTICATION STARTER KIT

```
composer require laravel/breeze --dev
```

```
php artisan breeze:install
```

## INSTALLARE BOOTSTRAP + VITE PRESET WITH AUTHENTICATION

```
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap --auth
```

## PER FAR SI CHE SOLO L'UTENTE CON ID 1 POSSA EFFETTUARE MODIFICHE, NELLE FORM REQUESTS:

(CAMBIARE SU ***true*** SE SI DESIDERA CHE TUTTI POSSANO MODIFICARE)

```php
public function authorize(): bool
{
    // return true;
    return Auth::id() === 1; // SOLO USER ID 1 PUO' CREARE
}
```
```php
public function authorize(): bool
    {
        // return true;
        return Auth::id() === 1; // SOLO USER ID 1 PPUO' AGGIORNARE
    }
```

## PER MODIFICARE LA HOME A CUI SI VIENE REDIRETTI DOPO IL LOGIN:
app/Providers/RouteServiceProvider.php
```php
public const HOME = '/admin';
```

## ROUTE GROUPS
```php
// ROUTES ADMIN
Route::middleware('auth', 'verified') // PER GLI UTENTI LOGGATI & VERIFICATI
    ->name('admin.') // NOME DELLE ROTTE INIZIA CON 'admin.'
    ->prefix('admin') // PREFIX DEGLI URL INIZIANO CON '/admin/'
    ->group(function () {

        // AFTER LOGIN GET REDIRECTED TO DASHBOARD
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // RESTORE TRASHED ITEM ROUTE
        Route::get('projects/restore/{id}', [ProjectController::class, 'restore'])->name('projects.restore');

        // FORCE DELETE TRASHED ITEM ROUTE
        Route::get('projects/forceDelete/{id}', [ProjectController::class, 'forceDelete'])->name('projects.forceDelete');
        Route::get('projects/recycle', [ProjectController::class, 'recycle'])->name('projects.recycle');

        // SHOW TRASHED PROJECT DETAILS ROUTE
        Route::get('projects/recycle/{id}', [ProjectController::class, 'showTrashed'])->withTrashed()->name('projects.showTrashed');

        // PROJECTS RESOURCE CONTROLLER ROUTES
        Route::resource('projects', ProjectController::class)->parameters(['projects' => 'project:slug']);
    });
```

## EXAMPLE PAGINATION:

```
php artisan vendor:publish // selezionare Pagination
```

NEL CONTROLLER (app/http/Controllers/Admin/ProjectController IN THIS EXAMPLE):

```php
public function index()
{
    // PAGINATION
    $projects = Project::orderByDesc('id')->paginate(4);

    return view('admin.projects.index', compact('projects'));
    }
```

NEL MARKUP (ADMIN/PROJECTS/INDEX.BLADE IN THIS EXAMPLE):

```php
<div class="my-3">
    {{ $projects->links('pagination::bootstrap-5') }}
</div>
```

Bootstrap responsiveness order:

```
general (es d-none) - sm (es d-sm-none) - md (es d-md-block) lg (es d-lg-block)
```