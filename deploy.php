<?php

include_once 'vendor/ekandreas/docker-bedrock/recipe.php';

server('www.qbus.dev', 'default')
    ->env('container', 'bedrock')
    ->stage('development');