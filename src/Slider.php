<?php

namespace BITM\CUMPUS;

use BITM\CUMPUS\Config;


class Slider{
    public $id = null;
    public $uuid = null;
    public $src = null;
    public $alt = null;
    public $tittle = null;
    public $caption = null;

    public function index()
    {
        $sliderjson = file_get_contents(Config::datasource().'slider.json');
        $slideritems = json_decode($sliderjson);

        return $slideritems;

    }
    public function create()
    {

    }

    public function store($data)
    {
        $result = false;

        $sliderjson = file_get_contents(Config::datasource().'slider.json');
        $slideritems = json_decode($sliderjson);

        $slideritems[]= (object)(array) $data;

        if(file_exists(Config::datasource()."slider.json")){
            $result = file_put_contents(Config::datasource()."slider.json",json_encode($slideritems));
        }else{
            echo "File not found";
        }
        return $result;


    }

    public function show($id){
        $sliderjson = file_get_contents(Config::datasource().'slider.json');
        $slideritems = json_decode($sliderjson);

        $slide = null;
        foreach($slideritems as $aslide){
            if($aslide->id == $id){
                $slide = $aslide;
                break;
            }
        }
        return $slide;
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
    public function trash(){

    }
    public function delete(){

    }
    public function pdf(){

    }
    public function xl(){
        
    }


    public function word(){
        
    }
    public function last_highest_id(){

        $curentUniqueId = null;

        $sliderjson = file_get_contents(Config::datasource().'slider.json');
        $slideritems = json_decode($sliderjson);

        if(count($slideritems) > 0){
            // finding unique ids
            $ids = [];
            foreach($slideritems as $aslide){
                $ids[] = $aslide->id;
            }
            sort($ids);
            $lastIndex = count($ids)-1;
            $highestId = $ids[$lastIndex];

            $curentUniqueId = $highestId+1;
        }else{
            $curentUniqueId = 1;
        }

        return $curentUniqueId;
    }

    public function prepare($src,$tittle, $caption, $alt){
        $slider = new Slider();
        $slider->id = $this->last_highest_id();
        $slider->uuid = uniqid();
        $slider->src = $src;
        $slider->tittle = $tittle;
        $slider->caption = $caption;
        $slider->alt = $alt;

        return $slider;
    }


}