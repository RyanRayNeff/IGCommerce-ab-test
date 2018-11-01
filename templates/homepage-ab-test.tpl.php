<article id="ab-test-outer-wrapper">
  <div id="ab-test-inner-wrapper" class="container">
    
      <section id="three-banners">
        
        <div class="hero-banner">
            <?php print $content['hero-banner']['formatted_picture']; ?>
            <div class="banner-text">
              <h1><?php print $content["hero-banner"]["title"]; ?></h1>
              <p><?php print $content["hero-banner"]["subtitle"]; ?></p>
            </div>
        </div>
        
        <div class="secondary-banners">
          
          <a class="sub-banner-one hero-sub-banner" href='<?php print $content["sub-banner-one"]["link_url"]; ?>'>
            <?php print $content['sub-banner-one']['formatted_picture']; ?>
            <div class="banner-text">
              <h2><?php print $content["sub-banner-one"]["title"]; ?></h2>
              <p><?php print $content["sub-banner-one"]["subtitle"]; ?></p>
            </div>
          </a>
          
          <a class="sub-banner-two hero-sub-banner" href='<?php print $content["sub-banner-two"]["link_url"]; ?>'>
            <?php print $content['sub-banner-two']['formatted_picture']; ?>
            <div class="banner-text">
              <h2><?php print $content["sub-banner-two"]["title"]; ?></h2>
              <p><?php print $content["sub-banner-two"]["subtitle"]; ?></p>
            </div>
          </a>
        </div>
    
      </section>
    
      <section class="featured-products">
        <div class="sub-section-title">
          <h2>
            <?php print t('Featured products'); ?>
          </h2>
        </div>
        <?php foreach ($content["featured-products"] as $featured_product) : ?>
          <a class="featured-product" href="<?php print $featured_product["link_url"]; ?>">
            <?php print $featured_product['formatted_picture']; ?>
            <p><?php print $featured_product["title"]; ?></p>
          </a>
        <?php endforeach; ?>
      </section>
    
      <section class="secondary-nav">
        <?php foreach ($content["secondary-nav"] as $nav_item) : ?>
            <?php print l(t($nav_item['link_text']), $nav_item['link_url']); ?>
        <?php endforeach; ?>
      </section>
    
      <section class="four-up-banners">
        <?php foreach ($content["four-up-banners"] as $banner) : ?>
          <a class="mini-banner" href='<?php print $banner["link_url"]; ?>'>
            <?php print $banner['formatted_picture']; ?>
            <div class="banner-text">
              <h3><?php print $banner["title"]; ?></h3>
              <p><?php print $banner["subtitle"]; ?></p>
            </div>
          </a>
        <?php endforeach; ?>
      </section>
    
      <section class="featured-content">
        <div class="sub-section-title">
          <h2>
            <?php print t('Featured content'); ?>
          </h2>
          <p class="featured-content-view-more">
            <?php print l(t('View more') . ' >', '/learn/blog'); ?>
          </p>
        </div>
        <div class="featured-content-items">
          <?php $i = 0; ?>
          <?php foreach ($content["featured-content"] as $content_item) : ?>
            <?php // There are 5 items in this section, items 2-5 get wrapped in "featured-content-smalls" ?>
            <?php ($i == 0) ? print '<div class="hero-featured">' : '' ?>
            <?php ($i == 1) ? print '<div class="featured-content-smalls">' : '' ?>
            <a class="featured-content-item" href='<?php print $content_item["link_url"]; ?>'>
              <?php print $content_item['formatted_picture']; ?>
              <div class="banner-text">
                <h3><?php print $content_item["title"]; ?></h3>
                <p><?php print $content_item["subtitle"]; ?></p>
                <p class="read-time">3 min read</p>
              </div>
            </a>
            <?php ($i == 4 || $i == 0) ? print '</div>' : '' ?>
            <?php $i++; ?>
          <?php endforeach; ?>
        </div>
      </section>
  </div>
</article>
