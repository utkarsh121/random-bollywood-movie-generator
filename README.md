# Random Bollywood Movie Block Plugin

**Version**: 1.0  
**Author**: Utkarsh Choudhary

## Description

The Random Bollywood Movie Block Plugin is a WordPress plugin that allows you to easily fetch and display a random Bollywood movie using data from the TMDb (The Movie Database) API.

## Features

- Generates a random Bollywood movie with a hyperlink to its TMDb info page.
- Customizable API request parameters for language, sorting, and more.
- Easy integration into your WordPress posts and pages using a shortcode.

## Installation

1. **Download the Plugin**:
   - Download the plugin php file from the [GitHub repository](https://github.com/utkarsh21/random-bollywood-movie-generator).
   - Extract the ZIP file to your local computer.

2. **Upload to WordPress**:
   - Log in to your WordPress dashboard.

3. **Activate the Plugin**:
   - Navigate to "Plugins" in your WordPress dashboard.
   - Click the "Add New" button.
   - Click the "Upload Plugin" button and select the extracted plugin file.
   - Click "Install Now," and then click "Activate."

4. **Configure the Plugin**:
   - Go to "Plugins" > "Plugin File Editor."
   - Navigate to "Random Bollywood Movie Block" and enter your TMDb API key in the code.
   - Edit sorting and origin language parameters as per your need.

## Usage

After activating the plugin and configuring the settings, you can add a random Bollywood movie block to your posts or pages using a shortcode. Here's how:

1. **Create or Edit a Post/Page**:
   - Go to "Posts" or "Pages" in your WordPress dashboard.
   - Create a new post/page or edit an existing one.

2. **Add a Classic Block**:
   - Click the "Add Block" button.
   - Search for "Classic" and select the "Classic" block.

3. **Insert the Shortcode**:
   - In the Classic Block editor, switch to "HTML" mode by clicking the three vertical dots in the block toolbar and selecting "Code Editor."
   - Insert the `[random-bollywood-movie-block]` shortcode where you want the movie to appear.

   ```html
   [random-bollywood-movie-block]

## Behavior

This classic block will produce a random Bollywood movie name. On my site this event takes place on page load, but this can be customized for a button click event as well. Please see the site URL link for this repository for a working demo.
