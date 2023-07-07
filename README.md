# WordPress Barcode Generator Plugin

This WordPress plugin allows users to generate and print barcodes from the browser. The plugin uses PHP for server-side operations, while the client-side is handled with HTML, CSS, and jQuery.

## Features:

1. Product detail entry through a form interface
2. Generation of barcodes corresponding to the product details
3. Direct printing of barcodes from the browser

## Usage:
* Clone this repository into your WordPress plugins folder.
* Activate the plugin from the WordPress admin panel.
* Use the shortcode `[barcode_generator]` to embed the barcode generator form on any page or post.
* Fill in the product details in the form and click "Generate & Print Barcodes" to create your barcodes.

## Files:
1. `index.php`: The main plugin file, includes the HTML form for collecting product details.
2. `barcode.php`: The PHP script for generating barcodes based on user input.
3. `scripts.js`: Contains jQuery code for handling form submission and AJAX request to the barcode.php.
4. `styles.css`: Contains the styles for the form and the barcode.

## License:

This project is licensed under the MIT License.

## Contributions:

Contributions are welcome. Please make a pull request.

## Issues:

If you find a bug or have a suggestion for improvement, please file an issue on this repository.

##### Thank you for using our WordPress Barcode Generator Plugin. Happy Coding!
