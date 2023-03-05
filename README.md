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

1. Create a new extension with the extension builder
2. Add sf_event_mgt as a dependency for your new extension
3. Create a new table and add the new properties (fields). For each new table, select "Extend existing model class"
and enter the class of the sf_event_mgt table you want to extend (e.g. \DERHANSEN\SfEventMgt\Domain\Model\Event)
4. Save the extension
5. Install the extension
6. Use new fields in backend and frontend

### Extending domain model manually

If you extend the event domain model manually, the following steps are required.

1. Extend tx_sfeventmgt_domain_model_event table in ext_tables.sql of your extension
2. Create and register required TCA changes using TCA overrides
3. Create a class in your own extension which extends \DERHANSEN\SfEventMgt\Domain\Model\Event
4. Map new class to use tx_sfeventmgt_domain_model_event table in Configuration/Extbase/Persistence/Classes.php

    ```
    <?php

    declare(strict_types=1);

    return [
        \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Event::class => [
            'tableName' => 'tx_sfeventmgt_domain_model_event',
        ],
    ];
    ```

5. XCLASS domain model in ext_localconf.php

    ```
    // XCLASS event
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\DERHANSEN\SfEventMgt\Domain\Model\Event::class] = [
        'className' => \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Event::class
    ];

    // Register extended domain class
    GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
        ->registerImplementation(
            \DERHANSEN\SfEventMgt\Domain\Model\Event::class,
            \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Event::class
        );

    ```

## Versions

| Version             | TYPO3     | PHP       |
| ------------------- |-----------| ----------|
| 0.5                 | 11.5      | >= 7.4    |
| 0.4                 | 10.4      | 7.2 - 7.4 |
| 0.3                 | 8.7 - 9.5 | 7.0 - 7.3 |

## Links

sf_event_mgt is available on GitHub at https://github.com/derhansen/sf_event_mgt
