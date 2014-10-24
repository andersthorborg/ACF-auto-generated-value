# ACF Field Type Template

Welcome to the Advanced Custom Fields field type template repository.
Here you will find a starter-kit for creating a new ACF field type. This start-kit will work as a normal WP plugin.

For more information about creating a new field type, please read the following article:
http://www.advancedcustomfields.com/resources/tutorials/creating-a-new-field-type/

### Structure

* `/css`:  folder for .css files.
* `/images`: folder for image files
* `/js`: folder for .js files
* `/lang`: folder for .pot, .po and .mo files
* `acf-auto_generated_value.php`: Main plugin file that includes the correct field file based on the ACF version
* `auto_generated_value-v5.php`: Field class compatible with ACF version 5
* `auto_generated_value-v4.php`: Field class compatible with ACF version 4
* `readme.txt`: WordPress readme file to be used by the wordpress repository

### step 1.

This template uses `PLACEHOLDERS` such as `auto_generated_value` throughout the file names and code. Use the following list of placeholders to do a 'find and replace':

* `auto_generated_value`: Single word, no spaces. Underscores allowed. eg. donate_button
* `Auto-generated value`: Multiple words, can include spaces, visible when selecting a field type. eg. Donate Button
* `https://github.com/andersthorborg/`: Url to the github or WordPress repository
* `hidden,auto,unique,repeater`: Comma seperated list of relevant tags
* `Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms.`: Brief Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms. of the field type, no longer than 2 lines
* `EXTENDED_Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms.`: Extended Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms. of the field type
* `Kindly`: Name of field type author
* `http://kindly.dk`: URL to author's website

### step 2.

Edit the `auto_generated_value-v5.php` and `auto_generated_value-v4.php` files (now renamed using your field name) and include your custom code in the appropriate functions.
Please note that v4 and v5 field classes have slightly different functions. For more information, please read:
* http://www.advancedcustomfields.com/resources/tutorials/creating-a-new-field-type/

### step 3.

Edit this `README.md` file with the appropriate information and delete all content above and including the following line.

-----------------------

# ACF Auto-generated value Field

Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms.

-----------------------

### Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms.

EXTENDED_Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms.

### Compatibility

This ACF field type is compatible with:
* ACF 5
* ACF 4

### Installation

1. Copy the `acf-auto_generated_value` folder into your `wp-content/plugins` folder
2. Activate the Auto-generated value plugin via the plugins admin page
3. Create a new field via ACF and select the Auto-generated value type
4. Please refer to the Creates a hidden/readonly field in a repeater that gets a unique key, that won't change once it is saved. Ideal for user-generated forms. for more info regarding the field type settings

### Changelog
Please see `readme.txt` for changelog
