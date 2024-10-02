<?php

$getdatas = file_get_contents("l29studentdb.json");
// echo $getdatas;
$datasde = json_decode($getdatas, true);
// echo "<pre>" . print_r($datasde, true) . "</pre>";

// => Read

foreach ($datasde as $datas) {
    // echo "<pre>" . print_r($datas, true) . "</pre>";

    foreach ($datas as $key => $data) {
        echo $key . " = " . $data . "<br/>";
    }

    echo "<hr/>";
}

// => Create

$newdatas = [
    [
        "id" => 8,
        "name" => "Lin Lin",
        "city" => "mandalay",
    ],
    [
        "id" => 9,
        "name" => "Chit Thu Wai",
        "city" => "yangon",
    ],
    [
        "id" => 10,
        "name" => "Honey Nway Oo",
        "city" => "yangon",
    ],
];

// sudo chmod 777 -R l29studentdb.json

// foreach ($newdatas as $newdata) {
//     array_push($datasde, $newdata);
//     file_put_contents("./l29studentdb.json", json_encode($datasde));
// }

// => Update

// foreach ($datasde as $key => $datas) {
//     // echo $datas;
//     // echo "<pre>" . print_r($datas, true) . "</pre>";
//     // echo $key; // 0 to 9

//     // echo "<pre>" . print_r($datasde[$key], true) . "</pre>";
//     // echo $datas["id"]; // 1 to 10

//     if ($datas["id"] === 9) {
//         // id number 9 = index number 8
//         // $datasde[$key]['name'] = "chit hsu wai";

//         $datasde[8]["name"] = "sandar";
//     }
// }

//do save
// file_put_contents("./l29studentdb.json", json_encode($datasde));
########################
// => Delete

$idxs = [];

// select index to delete
foreach ($datasde as $key => $datas) {
    echo "<pre>" . print_r($datas, true) . "</pre>";

    if ($datas["id"] === 10) {
        $idxs = $key; // index number 9
    }
}

// delete value from array
foreach ($idxs as $idx) {
    unset($datasde[$idx]);
}

// do save
file_put_contents("./l29studentdb.json", json_encode($datasde));
?>

// [
//   {
//     "id": 1,
//     "name": "su su",
//     "city": "Mandalay"
//   },
//   {
//     "id": 2,
//     "name": "nu nu",
//     "city": "Yangon"
//   },
//   {
//     "id": 3,
//     "name": "yu yu",
//     "city": "Bago"
//   },
//   {
//     "id": 4,
//     "name": "Aung Aung",
//     "city": "Mandalay"
//   },
//   {
//     "id": 5,
//     "name": "Kyaw Kyaw",
//     "city": "Mandalay"
//   },
//   {
//     "id": 6,
//     "name": "Soe Thu",
//     "city": "Bago"
//   },
//   {
//     "id": 7,
//     "name": "Aung Kyaw",
//     "city": "Mandalay"
//   }
// ]
