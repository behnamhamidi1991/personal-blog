
   <?php loadPartial('head') ?>
   <?php loadPartial('navbar') ?>
   <?php loadPartial('main-top') ?>





    <section id="notes">
        <div class="notes-wrapper">

        <div class="note-box">
        <h3>Safe Payment</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, a laudantium adipisci iusto accusantium totam odit ipsa sapiente minus, magnam eos, excepturi harum animi mollitia qui vero velit. Tempora, culpa.</p>
      </div>

      <div class="note-box">
          <h3>Valid Degree</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde vero mollitia voluptas alias exercitationem fugiat, aut distinctio dignissimos ipsum dolorem sunt est asperiores quas reiciendis temporibus. Aliquam neque ducimus hic?</p>
        </div>
        
        <div class="note-box">
            <h3>Skilled Instructors</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde vero mollitia voluptas alias exercitationem fugiat, aut distinctio dignissimos ipsum dolorem sunt est asperiores quas reiciendis temporibus. Aliquam neque ducimus hic?</p>
        </div>
        
        <div class="note-box">
            <h3>Online Classes</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde vero mollitia voluptas alias exercitationem fugiat, aut distinctio dignissimos ipsum dolorem sunt est asperiores quas reiciendis temporibus. Aliquam neque ducimus hic?</p>
        </div>

       </div>    
    </section>



    <section id="blog">
        <div class="blog-header">
            <h2>Blog</h2>
            <p>In our blog you can find anything you like to learn</p>
        </div>

        <div class="blog-content">

        <?php foreach($posts as $post) : ?>
            <div class="blog-box">
                <h2><?= $post['title'] ?></h2>
                <p><?= mb_substr($post['body'], 0, 250) . ' ...' ?> </p>
                <div class="post-details">
                    <span><?= $post['created_at'] ?></span>
                    <span><?= $post['user_name'] ?></span>
                    <span><?= $post['category'] ?></span>
                </div>
                <a href="#" class="blog-readmore-btn">Read More</a>
            </div>
            <?php endforeach ; ?>

        </div>
        <div class="blog-read-more-container">
            <a href="/blog" class="blog-read-more">Read More Posts</a>
        </div>
    </section>


    <?php loadPartial('footer') ?>