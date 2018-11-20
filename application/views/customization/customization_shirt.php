<?php
$this->load->view('layout/header');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/8.7.1/lazyload.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Bungee|Orbitron|Six+Caps|Wallpoet" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.vertical-tabs.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style_custome.css">
<style>
    .product_image_back {
        background-size: contain!important;
        background-repeat: no-repeat!important;
        height: 300px!important;
        background-position-x: center!important;
        background-position-y: center!important;
    }

    .productblock{
        padding: 10px;
        border: 1px solid rgba(0, 0, 0, 0.07);
        margin-bottom: 30px;
        box-shadow: 0px 0px 5px #00000017;
    }

</style>
<!-- Slider -->


<div class="" ng-controller="customizationShirtMulti">
    <!-- Slider -->
<!--    <section class="sub-bnr" data-stellar-background-ratio="0.5" style="font-weight: 300;
             font-size: 20px;">
        <div class="position-center-center">
            <div class="container">
                <div  class="row">

                </div>
            </div>
        </div>
    </section>-->

    <!-- Content -->
    <div id="content"> 

        <!--======= PAGES INNER =========-->
        <section class="item-detail-page padding-top-30 ">
            <div class="container" style="width: 100%">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="row">
                            <div class='custom_block_slide'> 
                                <div class="item"   ng-repeat="fab in cartFabrics">
                                    <div class=" fabricblockmobile ">
                                        <a href="#fabric_{{fab.folder}}" class="fabricblock_a" aria-controls="collars_area" role="tab" data-toggle="tab" ng-click="selectFabric(fab)">
                                            <div class="elementStyle customization_box_elements fabricblock {{  fab.folder == screencustom.fabric?'active' :'noselected' }}" style="background:url('<?php echo custome_image_server; ?>/coman/output/{{fab.folder}}/cutting20001.png');" > </div>
                                            <p class="fabric_title">{{fab.sku}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--======= IMAGES SLIDER =========-->


                    <div class="col-sm-5 large-detail shirtcontainer multicustom " >
                        <div class="col-sm-3 col-xs-12 fabricblockdesktop customization_items " style="padding: 0">
                            <ul class="nav nav-tabs tabs-left">
                                <li role="presentation" class="{{$index === 0?'active':''}} " ng-repeat="fab in cartFabrics" >
                                    <a href="#fabric_{{fab.folder}}" class="fabricblock_a" aria-controls="collars_area" role="tab" data-toggle="tab" ng-click="selectFabric(fab)">
                                        <div class="elementStyle customization_box_elements fabricblock {{  fab.product_id == screencustom.fabric?'active' :'noselected' }}" style="background:url('<?php echo custome_image_server; ?>/coman/output/{{fab.folder}}/cutting20001.png');" > </div>
                                        <p class="fabric_title">{{fab.sku}}</p>
                                    </a>

                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-9 col-xs-12"  style="padding: 0">
                            <div class="tab-content">
                                <div class="tab-pane {{$index === 0?'active':''}}" ng-repeat="fab in cartFabrics" id="fabric_{{fab.folder}}">
                                    <button class="btn btn-default btn-lg custom_rotate_button" ng-click="rotateModel()">
                                        <i class="icon ion-refresh"></i>
                                    </button>
                                    <div class="fontview_custom customization_block animated zoom" ng-if="screencustom.view_type == 'front'">
                                        <div ng-if="selecteElements[screencustom.fabric]['Monogram Initial']">
                                            <div class="monogramtext_posistion
                                                 {{selecteElements[fab.product_id]['Cuff & Sleeve'].monogram_change_css?selecteElements[fab.product_id]['Cuff & Sleeve'].monogram_change_css :selecteElements[fab.product_id]['Monogram'].css_class}} 
                                                 {{selecteElements[fab.product_id]['Pocket'].monogram_change_css?selecteElements[fab.product_id]['Pocket'].monogram_change_css :selecteElements[fab.product_id]['Monogram'].css_class}} 
                                                 monogramcss_main"
                                                 style="
                                                 background: {{selecteElements[fab.product_id]['Monogram Background']}};
                                                 color: {{selecteElements[fab.product_id]['Monogram Color']}};

                                                 {{selecteElements[fab.product_id]['Monogram'].title=='Collar'?selecteElements[fab.product_id]['Collar'].monogram_style:''}} ;
                                                 margin-left: {{(-1) * (2 * (selecteElements[screencustom.fabric]['Monogram Initial'].length - 3))}}px;z-index:2000;
                                                 {{selecteElements[screencustom.fabric]['Monogram Font'].font_style}};
                                                 " 
                                                 ng-if="selecteElements[fab.product_id]['Monogram'].title != 'No'">
                                                {{selecteElements[screencustom.fabric]['Monogram Initial']}}
                                            </div>
                                        </div>
                                        <!--cuff section-->
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Cuff & Sleeve'].sleeve1">
                                        <img src="<?php echo custome_image_server; ?>/shirt/overlay/sleeveoverlay.png" class="fixpos animated" ng-if="selecteElements[fab.product_id]['Cuff & Sleeve'].sleeve1[0] == 'shirt_sleeve0001.png'">




                                        <!--buttom-->
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Bottom'].elements">

                                        <!--cuff-->
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated"  ng-repeat="img in selecteElements[fab.product_id]['Cuff & Sleeve'].elements" >
                                        <img src="<?php echo custome_image_server; ?>/shirt/overlay/{{selecteElements[fab.product_id]['Cuff & Sleeve'].buttons}}" class="fixpos animated" ng-if="selecteElements[fab.product_id]['Cuff & Sleeve'].buttons"  >

                                        <!--collar-->
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Collar'].elements">
                                        <img src="<?php echo custome_image_server; ?>/shirt/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Collar'].overlay">


                                        <!--front fly-->
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Front'].elements">


                                        <!--pocket-->
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Pocket'].elements">

                                        <!--front button-->
                                        <!--<img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/front_button.png" class="fixpos animated" ng-if="selecteElements[fab.product_id]['Front'].show_buttons == 'true'">-->

                                        <img src="<?php echo custome_image_server; ?>/shirt/overlay/button_front0001.png" class="fixpos animated" ng-if="selecteElements[fab.product_id]['Front'].show_buttons == 'true'">



                                    </div>   
                                    <div class="backview_custom customization_block  animated " ng-if="screencustom.view_type == 'back'" >
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/b_collar0001.png" class="fixpos animated" >
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" ng-repeat="img in selecteElements[fab.product_id]['Cuff & Sleeve'].sleeve" class="fixpos animated" >
                                        <img src="<?php echo custome_image_server; ?>/shirt/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Back'].elements" >
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--======= ITEM DETAILS =========-->
                    <div class="col-sm-7 col-xs-12">
                        <!--shirt customization-->
                        <div class="row" style="margin-top: -10px;padding: 5px;">
                            <?php
                            $this->load->view('Product/custome_support');
                            ?>
                        </div>
                    </div>
                </div>

                <div class="row customization_order_block">

                    <?php
                    $this->load->view('Product/custom_bottom');
                    ?>

                </div>

            </div>
        </section>


    </div>
    <!-- End Content --> 

</div>

<scirpt></scirpt>

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/ng-shirtcustomization.js"></script>


<?php
$this->load->view('layout/footer');
?>