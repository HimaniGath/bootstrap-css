<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$myfile = fopen("newfile.css", "w") or die("Unable to open file!");
$myLessfile = fopen("newlessfile.less", "w") or die("Unable to open file!");

// get exixting css from newlessfile.less

$gray_dark = $_REQUEST["gray-dark"];
$gray = $_REQUEST["gray"];
$gray_light = $_REQUEST["gray-light"];
$gray_lighter = $_REQUEST["gray-lighter"];



// Brand Colors
$brand_primary = $_REQUEST["brand-primary"];
$brand_success = $_REQUEST["brand-success"];
$brand_warning = $_REQUEST["brand-warning"];
$brand_danger = $_REQUEST["brand-danger"];
$brand_info = $_REQUEST["brand-info"];


// Scaffolding
$bodyBg = $_REQUEST["body-bg"];

$txcolor = $_REQUEST["text-color"];
$linkColor = $_REQUEST["link-color"];
$linkhovercolor = $_REQUEST["link-hover-color"];

$pbv = $_REQUEST["padding-base-vertical"];

if (substr($pbv, 0, 1) === '@') {
    $whatIWant = substr($pbv, strpos($pbv, "@") + 1);
    //echo $whatIWant;
    //$actual_val = str_replace('-','_',$whatIWant);
    // echo"Actual=====".$actual_val;

    $pbv = $_REQUEST[$whatIWant];
    echo $pbv;
}



$padBH = $_REQUEST["padding-base-horizontal"];


if (substr($padBH, 0, 1) === '@') {
    $whatIWant = substr($padBH, strpos($padBH, "@") + 1);
    // echo $whatIWant;
    //$actual_val = str_replace('-','_',$whatIWant);
    // echo"Actual=====".$actual_val;

    $padBH = $_REQUEST[$whatIWant];
}

$pLV = $_REQUEST["padding-large-vertical"]; //10px;

if (substr($pLV, 0, 1) === '@') {
    $whatIWant = substr($pLV, strpos($pLV, "@") + 1);
    // echo $whatIWant;
    //$actual_val = str_replace('-','_',$whatIWant);
    // echo"Actual=====".$actual_val;

    $pLV = $_REQUEST[$whatIWant];
}
$pLH = $_REQUEST["padding-large-horizontal"]; // 16px;

if (substr($pLH, 0, 1) === '@') {
    $whatIWant = substr($pLH, strpos($pLH, "@") + 1);
    // echo $whatIWant;
    //$actual_val = str_replace('-','_',$whatIWant);
    // echo"Actual=====".$actual_val;

    $pLH = $_REQUEST[$whatIWant];
}

$pSV = $_REQUEST["padding-small-vertical"]; //5px;

if (substr($pSV, 0, 1) === '@') {
    $whatIWant = substr($pSV, strpos($pSV, "@") + 1);

    $pSV = $_REQUEST[$whatIWant];
}
$pSH = $_REQUEST["padding-small-horizontal"]; //10px;
if (substr($pSH, 0, 1) === '@') {
    $whatIWant = substr($pSH, strpos($pSH, "@") + 1);

    $pSH = $_REQUEST[$whatIWant];
}
$bRB = $_REQUEST["border-radius-base"]; //4px;

$bRL = $_REQUEST["border-radius-large"]; //6px;
$bRS = $_REQUEST["border-radius-small"]; //3px;
$lHL = $_REQUEST["line-height-large"]; //1.33;
$lHS = $_REQUEST["line-height-small"]; //1.5;
$cAB = $_REQUEST["component-active-bg"]; //$_REQUEST["brand-primary"];
// Typography
$fFSS = $_REQUEST["font-family-sans-serif"];
$fFS = $_REQUEST["font-family-serif"];
$fFM = $_REQUEST["font-family-monospace"];
$fFB = $_REQUEST["font-family-base"];
$fSB = $_REQUEST["font-size-base"];



$fSL = $_REQUEST["font-size-large"];
$fSS = $_REQUEST["font-size-small"];
$fSH1 = $_REQUEST["font-size-h1"];
$fSH2 = $_REQUEST["font-size-h2"];
$fSH3 = $_REQUEST["font-size-h3"];
$fSH4 = $_REQUEST["font-size-h4"];
$fSH5 = $_REQUEST["font-size-h5"];
$fSH6 = $_REQUEST["font-size-h6"];
$lHB = $_REQUEST["line-height-base"];
$lHC = $_REQUEST["line-height-computed"];
$hFF = $_REQUEST["headings-font-family"];
$hFW = $_REQUEST["headings-font-weight"];
$hLH = $_REQUEST["headings-line-height"];
$hC = $_REQUEST["headings-color"];


// Buttons
$bFW = $_REQUEST["btn-font-weight"];


$bDC = $_REQUEST["btn-default-color"]; #333;
$bDB = $_REQUEST["btn-default-bg"];
$bDBB = $_REQUEST["btn-default-border"]; #ccc;
$bPC = $_REQUEST["btn-primary-color"];


$bPB = $_REQUEST["btn-primary-bg"];
$bPBB = $_REQUEST["btn-primary-border"];
$bSC = $_REQUEST["btn-success-color"];
$bSB = $_REQUEST["btn-success-bg"];
$bSBB = $_REQUEST["btn-success-border"];
$bWC = $_REQUEST["btn-warning-color"];
$bWB = $_REQUEST["btn-warning-bg"];
$bWBb = $_REQUEST["btn-warning-border"];
$bDCC = $_REQUEST["btn-danger-color"];
$bDBBB = $_REQUEST["btn-danger-bg"];
$bDBorder = $_REQUEST["btn-danger-border"];
$bIC = $_REQUEST["btn-info-color"];
$bIL = $_REQUEST["btn-info-bg"];
$bII = $_REQUEST["btn-info-border"];
$bIDC = $_REQUEST["btn-link-disabled-color"];


/*   START */
// Dropdowns
$Drop_Bg = $_REQUEST["dropdown-bg"];
$Drop_Br = $_REQUEST["dropdown-border"]; // rgba(0,0,0,.15);
$Drop_Di_Bg = $_REQUEST["dropdown-divider-bg"]; #e5e5e5;
$Drop_Link_active = $_REQUEST["dropdown-link-active-color"]; //$bodyBg;
$dropdown_link_active_bg = $_REQUEST["dropdown-link-active-bg"]; //$_REQUEST["component-active-bg"];
$dropdown_link_color = $_REQUEST["dropdown-link-color"]; // $_REQUEST["gray-dark"];
$dropdown_link_hover_color = $_REQUEST["dropdown-link-hover-color"]; // $bodyBg;
$dropdown_link_hover_bg = $_REQUEST["dropdown-link-hover-bg"]; //$_REQUEST["dropdown-link-active-bg"];
$dropdown_link_disabled_color = $_REQUEST["dropdown-link-disabled-color"]; //$_REQUEST["gray-light"];
$dropdown_header_color = $_REQUEST["dropdown-header-color"]; //$_REQUEST["gray-light"];
$dropdown_caret_color = $_REQUEST["dropdown-caret-color"]; #000;
// Forms
$input_bg = $_REQUEST["input-bg"];
$input_bg_disabled = $_REQUEST["input-bg-disabled"]; //$_REQUEST["gray-lighter"];
$input_color = $_REQUEST["input-color"]; // $_REQUEST["gray"];
$input_border = $_REQUEST["input-border"]; #ccc;
$input_border_radius = $_REQUEST["input-border-radius"]; // $_REQUEST["border-radius-base"];
$input_color_placeholder = $_REQUEST["input-color-placeholder"]; // $_REQUEST["gray-light"];
$input_height_base = $_REQUEST["input-height-base"]; //($_REQUEST["line-height-computed"] + ($_REQUEST["padding-base-vertical"] * 2) + 2);
$input_height_large = $_REQUEST["input-height-large"]; //(floor($_REQUEST["font-size-large"] * $_REQUEST["line-height-large"]) + ($_REQUEST["padding-large-vertical"] * 2) + 2);
$input_height_small = $_REQUEST["input-height-small"]; //(floor($_REQUEST["font-size-small"] * $_REQUEST["line-height-small"]) + ($_REQUEST["padding-small-vertical"] * 2) + 2);
$legend_color = $_REQUEST["legend-color"]; // $_REQUEST["gray-dark"];
$legend_border_color = $_REQUEST["legend-border-color"]; #e5e5e5;
$input_group_addon_bg = $_REQUEST["input-group-addon-bg"]; // $_REQUEST["gray-lighter"];
$input_group_addon_border_color = $_REQUEST["input-group-addon-border-color"]; //$_REQUEST["input-border"];
// Table
$table_cell_padding = $_REQUEST["table-cell-padding"]; //8px;
$table_condensed_cell_padding = $_REQUEST["table-condensed-cell-padding"]; //$pSV;
$table_cell_padding = $_REQUEST["table-cell-padding"]; //8px;
$table_condensed_cell_padding = $_REQUEST["table-condensed-cell-padding"]; //$pSV;
$table_bg = $_REQUEST["table-bg"]; //transparent;
$table_bg_accent = $_REQUEST["table-bg-accent"]; #f9f9f9;
$table_bg_hover = $_REQUEST["table-bg-hover"]; #f5f5f5;
$table_bg_active = $_REQUEST["table-bg-active"]; //$_REQUEST["table-bg-hover"];
$table_border_color = $_REQUEST["table-border-color"]; #ddd;
// Navbar
$navbar_height = $_REQUEST["navbar-height"]; //$navbar_height;
$navbar_margin_bottom = $_REQUEST["navbar-margin-bottom"]; //$_REQUEST["line-height-computed"];
$navbar_default_color = $_REQUEST["navbar-default-color"]; #777;
$navbar_default_bg = $_REQUEST["navbar-default-bg"]; #f8f8f8;
$navbar_default_border = $_REQUEST["navbar-default-border"];
$navbar_border_radius = $_REQUEST["navbar-border-radius"];
$navbar_padding_horizontal = $_REQUEST["navbar-padding-horizontal"]; //floor($_REQUEST["grid-gutter-width"] / 2);
$navbar_padding_vertical = $_REQUEST["navbar-padding-vertical"]; //(($_REQUEST["navbar-height"] - $_REQUEST["line-height-computed"]) / 2);
$navbar_default_link_color = $_REQUEST["navbar-default-link-color"]; #777;
$navbar_default_link_hover_color = $_REQUEST["navbar-default-link-hover-color"]; #333;
$navbar_default_link_hover_bg = $_REQUEST["navbar-default-link-hover-bg"]; // transparent;
$navbar_default_link_active_color = $_REQUEST["navbar-default-link-active-color"];  #555;
$navbar_default_link_active_bg = $_REQUEST["navbar-default-link-active-bg"]; //darken($_REQUEST["navbar-default-bg"], 6.5%);
$navbar_default_link_disabled_color = $_REQUEST["navbar-default-link-disabled-color"];  #ccc;
$navbar_default_link_disabled_bg = $_REQUEST["navbar-default-link-disabled-bg"]; //transparent;
$navbar_default_brand_color = $_REQUEST["navbar-default-brand-color"]; //$_REQUEST["navbar-default-link-color"];
$navbar_default_brand_hover_color = $_REQUEST["navbar-default-brand-hover-color"]; //darken($_REQUEST["navbar-default-link-color"], 10%);
$navbar_default_brand_hover_bg = $_REQUEST["navbar-default-brand-hover-bg"]; //transparent;
$navbar_default_toggle_hover_bg = $_REQUEST["navbar-default-toggle-hover-bg"]; #ddd;
$navbar_default_toggle_icon_bar_bg = $_REQUEST["navbar-default-toggle-icon-bar-bg"]; #888;
$navbar_default_toggle_border_color = $_REQUEST["navbar-default-toggle-border-color"]; #ddd;
// TODO
// Navs Tabs
$nav_link_padding = $_REQUEST["nav-link-padding"]; //$pSH 15px;
$nav_link_hover_bg = $_REQUEST["nav-link-hover-bg"]; //$_REQUEST["gray-lighter"];
$nav_disabled_link_color = $_REQUEST["nav-disabled-link-color"]; //$_REQUEST["gray-light"];
$nav_disabled_link_hover_color = $_REQUEST["nav-disabled-link-hover-color"]; //$_REQUEST["gray-light"];
$nav_tabs_border_color = $_REQUEST["nav-tabs-border-color"]; #ddd;
$nav_tabs_link_hover_border_color = $_REQUEST["nav-tabs-link-hover-border-color"]; //$_REQUEST["gray-lighter"];
$nav_tabs_active_link_hover_bg = $_REQUEST["nav-tabs-active-link-hover-bg"]; //$_REQUEST["body-bg"];
$nav_tabs_active_link_hover_color = $_REQUEST["nav-tabs-active-link-hover-color"]; //$_REQUEST["gray"];
$nav_tabs_active_link_hover_border_color = $_REQUEST["nav-tabs-active-link-hover-border-color"]; #ddd;
$nav_tabs_justified_link_border_color = $_REQUEST["nav-tabs-justified-link-border-color"]; #ddd;
$nav_tabs_justified_active_link_border_color = $_REQUEST["nav-tabs-justified-active-link-border-color"]; //$_REQUEST["body-bg"];
$nav_pills_border_radius = $_REQUEST["nav-pills-border-radius"]; //$_REQUEST["border-radius-base"];
$nav_pills_active_link_hover_bg = $_REQUEST["nav-pills-active-link-hover-bg"]; //$_REQUEST["component-active-bg"];
$nav_pills_active_link_hover_color = $_REQUEST["nav-pills-active-link-hover-color"]; //$bodyBg;
// DONE ++++++++++++++
// Jumbotron
$jumbotron_padding = $_REQUEST["jumbotron-padding"]; //30px;
$jumbotron_color = $_REQUEST["jumbotron-color"]; //inherit;
$jumbotron_bg = $_REQUEST["jumbotron-bg"]; //$_REQUEST["gray-lighter"];
$jumbotron_font_size = $_REQUEST["jumbotron-font-size"]; //ceil(($_REQUEST["font-size-base"] *  $lHS));
// TODO ++++++++++++++++
// Pagination
$pagination_bg = $_REQUEST["pagination-bg"];
$bodyBg;
$pagination_border = $_REQUEST["pagination-border"]; #ddd;
$pagination_hover_bg = $_REQUEST["pagination-hover-bg"]; //$_REQUEST["gray-lighter"];
$pagination_hover_color = $_REQUEST["pagination-hover-color"]; //$_REQUEST["link-hover-color"];
$pagination_hover_border = $_REQUEST["pagination-hover-border"]; #ddd;
$pagination_active_bg = $_REQUEST["pagination-active-bg"]; //$_REQUEST["brand-primary"];
$pagination_active_color = $_REQUEST["pagination-active-color"]; //$bodyBg;
$pagination_active_border = $_REQUEST["pagination-active-border"]; //$_REQUEST["brand-primary"];
$pagination_disabled_color = $_REQUEST["pagination-disabled-color"]; //$_REQUEST["gray-light"];
$pagination_disabled_bg = $_REQUEST["pagination-disabled-bg"]; //$bodyBg;
$pagination_disabled_border = $_REQUEST["pagination-disabled-border"]; #ddd;
$pager_bg = $_REQUEST["pager-bg"]; //$_REQUEST["pagination-bg"];
$pager_border = $_REQUEST["pager-border"]; // $_REQUEST["pagination-border"];
$pager_border_radius = $_REQUEST["pager-border-radius"]; //15px;
$pager_hover_bg = $_REQUEST["pager-hover-bg"]; ////$_REQUEST["pagination-hover-bg"];
$pager_active_bg = $_REQUEST["pager-active-bg"]; //$_REQUEST["pagination-active-bg"];
$pager_active_color = $_REQUEST["pager-active-color"]; // $_REQUEST["pagination-active-color"];
$pager_bg = $_REQUEST["pager-bg"]; //$_REQUEST["pagination-bg"];
$pager_disabled_color = $_REQUEST["pager-disabled-color"]; // $_REQUEST["gray-light"];
// DONE
// Form States
$state_warning_text = $_REQUEST["state-warning-text"]; #c09853;
$state_warning_bg = $_REQUEST["state-warning-bg"]; #fcf8e3;
$state_warning_border = $_REQUEST["state-warning-border"]; //darken(spin($_REQUEST["state-warning-bg"], -10), 3%);
$state_danger_text = $_REQUEST["state-danger-text"];
$state_danger_text;
$state_danger_bg = $_REQUEST["state-danger-bg"];
$state_danger_bg;
$state_danger_border = $_REQUEST["state-danger-border"]; //darken(spin($_REQUEST["state-danger-bg"], -10), 3%);
$state_success_text = $_REQUEST["state-success-text"];
$state_success_text;
$state_success_bg = $_REQUEST["state-success-bg"];
$state_success_bg;
$state_success_border = $_REQUEST["state-success-border"]; //darken(spin($_REQUEST["state-success-bg"], -10), 5%);
$state_info_text = $_REQUEST["state-info-text"];
$state_info_text;
$state_info_bg = $_REQUEST["state-info-bg"];
$state_info_bg;
$state_info_border = $_REQUEST["state-info-border"]; //darken(spin($_REQUEST["state-info-bg"], -10), 7%);
// ToolTip
$tooltip_max_width = $_REQUEST["tooltip-max-width"]; //200px;
$tooltip_color = $_REQUEST["tooltip-color"]; //$bodyBg;
$tooltip_bg = $_REQUEST["tooltip-bg"]; #000;
$tooltip_arrow_width = $_REQUEST["tooltip-arrow-width"]; //$pSV;
$tooltip_arrow_color = $_REQUEST["tooltip-arrow-color"]; //$_REQUEST["tooltip-bg"];
$tooltip_opacity = $_REQUEST["tooltip-opacity"]; //.9;
// Popover
$popover_bg = $_REQUEST["popover-bg"]; //$bodyBg;
$popover_max_width = $_REQUEST["popover-max-width"]; //276px;
$popover_border_color = $_REQUEST["popover-border-color"]; //rgba(0,0,0,.2);
$popover_fallback_border_color = $_REQUEST["popover-fallback-border-color"]; #ccc;
$popover_title_bg = $_REQUEST["popover-title-bg"]; //darken($_REQUEST["popover-bg"], 3%);
$popover_arrow_width = $_REQUEST["popover-arrow-width"]; //$pSH;
$popover_arrow_color = $_REQUEST["popover-arrow-color"]; //$bodyBg;
$popover_arrow_outer_width = $_REQUEST["popover-arrow-outer-width"]; //($_REQUEST["popover-arrow-width"] + 1);
$popover_arrow_outer_color = $_REQUEST["popover-arrow-outer-color"]; //rgba(0,0,0,.25);
$popover_arrow_outer_fallback_color = $_REQUEST["popover-arrow-outer-fallback-color"]; #999;
//
// List Group
$list_group_bg = $_REQUEST["list-group-bg"]; //$bodyBg;
$list_group_border = $_REQUEST["list-group-border"]; #ddd;
$list_group_border_radius = $_REQUEST["list-group-border-radius"]; //$_REQUEST["border-radius-base"];
$list_group_hover_bg = $_REQUEST["list-group-hover-bg"]; #f5f5f5;
$list_group_active_color = $_REQUEST["list-group-active-color"]; //$bodyBg;
$list_group_active_bg = $_REQUEST["list-group-active-bg"]; //$_REQUEST["component-active-bg"];
$list_group_active_border = $_REQUEST["list-group-active-border"]; //$_REQUEST["list-group-active-bg"];
$list_group_active_text_color = $_REQUEST["list-group-active-text-color"]; //lighten($_REQUEST["list-group-active-bg"], 40%);
$list_group_link_color = $_REQUEST["list-group-link-color"]; #555;
$list_group_link_heading_color = $_REQUEST["list-group-link-heading-color"]; #333;
// Sprites
$icon_font_path = $_REQUEST["icon-font-path"];  //"../app/fonts/";
$icon_font_name = $_REQUEST["icon-font-name"]; //glyphicons-halflings-regular;
// Modify files if submit
// Generate Less file

