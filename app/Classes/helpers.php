<?php

function presentPrice($price){
    return '$'.$price;
}

function setActiveCategory($category,$output='active'){
    return request()->category==$category?$output:'';
}
