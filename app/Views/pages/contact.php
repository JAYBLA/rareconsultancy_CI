<!--Start breadcrumb area-->     
<section class="breadcrumb-area style2" style="background-image: url(assets/images/slides/slide-image.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h1><?= $title ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Contact Form Section-->
<section class="contact-form-area">
    <div class="container shadow-sm p-3">
        <div class="sec-title-style3 text-center wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
            <p>Don’t be hesitate. You Just Contact Us</p>
            <div class="big-title"><h2>Now You Know<br> Contact Us</h2></div>
            <div class="border-box center">
                <div class="borders-left thm-bgc2"></div>
                <div class="borders-right thm-bgc2"></div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-xl-12 ">  
                <div class="contact-form-content">
                    <div class="contact-form">
                        <div class="inner-box">
                        <?php $validation = \Config\Services::validation(); ?>
                            <form id="contact-form" name="contact_form" class="default-form2" action="<?php echo base_url('/contact') ?>" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-box"> 
                                            <input type="text" name="name"  placeholder="Name">

                                            <!-- Error -->
                                            <?php if($validation->getError('name')) {?>
                                                <div class='alert alert-danger mt-2'>
                                                    <?= $error = $validation->getError('name'); ?>
                                                </div>
                                            <?php }?>
                                        </div>      
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-box"> 
                                            <input type="email" name="email" placeholder="Email">
                                                <!-- Error -->
                                            <?php if($validation->getError('email')) {?>
                                                <div class='alert alert-danger mt-2'>
                                                    <?= $error = $validation->getError('email'); ?>
                                                </div>
                                            <?php }?>
                                        </div>      
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-box"> 
                                            <input type="text" name="phone" placeholder="Phone">
                                                <!-- Error -->
                                            <?php if($validation->getError('phone')) {?>
                                                <div class='alert alert-danger mt-2'>
                                                    <?= $error = $validation->getError('phone'); ?>
                                                </div>
                                            <?php }?>
                                        </div>      
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">    
                                            <textarea name="message" placeholder="Message"></textarea>
                                                <!-- Error -->
                                            <?php if($validation->getError('message')) {?>
                                                <div class='alert alert-danger mt-2'>
                                                    <?= $error = $validation->getError('message'); ?>
                                                </div>
                                            <?php }?>
                                        </div>      
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="button-box text-center">                                            
                                            <button class="btn-four thm-bgc3" type="submit"><span class="txt">Contact Us</span></button>    
                                        </div>  
                                    </div>
                                </div>                        
                            </form>
                        </div>
                    </div>
 
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Form Section-->