<?php
/**
 * Title: Property Details
 * Slug: estate-theme/property-details
 */
?>


<?php

estate_render_fields(
get_post_meta(
get_the_ID(),
'_estate_type',
true
)

);

?>