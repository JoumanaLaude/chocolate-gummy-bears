<?php
/*
Template Name: Front Page
*/
get_header(); 
?>

<!-- Hero -->
<section id="hero" class="section hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/gummy-bg.jpg');">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Chocolate Covered Gummy Bears</h1>
        <p>Sweet, chewy, and absolutely unforgettable.</p>
        <a href="#featured" class="btn">Shop Now</a>
    </div>
    <!-- Squiggly SVG at bottom -->
    <div class="hero-squiggle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path fill="#EFE8D8" fill-opacity="1" d="M0,96L21.8,122.7C43.6,149,87,203,131,202.7C174.5,203,218,149,262,117.3C305.5,85,349,75,393,106.7C436.4,139,480,213,524,218.7C567.3,224,611,160,655,138.7C698.2,117,742,139,785,170.7C829.1,203,873,245,916,218.7C960,192,1004,96,1047,53.3C1090.9,11,1135,21,1178,53.3C1221.8,85,1265,139,1309,149.3C1352.7,160,1396,128,1418,112L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
        </svg>
    </div>
</section>

<section class="about-section" id="about">
  <div class="container about-container">
    <div class="about-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/choco-covered-bear.png" alt="About Choco Gummy Bears">

        <!-- Scattered hearts -->
        <span class="heart fa-solid fa-heart" style="top: -10px; left: -10px; font-size: 1.5rem;"></span>
        <span class="heart fa-solid fa-heart" style="top: 20px; right: 10px; font-size: 1.2rem;"></span>
        <span class="heart fa-solid fa-heart" style="bottom: 10px; left: 30px; font-size: 1rem;"></span>
        <span class="heart fa-solid fa-heart" style="bottom: -5px; right: 20px; font-size: 1.3rem;"></span>

    </div>
    <div class="section-text">
      <h2>About Us</h2>
      <p>
        Indulge in our sweet treats with a conscience! Our gummy bears are made with less sugar than leading brands, coated in organic, ethically sourced chocolate, and crafted to perfection so you can savor every percent of cocoa. Plus, they contain no artificial colors or sweeteners, making every bite naturally delicious.
      </p>
      <p>
        Every bite is crafted with care — made for those who want 
        a little surprise in their candy adventure.
      </p>
    </div>
  </div>
</section>

<section class="featured-section" id="featured">
    <div class="section-text">
        <h2>Featured Flavors</h2>
    </div>

    <div class="container featured-container">
    <div class="featured-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/milk-choco-gummy-bears.jpg" alt="Milk Chocolate Gummy Bears">
      <h3>Milk Chocolate Gummy Bears</h3>
      <p>Sweet gummy bears dipped in rich, creamy chocolate for the ultimate treat.</p>
    </div>

    <div class="featured-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/creme-gummy-bears.jpg" alt="Strawberry Gummy Bears">
      <h3>White Chocolate Gummy Bears</h3>
      <p>Sweet, creamy white chocolate hugs every chewy gummy bear for a light and irresistible treat.</p>
    </div>

    <div class="featured-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strawberries-and-creme-gummy-bears.png" alt="Strawberries and Creme Gummy Bears">
      <h3>Strawberries and Creme Gummy Bears</h3>
      <p>Juicy strawberry gummy bears that burst with fruity sweetness in every bite.</p>
    </div>

    <div class="featured-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/caramel-gummy-bears.jpg" alt="Caramel Chocolate Gummy Bears">
      <h3>Caramel Chocolate Gummy Bears</h3>
      <p>Rich, buttery caramel drizzled over chocolate-coated gummies for a decadent twist on a classic favorite.</p>
    </div>

  </div>
</section>

<section class="reviews-section" id="reviews">
  <div class="section-text">
    <h2>What Our Customers Say</h2>
  </div>
  <div class="container reviews-container">
    <div class="review-box">
      <p>“These gummy bears are magical! The chocolate coating makes every bite feel like a little celebration.”</p>
      <span>- Jimmy T.</span>
    </div>
    <div class="review-box">
      <p>“I didn’t think gummy bears could get any better… until I tried Chocolate Gummy Bears. Now they’re my go-to treat!”</p>
      <span>- Hanbyeol O.</span>
    </div>
    <div class="review-box">
      <p>“So chewy, so chocolatey, and completely addictive. I might have just finished the whole bag… oops!”</p>
      <span>- Luffy D.</span>
    </div>
  </div>
</section>

<section class="contact-section" id="contact">
  <div class="container contact-container">
    <div class="contact-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gummy-bear-phone.jpg" alt="pink phone">
    </div>
    <div class="contact-text">
      <h2>Contact Us</h2>
      <p><strong>Founder:</strong> Joumana Laude</p>
      <p><strong>Email:</strong> contact@example.com</p>
      <p><strong>Phone:</strong> (123) 456-7890</p>
      <p><strong>Address:</strong> 123 Candy Lane, Sweet City, USA</p>
      <p>Feel free to reach out with questions, feedback, or just to say hi!</p>
    </div>
  </div>
</section>


<?php get_footer(); ?>