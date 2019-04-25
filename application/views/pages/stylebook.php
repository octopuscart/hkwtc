<?php
$this->load->view('layout/header');

function truncate($str, $len) {
    $tail = max(0, $len - 10);
    $trunk = substr($str, 0, $tail);
    $trunk .= strrev(preg_replace('~^..+?[\s,:]\b|^...~', '...', strrev(substr($str, $tail, $len - $tail))));
    return $trunk;
}
?>

<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
        <div class="container">
            <h4>Our Blog</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                <li><a href="<?php echo site_url("stylingTips"); ?>">Our Blog</a></li>

            </ol>
        </div>
    </div>
</section>
<!-- Content -->
<div id="content"> 

    <!-- Blog -->
    <section class="new-main blog-posts pad-t-b-60">
        <div class="container pricing"> 

            <!-- News Post -->
            <div class="news-post" id="container">
                <div class="row"> 
                    <?php
                    foreach ($stylebook as $key => $value) {
                        ?>
                        <!-- POST -->
                        <div class="col-md-4 item-mas " >
                         
                                    <article style="padding: 10px;"> <img class="img-responsive" src="<?php echo base_url(); ?>assets/styletips/<?php echo $value['image']; ?>" alt="" > 
                                        <!--<span>By Admin</span> <span>10 Nov, 2018</span>--> 
                                        <a href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="news-tittle padding-top-30" style="    padding-bottom: 0px;
    margin-bottom: 0px;">
                                            <?php echo truncate($value['title'], 100); ?>
                                        </a>
                                        <p style="line-height: 24px;
    margin: 10px 0px;;">
                                            <?php echo truncate($value['description'], 200); ?>                                    </p>
                                        <a class="" href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="red-more"><b>Read More</b></a> 
                                    </article>
                                
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>







<div class="section_offset">
    <div class="container">
        <section class="blog_isotope_container three_columns m_bottom_35 m_xs_bottom_15" data-isotope-options='{"itemSelector" : ".blog_isotope_item","layoutMode" : "masonry","transitionDuration":"0.7s","masonry" : {"columnWidth":".blog_isotope_item"}}'>


            <?php
            foreach ($stylebook as $key => $value) {
                ?>
                <div class="blog_isotope_item">
                    <!--post-->
                    <article class="r_corners border_grey">
                        <!--post content-->
                        <figure>
                            <a href="#" class="d_block wrapper r_corners m_bottom_20">
                                <img src="<?php echo base_url(); ?>assets/images/styletips/<?php echo $value['image']; ?>" alt="">
                            </a>
                            <figcaption>
                                <h4 class="fw_light m_bottom_5 fs_middle"><a href="" class="color_dark tr_all">
                                        <?php echo truncate($value['title'], 100); ?>
                                    </a></h4>

                                <p class="fw_light m_bottom_12">
                                    <?php echo truncate($value['description'], 200); ?>                                </p>
                                <a href="<?php echo site_url("styleTips/" . $value['id'] . "/" . $value['title']) ?>" class="color_purple d_inline_b color_pink_hover d_block m_right_20 fw_light">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-angle-right"></i>
                                    </span>
                                    Read More
                                </a>
                            </figcaption>
                        </figure>
                    </article>
                </div>

                <?php
            }
            ?>
        </section>
    </div>
</div>




<script src="<?php echo base_url(); ?>assets/theme/plugins/isotope.pkgd.min.js"></script>



<?php
$this->load->view('layout/footer');
?>