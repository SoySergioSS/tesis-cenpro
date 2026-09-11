<?php

use yii\helpers\Html;

$this->title = 'Sistema de Tesis - Facultad de Ingeniería';
?>

<div class="site-index-public">
    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"><?= Html::encode($this->title) ?></h1>
            <p class="col-md-8 mx-auto fs-4">
                Bienvenido al portal de seguimiento de proyectos de tesis.
                Si eres alumno, inicia sesión para verificar el estado de tus trámites y jurados asignados.
            </p>
            <?= Html::a('Iniciar Sesión', ['site/login'], ['class' => 'btn btn-primary btn-lg']) ?>
        </div>
    </div>
</div>
