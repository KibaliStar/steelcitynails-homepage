<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\KontaktController;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/qr', fn() => view('home'))->name('qrhome');
Route::get('/qrcode', fn() => view('qrcode'))->name('qrcode');
Route::get('/tattoo', fn() => view('tattoo'))->name('tattoo');
Route::get('/piercing', fn() => view('piercing'))->name('piercing');
Route::get('/galerie', fn() => view('galerie'))->name('galerie');
Route::get('/studio', fn() => view('studio'))->name('studio');
// Route::get('/anfrage', fn() => view('anfrage'))->name('anfrage');
Route::get('/anfrage/{thema?}', function ($thema = 'tattoo') {
    return view('anfrage', ['thema' => $thema]);
})->where('thema', 'tattoo|piercing|allgemein')->name('anfrage');
Route::get('/kontakt', fn() => view('kontakt'))->name('kontakt');
Route::get('/anfahrt', fn() => view('anfahrt'))->name('anfahrt');

Route::get('/agb', fn() => view('agb'))->name('agb');
Route::get('/impressum', fn() => view('impressum'))->name('impressum');
Route::get('/datenschutz', fn() => view('datenschutz'))->name('datenschutz');
Route::get('/faq', fn() => view('faq'))->name('faq');
Route::get('/sitemap', fn() => view('sitemap'))->name('sitemap');

Route::get('/sitemap.xml', function () {
    $lastMod = function (string $view): \Carbon\Carbon {
        $path = resource_path("views/{$view}.blade.php");

        return \Carbon\Carbon::createFromTimestamp(
            file_exists($path) ? filemtime($path) : time()
        );
    };

    return Sitemap::create()
        ->add(Url::create('/')->setPriority(1.0)->setLastModificationDate($lastMod('home')))
        ->add(Url::create('/qr')->setPriority(1.0)->setLastModificationDate($lastMod('home')))
        ->add(Url::create('/tattoo')->setPriority(0.9)->setLastModificationDate($lastMod('tattoo')))
        ->add(Url::create('/piercing')->setPriority(0.9)->setLastModificationDate($lastMod('piercing')))
        ->add(Url::create('/galerie')->setPriority(0.8)->setLastModificationDate($lastMod('galerie')))
        ->add(Url::create('/studio')->setPriority(0.7)->setLastModificationDate($lastMod('studio')))
        ->add(Url::create('/anfrage')->setPriority(0.8)->setLastModificationDate($lastMod('anfrage')))
        ->add(Url::create('/kontakt')->setPriority(0.8)->setLastModificationDate($lastMod('kontakt')))
        ->add(Url::create('/anfahrt')->setPriority(0.6)->setLastModificationDate($lastMod('anfahrt')))
        ->add(Url::create('/agb')->setPriority(0.3)->setLastModificationDate($lastMod('agb')))
        ->add(Url::create('/impressum')->setPriority(0.3)->setLastModificationDate($lastMod('impressum')))
        ->add(Url::create('/datenschutz')->setPriority(0.3)->setLastModificationDate($lastMod('datenschutz')))
        ->add(Url::create('/faq')->setPriority(0.7)->setLastModificationDate($lastMod('faq')))
        ->add(Url::create('/sitemap')->setPriority(0.2)->setLastModificationDate($lastMod('sitemap')))
        ->add(Url::create('/qrcode')->setPriority(1.0)->setLastModificationDate($lastMod('qrcode')))
        ->toResponse(request());
});

Route::post('/kontakt/senden', [KontaktController::class, 'senden'])
    ->middleware('throttle:5,1') // 5 Anfragen pro Minute (pro IP)
    ->name('kontakt.senden');