<?php
/**
 * Created by PhpStorm.
 * User: God
 * DateTime: 2019/12/181:15 PM
 */

use \Xtrees\LaraSetting\Http\LaraSettingController;


Route::group(['prefix' => config('lara-setting.route.prefix'), 'middleware' => config('lara-setting.route.middleware')], function () {
    Route::get('/settings', LaraSettingController::class . '@index')->name('lara.setting.index');
    Route::put('/settings/create', LaraSettingController::class . '@create')->name('lara.setting.create');
    Route::post('/settings/update', LaraSettingController::class . '@update')->name('lara.setting.update');
    Route::put('/settings/group', LaraSettingController::class . '@createGroup')->name('lara.setting.group.create');
    Route::post('/settings/group/sort', LaraSettingController::class . '@sortGroup')->name('lara.setting.group.sort');
});



