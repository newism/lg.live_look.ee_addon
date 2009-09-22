#!/bin/bash

# This script creates symlinks from the local GIT repo into your EE install. It also copies some of the extension icons.

dirname=`dirname "$0"`

echo ""
echo "Creating symlinks for LG Live Look"
echo "----------------------------------"
echo ""
echo "Enter the path to your ExpressionEngine Install without a trailing slash [ENTER]:"
read ee_path
echo "Enter your system folder name [ENTER]:"
read ee_system_folder

ln -s "$dirname"/system/extensions/ext.lg_live_look_ext.php "$ee_path"/"$ee_system_folder"/extensions/ext.lg_live_look_ext.php
ln -s "$dirname"/system/extensions/lg_live_look "$ee_path"/"$ee_system_folder"/extensions

ln -s "$dirname"/system/language/english/lang.lg_live_look_ext.php "$ee_path"/"$ee_system_folder"/language/english/lang.lg_live_look_ext.php
ln -s "$dirname"/themes/cp_themes/default/lg_live_look "$ee_path"/themes/cp_themes/default/lg_live_look