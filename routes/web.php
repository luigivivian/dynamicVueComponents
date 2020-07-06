<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    $dados['template'] = "{
//                    body: [
//                        {
//                            _uid: \"BUY6Drn9e1\",
//                            component: \"Navbar\",
//                            itens: [
//                                {
//                                    label: \"Home\",
//                                    link: \"/home\",
//                                    ativo: true,
//                                },
//                                {
//                                    label: \"Imovel\",
//                                    link: \"/imovel\",
//                                    ativo: true,
//                                },
//                                {
//                                    label: \"Contato\",
//                                    link: \"/contato\",
//                                    ativo: false,
//                                }
//                            ]
//                        },
//                        {
//                            _uid: \"gJZoSLkfZV\",
//                            component: \"bar\",
//                            title: \"Componente 'bar' dinamico\"
//                        },
//                        {
//                            _uid: \"X1JAfdsZxy\",
//                            component: \"foo\",
//                            headline: \"titulo declarado dinamicamente\"
//                        },
//                        {
//                            _uid: \"X1JAfdsZxz\",
//                            component: \"foo\",
//                            headline: \"outro titulo\"
//                        },
//                        {
//                            _uid: \"X2JAfdsZxy\",
//                            component: \"formulario\",
//                            action: \"post\"
//                        },
//                    ]
//                }";

    return view('welcome');
});
