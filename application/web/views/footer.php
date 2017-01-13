<?php if ($menu != 'contact') { ?>
<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
    <button type="button" style="opacity: 0.8;border-radius: 50px;font-size:19px;">留言</button>
    <div class="morph-content">
        <div>
            <div class="content-style-form content-style-form-1">
                <span class="icon icon-close">Close the dialog</span>
                <h2>留言</h2>
                <form>
                    <p><label>手机号</label><input id='mobile' type="text" /></p>
                    <p><label>邮箱</label><input id='mail' type="text" /></p>
                    <p><label>留言内容</label><textarea id='content' rows='5' style='width:100%;background:transparent;border: 2px solid #ebd3bd;padding:10px;'></textarea></p>
                    <p><button onclick="send_message()">提交</button></p>
                </form>
            </div>
        </div>
    </div>
</div><!-- morph-button -->
<?php } ?>

<!-- footer -->
<div class="footer" style='text-align:center'>
    <span style='color:#fff;margin:0 auto;font-size:12px;font-weight:100'>山河商贸&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;鲁ICP备17001935&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright <?php echo date('Y'); ?></span>
</div>
<!-- //footer -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/component.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/css/content.css'); ?>" />
<script src="<?php echo base_url('static/js/modernizr.custom.js'); ?>"></script>
<script src="<?php echo base_url('static/js/classie.js'); ?>"></script>
<script src="<?php echo base_url('static/js/uiMorphingButton_fixed.js'); ?>"></script>
<script>
    console.log('Power by 朱哥工作室');
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

    /**
     * 留言
     */
    function send_message() {
        // 手机号
        var _mobile = $('#mobile').val();
        // 邮箱
        var _mail = $('#mail').val();
        // 内容
        var _content = $('#content').val();

        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Home/message'); ?>",
            data: {mobile:_mobile, mail:_mail, content:_content},
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if (data['flag'] == 1) {
                    alert('留言成功！');
                } else {
                    alert(data['msg']);
                }
            }
        });
    }
</script>
</body>
</html>
