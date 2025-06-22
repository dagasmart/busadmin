<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; class AdminSetting extends BaseModel { protected $table = "\141\x64\155\151\156\x5f\163\x65\x74\164\151\156\147\163"; protected $primaryKey = "\151\144"; protected $guarded = array(); protected $casts = array("\166\x61\154\x75\145\x73" => "\152\163\157\x6e"); protected function asJson($IyStN, $lUqls = true) { return json_encode($IyStN, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); } }
