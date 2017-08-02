<?php
/**
 * Template Name: Blank Page Template
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */

  get_header();
?>


<?php
  get_template_part('section-templates/header-section');
?>



<div class="row justify-content-center">
    <div class="blog col-sm-3">
        <div class="img"> <img src="<?php the_field('col_1_img')?>" /> </div>
        <h2> <?php the_field("col_1_title") ?></h2>
        <p><?php the_field("col_1_body") ?></p>
    </div>
    <div class="blog col-sm-3">
      <div class="img"> <img src="<?php the_field('col_2_img')?>" /> </div>
        <h2> <?php the_field("col_2_title") ?></h2>
        <p><?php the_field("col_2_body") ?></p>
    </div>
    <div class="blog col-sm-3">
     <div class="img"> <img src="<?php the_field('col_3_img')?>" /> </div>
        <h2> <?php the_field("col_3_title") ?></h2>
        <p><?php the_field("col_3_body") ?></p>
    </div>
</div>


<div class="row">
  <div class="list-section col-sm-3">
    <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="">
  </div>
  <div class="offset-sm-4 col-sm-3 ">
    <h2>what you get</h2>
  </div>
</div>
<div class="row">
  <div class="col-sm-3 offset-sm-3">
    <ul>
      <li class="list-item">
        <h2>title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolore eius nobis, quod deserunt, distinctio id rem fugiat! Perferendis, velit!</p>
      </li>
      <li class="list-item">
        <h2>title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta tempore beatae incidunt non corporis, impedit odit magni optio reprehenderit voluptatem?</p>
      </li>
      <li class="list-item">
        <h2>title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure neque et deserunt doloribus facere doloremque sed placeat, quisquam dolore ullam.</p>
      </li>
      <li class="list-item">
        <h2>title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, placeat, illo. Amet architecto accusantium adipisci quasi, vitae esse fugiat, sed.</p>
      </li>
      <li class="list-item">
        <h2>title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem nobis obcaecati recusandae maxime laboriosam, delectus est explicabo! Doloremque, autem fuga?</p>
      </li>
      <li class="list-item">
        <h2>title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit distinctio quaerat rerum. Labore nisi architecto soluta ex eligendi nam explicabo.</p>
      </li>
    </ul>
  </div>
  <div class="col-sm-5 offset-sm-1">
    <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="">
    <div class="col-sm-8">
      <ul>
        <li class="list-item">
          <h2>title-1-line</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem praesentium fuga eum cupiditate obcaecati, distinctio, ipsam quasi vitae itaque eius!</p>
        </li>
        <li class="list-item">
          <h2>title-1-line</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit pariatur ratione omnis amet eveniet iusto quod sint numquam, earum suscipit!</p>
        </li>
        <li class="list-item">
          <h2>title-1-line</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus tempore aliquam incidunt rerum illum tempora totam quam eaque et ea!</p>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="row justify-content-center">
    <div class="blog col-sm-3">
        <div class="img"></div>
        <h2>Blog Title</h2>
        <p>Lorem  consectetur animi iusto illo aliquam, exercitationem. Explicabo, distinctio.</p>
    </div>
    <div class="blog col-sm-3">
      <div class="img"></div>
        <h2>Blog Title</h2>
        <p>Lorem  consectetur animi iusto illo aliquam, exercitationem. Explicabo, distinctio.</p>
    </div>
    <div class="blog col-sm-3">
      <div class="img"></div>
        <h2>Blog Title</h2>
        <p>Lorem  consectetur animi iusto illo aliquam, exercitationem. Explicabo, distinctio.</p>
    </div>
</div>

<div class="row">
  <div class="col-sm-3 offset-sm-3">
    <h1>Header Text</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aspernatur cupiditate praesentium, reiciendis eos tempore, inventore minus eaque distinctio deleniti.</p>
  </div>
</div>
<div class="row">
  <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="" class="col-sm-6 image-left">
  <h2 class="col-sm-3 subheader-text-right">Testimonial Name</h2>
  <p class="col-sm-3 body-text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora cupiditate, maxime. Vero placeat, saepe accusantium voluptatibus sapiente culpa repellat modi.</p>
</div>
<div class="row">
  <h2 class="col-sm-3 subheader-text-left">Testimonial Name</h2>
  <p class="col-sm-3 body-text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam esse debitis tempore distinctio eveniet architecto repellat tenetur et accusantium quod.</p>
  <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="" class="col-sm-6 image-right">
