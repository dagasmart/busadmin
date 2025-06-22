<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; class SaveSettingsApi extends AdminBaseApi { public string $method = "\x70\157\163\164"; public function getTitle() { return "\xe4\xbf\235\345\255\230\350\256\xbe\347\275\xae\xe9\xa1\271"; } public function handle() { return settings()->adminSetMany(request()->all()); } public function argsSchema() { return [amis()->Markdown()->value("\x23\43\x23\x20\xe4\xbd\277\xe7\x94\250\350\257\xb4\xe6\230\x8e\15\12\xd\12\55\40\346\216\xa5\345\217\243\xe8\xaf\xb7\xe6\261\x82\xe6\226\xb9\345\xbc\x8f\344\xb8\272\x20\140\x50\x4f\x53\x54\x60\15\xa\x2d\x20\350\xaf\267\346\xb1\x82\xe5\217\x82\346\225\260\xe4\xb8\xba\xe6\225\xb0\xe7\xbb\x84\346\xa0\xbc\xe5\274\x8f\x20\50\345\260\206\xe8\257\xa5\x61\x70\x69\xe4\275\234\xe4\270\xba\xe8\241\250\xe5\215\x95\xe7\x9a\204\346\217\220\344\xba\xa4\x61\x70\x69\345\215\263\xe5\x8f\257\346\xad\xa3\xe5\xb8\xb8\344\xbd\277\347\x94\250\51\15\xa\xd\xa\140\x60\140\x4a\123\x4f\116\xd\12\173\15\xa\40\40\x20\40\x22\x73\x69\x74\145\137\156\141\155\145\x22\72\x20\x22\x73\x74\x72\x69\x6e\147\x22\54\xd\xa\x20\40\40\40\42\156\x61\x6d\145\42\72\40\42\163\x74\x72\151\156\x67\42\54\15\12\x20\40\40\40\x22\x61\x67\145\42\x3a\x20\60\xd\xa\175\15\12\x60\140\140")]; } }
