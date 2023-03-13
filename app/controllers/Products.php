<?php



class Products  extends Controller
{
    public function index($a = '' , $b= '', $c = '')
    {
        $this->view('products/products');

    }
}