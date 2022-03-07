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
                        <h2>Tax</h2>                        
                        <p>We see the active management of tax issues as a core business discipline. We help you manage the tax charge and try to benchmark your tax charge and compliance processes against those of similar businesses.  We provide Tax Advisory Services and Tax Dispute Resolution.</p>
                        <h4>Tax advisory</h4>
                        <ul class="alpha-list">
                            <li>Transfer pricing policy</li>
                            <li>Computation of Corporate income tax and final returns of income</li>
                            <li>Tax estimation and tax planning</li>
                            <li>Advise on tax incentive regimes</li>
                            <li>Tax audits and tax health check</li>
                            <li>Tax advice and advisory</li>
                        </ul>
                        <h4>Tax dispute resolution</h4>
                        <p>We help our client in responding to findings raised by TRA examinations audit. We also assist our client during the presentation, negotiation, and final settlement of the examination/audit findings.</p>                       
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!--End Services Single Area-->
<?= $this->endSection() ?>