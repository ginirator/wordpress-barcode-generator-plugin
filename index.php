<?php
/*
Plugin Name: WordPress Barcode Generator
Plugin URI: https://github.com/ginirator/WordPress-Barcode-Generator-Plugin
Description: A WordPress plugin for generating barcodes.
Author: Valeriu Dodon
Author URI: https://ginirator.com/
Version: 1.0
License:  GPLv2 or later
*/

function barcode_generator_form() {
    ob_start(); ?>

    <form class="form-horizontal" id="barcodeForm">
        <div class="form-group">
            <label class="control-label" for="product">Product Name:</label>
            <div class="col-sm-10">
                <input autocomplete="ON" type="text" class="form-control" id="product" name="product" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="product_id">Product ID:</label>
            <div class="col-input-control">
                <input autocomplete="ON" type="text" class="form-control" id="product_id" name="product_id" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="rate">Product Price:</label>
            <div class="col-input-control">
                <input autocomplete="ON" type="text" class="form-control" id="rate"  name="rate" required="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label" for="print_qty">Barcode Quantity:</label>
            <div class="col-input-control">
                <input autocomplete="ON" type="number" class="form-control" id="print_qty"  name="print_qty" required="">
            </div>
        </div>

        <div class="form-group">
            <div class="col-submit-button">
                <button type="submit" class="btn btn-default">Generate Barcode</button>
            </div>
        </div>
    </form>

    <?php
    return ob_get_clean();
}
add_shortcode('barcode_generator', 'barcode_generator_form');

// Enqueue the JS and CSS files
function enqueue_barcode_scripts() {
    wp_enqueue_style('barcode-generator-css', plugin_dir_url(__FILE__) . 'styles.css', array(), '1.0');

    wp_enqueue_script('barcode-generator-js', plugin_dir_url(__FILE__) . 'scripts.js', array('jquery'), '1.0', true);
    // Localize the script with new data.
    $script_data_array = array(
        'online_tool_url' => plugins_url('', __FILE__)
    );
    wp_localize_script('barcode-generator-js', 'online_tool_object', $script_data_array);
}
add_action('wp_enqueue_scripts', 'enqueue_barcode_scripts');
