<li><a href="https://indieauth.com/auth?client_id=<?php echo urlencode(\Idno\Core\site()->config()->getURL()); ?>&redirect_uri=<?php echo urlencode(\Idno\Core\site()->config()->getURL()); ?>indieauth%2Fcallback&me=<?php echo urlencode(\Idno\Core\site()->config()->getURL()); ?>">Sign In</a></li>

<?=$this->draw('shell/toolbar/logged-out/items')?>
