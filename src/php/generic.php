<?php

/*
** This is another variant of the static page, but it uses the _def_header and _def_footer files,
** but then includes custom content in the body of the page. A slightly more useful version of a
** page on the site, but doesn't include a fully customizeable header...
*/

include_once ('functions.php');
include_once ('sqlfuncs.php');

include ('inc/_def_header.html');

?>
    <div class="heading">
        <h3>Generic Page</h3>
        <p>A great man once said, "I've got nothing to say."</p>
    </div>
    
    <div class="content">
        <h4>Default Content</h4>
        <p>If there were any purpose for this page, I could explain that right here. But there isn't, so I either have to make something up, or just ramble on until I get tired of typing. Oh look, I'm tired of typing. <em>Toodaloo</em> &lt;-- I had to <a href="google.com">Google</a> that spelling. Just FYI.</p>
    </div>

<?php

include ('inc/_def_footer.html');

?>
