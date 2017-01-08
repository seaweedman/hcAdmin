<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
    <button type="button" style="opacity: 0.8;border-radius: 50px;font-size:19px;">留言</button>
    <div class="morph-content">
        <div>
            <div class="content-style-form content-style-form-1">
                <span class="icon icon-close">Close the dialog</span>
                <h2>留言</h2>
                <form>
                    <p><label>手机号</label><input type="text" /></p>
                    <p><label>邮箱</label><input type="text" /></p>
                    <p><label>留言内容</label><textarea rows='5' style='width:100%;background:transparent;border: 2px solid #ebd3bd;padding:10px;'></textarea></p>
                    <p><button>提交</button></p>
                </form>
            </div>
        </div>
    </div>
</div><!-- morph-button -->

<!-- footer -->
<div class="footer">
    <span style='color:#fff;margin:0 auto;'>Power by 朱哥工作室.</span>
    <!-- container -->
    <!-- <div class="container">
        <div class="col-md-6 footer-left  wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
            <h3 style='position:rlative;'>留言</h3>
            <form action="<?php echo site_url('Home/message'); ?>" method='post'>
                <input type="text" placeholder="手机号" name='mobile' required="">
                <input type="text" placeholder="邮箱" name='mail' required="">
                <input type="text" placeholder="内容" name='content' required="">
                <input type="submit" value="留言">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div> -->
    <!-- //container -->
</div>
<!-- //footer -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/component.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/content.css'); ?>" />
<script src="<?php echo base_url('static/js/modernizr.custom.js'); ?>"></script>
<script src="<?php echo base_url('static/js/classie.js'); ?>"></script>
<script src="<?php echo base_url('static/js/uiMorphingButton_fixed.js'); ?>"></script>
<script>
    (function() {
        var docElem = window.document.documentElement, didScroll, scrollPosition;

        // trick to prevent scrolling when opening/closing button
        function noScrollFn() {
            window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
        }

        function noScroll() {
            window.removeEventListener( 'scroll', scrollHandler );
            window.addEventListener( 'scroll', noScrollFn );
        }

        function scrollFn() {
            window.addEventListener( 'scroll', scrollHandler );
        }

        function canScroll() {
            window.removeEventListener( 'scroll', noScrollFn );
            scrollFn();
        }

        function scrollHandler() {
            if( !didScroll ) {
                didScroll = true;
                setTimeout( function() { scrollPage(); }, 60 );
            }
        };

        function scrollPage() {
            scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
            didScroll = false;
        };

        scrollFn();

        [].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
            new UIMorphingButton( bttn, {
                closeEl : '.icon-close',
                onBeforeOpen : function() {
                    // don't allow to scroll
                    noScroll();
                },
                onAfterOpen : function() {
                    // can scroll again
                    canScroll();
                },
                onBeforeClose : function() {
                    // don't allow to scroll
                    noScroll();
                },
                onAfterClose : function() {
                    // can scroll again
                    canScroll();
                }
            } );
        } );

        // for demo purposes only
        [].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) {
            bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
        } );
    })();
</script>
</body>
</html>
