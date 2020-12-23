<?php
    // Route::get('AmarousPay', function(){
    //     dd(laravelgateway::laravelgateway);
    //     return view('laravelgateway::success');
    // });

    Route::group(['namespace' => 'Amarousepay\Laravelgateway\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('AmaraousePay', 'AmarousePayController@index');
        Route::post('AmaraousePay', 'AmarousePayController@pay');
      //  Route::post('contact', 'ContactFormController@sendMail')->name('contact');
    });


    ?>