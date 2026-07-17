<?php
/**
 * Title: Property Card
 * Slug: estate-theme/property-card
 */
?>


<article class="property-card">


<div class="property-card-image">

<img
src="<?php
echo esc_url(
estate_property()->image()
);?>"
alt="">

</div>


<div class="property-card-content">


<div class="property-card-type">

<span class="property-badge">

<?php

echo esc_html(
estate_card_badge()
);

?>

</span>

</div>


<h3>
<?php echo 
    esc_html(
    estate_property()->title()
    );
?>
</h3>


<p>

<?php

echo esc_html(
estate_property()->location()
);

?>

</p>


<div class="property-meta">

<?php
estate_render_fields(
    estate_card_type()
);
?>

</div>


<div class="property-footer">


<strong class="property-price">


<?php

echo esc_html(
estate_property()->price()
);


echo esc_html(
estate_card_price_label()
);

?>


</strong>


<a>
Zobacz
</a>


</div>


</div>


</article>