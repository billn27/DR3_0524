<?php

/*
 * Copyright 2013 Xantek Inc.
 *
 * Licensed under the Xantek Private License, Version 1.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.xantek.net/licenses/PRIVATE-LICENSE-1.0
 *
 */
class categoryModel
{
    function categoryModel(){
        include_once("class/AED.phpclass");
        $this->db = new AED();
        $server_array = get_object_vars ( $this->db);
        //print_r($server_array);
        if ($this->mysqli = new mysqli($server_array['mysql_server'], 
                $server_array['mysql_user'], $server_array['mysql_pass'], 'democracy')){
            //print"connected";
        } else {echo "Failed to connect to MySQLi: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;}
    }
    
    function getAllCategories(){ //with category manager info
        $query = "SELECT c.*
            FROM democracy.category c
            WHERE parent_id = 1
            
            ";
        //print $query;
        if($result = $this->mysqli->query($query)) {} else 
                {print $this->mysqli->error;}; 
        while($row = $result->fetch_assoc())
        {
            //create array
            $i++;
            $categories[$i] = $row;
        }
        return $categories;
    }
    
    function getCategoriesForArchive(){
        $query = "SELECT c.*, sc.category as subcat, sc.id as subcat_id 
            FROM democracy.category c 
            LEFT JOIN democracy.category sc ON sc.parent_id = c.id 
            WHERE c.parent_id = 1 and c.status = 'active' 
            AND sc.status = 'active'
            GROUP BY sc.id order by c.category, subcat
            ";
        //print $query;
        if($result = $this->mysqli->query($query)) {} else 
                {print $this->mysqli->error;}; 
        while($row = $result->fetch_assoc())
        {
            //create array
            $i++;
            $categories[$i] = $row;
        }
        return $categories;
    }
    
    function getCategoryParent($category_id){
        $query = "SELECT parent_id FROM category
            WHERE id = $category_id
            
        ";
        if($result = $this->mysqli->query($query)) {} else 
                {print $this->mysqli->error;}; 
        $row = $result->fetch_assoc();
        extract($row);
        return $parent_id;
    }
}

?>