$lessVal = "
// Grays
@gray-darker: $gray_darker;
@gray-dark: $gray_dark;
@gray: $gray;
@gray-light: $gray_light;
@gray-lighter:$gray_lighter;


// Brand Colors
@brand-primary: $brand_primary;
@brand-success: $brand_success;
@brand-warning: $brand_warning;
@brand-danger: $brand_danger;
@brand-info: $brand_info;


// Scaffolding
@body-bg: $bodyBg;
@text-color: $txcolor;
@link-color: $linkcolor;
@link-hover-color: $linkhovercolor;
@padding-base-vertical: $pbv;
@padding-base-horizontal: $padBH;
@padding-large-vertical: $pLV;
@padding-large-horizontal: $pLH;
@padding-small-vertical: $pSV;
@padding-small-horizontal: $pSH;
@border-radius-base: $bRB;
@border-radius-large: $bRL;
@border-radius-small: $bRS;
@line-height-large: $lHL;
@line-height-small: $lHS;
@component-active-bg: $cAB;


// Typography
@font-family-sans-serif: $fFSS;
@font-family-serif: $fFS;
@font-family-monospace: $fFM;
@font-family-base: $fFB;
@font-size-base: $fSB;
@font-size-large: $fSL;
@font-size-small: $fSS;
@font-size-h1: $fSH1;
@font-size-h2:$fSH2;
@font-size-h3: $fSH3;
@font-size-h4:$fSH4;
@font-size-h5: $fSH5;
@font-size-h6: $fSH6;
@line-height-base: $lHB;
@line-height-computed: $lHC;
@headings-font-family:$hFF;
@headings-font-weight: $hFW;
@headings-line-height: $hLH;
@headings-color: $hC;


// Buttons
@btn-font-weight: $bFW;
@btn-default-color: $bDC;
@btn-default-bg: $bDB;
@btn-default-border: $bDBB;
@btn-primary-color: $bPC;
@btn-primary-bg: $bPB;
@btn-primary-border: $bPBB;
@btn-success-color: $bSC;
@btn-success-bg: $bSB;
@btn-success-border: $bSBB;
@btn-warning-color: $bWC;
@btn-warning-bg: $bWB;
@btn-warning-border: $bWBb;
@btn-danger-color: $bDCC;
@btn-danger-bg:$bDBBB;
@btn-danger-border: $bDBorder;
@btn-info-color: $bIC;
@btn-info-bg: $bIL;
@btn-info-border: $bII;
@btn-link-disabled-color: $bIDC;


// Dropdowns
@dropdown-bg: $Drop_Bg;
@dropdown-border: $Drop_Br;
@dropdown-divider-bg: $Drop_Di_Bg;
@dropdown-link-active-color: $Drop_Link_active;
@dropdown-link-active-bg: $dropdown_link_active_bg;
@dropdown-link-color: $dropdown_link_color;
@dropdown-link-hover-color: $dropdown_link_hover_color;
@dropdown-link-hover-bg: $dropdown_link_hover_bg;
@dropdown-link-disabled-color: $dropdown_link_disabled_color;
@dropdown-header-color: $dropdown_header_color;
@dropdown-caret-color: $dropdown_caret_color;


// Forms
@input-bg: $input_bg;
@input-bg-disabled: $input_bg_disabled;
@input-color: $input_color;
@input-border: $input_border;
@input-border-radius: $input_border_radius;
@input-color-placeholder: $input_color_placeholder;
@input-height-base: $input_height_base;
@input-height-large: $input_height_large;
@input-height-small: $input_height_small;
@legend-color: $legend_color;
@legend-border-color: $legend_border_color;
@input-group-addon-bg: $input_group_addon_bg;
@input-group-addon-border-color: $input_group_addon_border_color;


// Table
@table-cell-padding: $table_cell_padding;
@table-condensed-cell-padding: $table_condensed_cell_padding;
@table-cell-padding: $table_cell_padding;
@table-condensed-cell-padding: $table_condensed_cell_padding;
@table-bg: $table_bg;
@table-bg-accent: $table_bg_accent;
@table-bg-hover: $table_bg_hover;
@table-bg-active: $table_bg_active;
@table-border-color: $table_border_color;


// Navbar
@navbar-height: $navbar_height;
@navbar-margin-bottom: $navbar_margin_bottom;
@navbar-default-color: $navbar_default_color;
@navbar-default-bg: $navbar_default_bg;
@navbar-default-border:$navbar_default_border;
@navbar-border-radius: $navbar_border_radius;
@navbar-padding-horizontal: $navbar_padding_horizontal;
@navbar-padding-vertical: $navbar_padding_vertical;
@navbar-default-link-color: $navbar_default_link_color;
@navbar-default-link-hover-color: $navbar_default_link_hover_color;
@navbar-default-link-hover-bg: $navbar_default_link_hover_bg;
@navbar-default-link-active-color:  $navbar_default_link_active_color;
@navbar-default-link-active-bg: $navbar_default_link_active_bg;
@navbar-default-link-disabled-color:  $navbar_default_link_disabled_color;
@navbar-default-link-disabled-bg: $navbar_default_link_disabled_bg;
@navbar-default-brand-color:$navbar_default_brand_color;
@navbar-default-brand-hover-color: $navbar_default_brand_hover_color;
@navbar-default-brand-hover-bg: $navbar_default_brand_hover_bg;
@navbar-default-toggle-hover-bg: $navbar_default_toggle_hover_bg;
@navbar-default-toggle-icon-bar-bg: $navbar_default_toggle_icon_bar_bg;
@navbar-default-toggle-border-color: $navbar_default_toggle_border_color;


// Navs Tabs
@nav-link-padding: $nav_link_padding;
@nav-link-hover-bg: $nav_link_hover_bg;
@nav-disabled-link-color: $nav_disabled_link_color;
@nav-disabled-link-hover-color: $nav_disabled_link_hover_color;
@nav-tabs-border-color: $nav_tabs_border_color;
@nav-tabs-link-hover-border-color: $nav_tabs_link_hover_border_color;
@nav-tabs-active-link-hover-bg: $nav_tabs_active_link_hover_bg;
@nav-tabs-active-link-hover-color: $nav_tabs_active_link_hover_color;
@nav-tabs-active-link-hover-border-color: $nav_tabs_active_link_hover_border_color;
@nav-tabs-justified-link-border-color: $nav_tabs_justified_link_border_color;
@nav-tabs-justified-active-link-border-color:$nav_tabs_justified_active_link_border_color;
@nav-pills-border-radius: $nav_pills_border_radius;
@nav-pills-active-link-hover-bg: $nav_pills_active_link_hover_bg;
@nav-pills-active-link-hover-color: $nav_pills_active_link_hover_color;


// Jumbotron
@jumbotron-padding: $jumbotron_padding;
@jumbotron-color: $jumbotron_color;
@jumbotron-bg: $jumbotron_bg;
@jumbotron-font-size: $jumbotron_font_size;


// Pagination
@pagination-bg: $pagination_bg;
@pagination-border: $pagination_border;
@pagination-hover-bg: $pagination_hover_bg;
@pagination-hover-color: $pagination_hover_color;
@pagination-hover-border: $pagination_hover_border;
@pagination-active-bg: $pagination_active_bg;
@pagination-active-color: $pagination_active_color;
@pagination-active-border: $pagination_active_border;
@pagination-disabled-color: $pagination_disabled_color;
@pagination-disabled-bg: $pagination_disabled_bg;
@pagination-disabled-border: $pagination_disabled_border;
@pager-bg: $pager_bg;
@pager-border: $pager_border;
@pager-border-radius: $pager_border_radius;
@pager-hover-bg: $pager_hover_bg;
@pager-active-bg: $pager_active_bg;
@pager-active-color:$pager_active_color ;
@pager-bg: $pager_bg;
@pager-disabled-color: $pager_disabled_color;


// Form States
@state-warning-text: $state_warning_text;
@state-warning-bg: $state_warning_bg;
@state-warning-border: $state_warning_border;
@state-danger-text: $state_danger_text;
@state-danger-bg: $state_danger_bg;
@state-danger-border: $state_danger_border;
@state-success-text: $state_success_text
@state-success-bg: $state_success_bg
@state-success-border:$state_success_border;
@state-info-text: $state_info_text;
@state-info-bg: $state_info_bg;
@state-info-border: $state_info_border;

// ToolTip
@tooltip-max-width: $tooltip_max_width;
@tooltip-color: $tooltip_color;
@tooltip-bg: $tooltip_bg;
@tooltip-arrow-width: $tooltip_arrow_width;
@tooltip-arrow-color: $tooltip_arrow_color;
@tooltip-opacity: $tooltip_opacity;


// Popover
@popover-bg: $popover_bg;
@popover-max-width: $popover_max_width;
@popover-border-color: $popover_border_color;
@popover-fallback-border-color: $popover_fallback_border_color;
@popover-title-bg: $popover_title_bg;
@popover-arrow-width: $popover_arrow_width;
@popover-arrow-color: $popover_arrow_color;
@popover-arrow-outer-width: $popover_arrow_outer_width;
@popover-arrow-outer-color: $popover_arrow_outer_color;
@popover-arrow-outer-fallback-color: $popover_arrow_outer_fallback_color;


// List Group
@list-group-bg: $list_group_bg;
@list-group-border: $list_group_border;
@list-group-border-radius: $list_group_border_radius;
@list-group-hover-bg: $list_group_hover_bg;
@list-group-active-color: $list_group_active_color;
@list-group-active-bg: $list_group_active_bg;
@list-group-active-border: $list_group_active_border;
@list-group-active-text-color: $list_group_active_text_color;
@list-group-link-color: $list_group_link_color;
@list-group-link-heading-color: $list_group_link_heading_color;


// Sprites
@icon-font-path: $icon_font_path;
@icon-font-name: $icon_font_name;

   ";


// Add to text file

$txtVariable = "
// Grays
@gray-darker: $gray_darker;
@gray-dark: $gray_dark;
@gray: $gray;
@gray-light: $gray_light;
@gray-lighter:$gray_lighter;


// Brand Colors
@brand-primary: $brand_primary;
@brand-success: $brand_success;
@brand-warning: $brand_warning;
@brand-danger: $brand_danger;
@brand-info: $brand_info;


// Scaffolding
@body-bg: $bodyBg;
@text-color: $txcolor;
@link-color: $linkcolor;
@link-hover-color: $linkhovercolor;
@padding-base-vertical: $pbv;
@padding-base-horizontal: $padBH;
@padding-large-vertical: $pLV;
@padding-large-horizontal: $pLH;
@padding-small-vertical: $pSV;
@padding-small-horizontal: $pSH;
@border-radius-base: $bRB;
@border-radius-large: $bRL;
@border-radius-small: $bRS;
@line-height-large: $lHL;
@line-height-small: $lHS;
@component-active-bg: $cAB;


// Typography
@font-family-sans-serif: $fFSS;
@font-family-serif: $fFS;
@font-family-monospace: $fFM;
@font-family-base: $fFB;
@font-size-base: $fSB;
@font-size-large: $fSL;
@font-size-small: $fSS;
@font-size-h1: $fSH1;
@font-size-h2:$fSH2;
@font-size-h3: $fSH3;
@font-size-h4:$fSH4;
@font-size-h5: $fSH5;
@font-size-h6: $fSH6;
@line-height-base: $lHB;
@line-height-computed: $lHC;
@headings-font-family:$hFF;
@headings-font-weight: $hFW;
@headings-line-height: $hLH;
@headings-color: $hC;


// Buttons
@btn-font-weight: $bFW;
@btn-default-color: $bDC;
@btn-default-bg: $bDB;
@btn-default-border: $bDBB;
@btn-primary-color: $bPC;
@btn-primary-bg: $bPB;
@btn-primary-border: $bPBB;
@btn-success-color: $bSC;
@btn-success-bg: $bSB;
@btn-success-border: $bSBB;
@btn-warning-color: $bWC;
@btn-warning-bg: $bWB;
@btn-warning-border: $bWBb;
@btn-danger-color: $bDCC;
@btn-danger-bg:$bDBBB;
@btn-danger-border: $bDBorder;
@btn-info-color: $bIC;
@btn-info-bg: $bIL;
@btn-info-border: $bII;
@btn-link-disabled-color: $bIDC;


// Dropdowns
@dropdown-bg: $Drop_Bg;
@dropdown-border: $Drop_Br;
@dropdown-divider-bg: $Drop_Di_Bg;
@dropdown-link-active-color: $Drop_Link_active;
@dropdown-link-active-bg: $dropdown_link_active_bg;
@dropdown-link-color: $dropdown_link_color;
@dropdown-link-hover-color: $dropdown_link_hover_color;
@dropdown-link-hover-bg: $dropdown_link_hover_bg;
@dropdown-link-disabled-color: $dropdown_link_disabled_color;
@dropdown-header-color: $dropdown_header_color;
@dropdown-caret-color: $dropdown_caret_color;


// Forms
@input-bg: $input_bg;
@input-bg-disabled: $input_bg_disabled;
@input-color: $input_color;
@input-border: $input_border;
@input-border-radius: $input_border_radius;
@input-color-placeholder: $input_color_placeholder;
@input-height-base: $input_height_base;
@input-height-large: $input_height_large;
@input-height-small: $input_height_small;
@legend-color: $legend_color;
@legend-border-color: $legend_border_color;
@input-group-addon-bg: $input_group_addon_bg;
@input-group-addon-border-color: $input_group_addon_border_color;


// Table
@table-cell-padding: $table_cell_padding;
@table-condensed-cell-padding: $table_condensed_cell_padding;
@table-cell-padding: $table_cell_padding;
@table-condensed-cell-padding: $table_condensed_cell_padding;
@table-bg: $table_bg;
@table-bg-accent: $table_bg_accent;
@table-bg-hover: $table_bg_hover;
@table-bg-active: $table_bg_active;
@table-border-color: $table_border_color;


// Navbar
@navbar-height: $navbar_height;
@navbar-margin-bottom: $navbar_margin_bottom;
@navbar-default-color: $navbar_default_color;
@navbar-default-bg: $navbar_default_bg;
@navbar-default-border:$navbar_default_border;
@navbar-border-radius: $navbar_border_radius;
@navbar-padding-horizontal: $navbar_padding_horizontal;
@navbar-padding-vertical: $navbar_padding_vertical;
@navbar-default-link-color: $navbar_default_link_color;
@navbar-default-link-hover-color: $navbar_default_link_hover_color;
@navbar-default-link-hover-bg: $navbar_default_link_hover_bg;
@navbar-default-link-active-color:  $navbar_default_link_active_color;
@navbar-default-link-active-bg: $navbar_default_link_active_bg;
@navbar-default-link-disabled-color:  $navbar_default_link_disabled_color;
@navbar-default-link-disabled-bg: $navbar_default_link_disabled_bg;
@navbar-default-brand-color:$navbar_default_brand_color;
@navbar-default-brand-hover-color: $navbar_default_brand_hover_color;
@navbar-default-brand-hover-bg: $navbar_default_brand_hover_bg;
@navbar-default-toggle-hover-bg: $navbar_default_toggle_hover_bg;
@navbar-default-toggle-icon-bar-bg: $navbar_default_toggle_icon_bar_bg;
@navbar-default-toggle-border-color: $navbar_default_toggle_border_color;


// Navs Tabs
@nav-link-padding: $nav_link_padding;
@nav-link-hover-bg: $nav_link_hover_bg;
@nav-disabled-link-color: $nav_disabled_link_color;
@nav-disabled-link-hover-color: $nav_disabled_link_hover_color;
@nav-tabs-border-color: $nav_tabs_border_color;
@nav-tabs-link-hover-border-color: $nav_tabs_link_hover_border_color;
@nav-tabs-active-link-hover-bg: $nav_tabs_active_link_hover_bg;
@nav-tabs-active-link-hover-color: $nav_tabs_active_link_hover_color;
@nav-tabs-active-link-hover-border-color: $nav_tabs_active_link_hover_border_color;
@nav-tabs-justified-link-border-color: $nav_tabs_justified_link_border_color;
@nav-tabs-justified-active-link-border-color:$nav_tabs_justified_active_link_border_color;
@nav-pills-border-radius: $nav_pills_border_radius;
@nav-pills-active-link-hover-bg: $nav_pills_active_link_hover_bg;
@nav-pills-active-link-hover-color: $nav_pills_active_link_hover_color;


// Jumbotron
@jumbotron-padding: $jumbotron_padding;
@jumbotron-color: $jumbotron_color;
@jumbotron-bg: $jumbotron_bg;
@jumbotron-font-size: $jumbotron_font_size;


