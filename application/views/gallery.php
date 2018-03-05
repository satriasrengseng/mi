<?php if( $this->initial_template == '' ): ?>
 <section class="parallax">
    <div data-parallax="scroll" data-image-src="<?= config_item('assets_img') ?>banner/header.jpg" class="parallax-bg"></div>
    <div class="parallax-overlay">
        <div class="centrize">
            <div class="v-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="title center" style="margin:100px">
                               <h1>&nbsp;</h1><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h2 class="head-underlined">Photo Gallery</h2>
        <div class="row gallery margintop-40" id="work" >
            <?php
             if( count($photo) > 0 ){
                foreach($photo as $row){

                    # check image or video
                    //$getFile = getAlbumFile($row['gallery_album_id'], 1);
                    if( $row['file'] != '' ){
                        $primaryIcon = '<img alt="'.$row['album_name'].'" src="'.base_url().'cms/'.$row['file'].'"/>';
                    }else{
                        $primaryIcon = '<img src="https://placehold.it/607x604"/>';
                    }

                    # character limit
                    if( strlen($row['album_name']) >= 35 ){
                        $title  = substr($row['album_name'], 0, 35).' ....';
                    }else{
                        $title  = $row['album_name'];
                    }

                    echo '

                    <div class="col-md-4 col-sm-6 work-item">
                        <div class="work-detail">
                            <a href="'.base_url( 'gallery/detail' ).'/'.parseUrl($row['gallery_album_id']).'">
                                '.$primaryIcon.'
                                <div class="work-info">
                                    <div class="centrize">
                                        <div class="v-center">
                                            <div class="plus-icon">
                                                <span class="ring"></span>
                                            </div>
                                            <h3>'.$title.'</h3>
                                            <p>'.date ("d-M-Y",strtotime($row['date'])).'</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>';
                }
            }
            ?>      
        </div> 
    </div>
    <br>

    <div class="container">
        <h2 class="head-underlined">Video Gallery</h2>
        <div class="row gallery-video margintop-40" id="works">
            <?php
             if( count($video) > 0 ){
                foreach($video as $row){

                    # check image or video
                    //$getFile = getAlbumFile($row['gallery_album_id'], 1);
                    if( $row['type'] == 'video' ){
                        $primaryIcon = '<iframe width="100%" height="280"
                                  src="http://www.youtube.com/embed/'.$row['url_link'].'?autoplay=0">
                              </iframe>';
                    }else{
                        $primaryIcon = '<img src="https://placehold.it/607x604"/>';
                    }

                    # character limit
                    if( strlen($row['album_description']) >= 35 ){
                        $title  = substr($row['album_description'], 0, 35).' ....';
                    }else{
                        $title  = $row['album_description'];
                    }

                    echo '
                    <div class="col-md-4 col-sm-6 work-item">
                        <div class="work-detail">
                            <a target="_blank" href="https://www.youtube.com/watch?v='.$row['url_link'].'">
                                '.$primaryIcon.'
                                <div class="work-info">
                                    <div class="centrize">
                                        <div class="v-center">
                                            <i class="fa fa-youtube-play fa-3x"></i>
                                            <h3>'.$row['album_name'].'</h3>
                                            <p>'.$title.'</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>';
                }
            }
            ?>    
        </div>
    </div>
    <br>

    <div class="container"> 
        <div class="col-md-6 col-sm-6 col-md-offset-3 text-center">
            <a type="submit" href="<?= $social['youtube'] ?>" class="btn btn-color center-btn">Explore our channel</a>
        </div>
    </div>
    <br>
    <br>        
    <br>
    <div class="container">
        <div class="row">
            <?php
             if( count($ads) > 0 ){
                foreach($ads as $row){
                    
                    $initial_id = $row['ads_place_id'];

                    if( $initial_id == '3') {
                         echo '
                    <div class="col-md-6"><a href="'.$row['url'].'"><img alt="'.$row['title'].'" src="'.base_url().'cms/'.$row['file'].'"/></a></div>';
                    }
                   echo '';
                }
            }
            ?>            
        </div>
    </div>
