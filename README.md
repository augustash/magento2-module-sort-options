# Magento 2 Module - Sort Options

![https://www.augustash.com](http://augustash.s3.amazonaws.com/logos/ash-inline-color-500.png)

**This is a private module and is not currently aimed at public consumption.**

## Overview

The `Augustash_SortOptions` module offers improvements to catalog sort options.

## Installation

### Via Composer

Install the extension using Composer using our development package repository:

```bash
composer config repositories.augustash composer https://augustash.repo.repman.io
composer require augustash/module-sort-options:~1.0.0
bin/magento module:enable --clear-static-content Augustash_SortOptions
bin/magento setup:upgrade
bin/magento cache:flush
```

## Uninstall

After all dependent modules have also been disabled or uninstalled, you can finally remove this module:

```bash
bin/magento module:disable --clear-static-content Augustash_SortOptions
rm -rf app/code/Augustash/SortOptions/
composer remove augustash/module-sort-options
bin/magento setup:upgrade
bin/magento cache:flush
```

## Structure

[Typical file structure for a Magento 2 module](http://devdocs.magento.com/guides/v2.4/extension-dev-guide/build/module-file-structure.html).
