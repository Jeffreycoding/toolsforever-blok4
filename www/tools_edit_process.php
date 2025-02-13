<?php

if(isset($_POST['tool_id'])) {
    echo 'geen id opgegeven';
    exit;
}
if(isset($_POST['tool_name'])) {
    echo 'geen naam opgegeven';
    exit;
}
if(isset($_POST['tool_brand'])) {
    echo 'geen merk opgegeven';
    exit;
}
if(isset($_POST['tool_category'])) {
    echo 'geen categorie opgegeven';
    exit;
}
if(isset($_POST['tool_price'])) {
    echo 'geen prijs opgegeven';
    exit;
}
if(isset($_POST['tool_image'])) {
    echo 'geen foto opgegeven';
    exit;
}

$sql = "UPDATE tools
SET tool_id = $id
SET tool_name = $name
SET tool_brand = $brand
SET tool_category = $category
SET tool_price = $price
SET tool_image = $image







$tool_id = $_POST['tool_id'];
$tool_name = $_POST['tool_name'];
$tool_brand = $_POST['tool_brand'];
$tool_category = $_POST['tool_category'];
$tool_price = $_POST['tool_price'];
$tool_image = $_POST['tool_image'];