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
                    <div class="single-sidebar-box wow fadeInUp animated" data-wow-delay="0.3s"
                        data-wow-duration="1200ms">
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
                        <h2>Trainings</h2>
                        <h4>Technical trainings</h4>
                        <ul class="alpha-list">
                            <li>Advanced excel trainings for accountants and other users</li>
                            <li>Fixed asset management</li>
                        </ul>
                        <h4>Taxation Trainings</h4>
                        <ul class="alpha-list">
                            <li>Proactive approach to mitigating tax risks at the transaction level and the financial
                                reporting level</li>
                            <li>Filling the statement of estimated tax payable and filling the annual returns of income
                            </li>
                            <li>Preparing financial statements which minimizes the risks of significant TRA account
                            </li>examination findings including the best way to respond to TRA account examination
                            findings</li>
                            <li>Tax accounting</li>
                            <li>Filling withholding tax returns for employees, directors and for the suppliers of goods
                                and services</li>
                            <li>VAT accounting</li>
                            <li>A detailed understanding on allowances provided by the income tax act</li>
                        </ul>
                        <h4>Governance Trainings</h4>
                        <ul class="alpha-list">
                            <li><b>Introduction to Corporate governance</b>
                                <ul>
                                    <li>Corporate governance</li>
                                    <li>The business case for corporate governance</li>
                                    <li>Disclosure and transparency</li>
                                    <li>The role of shareholders and stakeholders</li>
                                </ul>
                            </li>
                            <li><b>Corporate governance: The board</b>
                                <ul>
                                    <li>The board role, director’s duties and liabilities</li>
                                    <li>The effective board: composition and structure</li>
                                    <li>Board practices and board procedures</li>                                    
                                </ul>
                            </li>
                            <li><b>Corporate governance: Strategic leadership</b>
                                <ul>
                                    <li>The governance strategy</li>
                                    <li>Evaluating strategy delivery and executive director’s performance</li>
                                    <li>The governance of risk and Corporate responsibility</li>                                    
                                </ul>
                            </li>
                            <li><b>Corporate governance: Financial Stewardship and accountability</b>
                                <ul>
                                    <li>Financial oversight</li>
                                    <li>Reporting</li>
                                    <li>Corporate finance and the control environment</li>                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Services Single Area-->
<?= $this->endSection() ?>