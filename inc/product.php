<?php

function product_btn(){
   echo '
    <div class="product_btn-container">
        <input type="checkbox" id="product_btn_radio" name="product_btn_radio">
        <div class="product_btn" >
               <label class="site-btn" for="product_btn_radio">Request More Information <i class="fas fa-chevron-down"></i></label>
       </div>
   ';
    product_files();
    echo '<div class="product_form">
              <div class="getg_title container">
                    <h2>Contact us for more information</h2>
                </div>
                <div class="container">
                          '.do_shortcode('[ninja_form id=2]').'
                </div>
              </div>
    </div>
    <script>
    (function(){
            function getOffset( el ) {
            var _x = 0;
            var _y = 0;
            while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
                _x += el.offsetLeft - el.scrollLeft;
                _y += el.offsetTop - el.scrollTop;
                el = el.offsetParent;
            }
            return { top: _y, left: _x };
        }
        const elem = document.querySelector(".product_btn");
        elem.addEventListener("click", ()=>{
         const top = getOffset(elem).top;
         const isFormClose = !document.getElementById("product_btn_radio").checked;
         if (isFormClose) {
            window.scroll({
              top: top - 100,
              behavior: "smooth"
            });
         }
        });

jQuery(document).ready( function() {
  jQuery(document).on("nfFormSubmitResponse", function(event, response, id) {
            const top = getOffset(document.querySelector(".product_form")).top;
            setTimeout(()=>{
                  window.scroll({
                  top: top - 100,
                  behavior: "smooth"
                });
            }, 300)

         });
    });
    })();
    </script>';
}
add_shortcode( 'show_product_btn', 'product_btn' );

function product_files(){
    $file = get_field('brochure_document');
    ?>
     <div class="product_files__container">
   <?php if( $file ): ?>
      <div class="product_files">
        <h3>SDS Document:</h3>
        <a href="<?php echo $file['url']; ?>" target="_blank">Download file</a>
      </div>
    <?php endif;
    $file1 = get_field('technical_documents');
    if( $file1 ): ?>
        <div class="product_files">
            <h3>TDS Document:</h3>
          <a href="<?php echo $file1['url']; ?>" target="_blank">Download file</a>
        </div>
    <?php endif; ?>
     </div>
    <?php
}

add_shortcode( 'show_product_files', 'product_files' );
