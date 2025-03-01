<?php
    class ComponentsController extends BaseController {
        public function button() {
            $this->view("components/buttons");
        }

        public function card() {
            $this->view("components/cards");
        }
    }
?>