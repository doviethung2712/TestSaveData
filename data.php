<?php
function saveData($name, $age)
{
    $contact = [
        'name' => $name,
        'age' => $age,
    ];
    $data = loadData();
    array_push($data,$contact);
    $dataJson = json_encode($data);
    file_put_contents('data.json',$dataJson);
}

function loadData()
{
    $data = file_get_contents("data.json");
    return json_decode($data);
}