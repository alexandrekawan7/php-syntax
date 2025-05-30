<?php

include 'Não existe.php';

echo "Script ainda funcionando após warning de include.";

require 'Não existe.php';

echo "Script não chega aqui pois arquivo não foi encontrado via require.";