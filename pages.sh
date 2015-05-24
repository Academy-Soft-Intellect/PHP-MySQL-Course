#!/bin/bash
cd ./pages/
rm -rf ./*
cd ../
mkdir ./pages/slides
cp -r ./slides/html/* ./pages/slides/
php cache.php