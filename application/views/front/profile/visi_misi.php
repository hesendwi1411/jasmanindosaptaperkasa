    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->                           
            
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                    	<li><a href="<?php echo base_url('profil');?>">Profil</a></li>
                        <li class="active">Visi & Misi</li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                               <figure class="news-featured-image">    
                                    <img src="<?php echo base_url('assets/upload/image/'.$gallery['image']);?>" alt="Featured image 1" class="img-responsive" />
                                </figure>
                            	<h1 class="page-title">VISI :</h1><!-- category title -->
                            
1. Menjadi perusahaan Dok dan Galangan Kapal yang terkemuka dan berdaya saing tinggi<br>
2. Perusahaan yang dapat peduli akan kebutuhan pelanggan dan memberikan solusi bagi Setiap pelanggan. <br>

3.  Membantu meningkatkan perekonomian nasional, dan meningkatkan produktivitas  untuk menghasilkan barang modal atau jasa berupa kapal – kapal laut, jasa perawatan Perawatan kapal – kapal laut serta offshore / industri lepas pantai.
<br>

                            </div>
                        
                        </div><!-- row end -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                                
                                
                            
                            </div>
                        
                        </div><!-- row end --> 
                        
                        <div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12">
                        
                                <ul class="pagination pull-right"><!-- pagination -->
                                  <?php if(isset($pagin)) { echo $pagin; }  ?>        
                                </ul><!-- pagination end -->
                            
                            </div>
                            
                        </div><!-- row end -->                 
                    <h1 class="page-title">MISI :</h1><!-- category title -->
1. Menjadi usaha perkapalan sebagai salah satu kekuatan Ekonomi bangsa.<br>
2. Menciptakan produk dan jasa perkapalan yang berkualitas tinggi dan mempunyai nilai tambah.<br> 
3. Komitmen dalam penerapan good coorporate governance and company performance.
<br>

                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
                <div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->
                    
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_nav_menu"><!-- widget -->
                    
                                <h1 class="title-widget">Navigasi</h1>
                                
                                <ul>
                                    <li><a href="<?php echo base_url('project/pekerjaan');?>" title="menu item">Daftar Pekerjaan</a></li>
                                    <li><a href="<?php echo base_url('project/klien');?>" title="menu item">Daftar Klien</a></li>
                                    <li><a href="<?php echo base_url('kontak');?>" title="menu item">Kontak Kami</a></li>
                                </ul>
                    
                            </li>
                            
                            <li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Blog Terbaru</h1>
                                
                                <ul class="list-unstyled">
                                
                                <?php 
                                    foreach ($blogs as $blog){
                                        if ($blog['blog_id']++ < 10) {
                                ?>
                                    <li class="recent-news-wrap news-no-summary">
                                        
                                        <div class="recent-news-content clearfix">
                                            <figure class="recent-news-thumb">
                                                <a href="<?php echo base_url('blog/detil/'.$blog['slug_blog']);?>" title="<?php echo $blog['title'];?>">
                                                <img src="<?php echo base_url('assets/upload/image/'.$blog['image']);?>" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" /></a>
                                            </figure>
                                            <div class="recent-news-text">
                                                <div class="recent-news-meta">
                                                    <div class="recent-news-date"><?php echo date('l, d/m/Y', strtotime($blog['date_post'])); ?></div>
                                                </div>
                                                <h1 class="title-median"><a href="<?php echo base_url('blog/detil/'.$blog['slug_blog']);?>" title="<?php echo $blog['title'];?>"><?php echo $blog['title'];?></a></h1>
                                            </div>
                                        </div>
                                    
                                    </li>                            
                                <?php }} ?>
                                </ul>
                                
                            </li><!-- widgets list end -->
                                                        
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- sidebar wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->


    