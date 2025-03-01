<?php
    class UtilitiesController extends BaseController {
        public function color() {
            $this->view("utilities/colors");
        }

        public function border() {
            $this->view("utilities/borders");
        }

        public function animation() {
            $this->view("utilities/animations");
        }

        public function other() {
            $this->view("utilities/other");
        }
    }
?>