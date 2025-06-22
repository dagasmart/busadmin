<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\141\x64\155\151\x6e\56\x61\163\x73\x65\x74"); } public static function js($vxjiK = null) { return static::asset()->js($vxjiK); } public static function css($A24DA = null) { return static::asset()->css($A24DA); } public static function scripts($P7JPt = null) { return static::asset()->scripts($P7JPt); } public static function styles($MEqaa = null) { return static::asset()->styles($MEqaa); } public static function getAssets() { return ["\x6a\x73" => static::asset()->js(), "\143\163\x73" => static::asset()->css(), "\x73\x63\x72\151\160\164\163" => static::asset()->scripts(), "\163\x74\x79\154\145\163" => static::asset()->styles()]; } public static function appendNav($VUeDd = null) { return static::asset()->appendNav($VUeDd); } public static function prependNav($F5oVI = null) { return static::asset()->prependNav($F5oVI); } public static function getNav() { return ["\x61\x70\x70\145\156\144\x4e\141\166" => static::asset()->appendNav(), "\x70\162\x65\x70\x65\x6e\144\116\x61\166" => static::asset()->prependNav()]; } }
