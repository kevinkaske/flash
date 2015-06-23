# Flash
Flash is a Rails-like flash library written in PHP.

##Installation (Composer)
Simply add the following to composer.json 
```json
{
	"require": {
		"kevinkaske/flash": "dev-master"
	}
}
```

Then run `composer install`. Composer will install the dependant libraries.

##Uasge
After some action is done call code similar to the following:
```php
<? flash('notice', 'User has been added.'); ?>
```
This code is setting a flash message to be called on the next page and putting it in the "notice" category.

On the next page (usually this goes in a layout page) use some code like the following:
```php
<? if(isFlashMessage()){ ?>
  <div class="alert-message success">
    <p><?= getFlash('notice'); ?></p>
  </div>
<? } ?>
```

You can (of course) change this anyway you see fit