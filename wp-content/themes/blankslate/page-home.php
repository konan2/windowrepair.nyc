<?php /* Template Name: Home page */ ?>


<?php get_header(); ?>


<section id="front-banner" class="front-banner container-fluid">
    <div class="front-banner__container container-xl">
        <div class="row">
            <div class="col-md-6 flex-column justify-content-center">
                <span class="text-primary-emphasis">Lorem ipsum dolor sit amet</span>
                <h1>we stand behind the quality of our work, reliable and result driven</h1>
                <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                <button class="btn btn-light mt-4">Book online</button>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg" alt="Описание изображения" height="565" width="540">
            </div>
        </div>
    </div>
</section>

<?php get_template_part('section-counters'); ?>
<?php get_template_part('section-quality-services'); ?>



<section id="benefits" class="benefits container-fluid">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img2.png" alt="Описание изображения" height="542" width="445">
            </div>
            <div class="col-md-6 flex-column justify-content-center">
                <span class="text-primary-emphasis">Windows repair NYC benefits</span>
                <h1>window repair nyc</h1>
                <p class="text-body-secondary">We specialize in assisting homeowners to get the most from skilled and veteran professionals in the locality. The company is fully licensed and insured to bring you the assurance that you may expect your service provider to have. For homeowners facing some problems with windows and doors at home, we offer a cost-free and no-obligation quote. Besides, we even visit your home to look into the matter before repairing windows.</p>
                <p class="text-body-secondary">Our professionals offer you sincere advice as to whether the time has come to go for window repair and installation services or not. All you are required to do is just give us a call as and when you stumble upon the problem. Our representative immediately rushes to your home after getting the call and explains the entire process.</p>
                <ul class="benefits__list row">
                    <li class="benefits__list-item col-6">Timely</li>
                    <li class="benefits__list-item col-6">Honest</li>
                    <li class="benefits__list-item col-6">Quick to respond</li>
                    <li class="benefits__list-item col-6">Conscientious</li>
                    <li class="benefits__list-item col-6">Responsible</li>
                    <li class="benefits__list-item col-6">Flexible Price</li>
                </ul>
            </div>
        </div>
    </div>
</section>    

<?php get_template_part('section-brands-slider'); ?>

  





<?php get_footer();?>