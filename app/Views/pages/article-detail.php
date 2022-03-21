<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>
    <!--Start breadcrumb area-->     
<section class="breadcrumb-area style2" style="background-image: url(<?= base_url() ?>/assets/images/slides/slide-image.jpg);">
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

<!--Start Blog Style1 Area-->
<section id="blog-area" class="blog-style1-area">
    <div class="container">
        <div class="row blog-post">
            <!--Start single blog post-->
            <div class="single-blog-post wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                <div class="text-holder">
                    <ul class="meta-info">
                        <li><i class="fa fa-calendar thm-clr1" aria-hidden="true"></i><a href="#"><?= date('Y-m-d', strtotime($posts['created_at'])) ?></a></li>     
                    </ul>
                    <h3 class="blog-title"><?= $posts['title'] ?></h3>
                    <div class="text-box">
                        <p><?= $posts['body'] ?></p>
                    </div>
                </div>
            </div>
            <!--End single blog post-->  
            <a href="<?= base_url() ?>/articles" class="btn btn-outline-primary"> Back to All Articles</a> 
        </div>   
    </div>    
</section>
<!--End Blog Style1 Area-->
<?= $this->endSection() ?>