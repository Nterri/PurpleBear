<?php

use Imy\Core\Controller;
use Imy\Core\Tools;

class MainController extends Controller
{
    function init()
    {
        $this->v['reviews'] = $this->ajax_get();
    }

    function ajax_get()
    {
        $review = new Rewiew();
        $rewiewsObject = [];
        foreach ($review->getMany() as $item) {
            $rewiewsObject[] = [
                'name' => $item->name,
                'message' => $item->message,
                'date' => $item->date
            ];
        }
        return filter($rewiewsObject);
    }

    function ajax_send()
    {
        $review = new Rewiew();
        $name = $_POST['name'];
        $message = $_POST['message'];
        $data = [
            'name' => $name,
            'message' => $message
        ];
        $review->create($data);
        $array = $this->ajax_get();
        $itemLast = array_shift($array);
        $template = tpl('tmp.row');
        $this->v['row'] = Tools::get_include_contents($template,[
            'name' => $itemLast['name'],
            'message' => $itemLast['message'],
            'date' => $itemLast['date']
        ]);
    }

}
