<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html ><head>
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $title; ?></title>

        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="<?php echo base_url() ?>css/default.css" rel="stylesheet" type="text/css" />
    </head>


    <body>
        <div id="menu">
            <ul>
                <li><a href="<?php echo base_url() ?>index.php/welcome/index" accesskey="1" title="">Blog</a></li>
                
                <?php 
                $data=$this->session->userdata('user_id');
                if($data!=NULL)
                {
                ?>
                <li class="active"><a href="<?php echo base_url() ?>index.php/blogger/view_my_blog" accesskey="2" title="">My Blog</a></li>
                <li><a href="<?php echo base_url() ?>index.php/blogger/profile" accesskey="3" title="">Profile</a></li>
                   <li><a href="<?php echo base_url() ?>index.php/blogger/add_blog" accesskey="5" title="">Add Blog</a></li>
            <li><a href="<?php echo base_url() ?>index.php/blogger/logout" accesskey="4" title="">Logout</a></li>
                <?php
                }
                else
                {
                ?>
                
                <li><a href="<?php echo base_url() ?>index.php/login_user/sign_up" accesskey="5" title="">Sign Up</a></li>
            <li><a href="<?php echo base_url() ?>index.php/login_user/user_login_page" accesskey="4" title="">Login</a></li>
             <?php
                }
                ?>
                
            </ul>
            
        </div>
        <!-- end #menu -->
        <?php if(isset($header)){?>
        <div id="header">
            <h1></h1>
            <h2></h2>
        </div>
        <?php }?>
        <!-- end #header -->
        <div id="wrapper">
            <div id="content">
                <div id="posts">
                    <?php echo $main;?>
                </div>
                <!-- end #posts -->
                <div id="links">
                    <ul>
                        <?php if(isset($archives)){?>
                        <li>
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#">May 2014</a> <i>(22)</i></li>
                                <li><a href="#">June 2014</a> <i>(22)</i></li>
                                <li><a href="#">July 2014</a> <i>(22)</i></li>
                                <li><a href="#">August 2014</a> <i>(22)</i></li>
                                <li><a href="#">September 2014</a> <i>(31)</i></li>
                                <li><a href="#">October 2014</a> <i>(31)</i></li>
                                 <li><a href="#">November 2014</a> <i>(30)</i></li>
                                  <li><a href="#">December 2014</a> <i>(31)</i></li>
                                
                                
                               
                               
                                
                            </ul>
                        </li>
                        <?php }?>
                        <li>
                            <h2>Categories</h2>
                            <ul>
                                <li><a href="#">About CSTE</a></li>
                                <li><a href="#">C/C++ programmig</a></li>
                                <li><a href="#">Gui Environment</a></li>
                                <li><a href="#">Networking</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Telecommunication</a></li>
                                
                                
                            </ul>
                        </li>
                        <li>
                            <h2>Blog Roll</h2>
                            <ul>
                                <li><a href="#">What is blog?</a></li>
                                <li><a href="#">How can write a blig?</a></li>
                                <li><a href="#">About Blogger</a></li>
                                <li><a href="#">Admin Panel</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end #links -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
        <!-- end #content -->
        <div id="footer">
            <p id="legal">Copyright © created by Backlog sujon
                
            
        </div>
        <!-- end #footer -->
        
    </body></html>