</div>
<div class="row">
  <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="" class="col-sm-6 image-left">
  <h2 class="col-sm-3 subheader-text-right">Testimonial Name</h2>
  <p class="col-sm-3 body-text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora cupiditate, maxime. Vero placeat, saepe accusantium voluptatibus sapiente culpa repellat modi.</p>
</div>

<div class="row">
  <h1 class="col-sm-2 offset-sm-2">Title Title Title</h1>
  <p class="col-sm-3 offset-sm-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore aut magni, soluta nam deserunt sed architecto fuga animi sequi cumque.</p>
</div>


<div class="row">
  <div class="col-sm-3 offset-sm-2">
    <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="">
    <h2 class="quad-header-text">header</h2>
    <p class="quad-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae officiis reprehenderit architecto vero cupiditate placeat!</p>
  </div>
  <div class="col-sm-3 offset-sm-2">
    <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="">
    <h2 class="quad-header-text">header</h2>
    <p class="quad-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae officiis reprehenderit architecto vero cupiditate placeat!</p>
  </div>
</div>
<div class="row">
  <div class="col-sm-3 offset-sm-2">
    <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="">
    <h2 class="quad-header-text">header</h2>
    <p class="quad-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae officiis reprehenderit architecto vero cupiditate placeat!</p>
  </div>
  <div class="col-sm-3 offset-sm-2">
    <h2 class="quad-header-text">Call to action blah blah blah blah</h2>
    <button type="button" class="btn">Basic</button>
  </div>
</div>

<div class="row">
  <div class="col-sm-4 offset-sm-2">
    <img src="http://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-8.jpg" alt="">
  </div>
  <div class="col-sm-3 offset-sm-2">
      <ul>
       <li class="list-item">
        <h2>Title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio corporis esse perspiciatis reiciendis voluptate consequuntur, maxime voluptatibus tenetur nam!</p>
      </li>
       <li class="list-item">
        <h2>Title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quam nisi eaque similique porro dolores velit dignissimos, praesentium atque ad.</p>
      </li>
      <li class="list-item">
        <h2>Title-1-line</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita officiis iste numquam quas vero cum, necessitatibus quos vitae at exercitationem!</p>
      </li>
    </ul>
  </div>
</div>

<div>
  <div class="row justify-content-center">
    <div class="basic-cta-header col-sm-3">
      <h2>Questions? Consult our FAQ</h2>
      <button type="button" class="btn">Basic</button>

    </div>
  </div>
</div>

<div class="row">
  <h2 class="col-sm-2 offset-sm-2">Title Title Title</h2>
  <p class="col-sm-3 offset-sm-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore aut magni, soluta nam deserunt sed architecto fuga animi sequi cumque.</p>
</div>

<div class="row justify-content-center">
    <div class="blog col-sm-2">
        <div class="img"></div>
        <h2>Blog Title</h2>
        <p>Lorem  consectetur animi iusto illo aliquam, exercitationem. Explicabo, distinctio.</p>
    </div>
    <div class="blog col-sm-2">
      <div class="img"></div>
        <h2>Blog Title</h2>
        <p>Lorem  consectetur animi iusto illo aliquam, exercitationem. Explicabo, distinctio.</p>
    </div>
    <div class="blog col-sm-2">
      <div class="img"></div>
        <h2>Blog Title</h2>
        <p>Lorem  consectetur animi iusto illo aliquam, exercitationem. Explicabo, distinctio.</p>
    </div>
    <div class="blog col-sm-2">
      <div class="img"></div>
        <h2>Blog Title</h2>
        <p>Lorem  consectetur animi iusto illo aliquam, exercitationem. Explicabo, distinctio.</p>
        <div class="button-1">
          <h3>Read more</h3>
        </div>
    </div>
</div>
<div class="row justify-content-center">
      <button type="button" class="btn">Basic</button>
</div>






<style>

  .button-1{
    padding: 10px;
    background-color: orange;
    text-align: center;
  }
  .button-1 h3{
    font-size: 14px;
  }
  .img{
    background-color: red;
    height: 50px;
    width: 100%;
  }
  .blog{
    padding-top: 15px;
    margin: 0px 10px;
    border: 1px green solid
  }
</style>

<?php wp_footer(); ?>
</body>
</html>
