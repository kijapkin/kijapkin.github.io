<?php

/*
 * Голова сторінка
 * Controller: Front/HomeController
 * View: main.blade.php
 */
Route::get('/', 'Front\HomeController@main');
Route::get('/mail', 'Front\HomeController@mail');

Route::post('/message', 'Front\MessageController@main');

/*
 * Наші послуги
 * Controller: Front/OurservicesController
 * View: our_services/airconditioning.blade.php, our_services/ventilation.blade.php,
 * our_services/heating.blade.php, our_services/diamond_drilling.blade.php
 */
Route::prefix('/our_services')->group(function () {
	// Кондиціонування
	Route::get('/', 'Front\OurservicesController@main');
	// Вентиляція
	Route::get('/ventilation', 'Front\OurservicesController@ventilation');
	Route::post('/ventilation', 'Front\OurservicesController@ventilationpost');
	// Опалення
	Route::get('/heating', 'Front\OurservicesController@heating');
	// Алмазне свердління
	Route::get('/diamond_drilling', 'Front\OurservicesController@diamond_drilling');
});

/*
 * Товари
 * Controller: Front/GoodsController
 * Views: goods/main.blade.php, goods/item.blade.php
 */
Route::prefix('/goods')->group(function () {
	// Усі товари
	Route::get('/', 'Front\GoodsController@main');
	// Пошук
	Route::get('/search', 'Front\GoodsController@search');
	// Фільтр
	Route::post('/filter', 'Front\GoodsController@filter');
	// Замовлення
	Route::post('/order', 'Front\GoodsController@order');
	// Фаворити
	Route::post('/favorite', 'Front\GoodsController@favoritesave');
	Route::get('/favorite', 'Front\GoodsController@favorite');
	Route::post('/favorite_list','Front\GoodsController@favorite_listPOST');
	Route::get('/favorite_list', 'Front\GoodsController@favorite_list');
	// Категорії
	Route::get('/{slug}', 'Front\GoodsController@category'	);
	// Товар
	Route::get('/{slug}/{item}', 'Front\GoodsController@item');
});

/*
 * Галерея
 * Controller: Front/GalleryController
 * View: gallery/main.blade.php, gallery/pictures.blade.php
 */
Route::prefix('/gallery')->group(function () {
	// Категорії
	Route::get('/', 'Front\GalleryController@main');
	// Фото конкретної категорії
	Route::get('/{slug}', 'Front\GalleryController@pictures');
});

/*
 * Про нас
 * Controller: Front/AboutusController
 * View: about_us/main.blade.php
 */
Route::get('/about_us', 'Front\AboutusController@main');

/*
 * Новини
 * Controller: Front/NewsController
 * View: news/main.blade.php, news/post.blade.php
 */
Route::prefix('/news')->group(function() {
	Route::get('/', 'Front\NewsController@main');
	Route::get('/{slug}', 'Front\NewsController@artikle');
});

/*
 * Контакти
 * Controller: Front/ContactsController
 * View: contacts/main.blade.php
 */
Route::get('/contacts', 'Front\ContactsController@main');
