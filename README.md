# eZ Platform Demo

![Screenshot](https://cloud.githubusercontent.com/assets/3033038/11806375/e116d414-a312-11e5-8675-02a23e2a7788.jpg "Screenshot")

[![Build Status](https://img.shields.io/travis/ezsystems/ezplatform.svg?style=flat-square)](https://travis-ci.org/ezsystems/ezplatform)
[![Downloads](https://img.shields.io/packagist/dt/ezsystems/ezplatform.svg?style=flat-square)](https://packagist.org/packages/ezsystems/ezplatform)
[![Latest release](https://img.shields.io/github/release/ezsystems/ezplatform.svg?style=flat-square)](https://github.com/ezsystems/ezplatform/releases)
[![License](https://img.shields.io/packagist/l/ezsystems/ezplatform.svg?style=flat-square)](LICENSE)

## What is eZ Platform ?
*eZ Platform* is a 100% open source professional CMS (Content Management System) developed by eZ Systems and the eZ Community.

Current *eZ Platform v2* is the 7th generation of *eZ Publish*, it is built on top of the Symfony 3.4LTS framework (Full Stack).
It has been in development since 2011, and integral part of the *eZ Publish Platform 5.x* as "Platform stack" since 2012.

#### What is eZ Platform Demo ?

*eZ Platform Demo* is an example of a simple website using *[eZ Platform](https://github.com/ezsystems/ezplatform)*.
_This demo should not be use for starting a new project, but can serve as as an example for how to do it._

Features:
- Blog
- Gallery
- Contact Form

## Installation

NOTE: *For simplified installation, consider using community supported [eZ Launchpad](https://ezsystems.github.io/launchpad/) which takes care of the whole server setup for you.*

Installation instructions below are for installing a demo installation of eZ Platform in latest version _with_ demo content and demo website.
Full installation documentation is kept current [in the online docs](https://doc.ezplatform.com/en/latest/getting_started/install_using_composer/), and includes
instructions on installing other distributions _(like [ezplatform "clean"](https://github.com/ezsystems/ezplatform) and [ezplatform-ee](https://github.com/ezsystems/ezplatform-ee) enterprise edition)_, or other versions.

#### Prerequisites

These instructions assume you have already installed:
- PHP _(7.1 or higher)_
- Web Server _(Recommended: Apache / Nginx. Use of php's built in development server is also possible)_
- Database server _(MySQL 5.5+ or MariaDB 10.0+)_
- [Composer](https://doc.ezplatform.com/en/latest/getting_started/about_composer/)
- Git _(for development)_

For further information [on requirements see online doc](https://doc.ezplatform.com/en/latest/getting_started/requirements_and_system_configuration/).


#### Install eZ Platform _(demo distribution)_

Assuming you have prerequisites sorted out, you can get the install up and running with the following commands in your terminal:

``` bash
composer create-project --keep-vcs ezsystems/ezplatform-demo ezplatform ^2
cd ezplatform
```

_Note: If  composer is installed localy instead of globally, the first command will start with `php composer.phar`._

During the installation process you will be asked to input things like database host name, login, password, etc.
They will be placed in `<ezplatform>/app/config/parameters.yml`.

Next you will receive instructions on how to install data into the database, and how to run a simplified dev server using the `bin/console server:run` command.
_Tip: For a more complete and better performing setup using Apache or Nginx, read up on how to [install eZ Platform manually](https://doc.ezplatform.com/en/latest/getting_started/install_manually/)._

## Issue tracker
Submitting bugs, improvements and stories is possible on https://jira.ez.no/browse/EZP.
If you discover a security issue, please see how to responsibly report such issues on https://doc.ez.no/Security.

## Backwards compatibility
eZ Platform aims to be **100% content compatible** with eZ Publish 5.x, 4.x and 3.x *(introduced in 2002)*, meaning that content in those versions of the CMS can be upgraded using
[online documentation](http://doc.ez.no/eZ-Publish/Upgrading) to eZ Platform.

Unlike eZ Publish Platform 5.x, eZ Platform does not ship with eZ Publish Legacy (4.x). But this is available by optional installing [LegacyBridge](https://github.com/ezsystems/LegacyBridge/releases/) to allow eZ Platform and eZ Publish Legacy to run together, this is only recommended for migration use cases and not for new installations.

## COPYRIGHT
Copyright (C) 1999-2018 eZ Systems AS. All rights reserved.

## LICENSE
http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
