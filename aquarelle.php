<?php 
/**
 * Partial: aquarelle.php
 * 
 * @package: WordPress
 * @sub-package: maat-or-the-improved-bootstrap
 * 
 * Aquarelle Library Sample
?>

<?php
/**
 * Enqueue additional scripts  
 */

/*
add this to functions.php: 

function petjmaatFpScripts() {
    wp_enqueue_script( 'three.js', get_template_directory_uri() . 'bower_components/three.js/build/three.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Aquarelle.js', get_template_directory_uri() . 'bower_components/aquarelle/Aquarelle.js', array(), '1.0.0', true );
    wp_enqueue_script( 'EffectComposer.js', get_template_directory_uri() . 'bower_components/three.js/examples/js/postprocessing/EffectComposer.js', array(), '1.0.0', true );
    wp_enqueue_script( 'ClearPass.js', get_template_directory_uri() . 'bower_components/three.js/examples/js/postprocessing/ClearPass.js', array(), '1.0.0', true );
    wp_enqueue_script( 'AquarellePass.js', get_template_directory_uri() . 'bower_components/aquarelle/AquarellePass.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Shaderpass.js', get_template_directory_uri() . 'bower_components/three.js/examples/js/postprocessing/ShaderPass.js', array(), '1.0.0', true );
    wp_enqueue_script( 'CopyShader.js', get_template_directory_uri() . 'bower_components/three.js/examples/js/shaders/CopyShader.js', array(), '1.0.0', true );
    // the last one should be a local copy ...
    wp_enqueue_script( 'GeomContour.js', 'https://bl.ocks.org/mbostock/raw/4241134/d3.geom.contour.min.js', array(), '1.0.0', true );    
}
add_action( 'wp_enqueue_scripts', 'petjmaatFpScripts' );

*/
?>

<H3>Aquarelle</H3>
<p>Here's a JavaScript Plugin</p>
<div id="animeret">
    <img class="aquarelleImg" src="<?php bloginfo('template_url')?>/images/multimusen.png"><!-- watercolor effect image -->
</div>
<h5>Specificaitons </h5>
<ul>
    <li>Enqueue scripts (funcitons.php)</li>
    <li>Template parts (aquarelle.php)</li>
    <li>Use template parts (index.php)</li>
</ul>

<!-- for the aquarelle animation -->
<script>
    /**
     * Billedet som skal manipuleres fra DOM
     */
    var image = document.getElementsByTagName('img')[1]; // nb: address the correct image here ...
    //var image = document.getElementsByClass('aquarelleImg')['0'];

    /**
     * Billede og maske kombineres
     */
    var aquarelle = new Aquarelle( 
        '<?php bloginfo('template_url')?>/images/multimusen.png', 
        '<?php bloginfo('template_url')?>/images/mask.png', {
            autoplay: true,
            loop: false
    }); // loop (false: holder op, true: looper)

    /**
     * Eventlistener
     * Renser og genskaber canvas
     * = animation
     */
    aquarelle.addEventListener('created', function() {
        var canvas = this.getCanvas(); // skaber canvas
        canvas.removeAttribute('style'); // fjerner en attribut
        image.parentNode.insertBefore(canvas, image.nextSibling); // næste billedinstans indsættes
        image.parentNode.removeChild(image); // fjerner unødvendigt billede
    });
</script>
