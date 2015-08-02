Event management and registration - Extend Demo
===============================================

## What is it?

This TYPO3 CMS extension is a demo extension to show how to extend sf_event_mgt.
The extension has been created with the extension builder and does the following:

* Extend the event domain model with the new field "Entrance"
* Extend the registration domain model with the new fields "Hotel room needed" and "Fax"

All extensino builder related files are kept, so you can load this demo extension directly
with the extension builder.

## Short manual how to extend sf_event_mgt

1. Create a new extension with the extension builder
2. Add sf_event_mgt as a dependency for your new extension
3. Create a new table and add the new properties (fields). For each new table, select "Extend existing model class"
and enter the class of the sf_event_mgt table you want to extend (e.g. \DERHANSEN\SfEventMgt\Domain\Model\Event)
4. Save the extension
5. Install the extension
6. Use new fields in backend and frontend

## Important notes

###Update existing records###
If your TYPO3 installation does already contain events or registrations, make sure to update existing records so the new field "tx_extbase_type" (the so called "Record type") is set in each table that you extend. 

Use a database management tool like phpMyAdmin to adjust the field. The value needed depends on the name of your extension and the extended model. For this demo extension the correct values are:

* For the Events table: "Tx_SfEventMgtExtendDemo_Event" 
* For the Registrations table: "Tx_SfEventMgtExtendDemo_Registration"

The easiest way to derived the correct value for your table is to create one new record and to look the value up in the "tx_extbase_type" field of this record. Then copy it to all existing records.

###Extending registration domain model###
If you extend the registration domain model, make sure to add the following to ext_typoscript_setup.txt

```
config.tx_extbase{
    objects {
        DERHANSEN\SfEventMgt\Controller\EventController.className = VENDOR\YourExtenstionKey\Controller\EventController
    }
}
```

Also make sure, that your extension contains a controller, which contains the `saveRegistrationAction` as shown
in this demo extension.

## Links

sf_event_mgt is available on GitHub at https://github.com/derhansen/sf_event_mgt
