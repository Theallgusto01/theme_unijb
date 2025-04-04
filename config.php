<?php


defined("MOODLE_INTERNAL") || die();

$THEME->name = "unijb";

$THEME->sheets= [];

$THEME->editor_sheets = [];

$THEME->parents = ['academi'];

$THEME->enable_dock = false;

$THEME->yuicssmodules = array();                                                                                                    
                                                                                                                                    
$THEME->rendererfactory = 'theme_overridden_renderer_factory';                                                                      
                                                                                                                                    
$THEME->requiredblocks = '';   

$THEME->addblockposition = 'BLOCK_ADDBLOCK_POSITION_FLATNAV';

$THEME->haseditswitch = true;

$THEME->scss = function($theme) {

    // Precisamos carregar a configuração do tema-pai, pois é lá que a configuração "preset" está definida.
    $parentconfig = theme_config::load('academi');

    // Chamamos uma função do arquivo lib.php do tema-pai para buscar o conteúdo do arquivo SCSS principal com base na configuração do tema-pai, e não na nossa.
    return theme_academi_get_main_scss_content($parentconfig);
};

$THEME->prescsscallback = 'theme_unijb_get_pre_scss';

$THEME->extrascsscallback = 'theme_unijb_get_extra_scss';