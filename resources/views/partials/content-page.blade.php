@php the_content() @endphp
{{-- {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!} --}}
<section class="ctas">
    <div class="container d-flex">
        @php
        // check if the repeater field has rows of data
        if( have_rows('cta_field') ):
            // loop through the rows of data
            while ( have_rows('cta_field') ) : the_row();
            $cta_title = get_sub_field('cta_title');
            $cta_desc = get_sub_field('cta_desc');
        @endphp 
            <div class="col-md-4 text-center">
                <h2>@php echo $cta_title; @endphp</h2>
                <p>@php echo $cta_desc; @endphp</p>
            </div>
        @php      
            endwhile;
            else :
                // no rows found
            endif;
        @endphp
    </div>
</section>

<section class="cards-content">
    <div class="container my-5">   
        @php 
            $card_heading = get_field('card_heading'); 
            if($card_heading){
                echo '<h2 class="text-center mt-5">' . $card_heading . '</h2>';
            }

            $card_heading_desc = get_field('card_heading_desc'); 
            if($card_heading_desc){
                echo '<p class="text-center mt-5">' . $card_heading_desc . '</p>';
            }
        @endphp
    </div>
    <div class="container d-flex my-5">   
        @php
        // check if the repeater field has rows of data
        if( have_rows('card') ):
            // loop through the rows of data
            while ( have_rows('card') ) : the_row();
            $card_title = get_sub_field('card_title');
            $card_desc = get_sub_field('card_desc');
            $card_image = get_sub_field('card_image');
        @endphp 
            <div class="col-md-4 text-center">
                <img src="@php echo $card_image['url'] @endphp" alt="@php echo $card_image['alt'] @endphp" />
                <h2>@php echo $card_title; @endphp</h2>
                <p>@php echo $card_desc; @endphp</p>
            </div>
        @php      
            endwhile;
            else :
                // no rows found
            endif;
        @endphp   
    </div>
</section>
