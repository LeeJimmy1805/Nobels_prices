<?php
    class Controller_list extends Controller {
        public function action_default() {
            $this->action_last();
        }

        public function action_last() {
            $m = Model::getModel();
            $data = [
                "tab" => $m->getLast()
            ];
            $this->render('last',$data);
        }

        public function action_informations() {
            $m = Model::getModel();
            if ( isset($_GET['id']) && preg_match("#^\d+$#",$_GET['id']) && $_GET['id']>0 && $m->isInDataBase($_GET['id'])) {
                $data = [
                    "info" => $m->getNobelPrizeInformations($_GET['id'])
                ];
                $this->render('informations',$data);
            }
            else {
                $this->action_error();
            }
        }

        public function action_pagination() {
            $m = Model::getModel();

            if (isset($_GET['start']) && preg_match("#^\d$#",$_GET['start'])){
                if ($_GET['start']<=0) {
                    $_GET['start'] = 1;
                }
                $this->render('pagination');
            }
            else {
                $data = [
                    "title" => "ERROR",
                    "message" => "Page inexistante !"
                ];
                $this->render('message',$data);
            }
        }

    }

?>
