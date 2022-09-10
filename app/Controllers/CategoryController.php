<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $category = new CategoryModel();
        $datos['categories'] = $category->getCategories();

        return $datos;
    }
}
