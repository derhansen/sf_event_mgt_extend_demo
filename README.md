Event management and registration - Extend Demo
===============================================

## What is it?

This TYPO3 CMS extension is a demo extension to show how to extend sf_event_mgt.
The extension has been created with the extension builder and does the following:

* Extend the event domain model with the new field "Entrance"
* Extend the registration domain model with the new fields "Hotel room needed" and "Fax"

All extension builder related files are kept, so you can load this demo extension directly
with the extension builder.

## Short manual how to extend sf_event_mgt

1. Install ext:extender from TYPO3 Extension Repository
2. Create a new extension with the extension builder
3. Add sf_event_mgt as a dependency for your new extension
4. Create a new table and add the new properties (fields). For each new table, select "Extend existing model class"
and enter the class of the sf_event_mgt table you want to extend (e.g. \DERHANSEN\SfEventMgt\Domain\Model\Event)
5. Save the extension
6. Add configuration for ext:extender in ext_localconf.php of your extension
7. Install the extension
8. Use new fields in backend and frontend

###Extending controller actions
If you want to extend an action of sf_event_mgt, you can extend to whole class in ext_typoscript_setup.txt like shown 
below (example for extending the EventController)

```
config.tx_extbase{
    objects {
        DERHANSEN\SfEventMgt\Controller\EventController.className = VENDOR\YourExtenstionKey\Controller\EventController
    }
}
```

## Links

* ext:sf_event_mgt is available on GitHub at https://github.com/derhansen/sf_event_mgt
* ext:extender in TYPO3 Extension Repository https://typo3.org/extensions/repository/view/extender
