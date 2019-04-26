<?php
$this->load->view('layout/header');
?>

<!-- Slider -->
<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
        <div class="container">
            <h4>Book An Appointment</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url("/"); ?>">Home</a></li>
                <li><a href="<?php echo site_url("Shop/appointment"); ?>">Appointment</a></li>

            </ol>
        </div>
    </div>
</section>




<!-- Left Background -->
<div class="main-page-section half_left_layout" ng-controller="bookingController">
    <div class="main-half-layout half_left_layout studio-bg"></div>

    <!-- Right Content -->
    <div class="main-half-layout-container half_left_layout pricing">
        <div class="about-us-con">
            <div class="skills padding-top-30"> 

                <article style="padding: 10px;">
                    <!-- Main Heading -->
                    <div class="heading-block left-align margin-bottom-30">
                        <h3 class="text-transform-none text-center letter-space-0" style="display: block">Book An Appointment</h3>
                    </div>

                    <div class="contact">               
                        <!-- Success Msg -->
                        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>              
                        <!-- FORM -->
                        <form role="form" id="contact_form" action="#" class="contact-form" method="post" >
                            <ul class="row nolist-style">
                                <li class="col-sm-5">
                                    <label>
                                        <input type="text" class="form-control" name="last_name" id="name" placeholder="Last Name" required="">
                                    </label>
                                </li>
                                <li class="col-sm-6 pull-right">
                                    <label>
                                        <input type="text" class="form-control" name="first_name" id="name" placeholder="First Name" required="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="contact" id="company" placeholder="Contact No.">
                                    </label>
                                </li>
                                
                                <li class="col-sm-5">
                                    <label>
                                        <input type="date" ng-model="selection.date" class="form-control" name="select_date" id="name" placeholder="Date" required="" min="<?php echo date('Y-m-d');?>" value="{{selection.date}}" ng-change="changeTimeSlot()">
                                    </label>
                                </li>
                                <li class="col-sm-6 pull-right">
                                    <label>
                                        <input type="time" class="form-control" name="select_time" id="name" placeholder="Time" required="" >
                                    </label>
                                </li>

                               


                                <li class="col-sm-12">
                                    <label>
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required=""></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12 text-left">
                                    <button type="submit"  class="btn btn-inverse" name="sendmessage" value="sendmessage" >SUBMIT</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<div style="clear: both"></div>


<script>

    App.controller('bookingController', function ($scope, $http, $timeout, $interval) {
       $scope.selection = {'date':'<?php echo date('Y-m-d');?>', 'time':''};
       $scope.timeSlot = {6:['']}
       $scope.changeTimeSlot = function(){
           var day = new Date($scope.selection.date);
           console.log(day.getDay());
       }
       
    })

</script>

<?php
$this->load->view('layout/footer');
?>