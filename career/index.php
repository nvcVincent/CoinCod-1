<?php
// Load the Savant3 class file and create an instance.
require_once '../libs/Savant3.php';

// initialize template engine
$tpl = new Savant3();

// add a series of template directories
$tpl->addPath('template', '../template');

//Set Values
$resource_path = "../";
$title = "Careers";
$meta_description = "Welcome to CoinCod - a unique auction system built to draw everyone closer to their dream products.";
$contentContainer = array(
    array(
        "title" => $title,
        "content" => "Sorry, currently there are no available job openings. Please check with us again soon and hopefully we can provide you one in coming few months time.",
		"bottom_image" =>'<img class="bottom" src="../template/template_image/bottom/careers.png" alt="careers">'
    )
);

// Assign values to the Savant instance.
$tpl->resource_path = $resource_path;
$tpl->title = $title;
$tpl->meta_description = $meta_description;
$tpl->content_container = $contentContainer;

$tpl->setTemplate('main.tpl');
$tpl->display();
?>