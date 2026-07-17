<?php

get_header();

?>


<main class="site-container">


<?php

echo do_blocks(
'
<!-- wp:pattern {"slug":"estate-theme/hero-premium"} /-->

<!-- wp:pattern {"slug":"estate-theme/property-search"} /-->

<!-- wp:pattern {"slug":"estate-theme/property-types"} /-->

<!-- wp:pattern {"slug":"estate-theme/property-grid"} /-->

<!-- wp:pattern {"slug":"estate-theme/location-grid"} /-->

<!-- wp:pattern {"slug":"estate-theme/agent-grid"} /-->

<!-- wp:pattern {"slug":"estate-theme/cta"} /-->
'
);


?>


</main>


<?php

get_footer();

?>