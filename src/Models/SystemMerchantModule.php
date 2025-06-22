<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Support\Facades\DB; use DagaSmart\BizAdmin\Traits\CommonTrait; use Illuminate\Database\Eloquent\SoftDeletes; class SystemMerchantModule extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\163\171\163\164\145\155\x5f\155\x65\x72\143\x68\x61\x6e\x74\x5f\x6d\x6f\144\x75\x6c\145"; public function stateOption() { return [["\154\x61\142\x65\154" => "\346\x98\257", "\x76\141\154\x75\145" => 1], ["\x6c\141\142\145\x6c" => "\345\220\246", "\x76\141\x6c\165\145" => 0]]; } public function moduleOption() { goto CieBI; CieBI: $xMP0D = []; goto qbap0; jY7C5: YQAnU: goto uINQu; JivWt: $Y9Rd5 = 0; goto QvF0S; uINQu: return $xMP0D; goto IK4JS; qbap0: if (!($qA4Xw = $this->getModules())) { goto YQAnU; } goto JivWt; QvF0S: array_walk($qA4Xw, function (&$IyStN, $ZAY66) use(&$Y9Rd5, &$xMP0D) { goto d6ODB; P6s86: $xMP0D[$Y9Rd5]["\166\x61\x6c\x75\x65"] = $ZAY66; goto ZMQAv; ZMQAv: $Y9Rd5++; goto rufhe; d6ODB: $xMP0D[$Y9Rd5]["\154\x61\x62\x65\154"] = $ZAY66; goto P6s86; rufhe: }); goto jY7C5; IK4JS: } }
