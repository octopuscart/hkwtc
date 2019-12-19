<?php
$this->load->view('layout/header');
?>
<?php
$linklist = [];
foreach ($categorie_parent as $key => $value) {
    $cattitle = $value['category_name'];
    $catid = $value['id'];
    $liobj = "<li><a href='" . site_url("Product/ProductList/" . $catid) . "'>$cattitle</a></li>";
    array_push($linklist, $liobj);
}

$productlistdata = array("suits" => [
        "hk01.png",
        "hk02.png",
        "hk03.png",
        "hk04.png",
        "hk05.png",
        "hk06.png",
        "hk07.png",
        "hk08.png",
        "hk09.png",
        "hk10.png",
        "hk11.png",
        "hk12.png",
        "hk13.png",
        "hk14.png",
        "hk15.png",
        "hk16.png",
        "hk17.png",
        "hk18.png",
        "hk19.png",
        "hk20.png",
        "hk21.png",
        "hk22.png",
        "hk23.png",
        "hk24.png",
    ],
    "linings" => [
        "HK4401.jpg",
"HK4402.jpg",
"HK4403.jpg",
"HK4404.jpg",
"HK4405.jpg",
"HK4406.jpg",
"HK4407.jpg",
"HK4408.jpg",
"HK4409.jpg",
"HK4410.jpg",
"HK4411.jpg",
"HK4412.jpg",
"HK4413.jpg",
"HK4414.jpg",
"HK4415.jpg",
"HK4416.jpg",
"HK4417.jpg",
"HK4418.jpg",
"HK4419.jpg",
"HK4420.jpg",
"HK4421.jpg",
"HK4422.jpg",
"HK4423.jpg",
"HK4424.jpg",
"HK4425.jpg"
    ],
);
$productslistdata = $productlistdata[$producttype];


$image1 = "";
$image2 = "";
?>

<div style="opacity: 0;position: fixed;">
    {{gitem_price = <?php echo $item_price; ?>}}
    {{showmodel = 1}}
</div>


<style>
    .page_navigation a {
        padding: 5px 10px;
        border: 1px solid #000;
        margin: 5px;
        background: #000;
        color: white;
    }
    .page_navigation a.active_page {
        padding: 5px 10px;
        border: 1px solid #000;
        margin: 5px;
        background: #fff;
        color: black;
    }

    .colorblock{
        font-weight: 500;
        padding: 0px 10px;
        height: 8px;
        /* float: left; */
        width: 15px;
        position: absolute;
        /* float: left; */
        /* margin-top: -71px; */
        /* position: absolute; */
        margin: auto;
        /* border: 1px solid #0000005e; */
        /* border: 1px solid #0000005e; */
        text-shadow: 0px 1px 4px #000;
        /* margin-top: -71px; */
        margin-left: -7px;
    }

    hr {
        margin-top: 0rem; 
        margin-bottom:10px;; 
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }


    .product-box1 .product-img-holder {



        <?php
        switch ($custom_id) {
            case "1":
                ?>
                min-height: 260px;
                <?php
                break;
            case "2":
                ?>
                min-height: 390px;
                <?php
                break;
            case "5":
                ?>
                min-height: 390px;
                <?php
                break;
            case "3":
                ?>
                min-height: 262px;
                <?php
                break;
            case "4":
                ?>
                min-height: 390px;
                <?php
                break;
            default:
                ?>
                min-height: 260px;<?php
}
        ?>
    }



    .product-box1{



        <?php
        switch ($custom_id) {
            case "1":
                ?>
                min-height: 260px;
                <?php
                break;
            case "2":
                ?>
                min-height: 520px;
                <?php
                break;
            case "5":
                ?>
                min-height: 520px;
                <?php
                break;
            case "3":
                ?>
                min-height: 262px;
                <?php
                break;
            case "4":
                ?>
                min-height: 520px;
                <?php
                break;
            default:
                ?>
                min-height: 260px;<?php
}
        ?>
    }

</style>



<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5" style="padding: 0px;
         background: #E0E0E0;">
    <div class="position-center-center">
        <div class="container   ">
            <h2 class="heading_product" style="text-transform: capitalize"><?php
        echo $producttype;
        ?> </h2>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                <?php echo count($linklist) ? "<b class='barcomb-list'>/</b>" : ''; ?>
                <?php
                echo implode("<b class='barcomb-list'>/</b>", $linklist)
                ?>
            </ol>
        </div>
    </div>
</section>

