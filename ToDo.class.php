<?php

class ToDo {

    private $data = [];
    private $jsonFile;

    public function __construct($jsonFile)
    {
        $this->jsonFile = $jsonFile;
        $content = file_get_contents($jsonFile);
        $this->data = json_decode($content,true);
        if(!is_array($this->data)){
            $this->data = [];
        }
    }

    public function updateData($newData){
        $this->data = $newData;
    }

    public function getData(){
        return $this->data;
    }

    public function saveData(){
        file_put_contents($this->jsonFile,json_encode($this->data));
    }

    public function getNewId(){
        $id = 1;
        foreach($this->data as $d){
            if($d['id'] >= $id){
                $id = $d['id']  +1;
            }
        }
        return $id;
    }


}