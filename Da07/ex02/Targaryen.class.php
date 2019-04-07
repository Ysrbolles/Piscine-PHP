<?php
    class Targaryen {
        public function resistsFire() {
            return false;
        }
        public function getBurned() {
            if(static::resistsFire()) {
                return "emerges naked but unharmed";
            } else {
                return "burns alive";
        }
    }
}
?>