// Pagination
@pagination-bg: $pagination_bg;
@pagination-border: $pagination_border;
@pagination-hover-bg: $pagination_hover_bg;
@pagination-hover-color: $pagination_hover_color;
@pagination-hover-border: $pagination_hover_border;
@pagination-active-bg: $pagination_active_bg;
@pagination-active-color: $pagination_active_color;
@pagination-active-border: $pagination_active_border;
@pagination-disabled-color: $pagination_disabled_color;
@pagination-disabled-bg: $pagination_disabled_bg;
@pagination-disabled-border: $pagination_disabled_border;
@pager-bg: $pager_bg;
@pager-border: $pager_border;
@pager-border-radius: $pager_border_radius;
@pager-hover-bg: $pager_hover_bg;
@pager-active-bg: $pager_active_bg;
@pager-active-color:$pager_active_color ;
@pager-bg: $pager_bg;
@pager-disabled-color: $pager_disabled_color;


// Form States
@state-warning-text: $state_warning_text;
@state-warning-bg: $state_warning_bg;
@state-warning-border: $state_warning_border;
@state-danger-text: $state_danger_text;
@state-danger-bg: $state_danger_bg;
@state-danger-border: $state_danger_border;
@state-success-text: $state_success_text
@state-success-bg: $state_success_bg
@state-success-border:$state_success_border;
@state-info-text: $state_info_text;
@state-info-bg: $state_info_bg;
@state-info-border: $state_info_border;

// ToolTip
@tooltip-max-width: $tooltip_max_width;
@tooltip-color: $tooltip_color;
@tooltip-bg: $tooltip_bg;
@tooltip-arrow-width: $tooltip_arrow_width;
@tooltip-arrow-color: $tooltip_arrow_color;
@tooltip-opacity: $tooltip_opacity;


// Popover
@popover-bg: $popover_bg;
@popover-max-width: $popover_max_width;
@popover-border-color: $popover_border_color;
@popover-fallback-border-color: $popover_fallback_border_color;
@popover-title-bg: $popover_title_bg;
@popover-arrow-width: $popover_arrow_width;
@popover-arrow-color: $popover_arrow_color;
@popover-arrow-outer-width: $popover_arrow_outer_width;
@popover-arrow-outer-color: $popover_arrow_outer_color;
@popover-arrow-outer-fallback-color: $popover_arrow_outer_fallback_color;


// List Group
@list-group-bg: $list_group_bg;
@list-group-border: $list_group_border;
@list-group-border-radius: $list_group_border_radius;
@list-group-hover-bg: $list_group_hover_bg;
@list-group-active-color: $list_group_active_color;
@list-group-active-bg: $list_group_active_bg;
@list-group-active-border: $list_group_active_border;
@list-group-active-text-color: $list_group_active_text_color;
@list-group-link-color: $list_group_link_color;
@list-group-link-heading-color: $list_group_link_heading_color;

@icon-font-path: $icon_font_path;
@icon-font-name: $icon_font_name;
   ";



$navbarD = "html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: $txcolor;
  font: $txcolor;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type='button'],
