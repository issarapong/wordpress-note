<html lang="en">
<head>
<title><?php the_title(); ?></title>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="description" content="<?php $mykey_values = get_post_custom_values('_aioseop_description');
foreach ( $mykey_values as $key => $value ) {
echo substr("$value",0 ,1000); //This will display the first 150 symbols
} ?>">
<meta name="author" content="xxx">
<meta name="keywords" content="<?php $mykey_values = get_post_custom_values('_aioseop_keywords');
foreach ( $mykey_values as $key => $value ) {
echo substr("$value",0 ,1000); //This will display the first 150 symbols
} ?>">
