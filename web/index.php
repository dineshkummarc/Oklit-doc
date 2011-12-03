<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Oklit - Blogging platform</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le styles -->
        <link href="/assets/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/styles.css?2" rel="stylesheet" />
    </head>
    <body>
        <div class="startpage">
            <div class="wrap">
                <div class="main container">
                    <h1>Oklit <small>Blogging platform for developpers</small></h1>
                    <div class="row">
<!--
                        <div class="span6">
                            <?php
                                $files = new DirectoryIterator(__DIR__.'/images/features');
                                foreach($files as $file):
                            ?>
                                <img src="/images/features/<?php echo $file->getBasename() ?>" />
                            <?php endforeach ?>
                        </div>
                        <div class="span6">
-->
                    <div>
                            <p>
                                Oklit is an open-source blogging platform made for developpers, with it you can create a successfull weblog
                                and customize it to suite your needs.
                            </p>
                        </div>
                    </div>
                    <a class="btn large info show_demonstration" href="#">↓ Discover</a>
                    <a class="btn large success" href="https://github.com/gordonslondon/Oklit/tarball/master">Download →</a>
                </div>
            </div>
        </div>

        <div class="demonstration container">
            <div class="demonstration-buttons">
                    <a class="btn large show_home" href="#">↑ Home</a>
                    <a class="btn large info" href="https://github.com/gordonslondon/Oklit/tarball/master">Download →</a>
            </div>
            <div class="content">
                <div class="page-header">
                    <h1>Features</h1>
                </div>
                <div class="row">
                    <div class="span14 media-grid">
                        <div class="feature">
                            <div class="feature-img">
                                <a href="/images/features/code-color.png">
                                    <img src="/images/features/code-color.png" alt="code coloration" class="thumbnail" />
                                </a>
                            </div>
                            <h3>Code coloration</h3>
                            <p>
                            Use the github syntax to colorize code snippets in any language
                            </p>
                        </div>
                        <div class="feature">
                            <div class="feature-img">
                                <a href="/images/features/admin-list.png">
                                    <img src="/images/features/admin-list.png" alt="admin panel" class="thumbnail" />
                                </a>
                            </div>
                            <h3>Manage your posts/pages</h3>
                            <p>The admin panel allows you to manage posts and pages, keyboard navigation available</p>
                        </div>
                        <div class="feature">
                            <div class="feature-img">
                                <a href="/images/features/markdown-preview.png">
                                    <img src="/images/features/markdown-preview.png" alt="markdown parser" class="thumbnail" />
                                </a>
                            </div>
                            <h3>Write your posts in markdown</h3>
                            <p>
                            With markdown you can keep your post readable and render it in HTML.
                            </p>
                        </div>
                        <div class="feature">
                            <div class="feature-img">
                                <a href="/images/features/comments.png">
                                    <img src="/images/features/comments.png" alt="comments moderation" class="thumbnail" />
                                </a>
                            </div>
                            <h3>Comments</h3>
                            <p>Comment moderation, gravatar images, markdown syntax..</p>
                        </div>
                        <div class="feature">
                            <div class="feature-img">
                                <a href="/images/features/backup.png">
                                    <img src="/images/features/backup.png" alt="back database filesystem" class="thumbnail" />
                                </a>
                            </div>
                            <h3>Backup your posts and images</h3>
                            <p>Create an archive containing a dump of your database and the <code>/upload</code> folder</p>
                        </div>
                        <div class="feature">
                            <div class="feature-img">
                                <a href="/images/features/filesystem.png">
                                    <img src="/images/features/filesystem.png" alt="filesystem management" class="thumbnail" />
                                </a>
                            </div>
                            <h3>Filesystem manager</h3>
                            <p>
                            Upload somes file to a web directory, add images for your posts..
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->
        </div>
        <div class="footer">
            <div class="container">
                <p>&copy; Jules Boussekeyt 2011 - open source on github <a href="https://github.com/gordonslondon/Oklit" target="_blank">gordonslondon/Oklit</a></p>
            </div>
        </div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.demonstration').hide();
                $('.show_demonstration').click(function() {
                    $('.startpage').animate({'margin-top': -$('.startpage').height()}, 500, function() {
                        $(this).hide();
                    });
                    $('.demonstration').show();
                });

                $('.show_home').click(function() {
                    $('.startpage').show().animate({'margin-top': 0}, 500, function() {
                        $('.demonstration').hide();
                    });
                });
            });
        </script>
    </body>
</html>

