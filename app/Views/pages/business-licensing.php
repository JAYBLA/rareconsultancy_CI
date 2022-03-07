<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area style2" style="background-image: url(assets/images/slides/slide-image.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h1>Business Registration and Licensing</h1>
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
                        <h2>WE HELP ON;</h2> 
                        <ul class="alpha-list">
                            <li>Registration of new business name <b>(BRELA)</b></li>
                            <li>Change of particulars of business name/Kubadili taarifa za jina la biashara</li>
                            <li>Cessation of business name</li>
                            <li>Payment of annual maintenance fee</li>
                            <li>Obtaining Taxpayer Identification Number (TIN) Certificate</li> 
                            <li>Obtaining Business License/Leseni ya biashara</li>
                            <li>Obtaining Value Added Tax (VAT) Certificate</li>                          
                        </ul>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!--End Services Single Area-->
<?= $this->endSection() ?>
