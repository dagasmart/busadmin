<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Exceptions; use DagaSmart\BizAdmin\Admin; use Exception; class AdminException extends Exception { private $data; private $doNotDisplayToast; public function __construct($x5f_0 = '', $J6yf0 = array(), $t64Wu = 0) { goto rG3_5; rG3_5: parent::__construct($x5f_0); goto CWiuH; CWiuH: $this->data = $J6yf0; goto sm6xx; sm6xx: $this->doNotDisplayToast = $t64Wu; goto nqWcD; nqWcD: } public function render() { return Admin::response()->doNotDisplayToast($this->doNotDisplayToast)->fail($this->getMessage(), $this->data); } public function report() { } }
