<?php
/**
 * Title: Property Card
 * Slug: estate-theme/property-card
 */
?>


<article class="property-card">


<div class="property-card-image">

<img 
src=""
alt=""
/>

</div>


<div class="property-card-content">


<div class="property-card-type">

Mieszkanie

</div>


<h3>
<?php echo esc_html
(
    estate_property_title()
);?>
</h3>


<p class="property-location">

Warszawa Centrum

</p>


<div class="property-meta">


<span>
72 m²
</span>


<span>
3 pokoje
</span>


<span>
4 piętro
</span>


</div>


<div class="property-footer">


<strong>
<?php echo esc_html(
estate_property_price()
); ?>
</strong>


<a>
Zobacz
</a>


</div>


</div>


</article>