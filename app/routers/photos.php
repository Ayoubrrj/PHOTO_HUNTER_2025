<?php

use App\Controllers\PhotosController;

include '../app/controllers/photosController.php';

switch ($_GET['photos']):
    case 'show':
        /// ACTION show
        PhotosController\showAction($connexion, $_GET['id']);
        break;
    default:
        // ACTION: index
        PhotosController\indexAction($connexion);
        break;
endswitch;