<div align="center">
    <img src="/docs/symplify.png?v=3">
</div>

# Symplify - Making Everyday PHP Development Simple

[![Coverage](https://img.shields.io/coveralls/Symplify/Symplify/master.svg?style=flat-square)](https://coveralls.io/github/Symplify/Symplify?branch=master)

In [this monorepo](https://gomonorepo.org/) you'll find PHP packages that help you with:

* your **first coding standard**
* **maintenance of monorepo** and changelog
* **clean Kernel** even with Flex loading methods
* **slim and re-usable Symfony configs**

<br>

You'll find all packages in [`/packages`](/packages) directory. Here is a brief overview (tip: click on the package name to see its `README` with more detailed features):

## Coding Standard Utils

* **[Easy Coding Standard](https://github.com/Symplify/EasyCodingStandard)** - The easiest way to start a coding standard in your project. Easy, simple and intuitive. Combines both [PHP-CS-Fixer](https://github.com/friendsofphp/php-cs-fixer) and [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/EasyCodingStandard/Code_Checks?style=flat-square)](https://github.com/Symplify/EasyCodingStandard/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/easy-coding-standard.svg?style=flat-square)](https://packagist.org/packages/symplify/easy-coding-standard/stats)

* **[Coding Standard](https://github.com/Symplify/CodingStandard)** - [Final interface](http://ocramius.github.io/blog/when-to-declare-classes-final/), [`::class` Constant](https://www.tomasvotruba.cz/blog/2017/08/21/5-useful-rules-from-symplify-coding-standard/#3-class-constant-fixer) and other useful Checkers for [PHP-CS-Fixer](https://github.com/friendsofphp/php-cs-fixer) and [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/CodingStandard/Code_Checks?style=flat-square)](https://github.com/Symplify/CodingStandard/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/coding-standard.svg?style=flat-square)](https://packagist.org/packages/symplify/coding-standard/stats)

## Smarter Symfony Dependency Injection

- **[AutoBindParameter](https://github.com/Symplify/AutoBindParameter)** - Auto bind parameters for your Symfony applications

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/AutoBindParameter/Code_Checks?style=flat-square)](https://github.com/Symplify/AutoBindParameter/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/auto-bind-parameter.svg?style=flat-square)](https://packagist.org/packages/symplify/auto-bind-parameter/stats)

- **[AutowireArrayParameter](https://github.com/Symplify/AutowireArrayParameter)** - Autowire Array Parameters for Symfony applications

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/AutowireArrayParameter/Code_Checks?style=flat-square)](https://github.com/Symplify/AutowireArrayParameter/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/autowire-array-parameter.svg?style=flat-square)](https://packagist.org/packages/symplify/autowire-array-parameter/stats)

## Slim Symfony Kernel

- **[Autodiscovery](https://github.com/Symplify/Autodiscovery)** - Forget manual registration of translations, templates, mappings and routes in Symfony Application

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/Autodiscovery/Code_Checks?style=flat-square)](https://github.com/Symplify/Autodiscovery/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/autodiscovery.svg?style=flat-square)](https://packagist.org/packages/symplify/autodiscovery/stats)

- **[FlexLoader](https://github.com/Symplify/FlexLoader)** - Keep your Symfony Kernel slim again and let FlexLoader load all the configs

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/FlexLoader/Code_Checks?style=flat-square)](https://github.com/Symplify/FlexLoader/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/flex-loader.svg?style=flat-square)](https://packagist.org/packages/symplify/flex-loader/stats)

## Symfony Utils

- **[PackageBuilder](https://github.com/Symplify/PackageBuilder)** - Speed up your package DI Containers integration and Console apps to Symfony

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/PackageBuilder/Code_Checks?style=flat-square)](https://github.com/Symplify/PackageBuilder/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/package-builder.svg?style=flat-square)](https://packagist.org/packages/symplify/package-builder/stats)

- **[SmartFileSystem](https://github.com/Symplify/SmartFileSystem)** - `SplFileInfo` on Steroids

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/SmartFileSystem/Code_Checks?style=flat-square)](https://github.com/Symplify/SmartFileSystem/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/smart-file-system.svg?style=flat-square)](https://packagist.org/packages/symplify/smart-file-system/stats)

## Maintainer Utils

- **[ChangelogLinker](https://github.com/Symplify/ChangelogLinker)** - Why write `CHANGELOG.md`, when you can generate it

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/ChangelogLinker/Code_Checks?style=flat-square)](https://github.com/Symplify/ChangelogLinker/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/changelog-linker.svg?style=flat-square)](https://packagist.org/packages/symplify/changelog-linker/stats)

- **[MonorepoBuilder](https://github.com/Symplify/MonorepoBuilder)** - Validate, split, release and maintain Monorepo like a boss

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/MonorepoBuilder/Code_Checks?style=flat-square)](https://github.com/Symplify/MonorepoBuilder/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/monorepo-builder.svg?style=flat-square)](https://packagist.org/packages/symplify/monorepo-builder/stats)

- **[Statie](https://github.com/Symplify/Statie)** - [www.statie.org](https://www.statie.org) - Static website generator in PHP with Twig/Latte, that fuels [Pehapkari.cz](https://github.com/pehapkari/pehapkari.cz) and [TomasVotruba.cz](https://github.com/tomasvotruba/tomasvotruba.cz).

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/Statie/Code_Checks?style=flat-square)](https://github.com/Symplify/Statie/actions)
    [![Downloads](https://img.shields.io/packagist/dt/Symplify/statie.svg?style=flat-square)](https://packagist.org/packages/Symplify/statie/stats)

## CLI Utils

- **[SetConfigResolver](https://github.com/Symplify/SetConfigResolver)** - Loads configs to you with CLI --config, -c, --set, -s or sets parameter

    [![Build Status](https://img.shields.io/github/workflow/status/Symplify/SetConfigResolver/Code_Checks?style=flat-square)](https://github.com/Symplify/SetConfigResolver/actions)
    [![Downloads](https://img.shields.io/packagist/dt/symplify/set-config-resolver.svg?style=flat-square)](https://packagist.org/packages/symplify/set-config-resolver/stats)

## Migration Utils

- All migration utils were moved to [Migrify](https://github.com/migrify/migrify/) project.

## Install

Go to particular package and get it via `composer require`.

## Contributing & Issues

If you have issue and want to improve some package, put it all into this repository.

Fork, clone your repository and install dependencies:

```bash
git clone git@github.com:<your-name>/Symplify.git
cd Symplify
composer update
```

### 3 Steps to Contribute

- **1 feature per pull-request**
- **New feature needs tests**
- Tests and static analysis **must pass**:

    ```bash
    composer complete-check

    # coding standard issues fix with
    composer fix-cs
    ```

We would be happy to merge your feature then.
