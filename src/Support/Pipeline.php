<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Support\Traits\Conditionable; class Pipeline extends \Illuminate\Pipeline\Pipeline { use Conditionable; public static function handle($OFMAV) { return app(self::class)->send($OFMAV); } }
