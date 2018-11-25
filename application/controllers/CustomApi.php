<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . 'libraries/REST_Controller.php');

class CustomApi extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    //shirt Implemantation
    function cartOperationSingle_get($product_id, $custom_id) {
        $prodct_details = $this->Product_model->productDetails($product_id, $custom_id);
        $prodct_details['product_id'] = $prodct_details['id'];
        $this->response($prodct_details);
    }

    function customeElements_get() {
        $customeele = array(
            "keys" => [
                array(
                    "title" => "Collar",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Collar Insert",
                    "viewtype" => "front",
                    "type" => "submain",
                ),
                array(
                    "title" => "Cuff & Sleeve",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Cuff Insert",
                    "viewtype" => "front",
                    "type" => "submain",
                ),
                array(
                    "title" => "Front",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Back",
                    "viewtype" => "back",
                    "type" => "main",
                ),
                array(
                    "title" => "Pocket",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Bottom",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Stitching",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Buttons",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Button Hole Color",
                    "viewtype" => "front",
                    "type" => "main",
                    "style_side" => "    background-size: 100%!important;height:50px",
                    
                ),
                array(
                    "title" => "Button Hole Color Position",
                    "viewtype" => "front",
                    "type" => "main",
                    
                ),
                array(
                    "title" => "Button Thread Color",
                    "viewtype" => "front",
                    "type" => "main",
                    "style_side" => "    background-size: 100%!important;height:50px",
                ),
                array(
                    "title" => "Monogram",
                    "viewtype" => "front",
                    "type" => "main",
                ),
            ],
            "collar_cuff_insert" => array(),
            "data" => array(
                "Monogram" => [
                    array(
                        "status" => "1",
                        "title" => "No",
                        "css_class" => "monogramtext_posistion_none",
                        "not_show_when" => [],
                        "checkwith" => "",
                        "image" => "customization/no_monogram.jpg"
                    ),
                    array(
                        "status" => "0",
                        "title" => "Collar",
                        "css_class" => "monogramtext_posistion_collar",
                        "not_show_when" => [],
                        "view_type" => "back",
                        "image" => "customization/monogram_inside_coller_band.jpg"
                    ),
                    array(
                        "status" => "0",
                        "title" => "Cuff",
                        "css_class" => "monogramtext_posistion_cuff_left",
                        "not_show_when" => ["Short Sleeve Without Cuff", "Short Sleeve With Cuff"],
                        "checkwith" => "Cuff & Sleeve",
                        "image" => "customization/monogram_left_cuff.jpg"
                    ),
                    array(
                        "status" => "0",
                        "title" => "Pocket",
                        "css_class" => "monogramtext_posistion_left_pocket",
                        "not_show_when" => ["No Pocket"],
                        "checkwith" => "Pocket",
                        "image" => "customization/monogram_left_chest_pocket.jpg"
                    ),
                    array(
                        "status" => "0",
                        "title" => "Abdomen",
                        "css_class" => "monogramtext_posistion_abdomen",
                        "not_show_when" => ["Short Sleeve Without Cuff", "Short Sleeve With Cuff"],
                        "checkwith" => "Cuff & Sleeve",
                        "image" => "customization/left_abdomen.png"
                    ),
                    array(
                        "status" => "0",
                        "title" => "Shirt Tail",
                        "css_class" => "monogramtext_posistion_shirt_tail",
                        "not_show_when" => ["Short Sleeve Without Cuff", "Short Sleeve With Cuff"],
                        "checkwith" => "Cuff & Sleeve",
                        "image" => "customization/shirt_tail.png"
                    ),],
                "Buttons" => [

                    array(
                        "status" => "0",
                        "title" => "1",
                        "button" => "b1",
                        "image" => "customization/buttons/b1.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "0",
                        "title" => "3",
                        "button" => "b3",
                        "image" => "customization/buttons/b3.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "0",
                        "title" => "4",
                        "button" => "b4",
                        "image" => "customization/buttons/b4.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "0",
                        "title" => "5",
                        "button" => "b5",
                        "image" => "customization/buttons/b5.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "0",
                        "title" => "6",
                        "button" => "b6",
                        "image" => "customization/buttons/b6.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "0",
                        "title" => "7",
                        "button" => "b7",
                        "image" => "customization/buttons/b7.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "0",
                        "title" => "8",
                        "button" => "b8",
                        "image" => "customization/buttons/b8.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "0",
                        "title" => "9",
                        "button" => "b9",
                        "image" => "customization/buttons/b9.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "1",
                        "title" => "HDR",
                        "button" => "b1",
                        "image" => "customization/buttons/b1.png",
                        "customization_category_id" => "8",
                    ), array(
                        "status" => "0",
                        "title" => "SDR",
                        "button" => "b2",
                        "image" => "customization/buttons/b2.png",
                        "customization_category_id" => "8",
                    )
                    , array(
                        "status" => "0",
                        "title" => "HBE",
                        "button" => "hbe",
                        "image" => "customization/buttons/hbe.png",
                        "customization_category_id" => "8",
                    )
                    , array(
                        "status" => "0",
                        "title" => "GN",
                        "button" => "gn",
                        "image" => "customization/buttons/gn.png",
                        "customization_category_id" => "8",
                    )
                    , array(
                        "status" => "0",
                        "title" => "DBE",
                        "button" => "b3",
                        "image" => "customization/buttons/b3.png",
                        "customization_category_id" => "8",
                    )
                ],
                "Button Hole Color Position" => [
                    array(
                        "status" => "1",
                        "title" => "All Places",
                        "ptype" => "1",
                        "image" => "customization/hole_all_only.jpeg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "On Cuff",
                        "ptype" => "2",
                        "image" => "customization/hole_cuff_only.jpeg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "On Cuff And Collar",
                        "image" => "customization/hole_collar_cuff_only.jpeg",
                        "ptype" => "3",
                    ),
                    array(
                        "status" => "0",
                        "title" => "On Front",
                        "image" => "customization/hole_front_only.jpeg",
                        "ptype" => "4",
                    ),
                ],
                "Stitching" => [
                    array(
                        "status" => "0",
                        "title" => "Close To Size",
                        "ptype" => "1",
                        "image" => "customization/stitchclose.jpeg",
                    ),
                    array(
                        "status" => "1",
                        "title" => "Standard 1/4",
                        "ptype" => "2",
                        "image" => "customization/stitch14.jpeg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Bespoke 3/8",
                        "ptype" => "3",
                        "image" => "customization/stitch38.jpeg",
                    ),
                ],
                "Button Hole Color" => [
                    array(
                        "status" => "1",
                        "title" => "Matching",
                        "image" => "customization/hole_thread/matching.png",
                        "folder" => "Matching",
                    ),
                    array(
                        "status" => "0",
                        "title" => "4",
                        "color" => "4",
                        "image" => "customization/hole_thread/4.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "8",
                        "color" => "8",
                        "image" => "customization/hole_thread/8.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "10",
                        "color" => "10",
                        "image" => "customization/hole_thread/10.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "11",
                        "color" => "11",
                        "image" => "customization/hole_thread/11.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "12",
                        "color" => "12",
                        "image" => "customization/hole_thread/12.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "13",
                        "color" => "13",
                        "image" => "customization/hole_thread/13.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "14",
                        "color" => "14",
                        "image" => "customization/hole_thread/14.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "17",
                        "color" => "17",
                        "image" => "customization/hole_thread/17.jpg",
                    ),
                ],
                "Button Thread Color" => [
                    array(
                        "status" => "1",
                        "title" => "Matching",
                        "image" => "customization/hole_thread/matching.png",
                        "folder" => "Matching",
                    ),
                    array(
                        "status" => "0",
                        "title" => "4",
                        "color" => "4",
                        "image" => "customization/hole_thread/4.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "8",
                        "color" => "8",
                        "image" => "customization/hole_thread/8.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "10",
                        "color" => "10",
                        "image" => "customization/hole_thread/10.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "11",
                        "color" => "11",
                        "image" => "customization/hole_thread/11.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "12",
                        "color" => "12",
                        "image" => "customization/hole_thread/12.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "13",
                        "color" => "13",
                        "image" => "customization/hole_thread/13.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "14",
                        "color" => "14",
                        "image" => "customization/hole_thread/14.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "17",
                        "color" => "17",
                        "image" => "customization/hole_thread/17.jpg",
                    ),
                ],
                "Bottom" => [
                    array(
                        "status" => "1",
                        "title" => "Rounded",
                        "elements" => ["shirtbody_round0001.png"],
                        "customization_category_id" => "6",
                        "image" => "customization/bottom_rounded.jpeg",
                        "overlay" => []
                    ),
                    array(
                        "status" => "0",
                        "title" => "Normal Rounded With Slits",
                        "elements" => ["shirtbody_round0001.png"],
                        "customization_category_id" => "6",
                        "image" => "customization/bottom_rounded_normal.jpeg",
                        "overlay" => ["notmalround_bottom.png"]
                    ),
                    array(
                        "status" => "0",
                        "title" => "Deep Rounded With Slits",
                        "elements" => ["shirtbody_round0001.png"],
                        "customization_category_id" => "6",
                        "image" => "customization/bottom_rounded_deep.jpeg",
                        "overlay" => ["deepround_bottom.png"]
                    ), array(
                        "status" => "0",
                        "title" => "Squared",
                        "elements" => ["shirtbody_squre0001.png"],
                        "customization_category_id" => "6",
                        "image" => "customization/bottom_squred.jpeg"
                    )],
                
                
                "Cuff & Sleeve" => [
                    array(
                        "status" => "0",
                        "title" => "Short Sleeve Without Cuff",
                        "elements" => [],
                        "customization_category_id" => "3",
                        "image" => "customization/withoutcuff_sort.jpg",
                        "sleeve1" => ["shirtbody_half_sleeve0001.png",],
                        "sleeve" => ["b_shirtbody_half0001.png", "back_half_sleeve0001.png",],
                        "monogram_change_css" => "monogramtext_posistion_collar",
                        "monogram_position" => array(
                            "status" => "0",
                            "title" => "Collar",
                            "css_class" => "monogramtext_posistion_collar",
                        ),
                    ),
                    array(
                        "status" => "0",
                        "title" => "Short Sleeve With Cuff",
                        "elements" => [],
                        "customization_category_id" => "3",
                        "image" => "customization/withcuff_sort.jpg",
                        "sleeve1" => ["shirtbody_half_sleeve0001.png",],
                        "overlay"=>["shirt_cuff_overlay.png"],
                        "sleeve" => ["b_shirtbody_half0001.png", "back_half_sleeve0001.png",],
                        "monogram_change_css" => "monogramtext_posistion_collar",
                        "monogram_position" => array(
                            "status" => "0",
                            "title" => "Collar",
                            "css_class" => "monogramtext_posistion_collar",
                        ),
                    ),
                    
                    
                    
                    array(
                        "status" => "1",
                        "title" => "Single Cuff Rounded",
                        "elements" => [ "cuff_m_rounded20001.png"],
                        "insertele" => [ "cuff_m_rounded30001.png"],
                        "inserteleo" => [ "cuff_m_rounded30001.png"],
                        "customization_category_id" => "3",
                        "image" => "customization/cuff_single_rounded.jpg",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "insert_style_css" => "",
                        "insert_style" => "cuff_m_rounded20001.png",
                        "insert_overlay" => "cuff_single_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_single_rounded0001.png"],
                        "sleeve" => ["b_full_shirt_sleeve0001.png",],
                        "button_hole" => ["cuff_s_hole_10001.png"],
                        "button_thread" => ["cuff_s_button1_trd0001.png"],
                        "buttons" => "cuff_s_button10001.png",
                        "franch" => "0",
                    ), array(
                        "status" => "0",
                        "title" => "Single Cuff Cutaway",
                        "elements" => [ "cuff_m_cutaway20001.png"],
                        "insertele" => [ "cuff_m_cutaway30001.png"],
                        "inserteleo" => [ "cuff_m_cutaway30001.png"],
                        "customization_category_id" => "3",
                        "image" => "customization/single_cuff_cutaway.jpg",
                        "insert_style_css" => "",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "insert_style" => "cuff_m_cutaway20001.png",
                        "insert_overlay" => "cuff_single_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_single_cutaway0001.png"],
                        "sleeve" => ["b_full_shirt_sleeve0001.png",],
                        "button_hole" => ["cuff_s_hole_10001.png"],
                        "button_thread" => ["cuff_s_button1_trd0001.png"],
                        "buttons" => "cuff_s_button10001.png",
                        "franch" => "0",
                    ), array(
                        "status" => "0",
                        "title" => "Single Cuff Squred",
                        "elements" => [ "cuff_m_squre20001.png"],
                        "insertele" => [ "cuff_m_cutaway30001.png"],
                        "inserteleo" => [ "cuff_m_cutaway30001.png"],
                        "customization_category_id" => "3",
                        "image" => "customization/cuff_single_squred.jpg",
                        "insert_style_css" => "",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "insert_style" => "cuff_m_cutaway20001.png",
                        "insert_overlay" => "cuff_single_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_single_cutaway0001.png"],
                        "sleeve" => ["b_full_shirt_sleeve0001.png",],
                        "button_hole" => ["cuff_s_hole_10001.png"],
                        "button_thread" => ["cuff_s_button1_trd0001.png"],
                        "buttons" => "cuff_s_button10001.png",
                        "franch" => "0",
                    ), array(
                        "status" => "0",
                        "title" => "2 Buttons Rounded",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "elements" => [ "cuff_m_rounded20001.png"],
                        "insertele" => [ "cuff_m_rounded30001.png"],
                        "inserteleo" => [ "cuff_m_rounded30001.png"],
                        "customization_category_id" => "3",
                        "image" => "customization/2_buttons_rounded.jpg",
                        "insert_style_css" => "",
                        "insert_style" => "cuff_m_rounded20001.png",
                        "insert_overlay" => "cuff_single_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_single_rounded0001.png"],
                        "sleeve" => ["b_full_shirt_sleeve0001.png",],
                        "button_hole" => ["cuff_s_hole_20001.png"],
                        "button_thread" => ["cuff_s_button1_trd0001.png", "cuff_s_button2_trd0001.png"],
                        "buttons" => "cuff_s_button20001.png",
                        "franch" => "0",
                    ), array(
                        "status" => "0",
                        "title" => "2 Buttons Cutaway",
                        "customization_category_id" => "3",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "elements" => [ "cuff_m_cutaway20001.png"],
                        "insertele" => [ "cuff_m_cutaway30001.png"],
                        "inserteleo" => [ "cuff_m_cutaway30001.png"],
                        "image" => "customization/2_buttons_cutaway.jpg",
                        "insert_style_css" => "",
                        "insert_style" => "cuff_m_cutaway20001.png",
                        "insert_overlay" => "cuff_single_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_single_cutaway0001.png"],
                        "sleeve" => ["b_full_shirt_sleeve0001.png",],
                        "button_hole" => [ "cuff_s_hole_20001.png"],
                        "button_thread" => ["cuff_s_button1_trd0001.png", "cuff_s_button2_trd0001.png"],
                        "buttons" => "cuff_s_button20001.png",
                        "franch" => "0",
                    ), array(
                        "status" => "0",
                        "title" => "2 Buttons Squred",
                        "elements" => [ "cuff_m_squre20001.png"],
                        "insertele" => [ "cuff_m_cutaway30001.png"],
                        "inserteleo" => [ "cuff_m_cutaway30001.png"],
                        "customization_category_id" => "3",
                        "image" => "customization/2_buttons_squre.jpg",
                        "insert_style_css" => "",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "insert_style" => "cuff_m_cutaway20001.png",
                        "insert_overlay" => "cuff_single_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_single_cutaway0001.png"],
                        "sleeve" => ["b_full_shirt_sleeve0001.png",],
                        "button_hole" => [ "cuff_s_hole_20001.png"],
                        "button_thread" => ["cuff_s_button1_trd0001.png", "cuff_s_button2_trd0001.png"],
                        "buttons" => "cuff_s_button20001.png",
                        "franch" => "0",
                    ), array(
                        "status" => "0",
                        "title" => "French Cuff Squred",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "customization_category_id" => "3",
                        "elements" => [ "cuff_m_franch_squre_insert0001.png", "cuff_m_franch_squre0001.png"],
                        "insertele" => [ "cuff_m_franch_squre0001.png"],
                        "inserteleo" => [ "cuff_m_franch_squre0001.png"],
                        "image" => "customization/cuff_franch_squre.jpg",
                        "insert_style_css" => "",
                        "insert_style" => "cuff_m_franch_squre_insert0001.png",
                        "insert_overlay" => "cuff_franch_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_franch_rounded0001.png"],
                        "buttons" => "cuff_m_franch_squre_button0001.png",
                        "sleeve" => ["b_full_shirt_sleeve0001.png"],
                        "franch" => "1",
                    )
                    , array(
                        "status" => "0",
                        "title" => "French Cuff Cutaway",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "customization_category_id" => "3",
                        "elements" => [ "cuff_m_franch_cutaway20001.png"],
                        "insertele" => [],
                        "inserteleo" => [ "cuff_m_franch_squre0001.png"],
                        "image" => "customization/cufffranchcuffcutaway.jpeg",
                        "insert_style_css" => "",
                        "insert_style" => "",
                        "insert_overlay" => "cuff_franch_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_franch_rounded0001.png"],
                        "buttons" => "cuff_m_franch_squre_button0001.png",
                        "sleeve" => ["b_full_shirt_sleeve0001.png"],
                        "franch" => "1",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Convertible Cuff Cutaway",
                        "elements" => [ "cuff_m_cutaway20001.png"],
                        "insertele" => [ "cuff_m_cutaway30001.png"],
                        "inserteleo" => [ "cuff_m_cutaway30001.png"],
                        "customization_category_id" => "3",
                        "image" => "customization/convertiblecutaway.jpeg",
                        "insert_style_css" => "",
                        "sleeve1" => ["shirt_sleeve0001.png"],
                        "insert_style" => "cuff_m_cutaway20001.png",
                        "insert_overlay" => "cuff_single_insert_overlay.png",
                        "insert_overlay_css" => "",
                        "insert_full" => ["cuff_single_cutaway0001.png"],
                        "sleeve" => ["b_full_shirt_sleeve0001.png",],
                        "button_hole" => ["cuff_s_hole_10001.png",],
                        "button_thread" => ["cuff_s_button1_trd0001.png"],
                        "buttons" => "cuff_s_button10001.png",
                        "franch" => "0",
                    )
                ],
                "Back" => [
                    array(
                        "status" => "1",
                        "title" => "Plain",
                        "customization_category_id" => "5",
                        "halfsleeve" => ["back_half_sleeve0001.png", "back_half_sleeve_cuff0001.png"],
                        "fullsleeve" => ["b_full_shirt_sleeve0001.png",],
                        "elements" => [ "b_shirtbody_round0001.png", "b_shirtbody_squre0001.png", "yoke0001.png"],
                        "overlay" => "",
                        "image" => "customization/back_plain.jpeg"
                    ), array(
                        "status" => "0",
                        "title" => "Side Pleated",
                        "customization_category_id" => "5",
                        "halfsleeve" => ["back_half_sleeve0001.png", "back_half_sleeve_cuff0001.png"],
                        "fullsleeve" => ["b_full_shirt_sleeve0001.png", "b_full_shirt_sleeve0001.png",],
                        "overlay" => "back_two_side_plea_over_lay.png",
                        "elements" => ["b_shirtbody_round0001.png", "b_shirtbody_squre0001.png", "shirtbody_pleat_side0001.png", "yoke0001.png"],
                        "image" => "customization/back_two_side.jpeg"
                    ), array(
                        "status" => "0",
                        "title" => "Boxpleat",
                        "customization_category_id" => "5",
                        "halfsleeve" => ["back_half_sleeve0001.png", "back_half_sleeve_cuff0001.png"],
                        "fullsleeve" => ["b_full_shirt_sleeve0001.png", "back_sleeve_cuff0001.png"],
                        "overlay" => "box_pleat_overlay1.png",
                        "elements" => [ "b_shirtbody_round0001.png", "b_shirtbody_squre0001.png", "shirtbody_pleat_box0001.png", "yoke0001.png"],
                        "image" => "customization/back_box_pleat.jpeg"
                    ), array(
                        "status" => "0",
                        "title" => "Dart",
                        "customization_category_id" => "5",
                        "halfsleeve" => ["back_half_sleeve0001.png", "back_half_sleeve_cuff0001.png"],
                        "fullsleeve" => ["b_full_shirt_sleeve0001.png", "back_full_sleeve_cuff0001.png"],
                        "overlay" => "dart_overlay1.png",
                        "elements" => ["b_shirtbody_round0001.png", "b_shirtbody_squre0001.png", "dart20001.png", "yoke0001.png"],
                        "image" => "customization/dart.jpeg"
                    )],
                "Pocket" => [
                    array(
                        "status" => "0",
                        "title" => "No Pocket",
                        "customization_category_id" => "7",
                        "elements" => [],
                        "image" => "customization/pocket_no.jpeg",
                        "monogram_change_css" => "monogramtext_posistion_collar",
                        "monogram_position" => array(
                            "status" => "0",
                            "title" => "Collar",
                            "css_class" => "monogramtext_posistion_collar",
                        ),
                    ), array(
                        "status" => "1",
                        "title" => "1 Regular Pocket",
                        "customization_category_id" => "7",
                        "elements" => ["shirtbody_pocket_right20001.png",],
                        "image" => "customization/pocket_one.jpeg"
                    ), array(
                        "status" => "0",
                        "title" => "2 Regular Pockets",
                        "customization_category_id" => "7",
                        "elements" => ["shirtbody_pocket_right20001.png", "shirtbody_pocket_left20001.png"],
                        "image" => "customization/pocket_two.jpeg"
                    ),
                    array(
                        "status" => "0",
                        "title" => "1 Rounded Pocket",
                        "customization_category_id" => "7",
                        "elements" => ["shirtbody_pocket_round_right0001.png",],
                        "image" => "customization/pocket_one_r.jpeg"
                    ), array(
                        "status" => "0",
                        "title" => "2 Rounded Pockets",
                        "customization_category_id" => "7",
                        "elements" => ["shirtbody_pocket_round_right0001.png", "shirtbody_pocket_round_left0001.png"],
                        "image" => "customization/pocket_two_r.png"
                    ),
                    array(
                        "status" => "0",
                        "title" => "1 Rounded Pocket With Pleat",
                        "customization_category_id" => "7",
                        "elements" => ["shirtbody_pocket_round_right0001.png",],
                        "image" => "customization/pocket_one_rf.jpeg",
                        "overlay" => ["shirtbody_pocket_round_flap_r.png"],
                    ), array(
                        "status" => "0",
                        "title" => "2 Rounded Pockets With Pleat",
                        "customization_category_id" => "7",
                        "elements" => ["shirtbody_pocket_round_right0001.png", "shirtbody_pocket_round_left0001.png"],
                        "image" => "customization/pocket_two_r.png",
                        "overlay" => ["shirtbody_pocket_round__flap_l.png", "shirtbody_pocket_round_flap_r.png"],
                    ),
                    array(
                        "status" => "0",
                        "title" => "1 Rounded Pocket With Button",
                        "customization_category_id" => "7",
                        "elements" => ["shirtbody_pocket_round_right0001.png",],
                        "image" => "customization/pocket_one_rb.jpeg",
                        "overlay" => [ "shirtbody_pocket_round_button_r.png"],
                    ), array(
                        "status" => "0",
                        "title" => "2 Rounded Pockets With Button",
                        "customization_category_id" => "7",
                        "elements" => ["shirtbody_pocket_round_right0001.png", "shirtbody_pocket_round_left0001.png"],
                        "image" => "customization/pocket_two_rb.png",
                        "overlay" => ["shirtbody_pocket_round_button_l.png", "shirtbody_pocket_round_button_r.png"],
                    ),
                ],
                "Front" => [
                    array(
                        "status" => "0",
                        "title" => "Plain Front",
                        "customization_category_id" => "4",
                        "elements" => [],
                        "image" => "customization/front_plain.jpeg",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Fly Front",
                        "elements" => [ "flyfront0001.png"],
                        "customization_category_id" => "4",
                        "image" => "customization/front_fly.jpeg",
                        "show_buttons" => "false",
                    )
                    , array(
                        "status" => "1",
                        "title" => "Pleated",
                        "elements" => [ "flyfront0001.png"],
                        "customization_category_id" => "4",
                        "image" => "customization/front_ivy.jpeg",
                        "show_buttons" => "true",
                    )
                    , array(
                        "status" => "0",
                        "title" => "Pleated With Hidden Button",
                        "elements" => [ "flyfront0001.png"],
                        "customization_category_id" => "4",
                        "image" => "customization/front_pleated.png",
                        "overlay" => ["flyfront_overlay.png"],
                        "show_buttons" => "false",
                    )
                ],
                "Collar" => [
                    array(
                        "status" => "1",
                        "title" => "Regular",
                        "elements" => [ "collar_ragular_5w0001.png"],
                        "customization_category_id" => "2",
                        "insert_style" => "collar_m_comman_insert20001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "insert_full" => ["collar_m_regular20001.png"],
                        "image" => "customization/collar_regular.jpeg",
                        "buttons" => "buttonsh1.png",
                    ), array(
                        "status" => "0",
                        "title" => "Medium Spread",
                        "customization_category_id" => "2",
                        "insert_style" => "collar_m_comman_insert20001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "elements" => [ "collar_medium_spread_5w0001.png"],
                        "insert_full" => ["collar_m_medium_spread20001.png"],
                        "image" => "customization/collar_medium_spread.jpeg",
                        "buttons" => "buttonsh1.png",
                    ), array(
                        "status" => "0",
                        "title" => "Full Cutaway",
                        "customization_category_id" => "2",
                        "insert_style" => "collar_m_comman_insert20001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "insert_full" => ["collar_m_full_cutaway20001.png"],
                        "elements" => [ "collar_fullcutaway_5w0001.png"],
                        "image" => "customization/collar_full_cutaway.jpeg",
                        "buttons" => "buttonsh1.png",
                    ), array(
                        "status" => "0",
                        "title" => "Wide Spread",
                        "customization_category_id" => "2",
                        "elements" => [ "collar_wide_spread_5w0001.png"],
                        "image" => "customization/collar_wide_spread.jpeg",
                        "insert_style" => "collar_m_comman_insert0001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "insert_full" => ["collar_wide_spread20001.png"],
                        "buttons" => "buttonsh1.png",
                    )
                    , array(
                        "status" => "0",
                        "title" => "Button Down",
                        "customization_category_id" => "2",
                        "elements" => [ "collar_button_down_5w0001.png"],
                        "image" => "customization/collar_regular_button_down.jpeg",
                        "overlay" => [ "button_down_overlay.png"],
                        "insert_style" => "collar_m_comman_insert0001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "insert_full" => ["collar_wide_spread20001.png"],
                        "buttons" => "collar_regular_button_down.jpeg",
                    )
                    , array(
                        "status" => "0",
                        "title" => "Hidden Button Down",
                        "customization_category_id" => "2",
                        "elements" => [ "collar_hidden_button_down_5w0001.png"],
                        "overlay" => [ "hidden_button_down_overlay.png"],
                        "image" => "customization/hidden_button_down.jpeg",
                        "insert_style" => "collar_m_comman_insert0001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "insert_full" => ["collar_wide_spread20001.png"],
                        "buttons" => "hidden_button_down.jpeg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Round Point",
                        "customization_category_id" => "2",
                        "elements" => [ "collar_round_point_5w0001.png"],
                        "image" => "customization/collar_round_point.jpeg",
                        "insert_style" => "collar_m_comman_insert0001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "insert_full" => ["collar_wide_spread20001.png"],
                        "buttons" => "hidden_button_down.jpeg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Wing Tip",
                        "customization_category_id" => "2",
                        "elements" => [ "collar_wingtip_5w0001.png"],
                        "image" => "customization/collar_wingtip.jpeg",
                        "insert_style" => "collar_m_comman_insert0001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "insert_full" => ["collar_wide_spread20001.png"],
                        "buttons" => "hidden_button_down.jpeg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Mandarian",
                        "customization_category_id" => "2",
                        "elements" => [ "collar_mandarian_5w0001.png"],
                        "image" => "customization/collar_mandarin.jpeg",
                        "insert_style" => "collar_m_comman_insert0001.png",
                        "insert_overlay" => "collar_simple_insert_overlay.png",
                        "insert_full" => ["collar_wide_spread20001.png"],
                        "buttons" => "hidden_button_down.jpeg",
                    ),
                ]
            ),
            "cuff_collar_insert" => ["p10", "p11", "p2", "p18"],
            "monogram_colors" => [
                array(
                    "color" => "#fff",
                    "backcolor" => "#000080",
                    "title" => "Navy Blue"
                ),
                array(
                    "color" => "white",
                    "backcolor" => "#000",
                    "title" => "Black"
                ),
                array(
                    "color" => "#000",
                    "backcolor" => "#c0c0c0",
                    "title" => "Silver"
                ),
                array(
                    "color" => "red",
                    "backcolor" => "white",
                    "title" => "Red-White"
                ),
                array(
                    "color" => "white",
                    "backcolor" => "red",
                    "title" => "White-Red"
                ),
            ],
            "monogram_style" => [
                array(
                    "title" => "1",
                    "image" => "1.png",
                ),
                array(
                    "title" => "2",
                    "image" => "2.png",
                ),
                array(
                    "title" => "3",
                    "image" => "3.png",
                ),
                array(
                    "title" => "4",
                    "image" => "4.png",
                ),
                array(
                    "title" => "5",
                    "image" => "5.png",
                ),
                array(
                    "title" => "6",
                    "image" => "6.png",
                ),
                array(
                    "title" => "7",
                    "image" => "7.png",
                ),
                array(
                    "title" => "8",
                    "image" => "8.png",
                ), array(
                    "title" => "9",
                    "image" => "9.png",
                ),
                array(
                    "title" => "10",
                    "image" => "10.png",
                ),
                array(
                    "title" => "11",
                    "image" => "11.png",
                ),
                array(
                    "title" => "14",
                    "image" => "14.png",
                ),
                array(
                    "title" => "15",
                    "image" => "15.png",
                ),
            ],
        );
        foreach ($customeele as $key => $value) {
            
        }
        $this->response($customeele);
    }

    //end of shirt




    function customeElementsSuit_get() {
        $customeele = array(
            "keys" => [
                array(
                    "title" => "Jacket Style",
                    "viewtype" => "front",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Lapel Style",
                    "viewtype" => "front",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Lapel Button Hole",
                    "viewtype" => "front",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Lapel Button Hole Color",
                    "viewtype" => "front",
                    "type" => "main",
                    "style_side" => "    background-size: 100%!important;height:50px",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Breast Pocket",
                    "viewtype" => "front",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Lower Pocket",
                    "viewtype" => "front",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Ticket Pocket",
                    "viewtype" => "front",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Back Vent",
                    "viewtype" => "back",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Sleeve Buttons",
                    "viewtype" => "front",
                    "type" => "main",
                     "colrow"=>"4",
                    "style_side" => "    background-size: 100%!important;",
                ),
                array(
                    "title" => "Contrast First Button Hole",
                    "viewtype" => "front",
                    "type" => "main",
                    "style_side" => "    background-size: 100%!important;height:50px",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Number of Pleat",
                    "viewtype" => "pant",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Front Pocket Style",
                    "viewtype" => "pant",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Number of Back Pocket",
                    "viewtype" => "pantback",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Hidden Pocket",
                    "viewtype" => "pant",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                array(
                    "title" => "Waistband",
                    "viewtype" => "pant",
                    "type" => "main",
                      "colrow"=>"3",
                ),
                
                array(
                    "title" => "Waistband Adjustment",
                    "viewtype" => "pant",
                    "type" => "main",
                     "colrow"=>"4",
                ),
                
                array(
                    "title" => "Cuff",
                    "viewtype" => "pant",
                    "type" => "main",
                     "colrow"=>"4",
                ),
            ],
            "collar_cuff_insert" => array(),
            "data" => array(
                "Hidden Pocket" => [
                    array(
                        "status" => "1",
                        "title" => "No Pocket",
                        "customization_category_id" => "4",
                        "elements" => ["pant_pleat_no0001.png"],
                        "image" => "pant_elements/waistband/no_belt_loop.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Inside Waistband",
                        "elements" => [],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/waistband/hidden_pocket_iw.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Outside Waistband",
                        "elements" => [],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/waistband/hidden_pocket_ow.png",
                        "show_buttons" => "true",
                    )
                ],
                "Number of Pleat" => [
                    array(
                        "status" => "1",
                        "title" => "No Pleat",
                        "customization_category_id" => "4",
                        "elements" => ["pant_pleat_no0001.png"],
                        "image" => "pant_elements/pleat/no_pleat.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "1 Pleat Standard",
                        "elements" => ["pant_pleat_110001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pleat/pleat_s1.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "2 Pleats Standard",
                        "elements" => ["pant_pleat_220001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pleat/pleat_s2.png",
                        "show_buttons" => "true",
                    )
                ],
                "Waistband Adjustment" => [
                    array(
                        "status" => "0",
                        "title" => "No Belt Loop",
                        "customization_category_id" => "4",
                        "elements" => ["pant_waistband0001.png"],
                        "image" => "pant_elements/waistband/no_belt_loop.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "1",
                        "title" => "Belt Loop",
                        "elements" => ["pant_waistband0001.png", "pant_belt_loop0001.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/waistband/belt_loop.png",
                        "backbeltloop" => "true",
                        "show_buttons" => "true",
                    )
                ],
                
                "Waistband" => [
                    array(
                        "status" => "0",
                        "title" => "Standard 1 Button",
                        "customization_category_id" => "4",
                        "elements" => ["pant_waistband0001.png"],
                        "image" => "pant_elements/waistband/no_belt_loop.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "1",
                         "title" => "Standard 2 Buttons",
                        "elements" => ["pant_waistband0001.png", "pant_belt_loop0001.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/waistband/belt_loop.png",
                        "backbeltloop" => "true",
                        "show_buttons" => "true",
                    )
                    , array(
                        "status" => "1",
                         "title" => "Standard 1 Hook",
                        "elements" => ["pant_waistband0001.png", "pant_belt_loop0001.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/waistband/belt_loop.png",
                        "backbeltloop" => "true",
                        "show_buttons" => "true",
                    )
                    , array(
                        "status" => "1",
                         "title" => "Standard 2 Hooks",
                        "elements" => ["pant_waistband0001.png", "pant_belt_loop0001.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/waistband/belt_loop.png",
                        "backbeltloop" => "true",
                        "show_buttons" => "true",
                      
                    )
                ],
                
                "Front Pocket Style" => [
                    array(
                        "status" => "1",
                        "title" => "Slanting Pocket",
                        "customization_category_id" => "4",
                        "elements" => ["pant_pocket_slanted.png"],
                        "image" => "pant_elements/pocket/pocket_slanted.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Straight Pocket",
                        "elements" => ["pant_pocket_seam.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pocket/pocket_seam.png",
                        "show_buttons" => "true",
                    ),
                ],
                "Number of Back Pocket" => [
                    array(
                        "status" => "0",
                        "title" => "Welt Pocket Right Side",
                        "customization_category_id" => "4",
                        "elements" => ["back_pocket_r0001.png", "back_pocket_l_button0001.png"],
                        "image" => "pant_elements/back_pocket/back_r_pocket.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Welt Pocket Left Side",
                        "elements" => ["back_pocket_l0001.png", "back_pocket_r_button0001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/back_pocket/back_l_pocket.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "1",
                        "title" => "2 Welt Pockets",
                        "elements" => ["back_pocket_r0001.png", "back_pocket_l_button0001.png", "back_pocket_l0001.png", "back_pocket_r_button0001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/back_pocket/back_2_pocket.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Flap Pocket Right Side",
                        "customization_category_id" => "4",
                        "elements" => ["back_pocket_r_flap0001.png"],
                        "image" => "pant_elements/back_pocket/back_r_pocket_flap.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Flap Pocket Left Side",
                        "elements" => ["back_pocket_l_flap0001.png", ],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/back_pocket/back_l_pocket_flap.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "2 Flap Pockets",
                        "elements" => ["back_pocket_r_flap0001.png", "back_pocket_l_flap0001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/back_pocket/back_2_pocket_flap.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "One Line Pocket Right Side",
                        "customization_category_id" => "4",
                        "elements" => ["back_pocket_r_line0001.png", "back_pocket_l_button0001.png"],
                        "image" => "pant_elements/back_pocket/back_r_pocket_line.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "One Line Pocket Left Side",
                        "elements" => ["back_pocket_l_line0001.png", "back_pocket_r_button0001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/back_pocket/back_l_pocket_line.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "2 One Line Pockets",
                        "elements" => ["back_pocket_r_line0001.png", "back_pocket_l_button0001.png", "back_pocket_l_line0001.png", "back_pocket_r_button0001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/back_pocket/back_2_pocket_line.png",
                        "show_buttons" => "true",
                    ),
                ],
                "Cuff" => [
                    array(
                        "status" => "1",
                        "title" => "No Cuff",
                        "customization_category_id" => "4",
                        "elements" => [],
                        "image" => "pant_elements/pant_cuff/pant_no_cuff.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Cuff 1 1/3",
                        "elements" => ["pant_cuff.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pant_cuff/pant_cuff.png",
                        "show_buttons" => "true",
                    ),
                ],
                "Buttons" => [
                    array(
                        "status" => "1",
                        "title" => "Brown Lipshell",
                        "customization_category_id" => "4",
                        "image" => "buttonlipsell.png",
                        "folder" => "buttonlipsell",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Emerald Lipshell",
                        "folder" => "buttonemrald",
                        "customization_category_id" => "4",
                        "image" => "buttonemrald.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Horn",
                        "folder" => "buttonhorn",
                        "customization_category_id" => "4",
                        "image" => "buttonhorn.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Gold",
                        "folder" => "buttongold",
                        "customization_category_id" => "4",
                        "image" => "buttongold.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Silver",
                        "folder" => "buttonsilver",
                        "customization_category_id" => "4",
                        "image" => "buttonsilver.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Leather",
                        "folder" => "buttonleather",
                        "customization_category_id" => "4",
                        "image" => "buttonleather.png",
                        "show_buttons" => "true",
                    ),
                ],
                
                "Contrast First Button Hole" => [
                    array(
                        "status" => "1",
                        "title" => "Matching",
                        "image" => "customization/hole_thread/matching.png",
                        "folder" => "Matching",
                    ),
                    array(
                        "status" => "0",
                        "title" => "4",
                        "color" => "4",
                        "image" => "customization/hole_thread/4.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "8",
                        "color" => "8",
                        "image" => "customization/hole_thread/8.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "10",
                        "color" => "10",
                        "image" => "customization/hole_thread/10.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "11",
                        "color" => "11",
                        "image" => "customization/hole_thread/11.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "12",
                        "color" => "12",
                        "image" => "customization/hole_thread/12.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "13",
                        "color" => "13",
                        "image" => "customization/hole_thread/13.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "14",
                        "color" => "14",
                        "image" => "customization/hole_thread/14.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "17",
                        "color" => "17",
                        "image" => "customization/hole_thread/17.jpg",
                    ),
                ],
                
                "Breast Pocket" => [
                    array(
                        "status" => "1",
                        "title" => "Slanted Pocket",
                        "customization_category_id" => "4",
                        "elements" => ["breast_pocket_v30001.png"],
                        "image" => "suit_elements/breastpocket/breast_pocket_yes.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "No Pocket",
                        "elements" => [],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/breastpocket/breast_pocket_no.png",
                        "show_buttons" => "true",
                    )],
                "Ticket Pocket" => [
                    array(
                        "status" => "1",
                        "title" => "No Pocket",
                        "customization_category_id" => "4",
                        "elements" => [],
                        "image" => "suit_elements/pocket/ticketpocket_n.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Flap Pocket",
                        "elements" => ["ticket_pocket_f0001.png"],
                        "overlay"=>["ticketpocket_f_overlay.png"],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/pocket/ticketpocket_f.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Pipe Pocket",
                        "overlay"=>["ticket_pocket_w_overlay.png"],
                        "elements" => ["ticket_pocket_w0001.png"],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/pocket/ticketpocket_w.png",
                        "show_buttons" => "true",
                    )],
                "Back Vent" => [
                    array(
                        "status" => "0",
                        "title" => "No Vent",
                        "customization_category_id" => "4",
                        "elements" => ["back_sleeve10001.png", "back_upper0001.png", "back_body0001.png",],
                        "image" => "suit_elements/back/back_no_vent.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Center Vent",
                        "elements" => ["back_sleeve0001.png", "back_upper0001.png", "back_body0001.png",],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/back/back_center_vent.png",
                        "show_buttons" => "false",
                        "overlay" => ["centervent.png"],
                    ), array(
                        "status" => "1",
                        "title" => "Side Vent",
                        "elements" => ["back_sleeve10001.png", "back_upper0001.png", "back_body0001.png",],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/back/back_side_vent.png",
                        "show_buttons" => "true",
                        "overlay" => ["sidevent.png"],
                    )],
                "Lapel Button Hole Color" => [
                    array(
                        "status" => "1",
                        "title" => "Matching",
                        "image" => "customization/hole_thread/matching.png",
                        "folder" => "Matching",
                    ),
                    array(
                        "status" => "0",
                        "title" => "4",
                        "color" => "4",
                        "image" => "customization/hole_thread/4.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "8",
                        "color" => "8",
                        "image" => "customization/hole_thread/8.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "10",
                        "color" => "10",
                        "image" => "customization/hole_thread/10.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "11",
                        "color" => "11",
                        "image" => "customization/hole_thread/11.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "12",
                        "color" => "12",
                        "image" => "customization/hole_thread/12.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "13",
                        "color" => "13",
                        "image" => "customization/hole_thread/13.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "14",
                        "color" => "14",
                        "image" => "customization/hole_thread/14.jpg",
                    ),
                    array(
                        "status" => "0",
                        "title" => "17",
                        "color" => "17",
                        "image" => "customization/hole_thread/17.jpg",
                    ),
                ],
                "Lapel Button Hole" => [
                    array(
                        "status" => "1",
                        "title" => "Yes",
                        "customization_category_id" => "4",
                        "elements" => ["back_sleeve0001.png", "back_side__no_vent0001.png"],
                        "image" => "suit_elements/laple_button_hole/button_hole_yes.png",
                        "show_buttons" => "true",
                        "insert" => "Matching",
                    ), array(
                        "status" => "0",
                        "title" => "No",
                        "elements" => ["back_sleeve0001.png", "back_side_center_vent0001.png"],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/laple_button_hole/button_hole_no.png",
                        "show_buttons" => "false",
                        "insert" => "Matching",
                    )],
                "Handstitching" => [
                    array(
                        "status" => "1",
                        "title" => "No",
                        "image" => "handstitchyes.jpeg",
                    ), array(
                        "status" => "0",
                        "title" => "Yes",
                        "image" => "handstitchno.jpeg"
                    )],
                "Sleeve Buttons" => [
                    array(
                        "status" => "1",
                        "title" => "4 Flat Buttons",
                        "customization_category_id" => "4",
                        "elements" => ["sleeve_buttons_10001.png", "sleeve_buttons_comman0001.png", "sleeve_buttons_40001.png",],
                        "image" => "suit_elements/button/button_4_flat.png",
                        "buttons" => ["sleeve_buttons_flat_30001", "sleeve_buttons_flat_3_40001"],
                        "buttonhole" => ["sleeve_button_hole_40001.png", "sleeve_button_hole_comman0001.png", "sleeve_button_hole_10001.png"],
                        "show_buttons" => "true",
                        "first_button"=>["sleeve_button_hole_40001.png"]
                    ),
                    array(
                        "status" => "1",
                        "title" => "3 Flat Buttons",
                        "customization_category_id" => "4",
                        "elements" => ["sleeve_buttons_comman0001.png", "sleeve_buttons_40001.png"],
                        "image" => "suit_elements/button/button_3_flat.png",
                        "buttons" => ["sleeve_buttons_flat_30001"],
                        "buttonhole" => ["sleeve_button_hole_40001.png", "sleeve_button_hole_comman0001.png",],
                        "show_buttons" => "true",
                        "first_button"=>["sleeve_button_hole_40001.png"]
                    ),
                ],
                "Lower Pocket" => [

                    array(
                        "status" => "1",
                        "title" => "Straight Flap Pocket",
                        "customization_category_id" => "4",
                        "overlay"=>["lower_flap_pocket_overlay.png"],
                        "elements" => ["lower_flap_pocket0001.png",],
                        "image" => "suit_elements/pocket/pocket_flap.png",
                        "show_buttons" => "true",
                        "style_l" => "   ",
                        "style_r" => "    ",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Slanting Pipe Pocket",
                        "elements" => ["pocket_lower_pipe_left0001.png", "pocket_lower_pipe_right0001.png"],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/pocket/pocket_pipe.png",
                        "show_buttons" => "true",
                    )
                ],
                "Jacket Style" => [
                    array(
                        "status" => "1",
                        "title" => "1 Button",
                        "customization_category_id" => "4",
                        "elements" => ['body_single_410001.png',],
                        "image" => "suit_elements/suittype/1_button.png",
                        "left" => "body_single_41_l0001.png",
                        "right" => "body_single_41_r0001.png",
                        "buttons" => ["buttons_10001"],
                        "button_hole" => ["button_1_hole10001.png"],
                        "show_buttons" => "true",
                        "overlay" => ["single_overlay2.png", "single_overlay.png"],
                    ), array(
                        "status" => "0",
                        "title" => "2 Buttons",
                        "customization_category_id" => "4",
                        "elements" => ['body_single_410001.png',],
                        "image" => "suit_elements/suittype/2_button.png",
                        "left" => "body_single_41_r0001.png",
                        "right" => "body_single_41_l0001.png",
                        "buttons" => ["buttons_10001"],
                        "buttons2" => ["buttons_20001"],
                        "button_hole" => ["button_1_hole10001.png", "button_1_hole20001.png"],
                        "show_buttons" => "false",
                        "overlay" => ["single_overlay2.png", "single_overlay.png"],
                    ), array(
                        "status" => "0",
                        "title" => "3 Row 2",
                        "customization_category_id" => "4",
                        "elements" => ['body_single_410001.png',],
                        "image" => "suit_elements/suittype/2_button.png",
                        "left" => "body_single_41_r0001.png",
                        "right" => "body_single_41_l0001.png",
                        "buttons" => ["buttons_10001"],
                        "buttons2" => ["buttons_20001"],
                        "button_hole" => ["button_1_hole10001.png", "button_1_hole20001.png"],
                        "show_buttons" => "false",
                        "overlay" => ["single_overlay2.png", "single_overlay.png", ],
                    )
                    , array(
                        "status" => "0",
                        "title" => "4 Buttons 1 Button Fasten",
                        "elements" => ["body_double_left_v40001.png", "body_double_right_v40001.png",],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/suittype/41_button.png",
                        "left" => "body_double_41v2_l0001.png",
                        "right" => "body_double_41v2_r0001.png",
                        "button_hole" => ["button_4_hole_10001.png", "button_4_hole_20001.png"],
                        "buttons" => ["button_4_10001", "button_4_30001", "button_4_40001"],
                        "buttons2" => ["button_4_20001"],
                        "show_buttons" => "true",
                        "overlay" => ["body_double_overlay2.png", "body_double_overlay.png"],
                    )
                    , array(
                        "status" => "0",
                        "title" => "6 Buttons 2 Buttons Fasten",
                        "elements" => ["body_double_left_v40001.png", "body_double_right_v40001.png",],
                        "customization_category_id" => "4",
                        "left" => "body_double_41v2_l0001.png",
                        "right" => "body_double_41v2_r0001.png",
                        "button_hole" => ["button_4_hole_10001.png", "button_4_hole_20001.png"],
                        "buttons" => ["button_4_10001", "button_4_30001", "button_4_40001", "button_6_10001", "button_6_20001"],
                        "buttons2" => ["button_4_20001"],
                        "image" => "suit_elements/suittype/62_button.png",
                        "show_buttons" => "true",
                        "overlay" => ["body_double_overlay2.png", "body_double_overlay.png"],
                    )
                ],
                "Lapel Style" => [
                    array(
                        "status" => "1",
                        "title" => "Notch Lapel",
                        "elements" => ["body_round0001.png"],
                        "laple_style" => array(
                            "1 Button" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_notch_stitching1.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                            "2 Buttons" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_notch_stitching1.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                            "3 Row 2" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_notch_stitching1.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => ["3row2_overlay.png"]),
                            "3 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_notch_modern0001.png"
                                ], "overelay" => []),
                            "4 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_notch_modern0001.png"
                                ], "overelay" => []),
                            "4 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                            "4 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                            "6 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_notch_upper0001.png",
                                    "laple_6_notch_modrn0001.png"
                                ], "overelay" => []),
                            "6 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                        ),
                        "customization_category_id" => "6",
                        "image" => "suit_elements/laple/notch.png"
                    ),
                    array(
                        "status" => "0",
                        "title" => "Shawl Lapel",
                        "elements" => ["body_round0001.png"],
                        "laple_style" => array(
                            "1 Button" => array("elements" => [
                                  
                                    "laple_shwal_v20001.png"
                                ],
                                "stitcing" => ['laple_notch_stitching1.png'],
                                "hole" => ["laple_double_shawl_button_hole0001.png"],
                                "backoverelay" => ["laple_shwal_v20001_overlay.png"],
                                "overelay" => []),
                            "2 Buttons" => array("elements" => [
                                    "laple_shwal_v20001.png"
                                ],
                                "stitcing" => ['laple_notch_stitching1.png'],
                                "hole" => ["laple_double_shawl_button_hole0001.png"],
                                "backoverelay" => ["laple_shwal_v20001_overlay.png"],
                                "overelay" => []),
                            "3 Row 2" => array("elements" => [
                                    "laple_shwal_v20001.png"
                                ],
                                "stitcing" => ['laple_notch_stitching1.png'],
                                "hole" => ["laple_double_shawl_button_hole0001.png"],
                                "backoverelay" => ["laple_shwal_v20001_overlay.png"],
                                 "overelay" => ["3row2_overlay.png"]),
                            "3 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_notch_modern0001.png"
                                ], "overelay" => []),
                            "4 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_notch_modern0001.png"
                                ], "overelay" => []),
                            "4 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_double_shwal_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_shawl_button_hole0001.png"],
                                "overelay" => []),
                            "4 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_double_shwal_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_shawl_button_hole0001.png"],
                                "overelay" => []),
                            "6 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_double_shwal_v20001.png"
                                ], "overelay" => []),
                            "6 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_double_shwal_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_shawl_button_hole0001.png"],
                                "overelay" => []),
                        ),
                        "customization_category_id" => "6",
                        "image" => "suit_elements/laple/shwal.png"
                    ),
                    array(
                        "status" => "0",
                        "title" => "Peak Lapel",
                        "elements" => ["body_round0001.png"],
                        "laple_style" => array(
                            "1 Button" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => ["laple_peak_overlay.png"]),
                            "2 Buttons" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => ["laple_peak_overlay.png"]),
                            "3 Row 2" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => ["laple_peak_overlay.png", "3row2_overlay.png"]),
                             
                            "3 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_peak_morden0001.png"
                                ], "overelay" => []),
                            "4 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_peak_morden0001.png"
                                ], "overelay" => []),
                            "4 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_double_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => []),
                            "4 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_double_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => []),
                            "6 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_peak_upper0001.png",
                                    "laple_6_peack_morden0001.png"
                                ], "overelay" => ["4_peak_m.png"]),
                            "6 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_double_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => []),
                        ),
                        "customization_category_id" => "6",
                        "image" => "suit_elements/laple/peak.png"
                    ),
                ],
            ),
        );
        foreach ($customeele as $key => $value) {
            
        }
        $this->response($customeele);
    }

    function customeElementsJacket_get() {
        $customeele = array(
            "keys" => [
                array(
                    "title" => "Jacket Style",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Lapel Style",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Lapel Button Hole",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Breast Pocket",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Lower Pocket",
                    "viewtype" => "front",
                    "type" => "main",
                ),
                array(
                    "title" => "Back Vent",
                    "viewtype" => "back",
                    "type" => "main",
                ),
                array(
                    "title" => "Sleeve Buttons",
                    "viewtype" => "front",
                    "type" => "main",
                    "style_side" => "    background-size: 100%!important;",
                ),
            ],
            "collar_cuff_insert" => array(),
            "data" => array(
                "Buttons" => [
                    array(
                        "status" => "1",
                        "title" => "Brown Lipshell",
                        "customization_category_id" => "4",
                        "image" => "buttonlipsell.png",
                        "folder" => "buttonlipsell",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Emerald Lipshell",
                        "folder" => "buttonemrald",
                        "customization_category_id" => "4",
                        "image" => "buttonemrald.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Horn",
                        "folder" => "buttonhorn",
                        "customization_category_id" => "4",
                        "image" => "buttonhorn.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Gold",
                        "folder" => "buttongold",
                        "customization_category_id" => "4",
                        "image" => "buttongold.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Silver",
                        "folder" => "buttonsilver",
                        "customization_category_id" => "4",
                        "image" => "buttonsilver.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Leather",
                        "folder" => "buttonleather",
                        "customization_category_id" => "4",
                        "image" => "buttonleather.png",
                        "show_buttons" => "true",
                    ),
                ],
                "Breast Pocket" => [
                    array(
                        "status" => "1",
                        "title" => "Slanted Pocket",
                        "customization_category_id" => "4",
                        "elements" => ["breast_pocket_v30001.png"],
                        "image" => "suit_elements/breastpocket/breast_pocket_yes.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "No Pocket",
                        "elements" => [],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/breastpocket/breast_pocket_no.png",
                        "show_buttons" => "true",
                    )],
                "Back Vent" => [
                    array(
                        "status" => "0",
                        "title" => "No Vent",
                        "customization_category_id" => "4",
                        "elements" => ["back_sleeve10001.png", "back_upper0001.png", "back_body0001.png",],
                        "image" => "suit_elements/back/back_no_vent.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Center Vent",
                        "elements" => ["back_sleeve0001.png", "back_upper0001.png", "back_body0001.png",],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/back/back_center_vent.png",
                        "show_buttons" => "false",
                        "overlay" => ["centervent.png"],
                    ), array(
                        "status" => "1",
                        "title" => "Side Vent",
                        "elements" => ["back_sleeve10001.png", "back_upper0001.png", "back_body0001.png",],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/back/back_side_vent.png",
                        "show_buttons" => "true",
                        "overlay" => ["sidevent.png"],
                    )],
                "Lapel Button Hole" => [
                    array(
                        "status" => "1",
                        "title" => "Yes",
                        "customization_category_id" => "4",
                        "elements" => ["back_sleeve0001.png", "back_side__no_vent0001.png"],
                        "image" => "suit_elements/laple_button_hole/button_hole_yes.png",
                        "show_buttons" => "true",
                        "insert" => "Matching",
                    ), array(
                        "status" => "0",
                        "title" => "No",
                        "elements" => ["back_sleeve0001.png", "back_side_center_vent0001.png"],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/laple_button_hole/button_hole_no.png",
                        "show_buttons" => "false",
                        "insert" => "Matching",
                    )],
                "Handstitching" => [
                    array(
                        "status" => "1",
                        "title" => "No",
                        "image" => "handstitchyes.jpeg",
                    ), array(
                        "status" => "0",
                        "title" => "Yes",
                        "image" => "handstitchno.jpeg"
                    )],
                "Sleeve Buttons" => [
                    array(
                        "status" => "1",
                        "title" => "4 Flat Buttons",
                        "customization_category_id" => "4",
                        "elements" => ["sleeve_buttons_10001.png", "sleeve_buttons_comman0001.png", "sleeve_buttons_40001.png",],
                        "image" => "suit_elements/button/button_4_flat.png",
                        "buttons" => ["sleeve_buttons_flat_30001", "sleeve_buttons_flat_3_40001"],
                        "buttonhole" => ["sleeve_button_hole_40001.png", "sleeve_button_hole_comman0001.png", "sleeve_button_hole_10001.png"],
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "1",
                        "title" => "3 Flat Buttons",
                        "customization_category_id" => "4",
                        "elements" => ["sleeve_buttons_comman0001.png", "sleeve_buttons_40001.png"],
                        "image" => "suit_elements/button/button_3_flat.png",
                        "buttons" => ["sleeve_buttons_flat_30001"],
                        "buttonhole" => ["sleeve_button_hole_40001.png", "sleeve_button_hole_comman0001.png",],
                        "show_buttons" => "true",
                    ),
                ],
                "Lower Pocket" => [

                    array(
                        "status" => "1",
                        "title" => "Straight Flap Pocket",
                        "customization_category_id" => "4",
                        "elements" => ["lower_flap_pocket0001.png",],
                        "image" => "suit_elements/pocket/pocket_flap.png",
                        "show_buttons" => "true",
                        "style_l" => "   ",
                        "style_r" => "    ",
                    ),
                    array(
                        "status" => "0",
                        "title" => "Slanting Pipe Pocket",
                        "elements" => ["pocket_lower_pipe_left0001.png", "pocket_lower_pipe_right0001.png"],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/pocket/pocket_pipe.png",
                        "show_buttons" => "true",
                    )
                ],
                "Jacket Style" => [
                    array(
                        "status" => "1",
                        "title" => "1 Button",
                        "customization_category_id" => "4",
                        "elements" => ['body_single_410001.png',],
                        "image" => "suit_elements/suittype/1_button.png",
                        "left" => "body_single_41_l0001.png",
                        "right" => "body_single_41_r0001.png",
                        "buttons" => ["buttons_10001"],
                        "button_hole" => ["button_1_hole10001.png"],
                        "show_buttons" => "true",
                        "overlay" => ["single_overlay2.png", "single_overlay.png"],
                    ), array(
                        "status" => "0",
                        "title" => "2 Buttons",
                        "customization_category_id" => "4",
                        "elements" => ['body_single_410001.png',],
                        "image" => "suit_elements/suittype/2_button.png",
                        "left" => "body_single_41_r0001.png",
                        "right" => "body_single_41_l0001.png",
                        "buttons" => ["buttons_10001"],
                        "buttons2" => ["buttons_20001"],
                        "button_hole" => ["button_1_hole10001.png", "button_1_hole20001.png"],
                        "show_buttons" => "false",
                        "overlay" => ["single_overlay2.png", "single_overlay.png"],
                    )
                    , array(
                        "status" => "0",
                        "title" => "4 Buttons 1 Button Fasten",
                        "elements" => ["body_double_left_v40001.png", "body_double_right_v40001.png",],
                        "customization_category_id" => "4",
                        "image" => "suit_elements/suittype/41_button.png",
                        "left" => "body_double_41v2_l0001.png",
                        "right" => "body_double_41v2_r0001.png",
                        "button_hole" => ["button_4_hole_10001.png", "button_4_hole_20001.png"],
                        "buttons" => ["button_4_10001", "button_4_30001", "button_4_40001"],
                        "buttons2" => ["button_4_20001"],
                        "show_buttons" => "true",
                        "overlay" => ["body_double_overlay2.png", "body_double_overlay.png"],
                    )
                    , array(
                        "status" => "0",
                        "title" => "6 Buttons 2 Buttons Fasten",
                        "elements" => ["body_double_left_v40001.png", "body_double_right_v40001.png",],
                        "customization_category_id" => "4",
                        "left" => "body_double_41v2_l0001.png",
                        "right" => "body_double_41v2_r0001.png",
                        "button_hole" => ["button_4_hole_10001.png", "button_4_hole_20001.png"],
                        "buttons" => ["button_4_10001", "button_4_30001", "button_4_40001", "button_6_10001", "button_6_20001"],
                        "buttons2" => ["button_4_20001"],
                        "image" => "suit_elements/suittype/62_button.png",
                        "show_buttons" => "true",
                        "overlay" => ["body_double_overlay2.png", "body_double_overlay.png"],
                    )
                ],
                "Lapel Style" => [
                    array(
                        "status" => "1",
                        "title" => "Notch Lapel",
                        "elements" => ["body_round0001.png"],
                        "laple_style" => array(
                            "1 Button" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_notch_stitching1.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                            "2 Buttons" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_notch_stitching1.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                            "3 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_notch_modern0001.png"
                                ], "overelay" => []),
                            "4 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_notch_modern0001.png"
                                ], "overelay" => []),
                            "4 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                            "4 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                            "6 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_notch_upper0001.png",
                                    "laple_6_notch_modrn0001.png"
                                ], "overelay" => []),
                            "6 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_notch_v20001.png"
                                ],
                                "stitcing" => ['laple_double_notch_stitch.png'],
                                "hole" => ["laple_double_notch_button_hole0001.png"],
                                "overelay" => []),
                        ),
                        "customization_category_id" => "6",
                        "image" => "suit_elements/laple/notch.png"
                    ),
                    array(
                        "status" => "0",
                        "title" => "Peak Lapel",
                        "elements" => ["body_round0001.png"],
                        "laple_style" => array(
                            "1 Button" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => ["laple_peak_overlay.png"]),
                            "2 Buttons" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => ["laple_peak_overlay.png"]),
                            "3 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_peak_morden0001.png"
                                ], "overelay" => []),
                            "4 Buttons" => array("elements" => [
                                    "laple_single_3_notch_peak_upper0001.png",
                                    "laple_single_3_peak_morden0001.png"
                                ], "overelay" => []),
                            "4 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_double_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => []),
                            "4 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_double_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => []),
                            "6 Buttons 1 Button Fasten" => array("elements" => [
                                    "laple_peak_upper0001.png",
                                    "laple_6_peack_morden0001.png"
                                ], "overelay" => ["4_peak_m.png"]),
                            "6 Buttons 2 Buttons Fasten" => array("elements" => [
                                    "laple_notch_peak_upper_v40001.png",
                                    "laple_double_peak_v20001.png"
                                ],
                                "stitcing" => ['laple_double_peak_stitch.png'],
                                "hole" => ["laple_double_peak_button_hole0001.png"],
                                "overelay" => []),
                        ),
                        "customization_category_id" => "6",
                        "image" => "suit_elements/laple/peak.png"
                    ),
                ],
            ),
        );
        foreach ($customeele as $key => $value) {
            
        }
        $this->response($customeele);
    }

    function customeElementsPant_get() {
        $customeele = array(
            "keys" => [

                array(
                    "title" => "Number of Pleat",
                    "viewtype" => "pant",
                    "type" => "main",
                ),
                array(
                    "title" => "Front Pocket Style",
                    "viewtype" => "pant",
                    "type" => "main",
                ),
                array(
                    "title" => "Number of Back Pocket",
                    "viewtype" => "pantback",
                    "type" => "main",
                ),
                array(
                    "title" => "Waistband",
                    "viewtype" => "pant",
                    "type" => "main",
                ),
                array(
                    "title" => "Cuff",
                    "viewtype" => "pant",
                    "type" => "main",
                ),
            ],
            "collar_cuff_insert" => array(),
            "data" => array(
                "Number of Pleat" => [
                    array(
                        "status" => "1",
                        "title" => "No Pleat",
                        "customization_category_id" => "4",
                        "elements" => ["pant_pleat_no0001.png"],
                        "image" => "pant_elements/pleat/no_pleat.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "1 Pleat Standard",
                        "elements" => ["pant_pleat_110001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pleat/pleat_s1.png",
                        "show_buttons" => "true",
                    ),
                    array(
                        "status" => "0",
                        "title" => "2 Pleats Standard",
                        "elements" => ["pant_pleat_220001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pleat/pleat_s2.png",
                        "show_buttons" => "true",
                    )
                ],
                "Waistband" => [
                    array(
                        "status" => "0",
                        "title" => "No Belt Loop",
                        "customization_category_id" => "4",
                        "elements" => ["pant_waistband0001.png"],
                        "image" => "pant_elements/waistband/no_belt_loop.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "1",
                        "title" => "Belt Loop",
                        "elements" => ["pant_waistband0001.png", "pant_belt_loop0001.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/waistband/belt_loop.png",
                        "backbeltloop" => "true",
                        "show_buttons" => "true",
                    )
                ],
                "Front Pocket Style" => [
                    array(
                        "status" => "1",
                        "title" => "Slanting Pocket",
                        "customization_category_id" => "4",
                        "elements" => ["pant_pocket_slanted.png"],
                        "image" => "pant_elements/pocket/pocket_slanted.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Piped",
                        "elements" => ["pant_pocket_pipe.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pocket/pocket_piped.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Seam",
                        "elements" => ["pant_pocket_seam.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pocket/pocket_seam.png",
                        "show_buttons" => "true",
                    ),
                ],
                "Number of Back Pocket" => [
                    array(
                        "status" => "0",
                        "title" => "1 Pocket Right Side",
                        "customization_category_id" => "4",
                        "elements" => ["back_pocket_r0001.png", "back_pocket_l_button0001.png"],
                        "image" => "pant_elements/back_pocket/back_r_pocket.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "1 Pocket Left Side",
                        "elements" => ["back_pocket_l0001.png", "back_pocket_r_button0001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/back_pocket/back_l_pocket.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "1",
                        "title" => "2 Pockets",
                        "elements" => ["back_pocket_r0001.png", "back_pocket_l_button0001.png", "back_pocket_l0001.png", "back_pocket_r_button0001.png"],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/back_pocket/back_2_pocket.png",
                        "show_buttons" => "true",
                    ),
                ],
                "Cuff" => [
                    array(
                        "status" => "1",
                        "title" => "No Cuff",
                        "customization_category_id" => "4",
                        "elements" => [],
                        "image" => "pant_elements/pant_cuff/pant_no_cuff.png",
                        "show_buttons" => "true",
                    ), array(
                        "status" => "0",
                        "title" => "Cuff 1 1/3",
                        "elements" => ["pant_cuff.png",],
                        "customization_category_id" => "4",
                        "image" => "pant_elements/pant_cuff/pant_cuff.png",
                        "show_buttons" => "true",
                    ),
                ],
            ),
        );
        foreach ($customeele as $key => $value) {
            
        }
        $this->response($customeele);
    }

}

?>