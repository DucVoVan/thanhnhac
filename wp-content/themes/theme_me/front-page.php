<?php get_header(); ?>
        <div class="container">
            <div class="row">
                <div class="home-left col-xl-4 col-lg-4">
                    
                </div>

                <div class="home-between col-xl-4 col-lg-4">
                    <div class="chatbot">
                        <div id="result1">
                            
                            </div>
                            
                            <div class="chatbot-title">
                                Chat Bot
                            </div>
                            <div id="messages">
        <pre>
        Mời bạn lựa chọn theo các phím chức năng sau: 
        1.abc
        2.xyz
        3.def
        </pre>
                            </div>

                            <input type="text" value="" id="number" placeholder="Nhập tin nhắn ..."/>
                        </div>
                </div>
                
                <div class="home-right col-xl-4 col-lg-4">
                    <?php do_shortcode('[shortcode1]'); ?>
                    <a href="http://localhost/thanhnhac/register.html">Đăng kí</a>
                </div>
            </div>
        </div>
<?php get_footer();

