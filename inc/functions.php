<?php
function get_item_html($id, $item) {
    $output = "<li><a href='details.php?id="
        . $id . "'><img src='" 
        . $item["img"] . "' alt='" 
        . $item["title"] . "' />" 
        . "<p>View Details</p>"
        . "</a></li>";
    return $output;
}

// $catalog = all catalog data, $category = books for example
function array_category($catalog, $category) {
    $output = array();
    
    // $id = 101 for example
    foreach ($catalog as $id => $item) {
        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
            $sort = $item["title"];
            $sort = ltrim($sort,"The ");
            $sort = ltrim($sort,"A ");
            $sort = ltrim($sort,"An ");
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);// Returns an array of all the keys in array.
}