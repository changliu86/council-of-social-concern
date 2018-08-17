<div class="page-header">
    @php
        $post_id = get_the_ID();
        $image_url = wp_get_attachment_url( get_post_thumbnail_id($post_id) ); 
        $default_image_url = 'http://council-of-social-concern.test/wp-content/uploads/2018/08/hero-image-3.jpg';
        if(!$image_url) {
            $image_url =  $default_image_url;
        }
    @endphp
    <div class="jumbotron jumbotron-fluid" style="background-image: url('<?php echo $image_url; ?>');">
        <div class="container" >
            <h1 class="display-4 text-center">@php echo the_title(); @endphp</h1>
            @php 
                $desc = get_field('page_header_desc'); 
                if($desc){
                    echo '<p class="lead text-center mt-5">' . $desc . '</p>';
                }
            @endphp
        </div>

    </div>
</div>
