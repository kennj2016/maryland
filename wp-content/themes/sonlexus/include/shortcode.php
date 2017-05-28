<?php
function right_contact_info( $atts ) {
    global $theme_option;

    $ret =  "
	<div class=\"col-md-offset-1 col-md-3 col-sm-5 col-xs-12\">
        <div class=\"contact_address_wrapper\">
            <div class=\"contact_title\">
            <h4>We’re here to help you</h4>
            </div>
            <ul class=\"contact_address\">
            <li><i class=\"icofont icofont-phone\"></i> Call : ".$theme_option['site-phone']."</li>
            <li><i class=\"icofont icofont-envelope\"></i> Email : ".$theme_option['email']."</li>
            <li><i class=\"icofont icofont-social-google-map\"></i> ".$theme_option['address']."</li>
            </ul>
           
	";
    $ret.= "<div class='social_icons'><ul>";
    $ret.= social_list();
    $ret.= "</ul></div></div>  </div>";
    return $ret;

}
add_shortcode( 'right_contact_info', 'right_contact_info' );

function social_list() {
    global $gdlr_header_social_icon, $theme_option;
    $type = empty($theme_option['header-social-type'])? 'dark': $theme_option['header-social-type'];
    $ret = '<ul>';
    foreach( $gdlr_header_social_icon as $social_slug => $social_name ){
        if( !empty($theme_option[$social_slug . '-header-social']) ){
            $ret.="<li><a href=\"". $theme_option[$social_slug . '-header-social']."\"><span class=\"icofont icofont-social-".$social_slug."\"></span></a></li>";
        }
    }
    $ret .= '</ul>';
    return $ret;
}

add_shortcode( 'social_list', 'social_list' );

function footer_logo() {
    global $theme_option;
    return "<div class='footer-logo'>".gdlr_get_image($theme_option['logo-footer-id'])."</div>";
}

add_shortcode( 'footer_logo', 'footer_logo' );