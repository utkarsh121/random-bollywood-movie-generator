<?php
/*
Plugin Name: Random Bollywood Movie Block
Description: Adds a custom block to fetch and display random Bollywood movies.
Version: 1.0
Author: Utkarsh Choudhary
*/

// Shortcode function for the custom block
function random_bollywood_movie_block_shortcode($atts) {
    // Your custom block functionality goes here
    // Fetch and display a random Bollywood movie using TMDb API

    // Replace 'YOUR_TMDB_API_KEY' with your actual TMDb API key
    $api_key = 'YOUR_TMDB_API_KEY';

    // Customize the API request URL as needed
    $url = 'https://api.themoviedb.org/3/discover/movie';
    $params = array(
        'api_key' => $api_key,
        'language' => 'en-US',
        'with_original_language' => 'hi',
        'sort_by' => 'popularity.desc',
        'include_adult' => false,
        'page' => rand(1, 100), // Random page number
    );

    // Build the URL with query parameters
    $request_url = add_query_arg($params, $url);

    // Fetch data from the API
    $response = wp_remote_get($request_url);

    // Check for successful API response
    if (is_array($response) && !is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body);

        // Check if movies are found
        if (isset($data->results) && !empty($data->results)) {
            // Get a random movie from the results
            $random_movie = $data->results[array_rand($data->results)];
            $movie_title = esc_html($random_movie->title);
            $movie_id = $random_movie->id;

            // Generate the movie info URL
            $movie_info_url = 'https://www.themoviedb.org/movie/' . $movie_id;

            // Display the movie title as a hyperlink
            return '<div>Random Bollywood Movie: <a href="' . esc_url($movie_info_url) . '" target="_blank">' . $movie_title . '</a></div>';
        } else {
            return '<div>No Bollywood movies found.</div>';
        }
    } else {
        return '<div>Error fetching data. Please try again later.</div>';
    }
}

// Register the shortcode
add_shortcode('random-bollywood-movie-block', 'random_bollywood_movie_block_shortcode');
