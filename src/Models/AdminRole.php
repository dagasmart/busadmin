<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminRole extends BaseModel { use HasTimestamps; const SuperAdministrator = "\x61\144\x6d\x69\x6e\x69\x73\x74\x72\141\164\157\x72"; const SuperDeveloper = "\x64\x65\166\145\x6c\157\x70\145\162"; public function permissions() : \Illuminate\Database\Eloquent\Relations\BelongsToMany { return $this->belongsToMany(AdminPermission::class, "\141\144\x6d\151\x6e\x5f\x72\x6f\154\145\x5f\x70\145\x72\x6d\x69\x73\x73\x69\157\156\163", "\162\x6f\x6c\x65\x5f\151\x64", "\x70\145\162\155\151\163\163\x69\x6f\x6e\137\x69\x64")->withTimestamps(); } protected static function boot() : void { parent::boot(); static::deleting(function (AdminRole $MWice) { $MWice->permissions()->detach(); }); } public function users() { return $this->belongsToMany(AdminUser::class, "\x61\x64\x6d\x69\156\x5f\x72\157\x6c\145\x5f\x75\163\x65\x72\163", "\162\x6f\x6c\x65\x5f\151\144", "\x75\163\x65\x72\x5f\x69\x64")->withTimestamps(); } }
