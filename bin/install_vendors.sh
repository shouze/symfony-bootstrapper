#!/bin/sh

# initialization
DIR=`php -r "echo realpath(dirname(\\$_SERVER['argv'][0]));"`
VENDOR=$DIR/src/vendor

if [ -d $VENDOR ]; then
  rm -rf $VENDOR/*
else
  mkdir $VENDOR
fi

cd $VENDOR

# Symfony
git clone git://github.com/symfony/symfony.git symfony

# Doctrine ORM
git clone git://github.com/doctrine/doctrine2.git doctrine
cd doctrine
git checkout -b v2.0.0-BETA3 2.0.0-BETA3
cd $VENDOR

# Doctrine DBAL
git clone git://github.com/doctrine/dbal.git doctrine-dbal
cd doctrine-dbal
git checkout -b v2.0.0-BETA3 2.0.0-BETA3
cd $VENDOR

# Doctrine Common
git clone git://github.com/doctrine/common.git doctrine-common
cd doctrine-common
git checkout -b v2.0.0-BETA4 2.0.0-BETA4
cd $VENDOR

# Doctrine migrations
git clone git://github.com/doctrine/migrations.git doctrine-migrations

# Doctrine MongoDB
git clone git://github.com/doctrine/mongodb-odm.git doctrine-mongodb
cd doctrine-mongodb
git checkout -b v1.0.0BETA1 1.0.0BETA1
cd $VENDOR

# Twig
git clone git://github.com/fabpot/Twig.git twig

# Zend Framework
git clone git://github.com/zendframework/zf2.git zend
