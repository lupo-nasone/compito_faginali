<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
spl_autoload_register(function ($class) {
    if(file_exists("./Classi/$class.php"))
        require_once("./Classi/$class.php");
    if(file_exists("./controllers/$class.php"))
        require_once("./controllers/$class.php");
});

$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$app->get('/', 'SiteController:index');
$app->get('/impianto','ImpiantoController:impianto');

$app->get('/rilevatori_di_umidita','RilevatoriUmiditaController:getRilevatoriDiUmidita');
$app->get('/rilevatori_di_umidita/{codiceSeriale}','RilevatoriUmiditaController:getRilevatoriDiUmiditaByid');
$app->get('/rilevatori_di_umidita/{codiceSeriale}/misurazioni','RilevatoriUmiditaController:getMisureRilevatoriDiUmiditaByid');

$app->get('/rilevatori_di_temperatura','RilevatoriTemperaturaController:getRilevatoriDiTemperatura');
$app->get('/rilevatori_di_temperatura/{codiceSeriale}','RilevatoriTemperaturaController:getRilevatoriDiTemperaturaByid');
$app->get('/rilevatori_di_temperatura/{codiceSeriale}/misurazioni','RilevatoriTemperaturaController:getMisureRilevatoriDiTemperaturaByid');
//$app->put('/api/alunni/{nome}','ApiAlunniController:updateAlunno');
//$app->delete('/api/alunni/{nome}','ApiAlunniController:deleteAlunno');

$app->run();
