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

<!--Start Blog Style1 Area-->
<section id="blog-area" class="rareblog blog-style1-area">
    <div class="container">
        <div class="row blog-post">
            <?php if (! empty($posts) && is_array($posts)): ?>
                <?php foreach($posts as $posts_item): ?>
                    <div class="col-md-6">
                        <!--Start single blog post-->
                        <div class="single-blog-post wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="<?=base_url() ?>/uploads/<?= $posts_item['file_name'] ?>" alt="featured image">
                                    <div class="overlay-content">
                                        <div class="button">
                                            <a href="<?=base_url() ?>/articles/<?= $posts_item['slug'] ?>"><i class="fa fa-book" aria-hidden="true"></i>Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li><i class="fa fa-calendar thm-clr1" aria-hidden="true"></i><a href="#"><?= date('Y-m-d', strtotime($posts_item['created_at'])) ?></a></li>     
                                </ul>
                                <h3 class="blog-title"><a href="/articles/<?= $posts_item['slug'] ?>"><?= esc($posts_item['title']) ?></a></h3>
                                <div class="text-box">
                                    <p><?= character_limiter($posts_item['body'], 180) ?></p>
                                    <div class="read-more-button">
                                        <a href="<?=base_url() ?>/articles/<?= $posts_item['slug'] ?>">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single blog post-->                        
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
<!--End Blog Style1 Area-->
<?= $this->endSection() ?>