<!-- Content -->
<div id="content" ng-controller="ProductController"> 

    <!-- Shop Content -->
    <div class="shop-content pad-t-b-60" >
        <div class="container">
            <div class="row"> 

                <!-- Shop Side Bar -->
                <div class="col-md-3">
                    <div class="side-bar">


                        <?php if (count($categories)) { ?>
                            <!-- HEADING -->
                            <div class="heading">
                                <h3 class="heading_product">Products Categories</h3>
                                <hr class="dotted">
                            </div>

                            <!-- CATEGORIES -->
                            <ul class="cate">

                                <?php
                                foreach ($categories as $key => $value) {
                                    $subcategories = $value['sub_category'];
                                    ?>  

                                    <li class="catelist">
                                        <a class="<?php echo $cattempid == $value['id'] ? 'active' : ''; ?>" href="<?php echo site_url("Product/ProductList/" . $custom_id . "/" . $value['id']); ?>">
                                            <i class="flaticon-left-arrow"></i>
                                            <?php echo $value['category_name']; ?>

                                            <?php
                                            if (count($subcategories)) {
                                                ?>
                                                <span>
                                                    <i class="flaticon-next"></i>
                                                </span>
                                                <?php
                                            }
                                            ?>
                                        </a>
                                        <?php
                                        if (count($subcategories)) {
                                            ?>
                                            <ul class="dropdown-menu">
                                                <?php
                                                foreach ($subcategories as $key1 => $value1) {
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo site_url("Product/ProductList/" . $value1['id']); ?>">
                                                            <?php echo $value1['category_name']; ?>
                                                        </a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                            <?php
                                        }
                                        ?>
                                    </li>
                                    <?php
                                }
                                ?>   
                            </ul>

                            <?php
                        }
                        ?>




                        <!-- HEADING -->

                        <div class="product_attr" ng-repeat="(attrk, attrv) in productResults.attributes" >
                            <div class="heading" ng-if='attrv.widget == "color"'>
                                <h3 class="heading_product">Color</h3>
                                <hr class="dotted">
                            </div>

                            <!-- COLORE -->
                            <ul class="cate" ng-if='attrv.widget == "color"'>
                                <li ng-repeat="atv in attrv" ng-if='atv.product_count' style="    display: block;">

                                    <label style="font-weight: 500;background: {{atv.additional_value}};padding: 0px 5px;float: left;
                                           margin-right: 5px;border: 1px solid #0000005e;border: 1px solid #0000005e;
                                           text-shadow: 0px 1px 4px #000;">
                                        <input type="checkbox"  ng-model="atv.checked" ng-click="attributeProductGet(atv)" style="opacity: 0;"> 

                                        <i class="fa fa-check" ng-if="atv.checked" style="    position: absolute;
                                           margin-top: -22px;
                                           color: #fff;"></i>
                                        <!--{{atv.attribute_value}} ({{atv.product_count}})-->
                                    </label>


                                    <!--<a href="#."><input type="checkbox">{{atv.attribute_value}} <span>(32) </span></a>-->
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Main Shop Itesm -->          
                <div class="col-md-9"> 



                    <!-- SHOWING INFO -->




                    <div class="" > 




                    </div>








                    <!--                     Pagination 
                                        <ul class="pagination">
                                            <li><a href="#.">1</a></li>
                                            <li><a href="#.">2</a></li>
                                            <li><a href="#.">....</a></li>
                                            <li><a href="#.">&gt;</a></li>
                                        </ul>-->
                    <div class="col-md-12" id="paging_container1">
                        <div class="showing-info">
                            <p class="text-center"><span class="info_text ">Showing {0}-{1} of {2} results</span></p>
                        </div>
                        <div class="row products-container content" >
                            <!-- Item -->
                            <?php
                            foreach ($productslistdata as $key => $value) {
                                ?>
                                <div class="product clearfix col-md-4">
                                    <div class="product-image">
                                        <a href="#"><img src="http://files.costcokart.com/hkwtc/<?php echo $value; ?>" alt="Slim Fit Chinos"></a>
                                        <a href="#"><img src="http://files.costcokart.com/hkwtc/<?php echo $value; ?>" alt="Slim Fit Chinos"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="#" class="item-quick-view" ><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="#">HK000<?php echo $key + 1; ?></a></h3></div>
                                        <div class="product-short-dest"><p>2 PLY 100% COTTON</p></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>

                        </div>

                        <center>
                            <div class="page_navigation"></div>
                        </center>
                        <div style="clear: both"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content --> 


<!-- Modal -->
<div class="modal  fade" id="productcustome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">
                    <?php
                    echo $custom_item;
                    ?>
                </h4>
            </div>



                <!-- Cart Details -->
                <div class="modal-body checkout-form">
                    <div class="custom_block_item">


                        <div class="row cart-details" >
                            <div class="col-sm-12 col-md-3" ng-repeat="product in globleCartDatanc.products" ng-if="product.item_id == '<?php echo $citem_id; ?>'">
                                <div class="thumbnail">
                                    <img src="{{product.file_name}}" alt="" style="width: auto;" alt="...">
                                    <div class="caption">
                                        <h5 style="font-size:15px;">{{product.title}}</h5>
                                        <p><span class="price">{{product.price|currency:" "}}</span> <a href="#." ng-click="removeCart(product.product_id)" class="pull-right"><i class="icon-close"></i></a> </p>
                                    </div>

                                </div>
                            </div>



                        </div>

                    </div>
                </div>
                <div class="modal-footer" ng-repeat="product in globleCartDatanc.products" ng-if="(product.item_id == '<?php echo $citem_id; ?>') && $index == 0">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Add More</button>
                    <a href="<?php echo $item_array['link']; ?>" class="btn btn-default pull-right">Customize Now <i class="fa fa-arrow-right"></i></a> 
                </div>

           




        </div>
    </div>
</div>



<script>
    var category_id = <?php echo $cattempid; ?>;
    var custom_id = <?php echo $custom_id; ?>;
    var searchdata = <?php echo isset($_GET["search"]) ? ($_GET["search"] != '' ? $_GET["search"] : '0') : "0"; ?>;</script>
<!--angular controllers-->


<?php
$this->load->view('layout/footer');
?>
<script src="<?php echo base_url(); ?>assets/theme/js/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/jquery.pajinate.min.js"></script>


<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>

<!--angular controllers-->


<script type="text/javascript">
    $(document).ready(function () {


//    $('#paging_container1').pajinate({
//    items_per_page: 12,
//            num_page_links_to_display: 5,
//    });

    });
</script>