<?php 

// This code creates the query arguments
// Note that the numberpost value is -1
// and the meta_value is ''
// This will ensure there we get all of the units returned no
// matter what the default return count is set to in wordpress
$unit_post_type_query = array(
  'post_type'=> 'unit',
  'numberposts' => -1,
  'post_status' => 'publish',
  'meta_key' => 'locationname',
  'meta_value' => ''
);

// This code uses the list of info above to get the posts out of the database
$unitPosts = get_posts($unit_post_type_query);

// This code creates an empty array that will be used to
// store all of the possible location values
$allLocations = array();

// This code loops through all of the unit posts and 
// adds its location value to the empty list we made above
foreach( $unitPosts as $unit ) {
  array_push($allLocations, get_post_meta( $unit->ID, 'locationname', true));
}

// Because added every unit's location to the location list,
// there are now duplicate locations in the list. This code takes the
// list of locations and filters it so that it only contains unique values
// As of this writing, it should only contain three values:
// Cudahy, Eastside and Bayview
$locations = array_unique($allLocations);


// This code is a slightly reworked version of your previous loop.
// In this code, instead of looping through all of the unit posts, we only 
// loop through the locations in our unique location list.
// On each pass through the loop, we create the location header,
// Then we run a second loop that only returns units with the same location
// as the current location value
foreach ($locations as $location) {
  
  //This line creates the header for the current location
  echo "<article class='post'><a><h2>" . $location . "</h2></a></article>";

  //This line changes the value of 'meta_value' to the current location
  //This means the next time we make a query, it will only contain the units from the current location
  $unit_post_type_query['meta_value'] = $location;

  //This line runs the query with the new meta_value that matches our current loop's location
  $get_location_units = new WP_Query($unit_post_type_query);

  // This code now loops through all the posts returned in the previous line of code
  if ( $get_location_units->have_posts() ) {
    while ( $get_location_units->have_posts() ) {
      $get_location_units->the_post();
      
      // This is where the unit display code lives
      ?>	
      <main id="secondary-section">

        <article <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>">
          <?php the_title('<h3>','</h3>'); the_post_thumbnail(); ?> </a>
        
        <ul>
          <li><h4>Address</h4><p><?php the_field('address');?></p></li>
          <li><h4>Bedrooms</h4><p><?php the_field('bedrooms'); ?></p></li>
          <li><h4>Rent Amount</h4><p><?php the_field('rent_per_month'); ?></p></li>
          <li><h4>SQFT</h4><p><?php the_field('sqft'); ?></p></li>
        </ul>
          

        </article>
      </main>

      <?php

    }
  } else {
    // This is just a fail safe should no locations have been returned
    ?> <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p> <?php
  }

  

}