<?php

if(! function_exists('pr')){
    function pr($var){
        echo "<pre>";
        print_r($var);
    }     
}

if(! function_exists('page_load')){
    function page_load($page,$data){ 
        $ref =& get_instance();
        $ref->load->view('layout/header');
        $ref->load->view('layout/sidebar');
        $ref->load->view($page,$data);
        $ref->load->view('layout/footer');
    } 

    // We use this function for a randomly change the no it's mean generate the unique ID

// if(! function_exists('generate_unique_num')){
//     function generate_unique_num(){

        //1'st pattern to print unique id
//         echo time();
//         return time();
        //2nd pattern to print unique id
        // $minimum = 10000;
        // $maximum = 10000000;
        // $number = range($minimum,$maximum);
//  }
//  }



}