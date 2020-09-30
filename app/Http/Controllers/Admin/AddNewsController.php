<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddNewsController extends Controller
{
    public function actionAdd()
    {
        if (isset($_POST['submit']))
        {
            $title = $_POST['title'];
            $date = $_POST['date'];
            $img_url = $_FILES['img_url']['name'];
            $tmp_name_img = $_FILES['img_url']['tmp_name'];
            $url = $_POST['url'];
            $html = $_POST['html'];
            $errors = false;
            if (!$url) $errors[] = 'Введите название новости вручную';
}
