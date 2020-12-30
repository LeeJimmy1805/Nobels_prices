<?php
    class Controller_set extends Controller {
        public function action_default() {
            $this->action_form_add();
        }

        public function action_form_add() {
            $this->render('form_add');
        }

        public function action_add() {
            $m = Model::getModel();
            $ajout = $m->check_data();
            if ( $ajout != false) {
                $m->addNobelPrize($ajout);
                $data = [
                    "title" => "SUCCESS",
                    "message" => "Le prix nobel à bien été enregistré."
                ];
                $this->render('message',$data);
            }
            else {
                $data = [
                    "title" => "FAILED",
                    "message" => "Il manque des informations essentielles."
                ];
                $this->render('message',$data);
            }
        }

        public function action_remove() {
            $m = Model::getModel();
            if (isset($_GET['id']) && preg_match("#^\d+$#",$_GET['id'])) {
                $m->removeNobelPrize($_GET['id']);
                $data = [
                    "title" => "SUCCESS",
                    "message" => "Le prix nobel a bien été supprimé."
                ];
                $this->render('message',$data);
            }
            else {
                $data = [
                    "title" => "FAILED",
                    "message" => "Il y a une ou plusieurs erreurs."
                ];
                $this->render('message',$data);
            }
        }

        public function action_form_update() {
            $m = Model::getModel();

            if (isset($_GET['id']) && $m->isInDataBase($_GET['id'])) {
                $data = [
                    "category" => $m->getCategories(),
                    "person" => $m->getNobelPrizeInformations($_GET['id'])
                ];
                $this->render("form_update",$data);
            }
            else {
                $data = [
                    "title" => "FAILED",
                    "message" => "Il y a une ou plusieurs erreurs."
                ];
                $this->render("message",$data);
            }
        }

        public function action_update() {
            $m = Model::getModel();
            $info = $m->check_data_x2();
            if ( $info != false ) {
                $m->updateNobelPrize($info);
                $data = [
                    "title" => "SUCCESS",
                    "message" => "Mise à jour des informations effectives."
                ];
                $this->render('message',$data);
            }
            else {
                $data = [
                    "title" => "FAILED",
                    "message" => "Il y a une ou plusieurs erreurs."
                ];
                $this->render('message',$data);

            }
        }

    }

?>
