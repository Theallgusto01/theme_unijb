<?php

defined("MOODLE_INTERNAL") || die("");

function theme_unijb_get_pre_scss($theme) {
                                                                                              
    $theme = theme_config::load('academi');                                                                                           
                                                                             
    return theme_academi_get_pre_scss($theme);                         
}

function theme_unijb_get_extra_scss($theme) {
    // Carrega as configurações do tema-pai.                                                                                           
    $theme = theme_config::load('academi');                                                                                           
    // Chama a função do tema-pai que retorna o SCSS extra.                                                                                
    return theme_academi_get_extra_scss($theme);                         
}