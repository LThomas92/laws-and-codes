<?php get_header(); ?>

<div class="content">
  <div class="c-page-faqs">
      <div class="c-page-faqs__header">
        <?php $faqsDesc = get_field('faqs_description'); ?>
        <h1>Frequently Asked Questions</h1>
        <p><?php echo $faqsDesc; ?></p>
      </div>

      <section class="c-page-faqs__content">
        <div class="c-page-faqs__accordion-content">

        <?php if( have_rows('faqs_accordions') ): ?>

        <ul class="c-page-faqs__accordions">
        <?php while( have_rows('faqs_accordions') ) : the_row();
        $accordionTitle = get_sub_field('faqs_accordion_title'); 
        $accordionContent = get_sub_field('faqs_accordion_content');
        ?>
        <li class="c-page-faqs__accordion">
          <h4 key="<?php echo $accordionTitle; ?>" class="c-page-faqs__accordion-title"><?php echo $accordionTitle; ?>
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 100 125" style="enable-background:new 0 0 100 125;" xml:space="preserve">
        <path d="M38,78.2l26.1-26.1c1.2-1.2,1.2-3.1,0-4.2L38,21.8L33.8,26l24,24l-24,24L38,78.2z"/>
        </svg>
          </h4>
          <div key="<?php echo $accordionTitle; ?>"class="c-page-faqs__wrapper">
          <div class="c-page-faqs__accordion-content-box"><?php echo $accordionContent; ?></div>
        </div>
        </li>

    <?php endwhile; ?>
    </ul>

<?php else :
    // Do something...
endif; ?>
        </div>

        <figure class="c-page-faqs__image">
          <?php $faqsImage = get_field('faqs_image'); ?>
          <img src="<?php echo $faqsImage['url']; ?>" alt="<?php echo $faqsImage['alt']; ?>">
        </figure>


      </section>


  </div>
</div>

<?php get_footer(); ?>