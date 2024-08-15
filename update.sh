#!/bin/bash
version=$1
composerversion=$1

if [ "$version" == "" ]; then
    echo 'Defaulting to @dev for version, use argument to change this'
    version="@dev"
    composerversion="@dev"
fi

if [ $version != "@dev" ]; then
    composerversion=`echo ^$version`
    echo "Use $composerversion for $version in composer"
fi

rm -rf bin
rm -rf src
rm .gitattributes.dist

mv .gitattributes .gitattributes.project

composer require devdot/cli $composerversion
composer require devdot/cli-builder $composerversion --dev
vendor/bin/cli-builder init --force --no-interaction

mv .gitattributes .gitattributes.dist
mv .gitattributes.project .gitattributes

if [ $version != "@dev" ]; then
    echo "Releasing version $version"
    git add .
    git commit -m "Release $version"  
    git tag v$version
fi
