<div id="wrapper"><?php

Import::view('top.wizard');

?>
<div id="page-wrapper"><?php

Import::view(suffix($page, '.wizard'), $pdata ?? NULL);

?>

</div>

<div class="container-fluid">
  <p class="text-muted text-right" style="margin-top:12px">ZN Framework Dashboard, Copyright © 2017 ZN Framework, All Rights Reserved</p>
</div>

</div>