input[type='reset'],
input[type='submit'] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type='checkbox'],
input[type='radio'] {
  box-sizing: border-box;
  padding: 0;
}
input[type='number']::-webkit-inner-spin-button,
input[type='number']::-webkit-outer-spin-button {
  height: auto;
}
input[type='search'] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
input[type='search']::-webkit-search-cancel-button,
input[type='search']::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
@media print {
  * {
    text-shadow: none !important;
    color: #000 !important;
    background: transparent !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
 
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  select {
    background: " . $_REQUEST['body-bg'] . " !important;
  }
  .navbar {
    display: none;
  }
  .table td,
  .table th {
    background-color: $bodyBg !important;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: $fFSS;
  font-size:  $fSB;
  line-height: $lHB;
  color: $txcolor;
  background-color: $bodyBg;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: $brand_primary;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #2a6496;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: $pSV auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: $bRL;
}
.img-thumbnail {
  padding:$bRB;
  line-height: $lHB;
  background-color: $bodyBg;
  border: 1px solid $table_border_color;
  border-radius:$bRL;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: $bRL;
}
hr {
  margin-top: $pLV;
  margin-bottom: $pLV;
  border: 0;
  border-top: 1px solid $gray_lighter;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family:  $hFF;
  font-weight: $hFW;
  line-height: $hLH;
  color: $hC;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #999999;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: $pLV;
  margin-bottom:$pSH;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top:$pSH;
  margin-bottom:$pSH;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: $fSH1;
}
h2,
.h2 {
  font-size: $fSH2;
}
h3,
.h3 {
  font-size: $fSH3;
}
h4,
.h4 {
  font-size: $fSH4;
}
h5,
.h5 {
  font-size:  $fSH5;
}
h6,
.h6 {
  font-size: $fSH6;
}
p {
  margin: 0 0$pSH;
}
.lead {
  margin-bottom: $pLV;
  font-size: $pLH;
  font-weight: 200;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 21px;
  }
}
small,
.small {
  font-size: 85%;
}
cite {
  font-style: normal;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-muted {
  color: #999999;
}
.text-primary {
  color: $brand_primary;
}
a.text-primary:hover {
  color: #3071a9;
}
.text-success {
  color: $state_success_text;
}
a.text-success:hover {
  color: #356635;
}
.text-info {
  color: $state_info_text;
}
a.text-info:hover {
  color: #2d6987;
}
.text-warning {
  color: $state_warning_text;
}
a.text-warning:hover {
  color: #a47e3c;
}
.text-danger {
  color: $state_danger_text;
}
a.text-danger:hover {
  color: #953b39;
}
.bg-primary {
  color: $bodyBg;
  background-color: $brand_primary;
}
a.bg-primary:hover {
  background-color: #3071a9;
}
.bg-success {
  background-color: $state_success_bg;
}
a.bg-success:hover {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: $state_info_bg;
}
a.bg-info:hover {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: $state_danger_bg;
}
a.bg-danger:hover {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 $pLV;
  border-bottom: 1px solid $gray_lighter;
}
ul,
ol {
  margin-top: 0;
  margin-bottom:$pSH;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
}
.list-inline > li {
  display: inline-block;
  padding-left: $pSV;
  padding-right: $pSV;
}
.list-inline > li:first-child {
  padding-left: 0;
}
dl {
  margin-top: 0;
  margin-bottom: $pLV;
}
dt,
dd {
  line-height: $lHB;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #999999;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding:$pSH $pLV;
  margin: 0 0 $pLV;
  font-size: 17.5px;
  border-left: $pSV solid $gray_lighter;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: $lHB;
  color: #999999;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: $pSV solid $gray_lighter;
  border-left: 0;
  text-align: right;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
blockquote:before,
blockquote:after {
  content: '';
}
address {
  margin-bottom: $pLV;
  font-style: normal;
  line-height: $lHB;
}
code,
kbd,
pre,
samp {
  font-family:   $fFM;
}
code {
  padding: 2px$bRB;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  white-space: nowrap;
  border-radius:$bRB;
}
kbd {
  padding: 2px$bRB;
  font-size: 90%;
  color: $bodyBg;
  background-color: $bDC;
  border-radius: $bRS;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0$pSH;
  font-size: 13px;
  line-height: $lHB;
  word-break: break-all;
  word-wrap: break-word;
  color: $txcolor;
  background-color: #f5f5f5;
  border: 1px solid #cccccc;
  border-radius:$bRB;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: $bRL;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
@media (min-width: 768px) {
  .container {
    width: 7$navbar_height;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666666666666%;
}
.col-xs-10 {
  width: 83.33333333333334%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666666666666%;
}
.col-xs-7 {
  width: 58.333333333333336%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666666666667%;
}
.col-xs-4 {
  width: 33.33333333333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.666666666666664%;
}
.col-xs-1 {
  width: 8.333333333333332%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666666666666%;
}
.col-xs-pull-10 {
  right: 83.33333333333334%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666666666666%;
}
.col-xs-pull-7 {
  right: 58.333333333333336%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666666666667%;
}
.col-xs-pull-4 {
  right: 33.33333333333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.666666666666664%;
}
.col-xs-pull-1 {
  right: 8.333333333333332%;
}
.col-xs-pull-0 {
  right: 0%;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666666666666%;
}
.col-xs-push-10 {
  left: 83.33333333333334%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666666666666%;
}
.col-xs-push-7 {
  left: 58.333333333333336%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666666666667%;
}
.col-xs-push-4 {
  left: 33.33333333333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.666666666666664%;
}
.col-xs-push-1 {
  left: 8.333333333333332%;
}
.col-xs-push-0 {
  left: 0%;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666666666666%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333333334%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666666666666%;
}
.col-xs-offset-7 {
  margin-left: 58.333333333333336%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666666666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.666666666666664%;
}
.col-xs-offset-1 {
  margin-left: 8.333333333333332%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666666666666%;
  }
  .col-sm-10 {
    width: 83.33333333333334%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666666666666%;
  }
  .col-sm-7 {
    width: 58.333333333333336%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666666666667%;
  }
  .col-sm-4 {
    width: 33.33333333333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.666666666666664%;
  }
  .col-sm-1 {
    width: 8.333333333333332%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666666666666%;
  }
  .col-sm-pull-10 {
    right: 83.33333333333334%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666666666666%;
  }
  .col-sm-pull-7 {
    right: 58.333333333333336%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666666666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.666666666666664%;
  }
  .col-sm-pull-1 {
    right: 8.333333333333332%;
  }
  .col-sm-pull-0 {
    right: 0%;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666666666666%;
  }
  .col-sm-push-10 {
    left: 83.33333333333334%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666666666666%;
  }
  .col-sm-push-7 {
    left: 58.333333333333336%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666666666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.666666666666664%;
  }
  .col-sm-push-1 {
    left: 8.333333333333332%;
  }
  .col-sm-push-0 {
    left: 0%;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666666666666%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-sm-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-sm-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666666666666%;
  }
  .col-md-10 {
    width: 83.33333333333334%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666666666666%;
  }
  .col-md-7 {
    width: 58.333333333333336%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666666666667%;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.666666666666664%;
  }
  .col-md-1 {
    width: 8.333333333333332%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666666666666%;
  }
  .col-md-pull-10 {
    right: 83.33333333333334%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666666666666%;
  }
  .col-md-pull-7 {
    right: 58.333333333333336%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666666666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.666666666666664%;
  }
  .col-md-pull-1 {
    right: 8.333333333333332%;
  }
  .col-md-pull-0 {
    right: 0%;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666666666666%;
  }
  .col-md-push-10 {
    left: 83.33333333333334%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666666666666%;
  }
  .col-md-push-7 {
    left: 58.333333333333336%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666666666667%;
  }
  .col-md-push-4 {
    left: 33.33333333333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.666666666666664%;
  }
  .col-md-push-1 {
    left: 8.333333333333332%;
  }
  .col-md-push-0 {
    left: 0%;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666666666666%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-md-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-md-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666666666666%;
  }
  .col-lg-10 {
    width: 83.33333333333334%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666666666666%;
  }
  .col-lg-7 {
    width: 58.333333333333336%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666666666667%;
  }
  .col-lg-4 {
    width: 33.33333333333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.666666666666664%;
  }
  .col-lg-1 {
    width: 8.333333333333332%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666666666666%;
  }
  .col-lg-pull-10 {
    right: 83.33333333333334%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666666666666%;
  }
  .col-lg-pull-7 {
    right: 58.333333333333336%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666666666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.666666666666664%;
  }
  .col-lg-pull-1 {
    right: 8.333333333333332%;
  }
  .col-lg-pull-0 {
    right: 0%;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666666666666%;
  }
  .col-lg-push-10 {
    left: 83.33333333333334%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666666666666%;
  }
  .col-lg-push-7 {
    left: 58.333333333333336%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666666666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.666666666666664%;
  }
  .col-lg-push-1 {
    left: 8.333333333333332%;
  }
  .col-lg-push-0 {
    left: 0%;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666666666666%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333333334%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666666666666%;
  }
  .col-lg-offset-7 {
    margin-left: 58.333333333333336%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666666666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.666666666666664%;
  }
  .col-lg-offset-1 {
    margin-left: 8.333333333333332%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  max-width: 100%;
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  margin-bottom: $pLV;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: $table_cell_padding;
  line-height: $lHB;
  vertical-align: top;
  border-top: 1px solid $table_border_color;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid $table_border_color;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid $table_border_color;
}
.table .table {
  background-color: $table_bg;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: $table_condensed_cell_padding;
}
.table-bordered {
  border: 1px solid $table_border_color;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid $table_border_color;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: $table_bg_accent;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: $table_bg_hover;
}
table col[class*='col-'] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*='col-'],
table th[class*='col-'] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: $table_bg_active;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: $state_success_bg;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: $state_info_bg;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: $state_danger_bg;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
@media (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    overflow-x: scroll;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid $table_border_color;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: $pLV;
  font-size: 21px;
  line-height: inherit;
  color: $legend_color;
  border: 0;
  border-bottom: $legend_border_color;
}
label {
  display: inline-block;
  margin-bottom: $pSV;
  font-weight: bold;
}
input[type='search'] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type='radio'],
input[type='checkbox'] {
  margin:$bRB 0 0;
  margin-top: 1px \9;
  /* IE8-9 */

  line-height: normal;
}
input[type='file'] {
  display: block;
}
input[type='range'] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type='file']:focus,
input[type='radio']:focus,
input[type='checkbox']:focus {
  outline: thin dotted;
  outline: $pSV auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size:  $fSB;
  line-height: $lHB;
  color: $gray;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: $pbv $padBH;
  font-size:  $fSB;
  line-height: $lHB;
  color: $gray;
  background-color: $input_bg;
  background-image: none;
  border: $input_border;
  border-radius:$bRL;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: $input_color_placeholder;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: $input_color_placeholder;
}
.form-control::-webkit-input-placeholder {
  color: $input_color_placeholder;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  cursor: not-allowed;
  background-color: $input_bg_disabled;
  opacity: 1;
}
textarea.form-control {
  height: auto;
}
input[type='search'] {
  -webkit-appearance: none;
}
input[type='date'] {
  line-height: 34px;
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  display: block;
  min-height: $pLV;
  margin-top:$pSH;
  margin-bottom:$pSH;
  padding-left: $pLV;
}
.radio label,
.checkbox label {
  display: inline;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type='radio'],
.radio-inline input[type='radio'],
.checkbox input[type='checkbox'],
.checkbox-inline input[type='checkbox'] {
  float: left;
  margin-left: -$pLV;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: $pLV;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left:$pSH;
}
input[type='radio'][disabled],
input[type='checkbox'][disabled],
.radio[disabled],
.radio-inline[disabled],
.checkbox[disabled],
.checkbox-inline[disabled],
fieldset[disabled] input[type='radio'],
fieldset[disabled] input[type='checkbox'],
fieldset[disabled] .radio,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.input-sm {
  height: 30px;
  padding: $pSV$pSH;
  font-size: $fSS;
  line-height:  $lHS;
  border-radius: $bRS;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.input-lg {
  height: 45px;
  padding: $pLV 16px;
  font-size: $fSL;
  line-height:  $lHL;
  border-radius: $bRL;
}
select.input-lg {
  height: 45px;
  line-height: 45px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.has-feedback .form-control-feedback {
  position: absolute;
  top: 25px;
  right: 0;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline {
  color: $state_success_text;
}
.has-success .form-control {
  border-color: $state_success_text;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #356635;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 $pbv #7aba7b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 $pbv #7aba7b;
}
.has-success .input-group-addon {
  color: $state_success_text;
  border-color: $state_success_text;
  background-color: $state_success_bg;
}
.has-success .form-control-feedback {
  color: $state_success_text;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline {
  color: $state_warning_text;
}
.has-warning .form-control {
  border-color: $state_warning_text;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #a47e3c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 $pbv #dbc59e;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 $pbv #dbc59e;
}
.has-warning .input-group-addon {
  color: $state_warning_text;
  border-color: $state_warning_text;
  background-color: $state_warning_bg;
}
.has-warning .form-control-feedback {
  color: $state_warning_text;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline {
  color: $state_danger_text;
}
.has-error .form-control {
  border-color: $state_danger_text;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #953b39;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 $pbv #d59392;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 $pbv #d59392;
}
.has-error .input-group-addon {
  color: $state_danger_text;
  border-color: $state_danger_text;
  background-color: $state_danger_bg;
}
.has-error .form-control-feedback {
  color: $state_danger_text;
}
.form-control-static {
  margin-bottom: 0;
}
.help-block {
  display: block;
  margin-top: $pSV;
  margin-bottom:$pSH;
  color: #737373;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-left: 0;
    vertical-align: middle;
  }
  .form-inline .radio input[type='radio'],
  .form-inline .checkbox input[type='checkbox'] {
    float: none;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .control-label,
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
.form-horizontal .form-control-static {
  padding-top: 7px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  top: 0;
  right: 15px;
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: $bFW;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: $pbv $padBH;
  font-size:  $fSB;
  line-height: $lHB;
  border-radius:$bRL;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.btn:focus {
  outline: thin dotted;
  outline: $pSV auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus {
  color: $bDC;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 $bRS $pSV rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 $bRS $pSV rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  pointer-events: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-default {
  color: $bDC;
  background-color: $bDB;
  border-color: $bDBB;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  color: $bDC;
  background-color: #ebebeb;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: $bDB;
  border-color: $bDBB;
}
.btn-default .badge {
  color: $bDB;
  background-color: $bDC;
}
.btn-primary {
  color: $bPB;
  background-color: $brand_primary;
  border-color: #357ebd;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  color: $bPB;
  background-color: #3276b1;
  border-color: #285e8e;
}
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: $brand_primary;
  border-color: #357ebd;
}
.btn-primary .badge {
  color: $bPB;
  background-color: $bodyBg;
}
.btn-success {
  color: $bodyBg;
  background-color: $brand_success;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  color: $bodyBg;
  background-color: #47a447;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: $brand_success;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: $brand_success;
  background-color: $bodyBg;
}
.btn-info {
  color: $bodyBg;
  background-color: $brand_info;
  border-color: #46b8da;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  color: $bodyBg;
  background-color: #39b3d7;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: $brand_info;
  border-color: #46b8da;
}
.btn-info .badge {
  color: $brand_info;
  background-color: $bodyBg;
}
.btn-warning {
  color: $bodyBg;
  background-color: $brand_warning;
  border-color: #eea236;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  color: $bodyBg;
  background-color: #ed9c28;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: $brand_warning;
  border-color: #eea236;
}
.btn-warning .badge {
  color: $brand_warning;
  background-color: $bodyBg;
}
.btn-danger {
  color: $bodyBg;
  background-color: $brand_danger;
  border-color: #d43f3a;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  color: $bodyBg;
  background-color: #d2322d;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: $brand_danger;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: $brand_danger;
  background-color: $bodyBg;
}
.btn-link {
  color: $brand_primary;
  font-weight: normal;
  cursor: pointer;
  border-radius: $bRL;
}
.btn-link,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #2a6496;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #999999;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: $pLV 16px;
  font-size: $fSL;
  line-height:  $lHL;
  border-radius: $bRL;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: $pSV $pLV;
  font-size: $fSS;
  line-height:  $lHS;
  border-radius: $bRS;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px $pSV;
  font-size: $fSS;
  line-height:  $lHS;
  border-radius: $bRS;
}
.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}
.btn-block + .btn-block {
  margin-top: $pSV;
}
input[type='submit'].btn-block,
input[type='reset'].btn-block,
input[type='button'].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  transition: height 0.35s ease;
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../app/fonts/glyphicons-halflings-regular.eot');
  src: url('../app/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../app/fonts/glyphicons-halflings-regular.woff') format('woff'), url('../app/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../app/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: '\2a';
}
.glyphicon-plus:before {
  content: '\2b';
}
.glyphicon-euro:before {
  content: '\20ac';
}
.glyphicon-minus:before {
  content: '\2212';
}
.glyphicon-cloud:before {
  content: '\2601';
}
.glyphicon-envelope:before {
  content: '\2709';
}
.glyphicon-pencil:before {
  content: '\270f';
}
.glyphicon-glass:before {
  content: '\e001';
}
.glyphicon-music:before {
  content: '\e002';
}
.glyphicon-search:before {
  content: '\e003';
}
.glyphicon-heart:before {
  content: '\e005';
}
.glyphicon-star:before {
  content: '\e006';
}
.glyphicon-star-empty:before {
  content: '\e007';
}
.glyphicon-user:before {
  content: '\e008';
}
.glyphicon-film:before {
  content: '\e009';
}
.glyphicon-th-large:before {
  content: '\e010';
}
.glyphicon-th:before {
  content: '\e011';
}
.glyphicon-th-list:before {
  content: '\e012';
}
.glyphicon-ok:before {
  content: '\e013';
}
.glyphicon-remove:before {
  content: '\e014';
}

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top:$bRB solid;
  border-right:$bRB solid transparent;
  border-left:$bRB solid transparent;
}
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: $pSV 0;
  margin: 2px 0 0;
  list-style: none;
  font-size:  $fSB;
  background-color: $Drop_Bg;
  border: 1px solid #cccccc;
  border: $Drop_Br;
  border-radius:$bRL;
  -webkit-box-shadow: 0 $pbv 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 $pbv 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: $Drop_Di_Bg;
}
.dropdown-menu > li > a {
  display: block;
  padding: $bRS $pLV;
  clear: both;
  font-weight: normal;
  line-height: $lHB;
  color: $dropdown_link_color;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: $dropdown_link_hover_color;
  background-color: $dropdown_link_hover_bg;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: $Drop_Link_active;
  text-decoration: none;
  outline: 0;
  background-color: $dropdown_link_active_bg;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: $dropdown_link_disabled_color;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  left: auto;
  right: 0;
}
.dropdown-menu-left {
  left: 0;
  right: auto;
}
.dropdown-header {
  display: block;
  padding: $bRS $pLV;
  font-size: $fSS;
  line-height: $lHB;
  color: $dropdown_header_color;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom:$bRB solid;
  content: '';
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus {
  outline: none;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: $pSV;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: $bRL;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: $bRL;
}
.btn-group > .btn-group:first-child > .btn:last-child,
.btn-group > .btn-group:first-child > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: $padBH;
  padding-right: $padBH;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 $bRS $pSV rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 $bRS $pSV rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: $pSV $pSV 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 $pSV $pSV;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: $bRL;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius:$bRB;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius:$bRB;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
[data-toggle='buttons'] > .btn > input[type='radio'],
[data-toggle='buttons'] > .btn > input[type='checkbox'] {
  display: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*='col-'] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form- control {
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  padding: $pLV 16px;
  font-size: $fSL;
  line-height:  $lHL;
  border-radius: $bRL;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 45px;
  line-height: 45px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: $pSV $pLV;
  font-size: $fSS;
  line-height:  $lHS;
  border-radius: $bRS;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: $pbv $padBH;
  font-size:  $fSB;
  font-weight: normal;
  line-height: 1;
  color: $input_color
  text-align: center;
  background-color: $input_group_addon_bg;
  border:$input_group_addon_border_color ;
  border-radius:$bRL;
}
.input-group-addon.input-sm {
  padding: $pSV $pLV;
  font-size: $fSS;
  border-radius: $bRS;
}
.input-group-addon.input-lg {
  padding: $pLV 16px;
  font-size: $fSL;
  border-radius: $bRL;
}
.input-group-addon input[type='radio'],
.input-group-addon input[type='checkbox'] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  margin-left: -1px;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: $pLV 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: $nav_link_hover_bg;
}
.nav > li.disabled > a {
  color: $nav_disabled_link_color;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: $nav_disabled_link_hover_color;
  text-decoration: none;
  background-color: $nav_link_hover_bg;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: $gray_lighter;
  border-color: $brand_primary;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid $nav_tabs_border_color;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: $lHB;
  border: 1px solid transparent;
  border-radius:$bRL $bRB 0 0;
}
.nav-tabs > li > a:hover {
  border-color: $nav_tabs_link_hover_border_color $nav_tabs_link_hover_border_color $nav_tabs_border_color;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: $nav_tabs_active_link_hover_color;
  background-color: $nav_tabs_active_link_hover_bg;
  border: 1px solid $nav_tabs_link_hover_border_color;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: $pSV;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius:$bRB;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid $nav_tabs_link_hover_border_color;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid $nav_tabs_link_hover_border_color;
    border-radius:$bRB$bRB 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: $bodyBg;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius:$bRB;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: $bodyBg;
  background-color: $brand_primary;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: $pSV;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius:$bRB;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid $nav_tabs_active_link_border_color;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid $nav_tabs_active_hover_border_color;
    border-radius:$bRB$bRB 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: $bodyBg;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: $navbar_height;
  margin-bottom: $navbar_margin_bottom;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius:$bRB;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  max-height: 340px;
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: $navbar_border_radius;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  padding: 15px 15px;
  font-size: $fSL;
  line-height: $lHC;
  height: $navbar_height;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px $pLV;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius:$bRB;
}
.navbar-toggle:focus {
  outline: none;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top:$bRB;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 7.5px -15px;
}
.navbar-nav > li > a {
  padding-top: $pLV;
  padding-bottom: $pLV;
  line-height: $lHC;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: $pSV 15px $pSV 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: $lHC;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
  .navbar-nav.navbar-right:last-child {
    margin-right: -15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
  }
}
.navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding:$pSH 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 8px;
  margin-bottom: 8px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-left: 0;
    vertical-align: middle;
  }
  .navbar-form .radio input[type='radio'],
  .navbar-form .checkbox input[type='checkbox'] {
    float: none;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: $pSV;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .navbar-form.navbar-right:last-child {
    margin-right: -15px;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top:$pSH;
  margin-bottom:$pSH;
}
.navbar-btn.btn-xs {
  margin-top:  $fSB;
  margin-bottom:  $fSB;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
  }
  .navbar-text.navbar-right:last-child {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: $navbar_default_bg;
  border-color: $navbar_default_border;
}
.navbar-default .navbar-brand {
  color: $navbar_default_brand_color;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: $navbar_default_brand_hover_color;
  background-color: $navbar_default_brand_hover_bg;
}
.navbar-default .navbar-text {
  color: $navbar_default_color;
}
.navbar-default .navbar-nav > li > a {
  color: $navbar_default_link_color;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: $navbar_default_link_hover_colordefault_;
  background-color: $navbar_default_link_hover_bg;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: $navbar_default_link_active_color;
  background-color: $navbar_default_link_active_bg;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: $navbar_default_link_disabled_color;
  background-color: $navbar_default_link_disabled_bg;
}
.navbar-default .navbar-toggle {
  border-color: $table_border_color;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: $navbar_default_toggle_hover_bg;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: $navbar_default_toggle_icon_bar_bg;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: $navbar_default_border;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: $navbar_default_link_active_bg;
  color: $navbar_default_link_active_color;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: $navbar_default_link_color;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color:$navbar_default_link_hover_color;
    background-color: $navbar_default_link_hover_bg;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: $navbar_default_link_active_color;
    background-color: $navbar_default_link_active_bg;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: $navbar_default_link_disabled_color;
    background-color: $navbar_default_link_disabled_bg;
  }
}
.navbar-default .navbar-link {
  color: $navbar_default_link_color;
}
.navbar-default .navbar-link:hover {
  color: $navbar_default_link_hover_color;
}
.navbar-inverse {
  background-color: $gray_darker;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #999999;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: $bodyBg;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #999999;
}
.navbar-inverse .navbar-nav > li > a {
  color: #999999;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: $bodyBg;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: $bodyBg;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: $bDC;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: $bDC;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: $bodyBg;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: $bodyBg;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #999999;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: $bodyBg;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: $bodyBg;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #999999;
}
.navbar-inverse .navbar-link:hover {
  color: $bodyBg;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: $pLV;
  list-style: none;
  background-color: #f5f5f5;
  border-radius:$bRB;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: '\00a0';
  padding: 0 $pSV;
  color: #cccccc;
}
.breadcrumb > .active {
  color: #999999;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: $pLV 0;
  border-radius:$bRB;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: $pbv $padBH;
  line-height: $lHB;
  text-decoration: none;
  color: $brand_primary;
  background-color: $pagination_bg;
  border: 1px solid $table_border_color;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius:$bRB;
  border-top-left-radius:$bRB;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius:$bRB;
  border-top-right-radius:$bRB;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #2a6496;
  background-color: $gray_lighter;
  border-color: $table_border_color;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: $bodyBg;
  background-color: $brand_primary;
  border-color: $brand_primary;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #999999;
  background-color: $pagination_bg;
  border-color: $table_border_color;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: $pLV 16px;
  font-size:$fSL;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: $bRL;
  border-top-left-radius: $bRL;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: $pSV $pLV;
  font-size: $fSS;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: $bRS;
  border-top-left-radius: $bRS;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: $bRS;
  border-top-right-radius: $bRS;
}
.pager {
  padding-left: 0;
  margin: $pLV 0;
  list-style: none;
  text-align: center;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: $pSV  $fSB;
  background-color: $bodyBg;
  border: 1px solid $table_border_color;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: $gray_lighter;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #999999;
  background-color: $bodyBg;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: $bodyBg;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
.label[href]:hover,
.label[href]:focus {
  color: $bodyBg;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #999999;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #808080;
}
.label-primary {
  background-color: $brand_primary;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #3071a9;
}
.label-success {
  background-color: $brand_success;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: $brand_info;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: $brand_warning;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: $brand_danger;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width:$pSH;
  padding: $bRS 7px;
  font-size: $fSS;
  font-weight: bold;
  color: $bodyBg;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #999999;
  border-radius:$pSH;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge {
  top: 0;
  padding: 1px $pSV;
}
a.badge:hover,
a.badge:focus {
  color: $bodyBg;
  text-decoration: none;
  cursor: pointer;
}
a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: $brand_primary;
  background-color: $list_group_bg;
}
.nav-pills > li > a > .badge {
  margin-left: $bRS;
}
.jumbotron {
  padding: $jumbotron_padding;
  margin-bottom: $jumbotron_padding;
  color: $jumbotron_color;
  background-color: $jumbotron_bg;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: $jumbotron_font_size;
  font-weight: 200;
}
.container .jumbotron {
  border-radius: $bRL;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 63px;
  }
}
.thumbnail {
  display: block;
  padding:$bRB;
  margin-bottom: $pLV;
  line-height: $lHB;
  background-color: $bodyBg;
  border: 1px solid $table_border_color;
  border-radius:$bRB;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: $brand_primary;
}
.thumbnail .caption {
  padding: 9px;
  color: $bDC;
}
.alert {
  padding: 15px;
  margin-bottom: $pLV;
  border: 1px solid transparent;
  border-radius:$bRB;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: $pSV;
}
.alert-dismissable {
  padding-right: 35px;
}
.alert-dismissable .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: $state_success_bg;
  border-color:$state_success_border;
  color: $state_success_text;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #356635;
}
.alert-info {
  background-color: $state_info_bg;
  border-color: $state_info_border;
  color: $state_info_text;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #2d6987;
}
.alert-warning {
  background-color: $state_warning_text;
  border-color: $state_warning_border;
  color: $state_warning_text;
}
.alert-warning hr {
  border-top-color: #f8e5be;
}
.alert-warning .alert-link {
  color: #a47e3c;
}
.alert-danger {
  background-color: $state_danger_bg;
  border-color: #eed3d7;
  color: $state_danger_text;
}
.alert-danger hr {
  border-top-color: #e6c1c7;
}
.alert-danger .alert-link {
  color: #953b39;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: $pLV;
  margin-bottom: $pLV;
  background-color: #f5f5f5;
  border-radius:$bRB;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: $fSS;
  line-height: $lHC;
  color: $bodyBg;
  text-align: center;
  background-color: $brand_primary;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: $brand_success;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: $brand_info;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: $brand_warning;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: $brand_danger;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media,
.media .media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media-object {
  display: block;
}
.media-heading {
  margin: 0 0 $pSV;
}
.media > .pull-left {
  margin-right:$pSH;
}
.media > .pull-right {
  margin-left:$pSH;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  margin-bottom: $pLV;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: $nav_link_padding;
  margin-bottom: -1px;
  background-color: $bodyBg;
  border: 1px solid $table_border_color;
}
.list-group-item:first-child {
  border-top-right-radius:$bRB;
  border-top-left-radius:$bRB;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius:$bRB;
  border-bottom-left-radius:$bRB;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: $pSV;
}
a.list-group-item {
  color: $gray;
}
a.list-group-item .list-group-item-heading {
  color: $bDC;
}
a.list-group-item:hover,
a.list-group-item:focus {
  text-decoration: none;
  background-color: $list_group_bg;
}
a.list-group-item.active,
a.list-group-item.active:hover,
a.list-group-item.active:focus {
  z-index: 2;
  color: $bodyBg;
  background-color: $brand_primary;
  border-color: $brand_primary;
}
a.list-group-item.active .list-group-item-heading,
a.list-group-item.active:hover .list-group-item-heading,
a.list-group-item.active:focus .list-group-item-heading {
  color: inherit;
}
a.list-group-item.active .list-group-item-text,
a.list-group-item.active:hover .list-group-item-text,
a.list-group-item.active:focus .list-group-item-text {
  color: #e1edf7;
}
.list-group-item-success {
  color: $state_success_text;
  background-color: $state_success_bg;
}
a.list-group-item-success {
  color: $state_success_text;
}
a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus {
  color: $state_success_text;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
a.list-group-item-success.active:hover,
a.list-group-item-success.active:focus {
  color: $bodyBg;
  background-color: $state_success_text;
  border-color: $state_success_text;
}
.list-group-item-info {
  color: $state_info_text;
  background-color: $state_info_bg;
}
a.list-group-item-info {
  color: $state_info_text;
}
a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus {
  color: $state_info_text;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
a.list-group-item-info.active:hover,
a.list-group-item-info.active:focus {
  color: $list_group_active_color;
  background-color: $list_group_active_bg;
  border-color: $list_group_active_border;
}
.list-group-item-warning {
  color: $state_warning_text;
  background-color: $state_warning_bg;
}
a.list-group-item-warning {
  color: $state_warning_text;
}
a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus {
  color: $state_warning_text;
  background-color: $state_warning_bg;
}
a.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus {
  color: $state_warning_text;
  background-color: $state_warning_bg;
  border-color: $state_warning_border;
}
.list-group-item-danger {
  color: $state_danger_text;
  background-color: $state_danger_bg;
}
a.list-group-item-danger {
  color: $state_danger_text;
}
a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus {
  color: $state_danger_text;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus {
  color: $bodyBg;
  background-color: $state_danger_text;
  border-color: $state_danger_text;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: $pSV;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: $pLV;
  background-color: $bodyBg;
  border: 1px solid transparent;
  border-radius:$bRB;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: $nav_link_padding;
  border-bottom: 1px solid transparent;
  border-top-right-radius: $bRS;
  border-top-left-radius: $bRS;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a {
  color: inherit;
}
.panel-footer {
  padding: $nav_link_padding;
  background-color: #f5f5f5;
  border-top: 1px solid $table_border_color;
  border-bottom-right-radius: $bRS;
  border-bottom-left-radius: $bRS;
}
.panel > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group .list-group-item:first-child {
  border-top: 0;
}
.panel > .list-group .list-group-item:last-child {
  border-bottom: 0;
}
.panel > .list-group:first-child .list-group-item:first-child {
  border-top-right-radius: $bRS;
  border-top-left-radius: $bRS;
}
.panel > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: $bRS;
  border-bottom-left-radius: $bRS;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table {
  margin-bottom: 0;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: $bRS;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: $bRS;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: $bRS;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: $bRS;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive {
  border-top: 1px solid $table_border_color;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: $pLV;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius:$bRB;
  overflow: hidden;
}
.panel-group .panel + .panel {
  margin-top: $pSV;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse .panel-body {
  border-top: 1px solid $table_border_color;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid $table_border_color;
}
.panel-default {
  border-color: $table_border_color;
}
.panel-default > .panel-heading {
  color: $bDC;
  background-color: #f5f5f5;
  border-color: $table_border_color;
}
.panel-default > .panel-heading + .panel-collapse .panel-body {
  border-top-color: $table_border_color;
}
.panel-default > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: $table_border_color;
}
.panel-default > .panel-heading {
  color: $bDC;
  background-color: #f5f5f5;
  border-color: $table_border_color;
}

.panel-primary {
  border-color: $brand_primary;
}
.panel-primary > .panel-heading {
  color: $bodyBg;
  background-color: $brand_primary;
  border-color: $brand_primary;
}
.panel-primary > .panel-heading + .panel-collapse .panel-body {
  border-top-color: $brand_primary;
}
.panel-primary > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: $brand_primary;
}
.panel-success {
  border-color:$state_success_border;
}
.panel-success > .panel-heading {
  color: $state_success_text;
  background-color: $state_success_bg;
  border-color:$state_success_border;
}
.panel-success > .panel-heading + .panel-collapse .panel-body {
  border-top-color:$state_success_border;
}
.panel-success > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color:$state_success_border;
}
.panel-info {
  border-color: $state_info_border;
}
.panel-info > .panel-heading {
  color: $state_info_text;
  background-color: $state_info_bg;
  border-color: $state_info_border;
}
.panel-info > .panel-heading + .panel-collapse .panel-body {
  border-top-color: $state_info_border;
}
.panel-info > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: $state_info_border;
}
.panel-warning {
  border-color: $state_warning_border;
}
.panel-warning > .panel-heading {
  color: $state_warning_text;
  background-color: $state_warning_bg;
  border-color: $state_warning_border;
}
.panel-warning > .panel-heading + .panel-collapse .panel-body {
  border-top-color: $state_warning_border;
}
.panel-warning > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: $state_warning_border;
}
.panel-danger {
  border-color: #eed3d7;
}
.panel-danger > .panel-heading {
  color: $state_danger_text;
  background-color: $state_danger_bg;
  border-color: #eed3d7;
}
.panel-danger > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #eed3d7;
}
.panel-danger > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #eed3d7;
}
.well {
  min-height: $pLV;
  padding: 19px;
  margin-bottom: $pLV;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius:$bRB;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: $bRL;
}
.well-sm {
  padding: 9px;
  border-radius: $bRS;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000000;
  text-shadow: 0 1px 0 $bodyBg;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: auto;
  overflow-y: scroll;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-dialog {
  position: relative;
  width: auto;
  margin:$pSH;
}
.modal-content {
  position: relative;
  background-color: $bodyBg;
  border: 1px solid #999999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: $bRL;
  -webkit-box-shadow: 0 $bRS 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 $bRS 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: none;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.428571429px;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: $lHB;
}
.modal-body {
  position: relative;
  padding: $pLV;
}
.modal-footer {
  margin-top: 15px;
  padding: 19px $pLV $pLV;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: $pSV;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 $pSV 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 $pSV 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1030;
  display: block;
  visibility: visible;
  font-size: $fSS;
  line-height: 1.4;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: $tooltip_opacity;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: $pSV 0;
}
.tooltip.right {
  margin-left: $bRS;
  padding: 0 $pSV;
}
.tooltip.bottom {
  margin-top: $bRS;
  padding: $pSV 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 $pSV;
}
.tooltip-inner {
  max-width: $tooltip_max_width;
  padding: $bRS 8px;
  color: $tooltip_color;
  text-align: center;
  text-decoration: none;
  background-color: $tooltip_bg;
  border-radius:$bRB;
}
.tooltip-arrow {
  position: absolute;
  width: $tooltip_arrow_width;
  height: $tooltip_arrow_width;
  border-color: ;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: $pSV $pSV 0;
  border-top-color: #000000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  left: $pSV;
  border-width: $pSV $pSV 0;
  border-top-color: #000000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  right: $pSV;
  border-width: $pSV $pSV 0;
  border-top-color: $tooltip_arrow_color;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: $pSV $pSV $pSV 0;
  border-right-color: $tooltip_arrow_color;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: $pSV 0 $pSV $pSV;
  border-left-color: $tooltip_arrow_color;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 $pSV $pSV;
  border-bottom-color: $tooltip_arrow_color;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  left: $pSV;
  border-width: 0 $tooltip_arrow_width $tooltip_arrow_width;
  border-bottom-color: $tooltip_arrow_color;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  right: $pSV;
  border-width: 0 $tooltip_arrow_width $tooltip_arrow_width;
  border-bottom-color: $tooltip_arrow_color;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1010;
  display: none;
  max-width: $popover_max_width;
  padding: 1px;
  text-align: left;
  background-color: $popover_bg;
  background-clip: padding-box;
  border: 1px solid $popover_fallback_border_color;
  border: 1px solid $popover_border_color;
  border-radius: $bRL;
  -webkit-box-shadow: 0 $pSV$pSH rgba(0, 0, 0, 0.2);
  box-shadow: 0 $pSV$pSH rgba(0, 0, 0, 0.2);
  white-space: normal;
}
.popover.top {
  margin-top: -$popover_arrow_width;
}
.popover.right {
  margin-left:$pSH;
}
.popover.bottom {
  margin-top:$pSH;
}
.popover.left {
  margin-left: -$popover_arrow_width;
}
.popover-title {
  margin: 0;
  padding: 8px  $fSB;
  font-size:  $fSB;
  font-weight: normal;
  line-height:$fSL;
  background-color: $popover_title_bg;
  border-bottom: 1px solid #ebebeb;
  border-radius: $pSV $pSV 0 0;
}
.popover-content {
  padding: 9px  $fSB;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  border-width:$pSH;
  content: '';
}
.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.popover.top > .arrow:after {
  content: ' ';
  bottom: 1px;
  margin-left: -$popover_arrow_width;
  border-bottom-width: 0;
  border-top-color: $bodyBg;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.popover.right > .arrow:after {
  content: ' ';
  left: 1px;
  bottom: -$popover_arrow_width;
  border-left-width: 0;
  border-right-color: $bodyBg;
}
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.popover.bottom > .arrow:after {
  content: ' ';
  top: 1px;
  margin-left: -$popover_arrow_width;
  border-top-width: 0;
  border-bottom-color: $bodyBg;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  content:' ';
  right: 1px;
  border-right-width: 0;
  border-left-color: $bodyBg;
  bottom: -$popover_arrow_width;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: $pLV;
  color: $bodyBg;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, color-stop(rgba(0, 0, 0, 0.5) 0%), color-stop(rgba(0, 0, 0, 0.0001) 100%));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, color-stop(rgba(0, 0, 0, 0.0001) 0%), color-stop(rgba(0, 0, 0, 0.5) 100%));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: none;
  color: $bodyBg;
  text-decoration: none;
  opacity: $tooltip_opacity;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: $pLV;
  height: $pLV;
  margin-top: -10px;
  margin-left: -10px;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom:$pSH;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width:$pSH;
  height:$pSH;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid $bodyBg;
  border-radius:$pSH;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: $bodyBg;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: $pLV;
  z-index: 10;
  padding-top: $pLV;
  padding-bottom: $pLV;
  color: $bodyBg;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicons-chevron-left,
  .carousel-control .glyphicons-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    margin-left: -15px;
    font-size: 30px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: $pLV;
  }
}
.clearfix:before,
.clearfix:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
  content: ' ';
  display: table;
}
.clearfix:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
  visibility: hidden !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}";


if (isset($_POST['submit'])) {

    fwrite($myfile, $navbarD);
    fwrite($myLessfile, $lessVal);
}

if (isset($_POST['reset_base'])) {
    $myTextfile = fopen('reset.txt', "w");
    fwrite($myTextfile, $txtVariable);
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta id="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="newfile.css" rel="stylesheet">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css' rel='stylesheet'>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script>



    </head>
    <body>
        <form action="index.php" method="post">
            <div ><div>
                    <div class="navbar navbar-fixed-bottom" name="menuBottom">
                        <button type='submit' class="btn btn-primary" name="submit">Create CSS</button>
                        <button type='submit' class="btn btn-primary" name="reset_base">Reset Base</button>

                        <!--ul class="pull-left">
                            <li><button class="btn btn-primary" ng-click="applyLess(false)">Apply</button></li>
                            <li><label class="checkbox"><input type="checkbox" name="cssAutoapplyless" data-ng-model="autoapplyless" class="">Auto</label></li>
                            <li><button class="btn" ng-click="saveLessVariables()">Save Less Variables</button></li>
                            <li><button class="btn" data-toggle="modal" href="#thankYou" ng-click="saveCSS()">Save CSS</button></li>
                            <li><label class="checkbox"><input type="checkbox" name="cssMinified" data-ng-model="minified" class="">Minified</label></li>
                            <li><button data-toggle="modal" href="#myModal" class="btn">Import Less Variables</button></li>
                            <li><button class="btn" ng-click="resetLessVariables()">Reset</button></li>
                        </ul-->

                    </div>
                </div><span class="ng-scope">

                </span><div class="container ng-scope">

                    <!-- ngRepeat: group in variables --><section ng-repeat="group in variables" class="Grays">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Grays">Grays</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle">@gray-darker</label>                
                                    <div  id="gray_darker_div" class="input-group colorpicker-component color">
                                        <input name="gray-darker" type="text" class="form-control" value="<?php
                                        if (empty($gray_darker)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/gray-darker:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;


                                                preg_match("/gray-dark:(.*)/", fgets($file), $css_string);
                                                $gray_dark = str_replace(';', '', $css_string[1]);
                                            }
                                        } else
                                            echo $gray_darker;
                                        ?>">

                                        <span class="input-group-addon" ><i style="background-color: rgb(34, 34, 34);"></i></span>
                                    </div>

                                </div><div>
                                    <label class="labelTitle ng-binding">@gray-dark</label>                
                                    <div  id="gray-dark-div" class="input-group colorpicker-component color">
                                        <input name="gray-dark" type="text" class="form-control" value="<?php
                                        if (empty($gray_dark)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/gray-dark:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo $gray_dark;
                                        ?>">

                                        <span class="input-group-addon" ><i style="background-color: rgb(34, 34, 34);"></i></span>
                                    </div>


                                </div><div>
                                    <label class="labelTitle ng-binding">@gray</label>                
                                    <div  id="gray-div" class="input-group colorpicker-component color">
                                        <input name="gray" type="text" class="form-control" value="<?php
                                        if (empty($gray)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/gray:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$gray
                                            ?>">

                                        <span class="input-group-addon" ><i style="background-color: rgb(34, 34, 34);"></i></span>
                                    </div>


                                </div><div>
                                    <label class="labelTitle ng-binding">@gray-light</label>                
                                    <div  class="input-group colorpicker-component color">
                                        <input name="gray-light" type="text"  class=" form-control "  value="<?php
                                        if (empty($gray_light)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/gray-light:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$gray_light;
                                        ?>">
                                        <span class="input-group-addon" ><i style="background-color: rgb(34, 34, 34);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@gray-lighter</label>                
                                    <div class="input-group colorpicker-component color">
                                        <input name="gray-lighter" type="text"  class=" form-control "  value="<?php
                                        if (empty($gray_lighter)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/gray-lighter:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$gray_lighter;
                                        ?>">
                                        <span class="input-group-addon" ><i style="background-color: rgb(34, 34, 34);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">

                                        <h1>How to build your theme faster ? </h1>
                                        <p>We first developed this bootsrap theme editor for our own purpose to create theme a lot faster. Here are some technics to become a bootstrap theme chef with this tool.</p>

                                        <h4>1. Awesome typeahead</h4>
                                        <p>You don't have to type out variables and Less functions every time. Defined variables (starting with <code>@</code>) and Less functions (like <code>darken(@color,10%)</code>) will automatically appear in a list as you start typing. Prediction + autocomplete = awesome typeahead</p>

                                        <h4>2. Contextual and live preview</h4>
                                        <p>Change a variable and you can see the result immediately. No scrolling to check the impact of what you changed.</p>

                                        <h4>3. New and imported variables accepted</h4>
                                        <p>If you already have variables defined, you can import them right into boostrap-magic.</p>

                                        <h4>4. Colorpicker </h4>
                                        <p>The colorpicker tool lets you easily see and choose colors so you can find just the right ones for your theme.</p>

                                        <hr>
                                        <h4>♥ Have fun ! Like it ? Share it.</h4>

                                    </section><span class="ng-scope">
                                    </span></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Brand Colors">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Brand Colors">Brand Colors</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@brand-primary</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" 428bca" data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="brand-primary" type="text"  class=" form-control "  value="<?php
                                        if (empty($brand_primary)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/brand-primary:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$brand_primary;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(66, 139, 202);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@brand-success</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" 5cb85c" data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="brand-success" type="text"  class=" form-control "  value="<?php
                                        if (empty($brand_success)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/brand-success:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$brand_success;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(92, 184, 92);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@brand-warning</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                         'input-group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="brand-warning" type="text"  class=" form-control "  value="<?php
                                        if (empty($brand_warning)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/brand-warning:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$brand_warning;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(240, 173, 78);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@brand-danger</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                         'input-group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="brand-danger" type="text"  class=" form-control "  value="<?php
                                        if (empty($brand_danger)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/brand-danger:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$brand_danger;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(217, 83, 79);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@brand-info</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="brand-info" type="text"  class=" form-control "  value="<?php
                                        if (empty($brand_info)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/brand-info:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$brand_info;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(91, 192, 222);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <h2>Clever context variables</h2>
                                            <p>Set new logic variables :<strong> Brand colors </strong>and reuse it in your theme. It'd be faster and help you to make smooth theme.</p>
                                        </div>
                                    </section></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Scaffolding">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Scaffolding">Scaffolding</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@body-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="body-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($bodyBg)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/body-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bodyBg;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(79, 224, 29);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@text-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="text-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($txcolor)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/text-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$txcolor;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(230, 59, 59);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@link-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                         'input-group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="link-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($linkColor)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/link-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$linkColor
                                            ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(239, 57, 57);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@link-hover-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="link-hover-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($linkhovercolor)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/link-hover-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$linkhovercolor;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(237, 66, 66);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@padding-base-vertical</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="padding-base-vertical" type="text"  class=" form-control "  placeholder="6px" value="<?php
                                        if (empty($pbv)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/padding-base-vertical:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$pbv;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@padding-base-horizontal</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="padding-base-horizontal" type="text" placeholder="12px"  class=" form-control "  value="<?php
                                        if (empty($padBH)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/padding-base-horizontal:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$padBH;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@padding-large-vertical</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="padding-large-vertical" type="text" placeholder="10px"  class=" form-control "  value="<?php
                                        if (empty($pLV)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/padding-large-vertical:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$pLV;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@padding-large-horizontal</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="padding-large-horizontal" type="text" placeholder="16px"  class=" form-control "  value="<?php
                                        if (empty($pLH)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/padding-large-horizontal:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$pLH;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@padding-small-vertical</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="padding-small-vertical" type="text" placeholder="4px"  class=" form-control " value="<?php echo$pSV ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@padding-small-horizontal</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="padding-small-horizontal" type="text" placeholder="10px"  class=" form-control "  value="<?php
                                        if (empty($pSH)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/padding-small-horizontal:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$pSH;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@border-radius-base</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="border-radius-base" type="text" placeholder="4px"  class=" form-control "  value="<?php
                                        if (empty($bRB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/border-radius-base:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bRB;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@border-radius-large</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="border-radius-large" type="text" placeholder="6px"  class=" form-control "  value="<?php
                                        if (empty($bRL)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/border-radius-large:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bRL;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@border-radius-small</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="border-radius-small" type="text" placeholder="3px"  class=" form-control "  value="<?php
                                        if (empty($bRS)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/border-radius-small:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bRS;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@line-height-large</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="line-height-large" type="text" placeholder="1.33"  class=" form-control "  value="<?php
                                        if (empty($lHL)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/line-height-large:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$lHL;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@line-height-small</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="line-height-small" type="text" placeholder="1.55"  class=" form-control "  value="<?php
                                        if (empty($lHS)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/line-height-small:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$lHS;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@component-active-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="component-active-bg" type="text"   class=" form-control "  value="<?php
                                        if (empty($cAB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/component-active-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$cAB;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <h2>Bootstrap Magic <small> featuring Bootstrap 3, made with AngularJS</small></h2>
                                            <p>Discover our gitHub project at the following url : <a href="https://github.com/pikock/bootstrap-magic">Bootstrap magic GitHub Project</a>. Everyone can contribute and we would like to hear your feedback.</p>

                                            <p>For more information on <a href="http://en.orson.io/17/build-responsive-website-without-coding/?utm_source=Bootstrap%20Magic%20&amp;utm_medium=referral&amp;utm_content=Text&amp;utm_campaign=Bootstrap" title="Orson">Orson</a>  please check out <a href="http://en.orson.io/17/build-responsive-website-without-coding/?utm_source=Bootstrap%20Magic%20&amp;utm_medium=referral&amp;utm_content=Text&amp;utm_campaign=Bootstrap" title="Orson create your website easily">http://en.orson.io</a></p>

                                            <p>For more information on <a href="http://www.autreplanete.com/" title="web agency paris">Autre planete</a>  please check out <a href="http://www.autreplanete.com/" title="web agency paris">http://www.autreplanete.com/</a></p>
                                            <hr>

                                            <p>These variables are applied for the text body color, <a href="" title="Bootstrap 3 Themes Generator">links color</a> and  <a href="" title="Bootstrap 3 Themes Generator">links color</a> hovered.</p>
                                            <hr>
                                            <p>You can also set variables for the border radius for different sizes.</p>
                                        </div>
                                    </section><span class="ng-scope">
                                    </span><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="" title="Bootstrap 3 Themes Generator" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Base <span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="" title="Bootstrap 3 Themes Generator">Action</a></li>
                                                                    <li><a href="" title="Bootstrap 3 Themes Generator">Another action</a></li>
                                                                    <li><a href="" title="Bootstrap 3 Themes Generator">Something else here</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" title="Bootstrap 3 Themes Generator">Separated link</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-toolbar">
                                                                <div class="btn-group">
                                                                    <a href="" title="Bootstrap 3 Themes Generator" class="btn btn-default">Left</a>
                                                                    <a href="" title="Bootstrap 3 Themes Generator" class="btn btn-default">Middle</a>
                                                                    <a href="" title="Bootstrap 3 Themes Generator" class="btn btn-default">Right</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>

                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="your text">
                                                                <button href="" title="Bootstrap 3 Themes Generator" class="btn btn-default">Default</button>
                                                            </div>       

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a class="btn btn-default btn-lg large dropdown-toggle" data-toggle="dropdown" href="">Large <span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="" title="Bootstrap 3 Themes Generator">Action</a></li>
                                                                    <li><a href="" title="Bootstrap 3 Themes Generator">Another action</a></li>
                                                                    <li><a href="" title="Bootstrap 3 Themes Generator">Something else here</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" title="Bootstrap 3 Themes Generator">Separated link</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-toolbar">
                                                                <div class="btn-group">
                                                                    <a href="" title="Bootstrap 3 Themes Generator" class="btn btn-lg  btn-default">Left</a>
                                                                    <a href="" title="Bootstrap 3 Themes Generator" class="btn btn-lg  btn-default">Middle</a>
                                                                    <a href="" title="Bootstrap 3 Themes Generator" class="btn btn-lg  btn-default">Right</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="pagination pagination-lg">
                                                                <li class="disabled"><a href="" title="Bootstrap 3 Themes Generator">«</a></li>
                                                                <li class="active"><a href="" title="Bootstrap 3 Themes Generator">1</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">2</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">3</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">»</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a class="btn btn-sm btn-default" href="" title="Bootstrap 3 Themes Generator">Small</a></td>
                                                        <td>
                                                            <div class="well well-small">
                                                                .well-small component
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul class="pagination pagination-sm">
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">«</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">1</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">2</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">3</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">4</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">5</a></li>
                                                                <li><a href="" title="Bootstrap 3 Themes Generator">»</a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Typography">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Typography">Typography</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@font-family-sans-serif</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-family-sans-serif" type="text" placeholder="Open Sans"  class=" form-control "  value="<?php
                                        if (empty($fFSS)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-family-sans-serif:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fFSS;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-family-serif</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-family-serif" type="text" placeholder="PT Serif"  class=" form-control "  value="<?php
                                        if (empty($fFS)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-family-serif:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fFS;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-family-monospace</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-family-monospace" type="text" placeholder="Monaco"    class=" form-control "  value="<?php
                                        if (empty($fFM)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-family-monospace:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fFM;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-family-base</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-family-base" type="text"  placeholder="Open Sans"  class=" form-control "  value="<?php
                                        if (empty($fFB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-family-base:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fFB;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-base</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-base" type="text" placeholder="14px"  class=" form-control "  value="<?php
                                        if (empty($fSB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-base:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSB;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-large</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-large" type="text"  placeholder="14px"   class=" form-control "  value="<?php
                                        if (empty($fSL)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-large:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSL;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-small</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-small" type="text"  placeholder="14px"   class=" form-control " value="<?php
                                        if (empty($fSS)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-small:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSS;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-h1</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-h1" type="text"  placeholder="14px"   class=" form-control "  value="<?php
                                        if (empty($fSH1)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-h1:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSH1;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-h2</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-h2" type="text"  placeholder="14px"   class=" form-control "  value="<?php
                                        if (empty($fSH2)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-h2:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSH2;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-h3</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-h3" type="text"  placeholder="14px"   class=" form-control "  value="<?php
                                        if (empty($fSH3)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-h3:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSH3;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-h4</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-h4" type="text"  placeholder="14px"   class=" form-control "  value="<?php
                                        if (empty($fSH4)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-h4:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSH4;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-h5</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-h5" type="text"  placeholder="14px"   class=" form-control "  value="<?php
                                        if (empty($fSH5)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-h5:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSH5;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@font-size-h6</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="font-size-h6" type="text"  placeholder="14px"   class=" form-control "  value="<?php
                                        if (empty($fSH6)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/font-size-h6:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$fSH6;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@line-height-base</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="line-height-base" type="text"  placeholder="1.4"   class=" form-control "  value="<?php
                                        if (empty($lHB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/line-height-base:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$lHB;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@line-height-computed</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="line-height-computed" type="text"  placeholder="14px"   class=" form-control "  value="<?php
                                        if (empty($lHC)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/line-height-computed:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$lHC;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@headings-font-family</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="headings-font-family" type="text"  placeholder="Open Sans"  class=" form-control "  value="<?php
                                        if (empty($hFF)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/headings-font-family:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$hFF;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@headings-font-weight</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="headings-font-weight" type="text" placeholder="500"  class=" form-control "  value="<?php
                                        if (empty($hFW)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/headings-font-weight:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$hFW;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@headings-line-height</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="headings-line-height" type="text" placeholder="1.1"  class=" form-control "  value="<?php
                                        if (empty($hLH)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/headings-line-height:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$hLH;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@headings-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="headings-color" type="text" placeholder="inherit"  class=" form-control "  value="<?php
                                        if (empty($hC)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/headings-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$hC;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><!-- Typography
            ================================================== --><span class="ng-scope">
                                    </span><section name="typography" class="ng-scope">
                                        <section class="row">
                                            <div class="col-md-12">
                                                <h1 name="body-copy">Body copy</h1>
                                                <p>Bootstrap's global <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>20px</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their line-height (10px by default).</p>
                                                <div class="bs-docs-example">
                                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                                </div>

                                                <h2>Lead body copy</h2>
                                                <div class="bs-docs-example">
                                                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
                                                    <h3>Etiam mollis</h3>
                                                    <p>Lorem ipsum dolor <strong>gravida tortor</strong>, eu mollis massa commodo ut. Sed sed quam urna, ac sollicitudin elit. Etiam mollis, <em>sem quis fringilla vehicula</em>, Duis et velit eu diam porta vehicula sit amet in sapien. Vestibulum non arcu nec magna dapibus fringilla vel in est. 
                                                        <small>This line of text is meant to be treated as fine print.</small>
                                                    </p>
                                                </div>
                                                <div class="page-header">
                                                    <h2>Headings</h2>
                                                </div>
                                                <div class="bs-docs-example">
                                                    <h1>h1. Heading 1</h1>
                                                    <h2>h2. Heading 2</h2>
                                                    <h3>h3. Heading 3</h3>
                                                    <h4>h4. Heading 4</h4>
                                                    <h5>h5. Heading 5</h5>
                                                    <h6>h6. Heading 6</h6>
                                                </div>
                                            </div>
                                        </section>
                                    </section></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Buttons">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Buttons">Buttons</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@btn-font-weight</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-font-weight" type="text" placeholder="normal"  class=" form-control "  value="<?php
                                        if (empty($bFW)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-font-weight:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bFW;
                                        ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-default-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-default-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($bDC)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-default-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bDC;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(51, 51, 51);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-default-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-default-bg" type="text"  class=" form-control "  value="<?php
                                               if (empty($bDB)) {
                                                   $file = fopen('reset.txt', "r");
                                                   while (!feof($file)) {
                                                       // check Grays

                                                       preg_match("/btn-default-bg:(.*)/", fgets($file), $css_string);
                                                       $css_val = str_replace(';', '', $css_string[1]);
                                                       echo$css_val;
                                                   }
                                               } else
                                                   echo$bDB;
                                               ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-default-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-default-border" type="text"  class=" form-control "  value="<?php
                                        if (empty($bDBorder)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-default-border:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bDBorder;
                                               ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(204, 204, 204);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-primary-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-primary-color" type="text"  class=" form-control " value="<?php
                                              if (empty($bPC)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/btn-primary-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                              } else
                                                  echo$bPC;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-primary-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-primary-bg" type="text"  class=" form-control "  value="<?php
                                              if (empty($bPB)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/btn-primary-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                              } else
                                                  echo$bPB;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-primary-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-primary-border" type="text"  class=" form-control "  value="<?php
                                        if (empty($bPBB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-primary-border:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bPBB;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-success-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-success-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($bSC)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-success-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bSC;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-success-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-success-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($bSB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-success-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                        } else
                                            echo$bSB;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-success-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-success-border" type="text"  class=" form-control "  value="<?php
                                    if (empty($bSBB)) {
                                        $file = fopen('reset.txt', "r");
                                        while (!feof($file)) {
                                            // check Grays

                                            preg_match("/btn-success-border:(.*)/", fgets($file), $css_string);
                                            $css_val = str_replace(';', '', $css_string[1]);
                                            echo$css_val;
                                        }
                                    } else
                                        echo$bSBB;
                                    ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-warning-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-warning-color" type="text"  class=" form-control "  value="<?php
                                    if (empty($bSBB)) {
                                        $file = fopen('reset.txt', "r");
                                        while (!feof($file)) {
                                            // check Grays

                                            preg_match("/btn-success-border:(.*)/", fgets($file), $css_string);
                                            $css_val = str_replace(';', '', $css_string[1]);
                                            echo$css_val;
                                        }
                                        fclose($file);
                                    } else
                                        echo$bWC;
                                    ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-warning-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-warning-bg" type="text"  class=" form-control "  value="<?php
                                         if (empty($bWB)) {
                                             $file = fopen('reset.txt', "r");
                                             while (!feof($file)) {
                                                 // check Grays

                                                 preg_match("/btn-warning-bg:(.*)/", fgets($file), $css_string);
                                                 $css_val = str_replace(';', '', $css_string[1]);
                                                 echo$css_val;
                                             }
                                             fclose($file);
                                         } else
                                             echo$bWB;
                                         ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-warning-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-warning-border" type="text"  class=" form-control "  value="<?php
                                         if (empty($bWBb)) {
                                             $file = fopen('reset.txt', "r");
                                             while (!feof($file)) {
                                                 // check Grays

                                                 preg_match("/btn-warning-border:(.*)/", fgets($file), $css_string);
                                                 $css_val = str_replace(';', '', $css_string[1]);
                                                 echo$css_val;
                                             }
                                             fclose($file);
                                         } else
                                             echo$bWBb;
                                         ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-danger-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-danger-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($bDC)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-danger-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$bDC;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-danger-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-danger-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($bDB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-danger-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$bDB;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-danger-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-danger-border" type="text"  class=" form-control "  value="<?php
                                        if (empty($bDBB)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-danger-border:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$bDBB;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-info-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-info-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($bIC)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-info-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$bIC;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-info-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-info-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($bIL)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-info-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$bIL;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-info-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-info-border" type="text"  class=" form-control "  value="<?php
                                        if (empty($bII)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-info-border:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$bII;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@btn-link-disabled-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="btn-link-disabled-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($bIDC)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/btn-link-disabled-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$bIDC;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><!-- Buttons
            ================================================== --><span class="ng-scope">
                                    </span><section name="buttons" class="ng-scope">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Button</th>
                                                            <th>Large Button</th>
                                                            <th>Small Button</th>
                                                            <th>Disabled Button</th>
                                                            <th>Button with Icon</th>
                                                            <th>Split Button</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a class="btn btn-default" href="" title="Bootstrap 3 themes generator">Default</a></td>
                                                            <td><a class="btn btn-default btn-lg" href="" title="Bootstrap 3 themes generator">Default</a></td>
                                                            <td><a class="btn btn-default btn-sm" href="" title="Bootstrap 3 themes generator">Default</a></td>
                                                            <td><a class="btn btn-default disabled" href="" title="Bootstrap 3 themes generator">Default</a></td>
                                                            <td><a class="btn btn-default" href="" title="Bootstrap 3 themes generator">
                                                                    <span class="glyphicon glyphicon-heart-empty"></span> Default</a></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-default" href="" title="Bootstrap 3 themes generator">Default</a>
                                                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                                                                    </ul>
                                                                </div><!-- /btn-group -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a class="btn btn-primary" href="" title="Bootstrap 3 themes generator">Primary</a></td>
                                                            <td><a class="btn btn-primary btn-lg" href="" title="Bootstrap 3 themes generator">Primary</a></td>
                                                            <td><a class="btn btn-primary btn-sm" href="" title="Bootstrap 3 themes generator">Primary</a></td>
                                                            <td><a class="btn btn-primary disabled" href="" title="Bootstrap 3 themes generator">Primary</a></td>
                                                            <td><a class="btn btn-primary" href="" title="Bootstrap 3 themes generator"><span class="glyphicon glyphicon-heart-empty"></span> Primary</a></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-primary" href="" title="Bootstrap 3 themes generator">Primary</a>
                                                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                                                                    </ul>
                                                                </div><!-- /btn-group -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a class="btn btn-info" href="" title="Bootstrap 3 themes generator">Info</a></td>
                                                            <td><a class="btn btn-info btn-lg" href="" title="Bootstrap 3 themes generator">Info</a></td>
                                                            <td><a class="btn btn-info btn-sm" href="" title="Bootstrap 3 themes generator">Info</a></td>
                                                            <td><a class="btn btn-info disabled" href="" title="Bootstrap 3 themes generator">Info</a></td>
                                                            <td><a class="btn btn-info" href="" title="Bootstrap 3 themes generator"><span class="glyphicon glyphicon-heart-empty"></span> Info</a></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-info" href="" title="Bootstrap 3 themes generator">Info</a>
                                                                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                                                                    </ul>
                                                                </div><!-- /btn-group -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a class="btn btn-success" href="" title="Bootstrap 3 themes generator">Success</a></td>
                                                            <td><a class="btn btn-success btn-lg" href="" title="Bootstrap 3 themes generator">Success</a></td>
                                                            <td><a class="btn btn-success btn-sm" href="" title="Bootstrap 3 themes generator">Success</a></td>
                                                            <td><a class="btn btn-success disabled" href="" title="Bootstrap 3 themes generator">Success</a></td>
                                                            <td><a class="btn btn-success" href="" title="Bootstrap 3 themes generator"><span class="glyphicon glyphicon-heart-empty"></span> Success</a></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-success" href="" title="Bootstrap 3 themes generator">Success</a>
                                                                    <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                                                                    </ul>
                                                                </div><!-- /btn-group -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a class="btn btn-warning" href="" title="Bootstrap 3 themes generator">Warning</a></td>
                                                            <td><a class="btn btn-warning btn-lg" href="" title="Bootstrap 3 themes generator">Warning</a></td>
                                                            <td><a class="btn btn-warning btn-sm" href="" title="Bootstrap 3 themes generator">Warning</a></td>
                                                            <td><a class="btn btn-warning disabled" href="" title="Bootstrap 3 themes generator">Warning</a></td>
                                                            <td><a class="btn btn-warning" href="" title="Bootstrap 3 themes generator"><span class="glyphicon glyphicon-heart-empty"></span> Warning</a></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-warning" href="" title="Bootstrap 3 themes generator">Warning</a>
                                                                    <a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                                                                    </ul>
                                                                </div><!-- /btn-group -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a class="btn btn-danger" href="" title="Bootstrap 3 themes generator">Danger</a></td>
                                                            <td><a class="btn btn-danger btn-lg" href="" title="Bootstrap 3 themes generator">Danger</a></td>
                                                            <td><a class="btn btn-danger btn-sm" href="" title="Bootstrap 3 themes generator">Danger</a></td>
                                                            <td><a class="btn btn-danger disabled" href="" title="Bootstrap 3 themes generator">Danger</a></td>
                                                            <td><a class="btn btn-danger" href="" title="Bootstrap 3 themes generator"><span class="glyphicon glyphicon-heart-empty"></span> Danger</a></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-danger" href="" title="Bootstrap 3 themes generator">Danger</a>
                                                                    <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Another action</a></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Something else here</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="" title="Bootstrap 3 themes generator">Separated link</a></li>
                                                                    </ul>
                                                                </div><!-- /btn-group -->
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <h4>Button groups</h4>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-sm">1</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-sm">2</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-sm">3</a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-sm">5</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-sm">6</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-sm">7</a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-sm">8</a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">1</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">2</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">3</a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">5</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">6</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">7</a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">8</a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-lg">1</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-lg">2</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-lg">3</a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-lg">5</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-lg">6</a>
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-lg">7</a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a href="" title="Bootstrap 3 themes generator" class="btn btn-default btn-lg">8</a>
                                                    </div>
                                                </div>	    

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4>Nesting</h4>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default">1</button>
                                                            <button type="button" class="btn btn-default">2</button>

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                    Dropdown
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Dropdown link</a></li>
                                                                    <li><a href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4>Vertical variation</h4>
                                                        <div class="btn-group-vertical">
                                                            <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">Home</a>
                                                            <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">About</a>
                                                            <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">Contact</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4>Justified link variation</h4>
                                                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                                <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>


                                                <h4>Justified link variation</h4>
                                                <div class="btn-group btn-group-justified">
                                                    <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">Home</a>
                                                    <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">About</a>
                                                    <a href="" title="Bootstrap 3 themes generator" class="btn btn-default">Contact</a>
                                                </div>
                                            </div>
                                        </div>

                                    </section><span class="ng-scope">
                                    </span><hr class="ng-scope"><span class="ng-scope">
                                    </span><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <div class="bs-example">
                                                <div class="modal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title">Modal title</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>One fine body…</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div>
                                            </div>
                                        </div>
                                    </section><span class="ng-scope">
                                    </span></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Dropdowns">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Dropdowns">Dropdowns</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@dropdown-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($Drop_Bg)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$Drop_Bg;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-border" type="text" placeholder="rgba(0,0,0,.15)"  class=" form-control "  value="<?php
                                        if (empty($Drop_Br)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-border:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$Drop_Br;
                                        ?>" >
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-divider-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-divider-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($Drop_Di_Bg)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-divider-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$Drop_Di_Bg;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(229, 229, 229);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-link-active-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-link-active-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($Drop_Link_active)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-link-active:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$Drop_Link_active;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-link-active-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-link-active-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($dropdown_link_active_bg)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-link-active-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$dropdown_link_active_bg;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-link-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-link-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($dropdown_link_color)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-link-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$dropdown_link_color;
                                        ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-link-hover-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-link-hover-color" type="text"  class=" form-control "  value="<?php
                                              if (empty($dropdown_link_hover_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/dropdown-link-hover-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else
                                                  echo$dropdown_link_hover_color;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-link-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-link-hover-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($dropdown_link_hover_bg)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-link-hover-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$dropdown_link_hover_bg;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-link-disabled-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-link-disabled-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($dropdown_link_disabled_color)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-link-disabled-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$dropdown_link_disabled_color;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-header-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-header-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($dropdown_header_colorn_h)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-header-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$dropdown_header_color;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@dropdown-caret-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="dropdown-caret-color" type="text"  class=" form-control "  value="<?php
                                        if (empty($dropdown_caret_color)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/dropdown-caret-color:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$dropdown_caret_color;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(0, 0, 0);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <section class="row">
                                                <div class="col-md-4">
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
                                                        <li><a tabindex="-1" href="" title="Bootstrap Themes Generator">Action</a></li>
                                                        <li><a tabindex="-1" href="" title="Bootstrap Themes Generator">Another action</a></li>
                                                        <li><a tabindex="-1" href="" title="Bootstrap Themes Generator">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a tabindex="-1" href="" title="Bootstrap Themes Generator">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle btn btn-primary" data-toggle="dropdown" href="">Click to Dropdown <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="" title="Bootstrap Themes Generator">Action</a></li>
                                                            <li><a href="" title="Bootstrap Themes Generator">Another action</a></li>
                                                            <li><a href="" title="Bootstrap Themes Generator">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li class="dropdown-submenu" role="menu" aria-labelledby="dLabel">
                                                                <a class="dropdown-toggle" data-toggle="dropdown" href="">Dropdown 2</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="" title="Bootstrap Themes Generator">Action</a></li>
                                                                    <li><a href="" title="Bootstrap Themes Generator">Another action</a></li>
                                                                    <li><a href="" title="Bootstrap Themes Generator">Something else here</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" title="Bootstrap Themes Generator">Separated link</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="btn-group dropup">
                                                        <button type="button" class="btn btn-default">Dropup</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a tabindex="-1" href="" title="Bootstrap Themes Generator">Action</a></li>
                                                            <li><a tabindex="-1" href="" title="Bootstrap Themes Generator">Another action</a></li>
                                                            <li><a tabindex="-1" href="" title="Bootstrap Themes Generator">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a tabindex="-1" href="" title="Bootstrap Themes Generator">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </section><span class="ng-scope">

                                    </span><span class="ng-scope">

                                    </span></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Forms">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Forms">Forms</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@input-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($input_Bg)) {
                                            $file = fopen('reset.txt', "r");
                                            while (!feof($file)) {
                                                // check Grays

                                                preg_match("/input-bg:(.*)/", fgets($file), $css_string);
                                                $css_val = str_replace(';', '', $css_string[1]);
                                                echo$css_val;
                                            }
                                            fclose($file);
                                        } else
                                            echo$input_bg;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-bg-disabled</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-bg-disabled" type="text"  class=" form-control "  value="<?php
                                         if (empty($input_bg_disabled)) {
                                             $file = fopen('reset.txt', "r");
                                             while (!feof($file)) {
                                                 // check Grays

                                                 preg_match("/input-bg-disabled:(.*)/", fgets($file), $css_string);
                                                 $css_val = str_replace(';', '', $css_string[1]);
                                                 echo$css_val;
                                             }
                                             fclose($file);
                                         } else
                                             echo$input_bg_disabled;
                                         ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-color" type="text"  class=" form-control "  value="<?php
                                              if (empty($input_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else
                                                  echo$input_color;
                                              ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-border" type="text"  class=" form-control "  value="<?php 
                                         if (empty($input_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$input_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(204, 204, 204);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-border-radius</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-border-radius" type="text" placeholder="4px"  class=" form-control "  value="<?php 
                                         if (empty($input_border_radius)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-border-radius:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$input_border_radius; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-color-placeholder</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-color-placeholder" type="text"  class=" form-control "  value="<?php 
                                         if (empty($input_color_placeholder)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-color-placeholder:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$input_color_placeholder; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-height-base</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-height-base" type="text"  class=" form-control "  value="<?php 
                                         if (empty($input_height_base)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-height-base:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else
                                                  echo$input_height_base; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-height-large</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-height-large" type="text"  class=" form-control "  value="<?php 
                                         if (empty($input_height_large)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-height-large:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$input_height_large; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-height-small</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-height-small" type="text"  class=" form-control "  value="<?php 
                                         if (empty($input_height_small)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-height-small:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$input_height_small; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@legend-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="legend-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($legend_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/legend-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  
                                                  echo$legend_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@legend-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="legend-border-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($legend_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/legend-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$legend_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(229, 229, 229);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-group-addon-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-group-addon-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($input_group_addon_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-group-addon-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$input_group_addon_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@input-group-addon-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="input-group-addon-border-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($input_group_addon_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/input-group-addon-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$input_group_addon_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><span class="ng-scope">
                                    </span><!-- Forms
                                    ================================================== --><span class="ng-scope">
                                    </span><section name="forms" class="ng-scope">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <section class="row">
                                                    <div class="col-md-12">

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" name="exampleInputEmail1" placeholder="Enter email">
                                                        </div>
                                                        <div>
                                                            <label for="exampleInputFile">Disabled input</label>
                                                            <input class="form-control" name="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Check me out
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="inlineCheckbox1" value="option1"> 1
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="inlineCheckbox2" value="option2"> 2
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="inlineCheckbox3" value="option3"> 3
                                                            </label>
                                                        </div>

                                                        <label for="exampleInputFile">Radio buttons</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" name="optionsRadios1" value="option1" checked="">
                                                                Option one is this and that—be sure to include why it's great
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" name="optionsRadios2" value="option2">
                                                                Option two can be something else and selecting it will deselect option one
                                                            </label>
                                                        </div>
                                                        <label for="exampleInputFile">Large input</label>
                                                        <input class="form-control input-lg" type="text" placeholder=".input-lg">
                                                        <br>
                                                        <label for="exampleInputFile">Default input</label>
                                                        <input class="form-control" type="text" placeholder="Default input">
                                                        <br>
                                                        <label for="exampleInputFile">Small input</label>
                                                        <input class="form-control input-sm" type="text" placeholder=".input-sm">
                                                        <br>

                                                        <label for="exampleInputFile">Input group</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="text" class="form-control" placeholder="Username">
                                                        </div>
                                                        <br>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-addon">.00</span>
                                                        </div>

                                                        <br>
                                                        <button type="submit" class="btn btn-default">Submit</button>

                                                    </div>
                                                </section>

                                                <section class="row">
                                                    <div class="col-md-12">
                                                        <div class="hr">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="row">
                                                    <div class="col-md-12">
                                                        <div name="Border-Radius">
                                                            <div class="well">

                                                                <div class="form-group">
                                                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                                    <input type="email" class="form-control" name="exampleInputEmail2" placeholder="Enter email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                    <input type="password" class="form-control" name="exampleInputPassword2" placeholder="Password">
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"> Remember me
                                                                    </label>
                                                                </div>
                                                                <button type="submit" class="btn btn-default">Sign in</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>



                                            </div>
                                        </div>
                                    </section></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Table">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Table">Table</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@table-cell-padding</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="table-cell-padding" type="text" placeholder="8px"  class=" form-control "  value="<?php 
                                         if (empty($table_cell_padding)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/table-cell-padding:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$table_cell_padding; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@table-condensed-cell-padding</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="table-condensed-cell-padding" placeholder="5px" type="text"  class=" form-control "  value="<?php 
                                        if (empty($table_condensed_cell_padding)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/table-condensed-cell-padding:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$table_condensed_cell_padding; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@table-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="table-bg" type="text" placeholder="transparent"  class=" form-control "  value="<?php 
                                        if (empty($table_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/table-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$table_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@table-bg-accent</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="table-bg-accent" type="text"  class=" form-control "  value="<?php 
                                        if (empty($table_bg_accent)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/table-bg-accent:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$table_bg_accent; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(249, 249, 249);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@table-bg-hover</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="table-bg-hover" type="text"  class=" form-control "  value="<?php 
                                        if (empty($table_bg_hover)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/table-bg-hover:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$table_bg_hover; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(245, 245, 245);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@table-bg-active</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="table-bg-active" type="text"  class=" form-control "  value="<?php 
                                        if (empty($table_bg_active)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/table-bg-active:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$table_bg_active; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@table-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="table-border-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($table_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/table-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$table_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><!-- table
            ================================================== --><span class="ng-scope">
                                    </span><section name="table" class="ng-scope">
                                        <h4>Striped table</h4>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h4>Condensed table</h4>
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h4>Hover table</h4>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h4>Bordered table</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </section></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Navbar">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Navbar">Navbar</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@navbar-height</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-height" type="text"  class=" form-control "  value="<?php 
                                        if (empty($navbar_height)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-height:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_height; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-margin-bottom</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-margin-bottom" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_margin_bottom)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-margin-bottom:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_margin_bottom; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(119, 119, 119);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(248, 248, 248);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-border" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-border-radius</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-border-radius" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_border_radius)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-border-radius:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_border_radius; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-padding-horizontal</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-padding-horizontal" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_padding_horizontal)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-padding-horizontal:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_padding_horizontal; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-padding-vertical</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-padding-vertical" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_padding_vertical)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-padding-vertical:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_padding_vertical; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-link-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-link-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_link_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-link-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_link_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(119, 119, 119);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-link-hover-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-link-hover-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_link_hover_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-link-hover-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_link_hover_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(51, 51, 51);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-link-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-link-hover-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_link_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-link-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_link_hover_bg ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-link-active-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-link-active-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_link_active_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-link-active-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_link_active_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-link-active-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-link-active-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_link_active_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-link-active-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_link_active_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-link-disabled-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-link-disabled-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_link_disabled_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-link-disabled-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_link_disabled_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-link-disabled-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-link-disabled-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_link_disabled_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-link-disabled-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_link_disabled_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-brand-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-brand-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_brand_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-brand-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_brand_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-brand-hover-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-brand-hover-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_brand_hover_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-brand-hover-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_brand_hover_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-brand-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-brand-hover-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_brand_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-brand-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_brand_hover_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-toggle-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-toggle-hover-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_toggle_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-toggle-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_toggle_hover_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-toggle-icon-bar-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="navbar-default-toggle-icon-bar-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($navbar_default_toggle_icon_bar_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-toggle-icon-bar-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_toggle_icon_bar_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(136, 136, 136);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@navbar-default-toggle-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" ddd" data-color-format="hex" ng-class="{
                                         'input-group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="navbar-default-toggle-border-color" type="text"  class=" form-control "  value="<?php 
                                          if (empty($navbar_default_toggle_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/navbar-default-toggle-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$navbar_default_toggle_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><!-- Navbar
            ================================================== --><span class="ng-scope">
                                    </span><section name="navbar" class="ng-scope">
                                        <section class="row">
                                            <div class="col-md-12">
                                                <nav class="navbar navbar-default" role="navigation">
                                                    <!-- Brand and toggle get grouped for better mobile display -->
                                                    <div class="navbar-header">
                                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                            <span class="sr-only">Toggle navigation</span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                            <span class="icon-bar"></span>
                                                        </button>
                                                        <a class="navbar-brand" href="">Brand</a>
                                                    </div>

                                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                                        <ul class="nav navbar-nav">
                                                            <li class="active"><a href="">Link</a></li>
                                                            <li><a href="">Link</a></li>
                                                            <li class="dropdown">
                                                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="">Action</a></li>
                                                                    <li><a href="">Another action</a></li>
                                                                    <li><a href="">Something else here</a></li>
                                                                    <li><a href="">Separated link</a></li>
                                                                    <li><a href="">One more separated link</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>

                                                        <ul class="nav navbar-nav navbar-right">
                                                            <li><a href="">Link</a></li>
                                                            <li class="dropdown">
                                                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="">Action</a></li>
                                                                    <li><a href="">Another action</a></li>
                                                                    <li><a href="">Something else here</a></li>
                                                                    <li><a href="">Separated link</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.navbar-collapse -->
                                                </nav>
                                            </div>
                                        </section>
                                        <!-- /navbar -->
                                    </section></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Navs Tabs">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Navs Tabs">Navs Tabs</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@nav-link-padding</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-link-padding" type="text"  class=" form-control "  value="<?php 
                                          if (empty($nav_link_padding)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-link-padding:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_link_padding; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-link-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-link-hover-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_link_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-link-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_link_hover_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-disabled-link-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-disabled-link-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_disabled_link_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-disabled-link-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_disabled_link_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-disabled-link-hover-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-disabled-link-hover-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_disabled_link_hover_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-disabled-link-hover-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_disabled_link_hover_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-tabs-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-tabs-border-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_tabs_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-tabs-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_tabs_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-tabs-link-hover-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-tabs-link-hover-border-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_link_hover_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-link-hover-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_tabs_link_hover_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-tabs-active-link-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-tabs-active-link-hover-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_tabs_active_link_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-tabs-active-link-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_tabs_active_link_hover_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-tabs-active-link-hover-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-tabs-active-link-hover-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_tabs_active_link_hover_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-tabs-active-link-hover-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_tabs_active_link_hover_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-tabs-active-link-hover-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" ddd" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="nav-tabs-active-link-hover-border-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($nav_tabs_active_link_hover_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-tabs-active-link-hover-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$nav_tabs_active_link_hover_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-tabs-justified-link-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" ddd" data-color-format="hex" ng-class="{
                                         'input-group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="nav-tabs-justified-link-border-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($nav_tabs_justified_link_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-tabs-justified-link-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_tabs_justified_link_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-tabs-justified-active-link-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-tabs-justified-active-link-border-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_tabs_justified_active_link_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-tabs-justified-active-link-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_tabs_justified_active_link_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-pills-border-radius</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-pills-border-radius" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_pills_border_radius)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-pills-border-radius:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_pills_border_radius; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-pills-active-link-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-pills-active-link-hover-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_pills_active_link_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-pills-active-link-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$nav_pills_active_link_hover_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@nav-pills-active-link-hover-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="nav-pills-active-link-hover-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($nav_pills_active_link_hover_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/nav-pills-active-link-hover-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$nav_pills_active_link_hover_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <div class="bs-example">
                                                <h4>Pills</h4>
                                                <ul class="nav nav-pills">
                                                    <li class="active"><a href="">Home</a></li>
                                                    <li><a href="">Profile</a></li>
                                                    <li class="disabled"><a href="">Disabled link</a></li>
                                                    <li><a href="">Messages</a></li>
                                                </ul>
                                            </div>

                                            <div class="bs-example">
                                                <h4>Tabs</h4>
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="">Home</a></li>
                                                    <li><a href="">Profile</a></li>
                                                    <li><a href="">Messages</a></li>
                                                </ul>
                                            </div>

                                            <div class="bs-example">
                                                <h4>Justified</h4>
                                                <ul class="nav nav-tabs nav-justified">
                                                    <li class="active"><a href="">Home</a></li>
                                                    <li><a href="">Profile</a></li>
                                                    <li><a href="">Messages</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </section><span class="ng-scope">

                                    </span></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Jumbotron">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Jumbotron">Jumbotron</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@jumbotron-padding</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="jumbotron-padding" type="text"  class=" form-control "  value="<?php 
                                           if (empty($jumbotron_padding)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/jumbotron-padding:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$jumbotron_padding; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@jumbotron-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="jumbotron-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($jumbotron_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/jumbotron-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$jumbotron_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@jumbotron-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="jumbotron-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($jumbotron_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/jumbotron-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$jumbotron_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@jumbotron-font-size</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="jumbotron-font-size" type="text"  class=" form-control "  value="<?php 
                                         if (empty($jumbotron_font_size)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/jumbotron-font-size:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$jumbotron_font_size; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <div class="col-md-12">

                                            <div class="jumbotron">
                                                <h1>Bootstrap magic</h1>
                                                <p>Bootstrap 3 theme generator made with AngulasJS</p>
                                                <hr>
                                                <a href="" title="Bootstrap 3 Themes AngularJS" class="btn btn-primary btn-lg">
                                                    Try Bootstrap magic
                                                </a>
                                            </div>

                                        </div>
                                    </section></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Pagination">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Pagination">Pagination</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@pagination-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pagination-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($pagination_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" ddd" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="pagination-border" type="text"  class=" form-control " value="<?php 
                                         if (empty($pagination_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pagination-hover-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pagination_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_hover_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-hover-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pagination-hover-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pagination_hover_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-hover-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_hover_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-hover-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" ddd" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="pagination-hover-border" type="text"  class=" form-control "  value="<?php 
                                         if (empty($pagination_hover_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-hover-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_hover_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-active-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pagination-active-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pagination_active_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-active-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_active_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-active-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pagination-active-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pagination_active_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-active-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_active_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-active-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pagination-active-border" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pagination_active_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-active-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_active_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-disabled-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pagination-disabled-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pagination_disables_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-disabled-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_disabled_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-disabled-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pagination-disabled-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pagination_disabled_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-disabled-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_disabled_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pagination-disabled-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" ddd" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="pagination-disabled-border" type="text"  class=" form-control "  value="<?php 
                                         if (empty($pagination_disabled_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pagination-disabled-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pagination_disabled_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pager-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pager-bg" type="text"  class=" form-control "  value="<?php
                                        if (empty($pager_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pager-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pager_bg; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pager-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pager-border" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pager_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pager-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pager_border; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pager-border-radius</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pager-border-radius" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pager_border_radius)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pager-border-radius:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pager_border_radius; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pager-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pager-hover-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pager_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pager-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pager_hover_bg; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pager-active-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pager-active-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pager_active_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pager-active-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pager_active_bg; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pager-active-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pager-active-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pager_active_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pager-active-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pager_active_color; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@pager-disabled-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="pager-disabled-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($pager_disabled_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/pager-disabled-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$pager_disabled_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <div class="col-md-12">

                                            <section class="row">
                                                <div class="col-md-6">
                                                    <ul class="pagination">
                                                        <li class="disabled"><a href="" title="Bootstrap Themes AngularJS">«</a></li>
                                                        <li class="active"><a href="" title="Bootstrap Themes AngularJS">1</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">2</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">3</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">4</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">5</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">6</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">7</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">8</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">»</a></li>
                                                    </ul>

                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="pagination">
                                                        <li><a href="" title="Bootstrap Themes AngularJS">←</a></li>
                                                        <li class="active"><a href="" title="Bootstrap Themes AngularJS">10</a></li>
                                                        <li class="disabled"><a href="" title="Bootstrap Themes AngularJS">...</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">20</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">30</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">40</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">50</a></li>
                                                        <li><a href="" title="Bootstrap Themes AngularJS">→</a></li>
                                                    </ul>
                                                </div>

                                            </section>
                                            <div>
                                                <ul class="pagination pagination-lg">
                                                    <li><a href="" title="Bootstrap Themes AngularJS">1</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">2</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">3</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">4</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">5</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="pagination">
                                                    <li><a href="" title="Bootstrap Themes AngularJS">1</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">2</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">3</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">4</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">5</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="pagination pagination-sm">
                                                    <li><a href="" title="Bootstrap Themes AngularJS">1</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">2</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">3</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">4</a></li>
                                                    <li><a href="" title="Bootstrap Themes AngularJS">5</a></li>
                                                </ul>
                                            </div>

                                            <ul class="pager">
                                                <li class="previous">
                                                    <a href="" title="Bootstrap Themes AngularJS">← Older</a>
                                                </li>
                                                <li class="next">
                                                    <a href="" title="Bootstrap Themes AngularJS">Newer →</a>
                                                </li>
                                            </ul>

                                            <ul class="pager">
                                                <li><a href="" title="Bootstrap Themes AngularJS">Previous</a></li>
                                                <li><a href="" title="Bootstrap Themes AngularJS">Next</a></li>
                                            </ul>
                                        </div>
                                    </section><span class="ng-scope">
                                    </span></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Form States">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Form States">Form States</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@state-warning-text</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" c09853" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="state-warning-text" type="text"  class=" form-control "  value="<?php 
                                                                if (empty($state_warning_text)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-warning-text:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_warning_text; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(192, 152, 83);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-warning-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" fcf8e3" data-color-format="hex" ng-class="{
                                         'input-group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="state-warning-bg" type="text"  class=" form-control "  value="<?php 
                                                                if (empty($state_warning_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-warning-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_warning_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(252, 248, 227);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-warning-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="state-warning-border" type="text"  class=" form-control "  value="<?php 
                                           if (empty($state_warning_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-warning-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_warning_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-danger-text</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" b94a48" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="state-danger-text" type="text"  class=" form-control "  value="<?php 
                                            if (empty($state_danger_text)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-danger-text:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_danger_text; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(185, 74, 72);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-danger-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" f2dede" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="state-danger-bg" type="text"  class=" form-control "  value="<?php 
                                            if (empty($state_danger_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-danger-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_danger_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(242, 222, 222);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-danger-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="state-danger-border" type="text"  class=" form-control "  value="<?php 
                                           if (empty($state_danger_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-danger-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_danger_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-success-text</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" 468847" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="state-success-text" type="text"  class=" form-control "  value="<?php 
                                           if (empty($state_success_text)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-success-text:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_success_text; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(70, 136, 71);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-success-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" dff0d8" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="state-success-bg" type="text"  class=" form-control "  value="<?php 
                                            if (empty($state_success_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-success-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_success_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(223, 240, 216);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-success-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="state-success-border" type="text"  class=" form-control "  value="<?php 
                                           if (empty($state_success_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-success-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_success_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-info-text</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" 3a87ad" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="state-info-text" type="text"  class=" form-control "  value="<?php 
                                           if (empty($state_info_text)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-info-text:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_info_text; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(58, 135, 173);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-info-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" d9edf7" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="state-info-bg" type="text"  class=" form-control "  value="<?php 
                                            if (empty($state_in)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-in:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_in; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(217, 237, 247);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@state-info-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="state-info-border" type="text"  class=" form-control "  value="<?php 
                                           if (empty($state_info_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/state-info-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$state_info_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><span class="ng-scope">
                                    </span><!-- Alerts & Messages
                                    ================================================== --><span class="ng-scope">

                                    </span><h4 class="ng-scope">Alerts</h4><span class="ng-scope">
                                    </span><div class="row ng-scope">

                                        <div class="col-md-4">
                                            <div class="alert alert-danger">
                                                <a title="Bootstrap Themes Generator" class="close" href="">×</a>
                                                <strong>Error</strong> Change a few things up and try submitting again.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="alert alert-success">
                                                <a title="Bootstrap Themes Generator" class="close" href="">×</a>
                                                <strong>Success</strong> You successfully read this important alert message.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="alert alert-info">
                                                <a title="Bootstrap Themes Generator" class="close" href="">×</a>
                                                <strong>Information</strong> This alert needs your attention, but it's not super important.
                                            </div>
                                        </div>
                                    </div><span class="ng-scope">

                                    </span><h4 class="ng-scope">Inputs colored</h4><span class="ng-scope">
                                    </span><div class="form-group has-success ng-scope">
                                        <label class="control-label" for="inputSuccess">Input with success</label>
                                        <input type="text" class="form-control" name="inputSuccess">
                                    </div><span class="ng-scope">
                                    </span><div class="form-group has-warning ng-scope">
                                        <label class="control-label" for="inputWarning">Input with warning</label>
                                        <input type="text" class="form-control" name="inputWarning">
                                    </div><span class="ng-scope">
                                    </span><div class="form-group has-error ng-scope">
                                        <label class="control-label" for="inputError">Input with error</label>
                                        <input type="text" class="form-control" name="inputError">
                                    </div><span class="ng-scope">

                                    </span><!--div class="row">
                                        <div class="col-md-4">
                                            <div class="progress">
                                                    <div class="bar" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="progress progress-info progress-striped">
                                                    <div class="bar" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="progress progress-danger progress-striped active">
                                                    <div class="bar" style="width: 45%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="progress">
                                        <div class="bar" style="width: 10%;"></div>
                                        <div class="bar bar-success" style="width: 14%;"></div>
                                        <div class="bar bar-warning" style="width: 16%;"></div>
                                        <div class="bar bar-danger" style="width: 18%;"></div>
                                    </div>
                                    
                                    <div class="progress progress-striped">
                                        <div class="bar" style="width: 15%;"></div>
                                        <div class="bar bar-success progress-striped" style="width: 0%;"></div>
                                        <div class="bar bar-warning progress-striped" style="width: 20%;"></div>
                                        <div class="bar bar-danger progress-striped" style="width: 15%;"></div>
                                    </div>
                                    
                                    <div class="progress progress-striped active">
                                        <div class="bar bar-success" style="width: 55%;"></div>
                                        <div class="bar bar-warning" style="width: 15%;"></div>
                                        <div class="bar bar-danger" style="width: 20%;"></div>
                                    </div>--><span class="ng-scope">

                                    </span><div class="bs-example ng-scope">
                                        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                        <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                                        <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                    </div><span class="ng-scope">

                                    </span><h4 name="labels" class="ng-scope">Labels</h4><span class="ng-scope">
                                    </span><h4 class="ng-scope">Example heading <span class="label label-default">New</span></h4><span class="ng-scope">
                                    </span><span class="label label-default ng-scope">Default</span><span class="ng-scope">
                                    </span><span class="label label-primary ng-scope">Primary</span><span class="ng-scope">
                                    </span><span class="label label-success ng-scope">Success</span><span class="ng-scope">
                                    </span><span class="label label-info ng-scope">Info</span><span class="ng-scope">
                                    </span><span class="label label-warning ng-scope">Warning</span><span class="ng-scope">
                                    </span><span class="label label-danger ng-scope">Danger</span><span class="ng-scope">
                                    </span></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="ToolTip">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="ToolTip">ToolTip</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@tooltip-max-width</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="tooltip-max-width" type="text"  class=" form-control "  value="<?php 
                                         if (empty($tooltip_max_width)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/tooltip-max-width:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$tooltip_max_width; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@tooltip-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="tooltip-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($tooltip_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/tooltip-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$tooltip_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@tooltip-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" 000" data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="tooltip-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($tooltip_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/tooltip-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$tooltip_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(0, 0, 0);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@tooltip-arrow-width</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="tooltip-arrow-width" type="text"  class=" form-control "  value="<?php 
                                        if (empty($tooltip_arrow_width)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/tooltip-arrow-width:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$tooltip_arrow_width; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@tooltip-arrow-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="tooltip-arrow-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($tooltip_arrow_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/tooltip-arrow-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$tooltip_arrow_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@tooltip-opacity</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="tooltip-opacity" type="text"  class=" form-control "  value="<?php 
                                        if (empty($tooltip_opacity)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/tooltip-opacity:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$tooltip_opacity; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <h4>Photo booth beard raw denim</h4>
                                        <p>Tight pants next level keffiyeh <a href="" class="example" rel="tooltip" data-original-title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel have a <a href="" rel="tooltip" class="example" data-original-title="Another tooltip">terry</a> richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats.</p>
                                        <p> Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan whatever keytar, scenester farm-to-table banksy Austin <a href="" rel="tooltip" class="example" data-original-title="Best tooltip">twitter handle</a> freegan cred raw denim single-origin coffee viral.</p>
                                        <h4>Consectetur adipisicing</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna <a href="" rel="tooltip" class="example" data-original-title="Super tip!">twitter handle</a>. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>

                                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla <a href="" rel="tooltip" class="example" data-original-title="The last tip!">beard stumptown</a>. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </section><span class="ng-scope">

                                    </span></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Popover">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Popover">Popover</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@popover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$popover_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-max-width</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-max-width" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_max_width)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-max-width:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$popover_max_width; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-border-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$popover_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-fallback-border-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" ccc" data-color-format="hex" ng-class="{
                                         'input-group color colorpicker'
                                         : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="popover-fallback-border-color" type="text"  class=" form-control "  value="<?php 
                                         if (empty($popover_fallback_border_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-fallback-border-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$popover_fallback_border_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(204, 204, 204);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-title-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-title-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_title_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-title-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$popover_title_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-arrow-width</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-arrow-width" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_arrow_width)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-arrow-width:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$popover_arrow_width; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-arrow-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-arrow-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_arrow_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-arrow-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$popover_arrow_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-arrow-outer-width</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-arrow-outer-width" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_arrow_outer_width)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-arrow-outer-width:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$popover_arrow_outer_width; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-arrow-outer-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-arrow-outer-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_arrow_outer_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-arrow-outer-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$popover_arrow_outer_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@popover-arrow-outer-fallback-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" 999" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="popover-arrow-outer-fallback-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($popover_arrow_outer_fallback_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/popover-arrow-outer-fallback-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$popover_arrow_outer_fallback_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(153, 153, 153);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <div>
                                                <a href="" class="btn btn-lg btn-danger" name="example" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">Click to toggle popover</a>
                                            </div>

                                            <div class="bs-example">
                                                <section class="row">
                                                    <div class="col-md-6">
                                                        <div class="popover top">
                                                            <div class="arrow"></div>
                                                            <h3 class="popover-title">Popover top</h3>
                                                            <div class="popover-content">
                                                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="popover right">
                                                            <div class="arrow"></div>
                                                            <h3 class="popover-title">Popover right</h3>
                                                            <div class="popover-content">
                                                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div class="bs-example">
                                                <section class="row">
                                                    <div class="col-md-6">
                                                        <div class="popover bottom">
                                                            <div class="arrow"></div>
                                                            <h3 class="popover-title">Popover bottom</h3>
                                                            <div class="popover-content">
                                                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="popover left">
                                                            <div class="arrow"></div>
                                                            <h3 class="popover-title">Popover left</h3>
                                                            <div class="popover-content">
                                                                <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </section><span class="ng-scope">

                                    </span></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="List Group">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="List Group">List Group</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@list-group-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="list-group-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($list_group_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" ddd" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="list-group-border" type="text"  class=" form-control "  value="<?php 
                                         if (empty($list_group_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(221, 221, 221);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-border-radius</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="list-group-border-radius" type="text"  class=" form-control "  value="<?php 
                                        if (empty($list_group_border_radius)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-border-radius:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_border_radius; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-hover-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" f5f5f5" data-color-format="hex" ng-class="{
                                         'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                         <input name="list-group-hover-bg" type="text"  class=" form-control "  value="<?php 
                                         if (empty($list_group_hover_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-hover-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else  
                                                  echo$list_group_hover_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(245, 245, 245);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-active-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="list-group-active-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($list_group_active_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-active-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_active_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-active-bg</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="list-group-active-bg" type="text"  class=" form-control "  value="<?php 
                                        if (empty($list_group_active_bg)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-active-bg:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_active_bg; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-active-border</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="list-group-active-border" type="text"  class=" form-control "  value="<?php 
                                        if (empty($list_group_active_border)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-active-border:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_active_border; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                        : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-active-text-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker"  data-color-format="hex" ng-class="{
                                            'input-group color colorpicker'
                                                    : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="list-group-active-text-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($list_group_active_text_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-active-text-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_active_text_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(255, 255, 255);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-link-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" 555" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="list-group-link-color" type="text"  class=" form-control "  value="<?php 
                                        if (empty($list_group_link_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-link-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_link_color; ?>">
                                        <span class="input-group-addon" ng-class="{
                                                'hidden'
                                                : !colorpicker(variable.type)}"><i style="background-color: rgb(85, 85, 85);"></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@list-group-link-heading-color</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)} input-group color colorpicker" 333" data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="list-group-link-heading-color" type="text"  class=" form-control " value="<?php 
                                        if (empty($list_group_link_heading_color)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/list-group-link-heading-color:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$list_group_link_heading_color; ?>" >
                                        <span class="input-group-addon" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i style="background-color: rgb(51, 51, 51);"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><div class="row ng-scope">
                                        <div class="col-md-4">
                                            <ul class="list-group">
                                                <li class="list-group-item">Cras justo odio</li>
                                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                                <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="list-group">
                                                <a href="" class="list-group-item active">
                                                    Cras justo odio
                                                </a>
                                                <a href="" class="list-group-item">Dapibus ac facilisis in</a>
                                                <a href="" class="list-group-item">Morbi leo risus</a>
                                                <a href="" class="list-group-item">Porta ac consectetur ac</a>
                                                <a href="" class="list-group-item">Vestibulum at eros</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="list-group">
                                                <a href="" class="list-group-item active">
                                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                                    <p class="list-group-item-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. 
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="list-group">
                                                <a href="" class="list-group-item ">
                                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                                    <p class="list-group-item-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. 
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="list-group">
                                                <a href="" class="list-group-item ">
                                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                                    <p class="list-group-item-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. 
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div></div>
                            </div>
                        </div>
                    </section><section ng-repeat="group in variables" class="Sprites">
                        <div class="row protected">
                            <div class="col-md-12">
                                <h2 class="groupNameTitle ng-binding" name="Sprites">Sprites</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- ngRepeat: variable in group.data --><div>
                                    <label class="labelTitle ng-binding">@icon-font-path</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker' : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="icon-font-path" type="text"  class=" form-control "  value="<?php 
                                        if (empty($icon_font_path)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/icon-font-path:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$icon_font_path; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div><div>
                                    <label class="labelTitle ng-binding">@icon-font-name</label>                
                                    <div class="input {' ap-color-picker: variable.value': colorpicker(variable.type)}"  data-color-format="hex" ng-class="{
                                            'input - group color colorpicker'
                                            : colorpicker(variable.type)}" color-picker-apply="">
                                        <input name="icon-font-name" type="text"  class=" form-control "  value="<?php 
                                         if (empty($icon_font_name)) {
                                                  $file = fopen('reset.txt', "r");
                                                  while (!feof($file)) {
                                                      // check Grays

                                                      preg_match("/icon-font-name:(.*)/", fgets($file), $css_string);
                                                      $css_val = str_replace(';', '', $css_string[1]);
                                                      echo$css_val;
                                                  }
                                                  fclose($file);
                                              } else 
                                                  echo$icon_font_name; ?>">
                                        <span class="input-group-addon hidden" ng-class="{
                                                'hidden' : !colorpicker(variable.type)}"><i></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 well">
                                <div data-ng-include="" src="getGroupUrl()"><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <h3>Icon Glyphs</h3>
                                            <p>180 icons in sprite form, available in dark gray (default) and white, provided by <a href="http://glyphicons.com/" title="http://glyphicons.com">Glyphicons.</a></p>
                                            <section class="row">
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li><span class="glyphicon glyphicon-credit-card"></span> glyphicon-credit-card</li>
                                                        <li><span class="glyphicon glyphicon-cutlery"></span> glyphicon-cutlery</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li><span class="glyphicon glyphicon-dashboard"></span> glyphicon-dashboard</li>
                                                        <li><span class="glyphicon glyphicon-download"></span> glyphicon-download</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li><span class="glyphicon glyphicon-download-alt"></span> glyphicon-download-alt</li>
                                                        <li><span class="glyphicon glyphicon-earphone"></span> glyphicon-earphone</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li><span class="glyphicon glyphicon-edit"></span> glyphicon-edit</li>
                                                        <li><span class="glyphicon glyphicon-eject"></span> glyphicon-eject</li>
                                                    </ul>
                                                </div>
                                            </section>

                                        </div>
                                    </section><span class="ng-scope">
                                    </span><hr class="ng-scope"><span class="ng-scope">
                                    </span><section class="row ng-scope">
                                        <div class="col-md-12">
                                            <h3>Icon Autre planète</h3>
                                            <p>516 Beautiful web icons in png, svg, vector, CSS sprite and webfont formats, available for <strong>free</strong> at <a href="http://www.autreplanete.com/web-icons/" title="autre planète icons">Autre planète.</a></p>
                                            <section class="row">
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li><i class="apico games apico-atoms"></i> apico-atoms</li>
                                                        <li><i class="apico games apico-printer"></i> apico-printer</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li><i class="apico games apico-cloud-upload"></i> apico-cloud-upload</li>
                                                        <li><i class="apico games apico-comment-user"></i> comment-user</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li><i class="apico interface apico-magic"></i> apico-magic</li>
                                                        <li><i class="apico interface apico-erase"></i> apico-erase</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="list-unstyled">
                                                        <li><i class="apico interface apico-airplane"></i> apico-airplane</li>
                                                        <li><i class="apico interface apico-book"></i> apico-book</li>
                                                    </ul>
                                                </div>
                                            </section>					
                                        </div>
                                    </section></div>
                            </div>
                        </div>
                    </section>



                </div><span class="ng-scope">

                </span><div class="protected ng-scope">
                    <div class="modal fade" name="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 name="myModalLabel"><span class="apico games apico-cloud-upload"></span>Import your Less Variables</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Add your less variables to Bootstrap Magic.</p>
                                    <textarea class="form-control " ng-model="importedVariables" rows="3" placeholder="Example @text-color : #242424;" style="height:400px"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" aria-hidden="true" class="btn btn-primary" ng-click="importLessVariables(importedVariables)">Import</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div><span class="ng-scope">

                </span><div class="protected ng-scope">
                    <div class="modal fade" name="thankYou" tabindex="-1" role="dialog" aria-labelledby="thankYouLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 name="myModalLabel"><span class="apico games apico-cloud-upload"></span>Thanks you for using Bootstrap Magic.</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Thanks you for using Bootstrap Magic.
                                        Just wait a little bit. We are compiling your CSS.
                                    </p>
                                    <br>
                                    <div class="text-center">
                                        <!-- <a href="https://www.producthunt.com/tech" target="_blank">
                                            <img class="img-responsive" style="margin: 0 auto" src="https://cc6f218bd2ea04cb4973-fc9c6b9d141db7665c9530be5d7ac377.ssl.cf1.rackcdn.com/files/5668663fb2a7161287000036/size_4_site-orson-producthunt-redpng.png">
                                        </a> -->
                                        <a class="" href="http://en.orson.io/17/build-responsive-website-without-coding/?utm_source=Bootstrap%20Magic%20&amp;utm_medium=referral&amp;utm_content=Footer&amp;utm_campaign=Bootstrap" target="_blank" title="Try Orson website builder"><img src="../app/img/orson-website-ad.jpg" class="img-responsive" alt="Create responsive website without coding"></a> 
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" aria-hidden="true" class="btn">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div><span class="ng-scope">

                </span><div name="scrollTop" scroll-top="" class="ng-scope" style="display: none;">↑</div><span class="ng-scope">
                </span></div>

        </form>



        <script>


// Apply color picker to inputs onload
            $(function () {
            $('.color').colorpicker();
            });
        </script>
    </body>
</html>




