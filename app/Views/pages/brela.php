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
                                <li class="active"><a href="<?= base_url('/brela') ?>">BRELA Help Desk</a></li>
                                <li><a href="<?= base_url('/advisory') ?>">Advisory</a></li>                                
                                <li ><a href="<?= base_url('/trainings') ?>">Trainings</a></li>
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
                        <h2>WE HELP ON BRELA SERVICES</h2>                        
                        <h4>BUSINESS NAMES</h4>
                        <ul class="alpha-list">
                            <li>Registration of new business name</li>
                            <li>Change of particulars of business name</li>
                            <li>Cessation of business name</li>
                            <li>Payment of annual maintenance fee</li>
                            <li>Data update of an existing business name</li>                            
                        </ul>
                        <h4>COMPANY NAMES</h4>
                        <ul class="alpha-list">
                            <li>Company name reservation</li>
                            <li>Registration of a new company</li>
                            <li>Change of particulars of company</li>
                            <li>Filing of documents about company</li>
                            <li>Filing of annual return (accounts) or Update</li>
                        </ul>
                        <h4>INDUSTRIAL LICENCE</h4>
                        <ul class="alpha-list">
                            <li>Issuance of new certificate or license</li>
                            <li>Change of particulars of certificate or license</li>
                            <li>Cancellation of certificate or license</li>
                            <li>Filing of annual progress report</li>                           
                        </ul>
                        <h4>TRADE AND SERVICE MARKS</h4>
                        <ul class="alpha-list">
                            <li>New application for registration of trade or service mark</li>
                            <li>Filing of other documents about trade or service mark</li>
                        </ul>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!--End Services Single Area-->
<?= $this->endSection() ?>
