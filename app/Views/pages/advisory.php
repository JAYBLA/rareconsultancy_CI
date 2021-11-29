<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>
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


<!--Start Services Single Area-->
<section id="service-single-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 order-box-2">
                <aside class="service-sidebar">
                    <!--Start Single Sidebar Box-->
                    <div class="single-sidebar-box wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1200ms">
                        <div class="service-menu-box">
                            <ul>
                                <li><a href="ser-strategic.html">BRELA Help Desk</a></li>
                                <li><a href="ser-online.html">Advisory</a></li>                                
                                <li class="active"><a href="ser-corporate.html">Trainings</a></li>
                            </ul>
                        </div>        
                    </div>
                    <!--End Single Sidebar Box--> 
                    <!--Start Single Sidebar Box-->
                    <div class="single-sidebar-box wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                        <div class="sidebar-contact-box text-center">
                            <span class="flaticon-telephone"></span>
                            <h4>Got any Questions?<br> Call Us Today</h4>
                            <h3><a href="tel:255768284698">+255 768 284698</a></h3>
                            <h5><a href="mailto:info@rareconsultancy.co.tz">info@rareconsultancy.co.tz</a></h5>    
                        </div>      
                    </div>
                    <!--End Single Sidebar Box-->          
                </aside>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12 order-box-1">
                <div class="single-service-content-box">
                    <div class="text-box">
                        <h2>Advisory</h2>                        
                        <p>One of our service is to perform advisory services, particularly in the areas of Risk Management Services, Accounting Support and Administrative Manual Development.</p>

                        <h4>Development of administrative manuals</h4>
                        <p>We review the existing administrative manuals to identify gaps and develop new administrative manuals including financial regulations, accounting manuals, HR manuals, constitution procurement manuals, store procedures and governance manuals.</p>

                        <h4>Risk management services</h4>
                        <ul class="alpha-list">
                            <li>Perform risk assessment,</li>
                            <li>Risk response to assessed risk,</li>
                            <li>Formulate risk register</li>
                            <li>Formulate risk management policy and framework</li>
                            <li>Guidance of setting the risk appetite of the organization</li>
                            <li>Guidance of risk management reporting.</li>
                        </ul>
                        <p>We help transform the world’s most important businesses into vigorous organizations opposition. We work with clients who not hide from the future but want define clients with high potential and high ambition.</p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!--End Services Single Area-->
<?= $this->endSection() ?>