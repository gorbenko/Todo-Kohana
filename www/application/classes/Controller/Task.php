<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Task extends Controller {

    public function action_list()
    {
        $out = '';
        $date = $this->request->param('date');

        if (is_null($date)) {
            $tasks = ORM::factory('task')->find_all();
            foreach($tasks as $task) {
                $out .= View::factory('task', $task->as_array());
            }
        } else {
            $task = ORM::factory('task')->where('date_start', '=', $this->datetotime($date))->find();
            $out = View::factory('task', $task->as_array());
        }
        echo $out;
    }

    protected function datetotime($str)
    {
        return strtotime(str_replace(".", "-", $str));
    }

    public function action_add()
    {
        $keys = array ('date_start', 'date_end', 'date_finish', 'description');
        $input = Arr::extract($_POST, $keys, NULL);

        $task = ORM::factory('task');
        $task->date_start = $this->datetotime($input['date_start']);
        $task->date_end = $this->datetotime($input['date_end']);
        $task->date_finish = $this->datetotime($input['date_finish']);
        $task->description = $input['description'];

        $task->save();

        if ($task->saved())
            echo json_encode(array('success' => true));
        else
            echo json_encode(array('success' => false));
    }

    public function action_delete()
    {
        $id = $this->request->param('id');

        if (!is_null($id)) {
            ORM::factory('task')->where('id', '=', $id)->find()->delete();
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => false));
        }
    }
}