</section>
<?php elseif( $this->initial_template == 'detail' ): ?>
<section>
    <div class="container">
        <div class="row">
                       
                                        <?php
                                               if(count($gallery) > 0){
                
                                                        
                                                        if( $gallery[0]['type'] == 'image' ){
                                                            if($gallery[0]['file'] != ''){
                                                            $primaryIcon = '<div class="item"><img alt="'.$gallery[0]['album_title'].'" src="'.base_url().'cms/'.$gallery[0]['file'].'"/></div>';
                                                            }else{ $primaryIcon = '';}
                                                            if($gallery[1]['file'] != ''){
                                                            $primaryIcon2 = '<div class="item"><img alt="'.$gallery[1]['album_title'].'" src="'.base_url().'cms/'.$gallery[1]['file'].'"/></div>';
                                                            }else{ $primaryIcon2 = '';}
                                                            if($gallery[2]['file'] != ''){
                                                            $primaryIcon3 = '<div class="item"><img alt="'.$gallery[2]['album_title'].'" src="'.base_url().'cms/'.$gallery[2]['file'].'"/></div>';
                                                            }else{ $primaryIcon3 = '';}
                                                            if($gallery[3]['file'] != ''){
                                                            $primaryIcon4 = '<div class="item"><img alt="'.$gallery[3]['album_title'].'" src="'.base_url().'cms/'.$gallery[3]['file'].'"/></div>';
                                                            }else{ $primaryIcon4 = '';}
                                                            if($gallery[4]['file'] != ''){
                                                            $primaryIcon5 = '<div class="item"><img alt="'.$gallery[4]['album_title'].'" src="'.base_url().'cms/'.$gallery[4]['file'].'"/></div>';
                                                            }else{ $primaryIcon5 = '';}
                                                            if($gallery[5]['file'] != ''){
                                                            $primaryIcon6 = '<div class="item"><img alt="'.$gallery[5]['album_title'].'" src="'.base_url().'cms/'.$gallery[5]['file'].'"/></div>';
                                                            }else{ $primaryIcon6 = '';}
                                                            if($gallery[6]['file'] != ''){
                                                            $primaryIcon7 = '<div class="item"><img alt="'.$gallery[6]['album_title'].'" src="'.base_url().'cms/'.$gallery[6]['file'].'"/></div>';
                                                            }else{ $primaryIcon7 = '';}
                                                            if($gallery[7]['file'] != ''){
                                                            $primaryIcon8 = '<div class="item"><img alt="'.$gallery[7]['album_title'].'" src="'.base_url().'cms/'.$gallery[7]['file'].'"/></div>';
                                                            }else{ $primaryIcon8 = '';}
                                                            if($gallery[8]['file'] != ''){
                                                            $primaryIcon9 = '<div class="item"><img alt="'.$gallery[8]['album_title'].'" src="'.base_url().'cms/'.$gallery[8]['file'].'"/></div>';
                                                            }else{ $primaryIcon9 = '';}
                                                            if($gallery[9]['file'] != ''){
                                                            $primaryIcon10 = '<div class="item"><img alt="'.$gallery[9]['album_title'].'" src="'.base_url().'cms/'.$gallery[9]['file'].'"/></div>';
                                                            }else{ $primaryIcon10 = '';}
                                                            if($gallery[10]['file'] != ''){
                                                            $primaryIcon11 = '<div class="item"><img alt="'.$gallery[10]['album_title'].'" src="'.base_url().'cms/'.$gallery[10]['file'].'"/></div>';
                                                            }else{ $primaryIcon11 = '';}
                                                            if($gallery[11]['file'] != ''){
                                                            $primaryIcon12 = '<div class="item"><img alt="'.$gallery[11]['album_title'].'" src="'.base_url().'cms/'.$gallery[11]['file'].'"/></div>';
                                                            }else{ $primaryIcon12 = '';}
                                                            if($gallery[2]['file'] != ''){
                                                            $primaryIcon13 = '<div class="item"><img alt="'.$gallery[12]['album_title'].'" src="'.base_url().'cms/'.$gallery[12]['file'].'"/></div>';
                                                            }else{ $primaryIcon13 = '';}
                                                            if($gallery[13]['file'] != ''){
                                                            $primaryIcon14 = '<div class="item"><img alt="'.$gallery[13]['album_title'].'" src="'.base_url().'cms/'.$gallery[13]['file'].'"/></div>';
                                                            }else{ $primaryIcon14 = '';}
                                                            if($gallery[14]['file'] != ''){
                                                            $primaryIcon15 = '<div class="item"><img alt="'.$gallery[14]['album_title'].'" src="'.base_url().'cms/'.$gallery[14]['file'].'"/></div>';
                                                            }else{ $primaryIcon15 = '';}
                                                            if($gallery[15]['file'] != ''){
                                                            $primaryIcon16 = '<div class="item"><img alt="'.$gallery[15]['album_title'].'" src="'.base_url().'cms/'.$gallery[15]['file'].'"/></div>';
                                                            }else{ $primaryIcon16 = '';}
                                                            if($gallery[16]['file'] != ''){
                                                            $primaryIcon17 = '<div class="item"><img alt="'.$gallery[16]['album_title'].'" src="'.base_url().'cms/'.$gallery[16]['file'].'"/></div>';
                                                            }else{ $primaryIcon17 = '';}
                                                            if($gallery[17]['file'] != ''){
                                                            $primaryIcon18 = '<div class="item"><img alt="'.$gallery[17]['album_title'].'" src="'.base_url().'cms/'.$gallery[17]['file'].'"/></div>';
                                                            }else{ $primaryIcon18 = '';}
                                                            if($gallery[18]['file'] != ''){
                                                            $primaryIcon19 = '<div class="item"><img alt="'.$gallery[18]['album_title'].'" src="'.base_url().'cms/'.$gallery[18]['file'].'"/></div>';
                                                            }else{ $primaryIcon19 = '';}
                                                            if($gallery[19]['file'] != ''){
                                                            $primaryIcon20 = '<div class="item"><img alt="'.$gallery[19]['album_title'].'" src="'.base_url().'cms/'.$gallery[19]['file'].'"/></div>';
                                                            }else{ $primaryIcon20 = '';}
                                                            if($gallery[20]['file'] != ''){
                                                            $primaryIcon21 = '<div class="item"><img alt="'.$gallery[20]['album_title'].'" src="'.base_url().'cms/'.$gallery[20]['file'].'"/></div>';
                                                            }else{ $primaryIcon21 = '';}                                                            
                                                        }else{
                                                            $primaryIcon = '';
                                                        } ?>
                                                   <?php
                                               }
                                               ?>  
                                                        <div class="col-md-8">
                                                          <div class="big-images">

                                                            <?php echo $primaryIcon; ?>                                                         
                                                            <?php echo $primaryIcon2; ?>                                                    
                                                            <?php echo $primaryIcon3; ?>                                                    
                                                            <?php echo $primaryIcon4; ?>
                                                            <?php echo $primaryIcon5; ?>
                                                            <?php echo $primaryIcon6; ?>                                                         
                                                            <?php echo $primaryIcon7; ?>                                                    
                                                            <?php echo $primaryIcon8; ?>                                                    
                                                            <?php echo $primaryIcon9; ?>
                                                            <?php echo $primaryIcon10; ?>
                                                            <?php echo $primaryIcon11; ?>                                                         
                                                            <?php echo $primaryIcon12; ?>                                                    
                                                            <?php echo $primaryIcon13; ?>                                                    
                                                            <?php echo $primaryIcon14; ?>
                                                            <?php echo $primaryIcon15; ?>
                                                            <?php echo $primaryIcon16; ?>                                                         
                                                            <?php echo $primaryIcon17; ?>                                                    
                                                            <?php echo $primaryIcon18; ?>                                                    
                                                            <?php echo $primaryIcon19; ?>
                                                            <?php echo $primaryIcon20; ?>
                                                            <?php echo $primaryIcon21; ?>                                                            
                                                          </div>
                                                          <br/>
                                                          <div class="thumbs">
                                                            <?php echo $primaryIcon; ?>                                                         
                                                            <?php echo $primaryIcon2; ?>                                                    
                                                            <?php echo $primaryIcon3; ?>                                                    
                                                            <?php echo $primaryIcon4; ?>
                                                            <?php echo $primaryIcon5; ?>
                                                            <?php echo $primaryIcon6; ?>                                                         
                                                            <?php echo $primaryIcon7; ?>                                                    
                                                            <?php echo $primaryIcon8; ?>                                                    
                                                            <?php echo $primaryIcon9; ?>
                                                            <?php echo $primaryIcon10; ?>
                                                            <?php echo $primaryIcon11; ?>                                                         
                                                            <?php echo $primaryIcon12; ?>                                                    
                                                            <?php echo $primaryIcon13; ?>                                                    
                                                            <?php echo $primaryIcon14; ?>
                                                            <?php echo $primaryIcon15; ?>
                                                            <?php echo $primaryIcon16; ?>                                                         
                                                            <?php echo $primaryIcon17; ?>                                                    
                                                            <?php echo $primaryIcon18; ?>                                                    
                                                            <?php echo $primaryIcon19; ?>
                                                            <?php echo $primaryIcon20; ?>
                                                            <?php echo $primaryIcon21; ?>                                                            
                                                          </div>	
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h3 class="sub-title"><?php echo $gallery[0]['album_name']; ?></h3>
                                                            <?php echo $gallery[0]['date']; ?> <span class="red-dot"></span> <?php echo $gallery[0]['album_title']; ?>
                                                            <p>
                                                              <?php echo $gallery[0]['album_description']; ?>
                                                            </p>

                                                            <br>
                                                            <br>

                                                        </div>          
        </div>
    </div>
</section>
<?php endif; ?>