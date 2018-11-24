<?php
$this->load->view('Product/custom_select_left');
?>

<div class="col-md-8 col-xs-10">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane {{$index == 0?'active':''}}" ng-repeat="k in keys" id="custome{{$index}}" ng-if="k.type == 'main'">
            <div class="row elementTabList">
                <div ng-switch="k.title">





                    <!--monogram area-->

                    <div ng-switch-when="Buttons" class="customization_items ">
                        <h5 class="customization_heading">{{k.title}}</h5>
                        <div class="col-md-3 col-xs-6 custome_element_col" ng-repeat="ele in data_list[k.title]" >
                            <div class="item elementItem {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'' :'noselected' }} "  ng-click='selectElement(k, ele)'>
                                <div >
                                    <div class="elementStyle customization_box_element {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'activestyle' :'noselected' }}" style="background:url('<?php echo base_url(); ?>assets/images/{{ele.image}}')" > </div>
                                    <div class='customization_title'>
                                        {{ele.title}} 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-switch-when="Button Thread Color" class="customization_items ">

                        <h5 class="customization_heading">{{k.title}}</h5>
                        <div class="col-md-2 col-xs-6 custome_element_col" ng-repeat="ele in data_list[k.title]" >
                            <div class="item elementItem {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'' :'noselected' }} "  ng-click='selectElement(k, ele)'>
                                <div >
                                    <div class="elementStyle customization_box_element {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'activestyle' :'noselected' }}" style="background:url('<?php echo base_url(); ?>assets/images/{{ele.image}}')" > </div>
                                    <div class='customization_title'>
                                        {{ele.title}} 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div ng-switch-when="Button Hole Color Position" class="customization_items ">
                        <div class="col-md-12 row">
                            <h5 class="customization_heading">Button Hole Color Position {{selecteElements[fab.product_id]['Button Hole Color Position'].ptype}}</h5>
                            <div class="col-md-3 col-xs-6 custome_element_col" ng-repeat="ele in data_list[k.title]" >
                                <div class="item elementItem {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'' :'noselected' }} "  ng-click='selectElement(k, ele)'>
                                    <div >
                                        <div class="elementStyle customization_box_element {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'activestyle' :'noselected' }}" style="background:url('<?php echo base_url(); ?>assets/images/{{ele.image}}')" > </div>
                                        <div class='customization_title'>
                                            {{ele.title}} 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div ng-switch-when="Button Hole Color" class="customization_items ">
                        
                        <div class="col-md-12 row">
                            <h5 class="customization_heading">{{k.title}}</h5>
                            <div class="col-md-2 col-xs-6 custome_element_col" ng-repeat="ele in data_list[k.title]" >
                                <div class="item elementItem {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'' :'noselected' }} "  ng-click='selectElement(k, ele)'>
                                    <div >
                                        <div class="elementStyle customization_box_element {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'activestyle' :'noselected' }}" style="background:url('<?php echo base_url(); ?>assets/images/{{ele.image}}')" > </div>
                                        <div class='customization_title'>
                                            {{ele.title}} 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div ng-switch-when="Monogram">
                        <h5 class="customization_heading">{{k.title}}</h5>
                        <div class="col-md-12 customization_items customization_items_elements">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 custome_element_col" ng-repeat="ele in data_list[k.title]"  ng-if="ele.not_show_when.indexOf(selecteElements[screencustom.fabric][ele.checkwith].title) == (-1)">
                                    <div class="item elementItem {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'' :'noselected' }} "  ng-click='selectElement(k, ele);'>
                                        <div >
                                            <div class="elementStyle customization_box_element {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'activestyle' :'noselected' }}" style="background:url('<?php echo base_url(); ?>assets/images/{{ele.image}}')" > </div>
                                            <div class='customization_title' style="    height: 22px;">
                                                {{ele.title}} 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear:both "></div>

                                <div class="row" style="margin: 0;opacity: {{selecteElements[screencustom.fabric]['summary'][k.title]=='No'?0.2:1 }};" >
                                    <div class="col-md-12 monogram_init">
                                        <h6>Monogram Initial</h6>
                                        <input type="text" maxlength="5"  ng-model="selecteElements[screencustom.fabric]['Monogram Initial']" >
                                    </div>

                                    <div class="col-md-12 monogram_init">
                                        <h6>Monogram Colors</h6>
                                        <div class="row" style="margin: 0">
                                            <div class="col-md-2 col-xs-4 " style="padding-left: 0px;" ng-repeat="mgc in monogram_colors" ng-click="monogramColor(mgc)" >
                                                <div class="monogram_color_style" style="background: {{mgc.backcolor}};">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 monogram_init">
                                        <h6>Monogram Style</h6>
                                        <div class="row" style="margin: 0">


                                            <div class="col-md-3 col-xs-6 custome_element_col" ng-repeat="mgf in monogram_style" ng-click="monogramFont(mgf)" >
                                                <div class="item elementItem "  >
                                                    <div >
                                                        <div class="elementStyle customization_box_element {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'activestyle' :'noselected' }}" style="background:url('<?php echo base_url(); ?>assets/images/customization/monogram/{{mgf.image}}')" > </div>
                                                        <div class='customization_title'>
                                                            {{mgf.title}} 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div style="clear:both "></div>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div ng-switch-default>
                        <h5 class="customization_heading">{{k.title}}</h5>
                        <div class="col-md-4 col-xs-6 custome_element_col" ng-repeat="ele in data_list[k.title]" >
                            <div class="item elementItem {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'' :'noselected' }} "  ng-click='selectElement(k, ele)'>
                                <div >
                                    <div class="elementStyle customization_box_element {{  ele.title == selecteElements[screencustom.fabric][k.title].title?'activestyle' :'noselected' }}" style="background:url('<?php echo base_url(); ?>assets/images/{{ele.image}}')" > </div>
                                    <div class='customization_title'>
                                        {{ele.title}} 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>


