<?php



class Home extends Controller
{
    public function index($a = '' , $b= '', $c = '')
    {
        $model = new Model;
        $arr['name'] = 'abbos2';
        $arr['age'] = '23';
        $arr['date'] = '232323';

        $result = $model->insert($arr);
        
        $this->view('home');
    }
}