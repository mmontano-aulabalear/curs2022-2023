<?php $x=1;echo "<h1>PRE-</h1><h2>INCREMENTO</h2>
<pre><code>x=$x; ++x; x=".++$x,"; x=$x;</code></pre>";
$x=1;echo "<h2>DECREMENTO</h2>
<pre><code>x=$x; --x; x=".--$x,"; x=$x;</code></pre>";
$x=1;echo "<h1>POST-</h1><h2>INCREMENTO</h2>
<pre><code>x=$x; x++; x=".$x++,"; x=$x;</code></pre>";
$x=1;echo "<h2>DECREMENTO</h2>
<pre><code>x=$x; x--; x=".$x--,"; x=$x;</code></pre>"?>