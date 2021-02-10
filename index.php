<?php

require 'ToDo.class.php';

$toDo = new ToDo("data.json");

if ($_POST) {
    if (isset($_POST['data'])) {
        $toDo->updateData($_POST['data']);
        $toDo->saveData();
    }else{
        $toDo->updateData([]);
        $toDo->saveData();
    }

    if (isset($_POST['newData']) && strlen($_POST['newData']['title']) > 0) {
        $currentData = $toDo->getData();
        $newData = $_POST['newData'];
        $newData['id'] = $toDo->getNewId();
        $newData = array_merge($currentData, [$newData]);
        $toDo->updateData($newData);
        $toDo->saveData();
    }
}

$data = $toDo->getData();

include 'template.php';
