#!/bin/bash
echo Enter your Block Title:;
read block_title;
echo Enter your Block name:;
read block_name;
cd blocks;
mkdir $block_name;
cd $block_name;
echo '{
	"name": "acf/'$block_name'",
	"title": "'$block_title'",
	"description": "A custom '$block_title' block.",
	"editorScript": ["block-'$block_name'"],
	"script": ["block-'$block_name'"],
	"category": "theme-blocks",
	"icon": "admin-comments",
	"keywords": ["'$block_name'"],
	"supports": {
		"align": true
	},
	"acf": {
		"mode": "edit",
		"renderTemplate": "block-'$block_name'.php"
	},
	"example": {
		"attributes": {
			"mode": "preview",
			"data": {
				"preview": "'$block_name'-preview.webp"
			}
		}
	},
	"align": "full"
}' > block.json
cd ../;
cp acfblock/block-acfblock.php $block_name/block-$block_name.php;
cp acfblock/acfblock.js $block_name/$block_name.js;
cp acfblock/acfblock-preview.webp $block_name/$block_name-preview.webp;
