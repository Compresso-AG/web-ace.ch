<?php
/**
 * Global SVG defs for Ace. Include once per page.
 * Provides the hand-drawn "wobble" filter that all Ace SVGs reference.
 */
?>
<svg class="ace-defs" xmlns="http://www.w3.org/2000/svg" width="0" height="0" aria-hidden="true" focusable="false">
    <defs>
        <filter id="ace-wobble" x="-8%" y="-8%" width="116%" height="116%">
            <feTurbulence type="fractalNoise" baseFrequency="0.032" numOctaves="2" seed="1" result="noise"/>
            <feDisplacementMap in="SourceGraphic" in2="noise" scale="3.8"/>
        </filter>
    </defs>
</svg>
