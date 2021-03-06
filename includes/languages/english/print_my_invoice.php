<?php
/*
  $Id: print_my_invoice.php,v 6.1 2005/06/05 18:17:59 PopTheTop Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

//// START Edit the following defines to your liking ////

// Footing
define('INVOICE_TEXT_THANK_YOU', 'Thank you for shopping at'); // Printed at the bottom of your invoices
define('STORE_URL_ADDRESS', 'http://www.totallock.com'); // Your web address Printed at the bottom of your invoices
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Order Status:');

// Image Info
define('INVOICE_IMAGE', 'images/pop-the-top_logo1.gif'); //Change this to match your logo image and foler it is in
define('INVOICE_IMAGE_WIDTH', '238'); // Change this to your logo's width
define('INVOICE_IMAGE_HEIGHT', '54'); // Change this to your logo's height
define('INVOICE_IMAGE_ALT_TEXT', STORE_NAME); // Change this to your logo's ALT text or leave blank

// Product Table Info Headings
define('TABLE_HEADING_PRODUCTS_MODEL', 'SKU #'); // Change this to "Model #" or leave it as "SKU #"

//// END Editing the above defines to your liking ////

define('INVOICE_TEXT_INVOICE_NR', 'Invoice #.: ');
define('INVOICE_TEXT_INVOICE_DATE', 'Date of invoice: ');
// Misc Invoice Info
define('INVOICE_TEXT_NUMBER_SIGN', '#');
define('INVOICE_TEXT_DASH', '-');
define('INVOICE_TEXT_COLON', ':');

define('INVOICE_TEXT_INVOICE', 'Invoice');
define('INVOICE_TEXT_ORDER', 'Order');
define('INVOICE_TEXT_DATE_OF_ORDER', 'Date of Order');
define('INVOICE_TEXT_DATE_DUE_DATE', 'Payment Date');
define('ENTRY_PAYMENT_CC_NUMBER', 'Credit Card:');

// Customer Info
define('ENTRY_SOLD_TO', 'SOLD TO:');
define('ENTRY_SHIP_TO', 'SHIP TO:');
define('ENTRY_PAYMENT_METHOD', 'Payment:');

// Product Table Info Headings
define('TABLE_HEADING_PRODUCTS', 'Products');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Price (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Price (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inc)');
define('TABLE_HEADING_TAX', 'Tax');
define('TABLE_HEADING_UNIT_PRICE', 'Unit Price');
define('TABLE_HEADING_TOTAL', 'Total');

// Order Total Details Info
define('ENTRY_SUB_TOTAL', 'Sub-Total:');
define('ENTRY_SHIPPING', 'Shipping:');
define('ENTRY_TAX', 'Tax:');
define('ENTRY_TOTAL', 'Total:');

//Order Comments
define('TABLE_HEADING_COMMENTS', 'ORDER COMMENTS:');
define('TABLE_HEADING_DATE_ADDED', 'Date Added');
define('TABLE_HEADING_COMMENT_LEFT', 'Comment Left');
define('INVOICE_TEXT_NO_COMMENT', 'No comments have been left for this order');
?>
