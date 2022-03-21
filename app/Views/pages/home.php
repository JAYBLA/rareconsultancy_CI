<?= $this->extend('templates/base') ?>
<?= $this->section('content') ?>
<!-- Start Main Slider -->
<section class="main-slider style2">
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide -->
            <div class="slide">
                <div class="image-layer image-layer1"></div>
                <div class="auto-container">
                    <div class="content">
                        <h3>We Are Here to</h3>
                        <h2>Give Future<br> to your Business</h2>
                        <div class="text">
                            <p>We are a Tanzania consulting services company assisting <br> international and local
                                companies with all aspects of incorporation, licensing, <br> immigration and company
                                secretarial services.</p>
                        </div>
                        <div class="btns-box">
                            <a class="btn-four-slide" href="<?= base_url('/contact') ?>"><span class="txt">Get Started
                                    Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Main Slider -->

<!--Start Slogan Style2 Area-->
<section class="slogan-style2-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slogan-style2-content">
                    <div class="title">
                        <h2>Let Our Experience Take Care of Your Business!</h2>
                        <p>Our mission is to provide quality guidance, Energy relationships of trust, and develop
                            innovative solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Slogan Style2 Area-->

<!--Start Services Style5 Area-->
<section class="services-style5-area" id="rareservices">
    <div class="pattern-bg pattern-bg-7"></div>
    <div class="container">
        <div class="sec-title-style4 clr-white text-center">
            <p>OUR SERVICES</p>
            <div class="big-title">
                <h2>We Provide The Best Services</h2>
            </div>
            <div class="border-box center">
                <div class="borders-left thm-bgc3"></div>
                <div class="borders-right thm-bgc3"></div>
            </div>
        </div>
        <div class="row why-us">
            <a href="<?= base_url() ?>/company-incorporation">
                <div class="col-lg-4">
                    <div class="card box h-100">
                        <span>01</span>
                        <h4>Company Incorporation</h4>
                        <p>We provide assistance in the setting up of businesses within Tanzania from drafting of all
                            relevant documents stage to the point clients can start their business.
                        </p>

                    </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="<?= base_url() ?>/business-licensing">
                <div class="card box h-100">
                    <span>02</span>
                    <h4>Business Licensing</h4>
                    <p>We assist on all licensing including Business Licence and specialised licensing, Taxpayer
                        Identification Number and Value Added Tax Certificate
                    </p>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="<?= base_url() ?>/file-rectification">
                <div class="card box h-100">
                    <span>03</span>
                    <h4>File Rectification </h4>
                    <p>In accordance with the law in Tanzania, companies are required to make all necessary filings
                        with the Business Registration and Licensing Agency (BRELA).
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-4 why-us">
        <div class="col-lg-4">
            <a href="<?= base_url() ?>/advisory">
                <div class="card box h-100">
                    <span>04</span>
                    <h4>Advisory</h4>
                    <p>One of our service is to perform advisory services, particularly in the areas of Risk
                        Management Services, Accounting Support and Administrative Manual Development.</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4">
            <a href="<?= base_url() ?>/trainings">
                <div class="card box h-100">
                    <span>05</span>
                    <h4>Trainings</h4>
                    <p>We offer various trainings including Governance Trainings, Risk Management Trainings,Taxation
                        Trainings and Other Technical Trainings.</p>
                </div>
            </a>
        </div>

        <div class="col-lg-4">
            <a href="<?= base_url() ?>/tax">
                <div class="card box h-100">
                    <span>06</span>
                    <h4>Tax</h4>
                    <p>We see the active management of tax issues as a core business discipline. We help you manage the
                        tax charge and try to benchmark your tax charge and compliance processes against those of
                        similar businesses. We provide Tax Advisory Services, Tax Dispute Resolution and Registration of
                        companies and Partnership firms</p>
                </div>
            </a>
        </div>
    </div>
    </div>
</section>
<!--End Services Style5 Area-->
<!-- Start Blog Section -->
<section id="blog" class="rareblog blog-area bg-gray py-5 mt-3 mb-3">
    <div class="container">
        <div class="sec-title-style4 text-center">
            <p>Our Latest Blog</p>
            <div class="big-title">
                <h2>Our Latest Articles</h2>
            </div>
            <div class="border-box center">
                <div class="borders-left thm-bgc3"></div>
                <div class="borders-right thm-bgc3"></div>
            </div>
        </div>
        <div class="row pb-5">
                <?php if (! empty($posts) && is_array($posts)): ?>
                <?php foreach($posts as $posts_item): ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="post-img">
                        <a href="<?= base_url() ?>/articles/<?= $posts_item['slug'] ?>">
                            <img src="<?=base_url()?>/uploads/<?= $posts_item['file_name'] ?>" alt="" />
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                            <ul class="blog-list">
                                <li>
                                    <h6><?= date('Y-m-d', strtotime($posts_item['created_at'])) ?></h6>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-body-title">
                            <h3><a href="<?= base_url() ?>/articles/<?= $posts_item['slug'] ?>"><?= esc($posts_item['title']) ?></a></h3>
                        </div>
                        <div class="blog-body-text">
                            <p><?= character_limiter($posts_item['body'], 180) ?></p>
                        </div>
                        <div class="blog-bottom-text-link"> <a href="<?= base_url() ?>/articles/<?= $posts_item['slug'] ?>">+ Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <?php if ($pager) :?>
                <?php $pagi_path='/articles'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <ul class="styled-pagination text-center clearfix">                            
                    <li><?= $pager->links() ?></li>
                </ul>
                <?php endif ?>
            </div>
        </div> 
    </div>
</section>
<!-- End Blog Section -->
<?= $this->endSection() ?>