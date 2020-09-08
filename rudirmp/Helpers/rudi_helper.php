<?php 

if (! function_exists('isLogin')) {
    function isLogin(){
        return session()->has('user');
    }
}