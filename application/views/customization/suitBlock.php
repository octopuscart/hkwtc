
<div class="fontview_custom customization_block animated zoom "  ng-if="screencustom.view_type == 'front'" >
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/shirt2.png" class="fixpos animated" >
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/sleeve_new120001.png" class="fixpos animated" style="">
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/sleeve_new_olverlay.png" class="fixpos animated" >
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/pant_suit_model0001.png" class="fixpos animated " >

    <!--breast pocket-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Breast Pocket'].elements">


    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Sleeve Buttons'].buttonhole" >
    <div class="" ng-if="selecteElements[fab.product_id]['Contrast First Button Hole'].title != 'Matching'">
        <img src="<?php echo custome_image_server; ?>/jacket/button_hole/{{selecteElements[fab.product_id]['Contrast First Button Hole'].color}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Sleeve Buttons'].first_button" >
    </div>

    <!--button sleeve-->
    <img src="<?php echo custome_image_server; ?>/jacket/buttons/buttonlipsell/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Sleeve Buttons'].elements" >
    


    <!--jacket body left-->

                                        <!--<img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].elements" >-->

    <!--buttons-->
    <!--<img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}.png" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].buttons2" >-->
    <!--jacket body left-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in [selecteElements[fab.product_id]['Jacket Style'].left]" >

    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/dart0001.png" class="fixpos animated" >


    <!--buttons-->
    <img src="<?php echo custome_image_server; ?>/jacket/buttons/buttonlipsell/{{img}}.png" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].buttons2" >

    <!--jacket body right-->
    <!--<img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].overlay" >-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}//{{img}}" class="fixpos animated" ng-repeat="img in [selecteElements[fab.product_id]['Jacket Style'].right]" >

    <!--breast pocket-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Breast Pocket'].elements" >
    <!--<img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/breast_pocket0001.png" class="fixpos animated" >-->


    <!--button holes-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].button_hole" >




    <!--lower pocket-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lower Pocket'].overlay">
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lower Pocket'].elements">
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Ticket Pocket'].overlay">
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Ticket Pocket'].elements">


    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].overelay">
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].backoverelay">

    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].elements">


    <div class="" ng-if="selecteElements[fab.product_id]['Handstitching'].title == 'Yes'">
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].stitcing">
    </div>

    <div class="" ng-if="selecteElements[fab.product_id]['Lapel Button Hole'].title == 'Yes'">
        <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].hole" >
    </div>
    <div class="" ng-if="selecteElements[fab.product_id]['Lapel Button Hole Color'].title != 'Matching'">
        <img src="<?php echo custome_image_server; ?>/jacket/button_hole/{{selecteElements[fab.product_id]['Lapel Button Hole Color'].color}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Lapel Style'].laple_style[selecteElements[fab.product_id]['Jacket Style'].title].hole" >
    </div>





    <!--buttons-->
    <img src="<?php echo custome_image_server; ?>/jacket/buttons/buttonlipsell/{{img}}.png" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].buttons" >
    
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Jacket Style'].overlay" >



</div>   


<div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'back'">




    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Back Vent'].elements">
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Back Vent'].overlay">
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/overlayback1.png" class="fixpos animated" >


</div> 


<div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'pant'">
    <!--<img src="<?php echo base_url(); ?>assets/images/pant_elements/base.png" class="fixpos animated">-->
    <!--font-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Number of Pleat'].elements">
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Front Pocket Style'].elements">  
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/zipper.png" class="fixpos animated" >
<img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Waistband'].elements">
    <!--<img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Waistband Adjustment'].elements">-->
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay//{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Cuff'].elements">

</div> 


<div class="backview_custom customization_block zoom animated " ng-if="screencustom.view_type == 'pantback'">
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/pant_back_pocket0001.png" class="fixpos animated">
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/pant_back_waistband0001.png" class="fixpos animated">
    <img src="<?php echo custome_image_server; ?>/jacket/output/{{screencustom.productobj.folder}}/{{img}}" class="fixpos animated" ng-repeat="img in selecteElements[fab.product_id]['Number of Back Pocket'].elements">
    <img src="<?php echo custome_image_server; ?>/jacket/output/overlay/pant_back_pocketoverlay.png" class="fixpos animated">
</div> 
