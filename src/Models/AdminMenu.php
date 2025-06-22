<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Relations\BelongsTo; class AdminMenu extends BaseModel { protected $guarded = array(); const TYPE_ROUTE = 1; const TYPE_LINK = 2; const TYPE_IFRAME = 3; const TYPE_PAGE = 4; public static function getType() : array { return [self::TYPE_ROUTE => admin_trans("\141\x64\155\151\x6e\56\x61\144\x6d\x69\156\137\155\145\156\x75\x2e\x72\x6f\165\x74\x65"), self::TYPE_LINK => admin_trans("\141\144\x6d\x69\x6e\x2e\141\x64\x6d\x69\156\x5f\155\145\156\165\56\154\151\x6e\153"), self::TYPE_IFRAME => admin_trans("\141\x64\155\151\156\x2e\x61\x64\155\151\156\137\155\x65\x6e\165\x2e\x69\146\x72\x61\155\145"), self::TYPE_PAGE => admin_trans("\x61\144\x6d\151\x6e\56\141\x64\155\x69\x6e\137\155\145\156\165\x2e\160\x61\x67\145")]; } public function parent() : BelongsTo { return $this->belongsTo(self::class, "\x70\141\x72\x65\x6e\164\137\151\144"); } public function title() : Attribute { return Attribute::get(function ($IyStN) { goto bwiQn; vAi24: return $twF5v == $Dv8Xm ? $IyStN : $twF5v; goto Sbcbl; bwiQn: $Dv8Xm = ($this->extension ? $this->extension . "\72\x3a" : '') . "\155\x65\156\x75\x2e{$IyStN}"; goto b5zen; b5zen: $twF5v = admin_trans($Dv8Xm); goto vAi24; Sbcbl: }); } }
