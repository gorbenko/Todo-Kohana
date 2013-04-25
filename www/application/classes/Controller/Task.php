<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Task extends Controller {

    public function action_list()
    {
        $out = '';
        $date = $this->request->param('date');

        if (is_null($date))
        {
            $tasks = ORM::factory('task')->find_all();
            foreach($tasks as $task) {
                $out .= View::factory('task', $task->as_array());
            }
            $out = View::factory('tasks', array('tasks' => $out));
        }
        else
        {
            $tasks = ORM::factory('task')->where('date_start', '=', $this->datetotime($date))->find();
            if ($tasks->loaded())
			{
                $out = View::factory('tasks', array('tasks' => View::factory('task', $tasks->as_array())));
			}
            else
			{
                $out = View::factory('task404', array('date' => $date));
			}
        }
        echo $out;
    }

    public function action_show()
    {
        $id = $this->request->param('id');
        $task = ORM::factory('task', $id)->as_array();
        $task['date_start'] = date('d.m.Y', $task['date_start']);
        $task['date_end'] = date('d.m.Y', $task['date_end']);
        $task['date_finish'] = date('d.m.Y', $task['date_finish']);
        echo json_encode($task);
    }

    public function action_save()
    {
        $keys = array ('date_start', 'date_end', 'date_finish', 'description');
        $input = Arr::extract($_POST, $keys, NULL);

        $id = $this->request->param('id');
        $task = ORM::factory('task', $id);

        $task->date_start = $this->datetotime($input['date_start']);
        $task->date_end = $this->datetotime($input['date_end']);
        $task->date_finish = $this->datetotime($input['date_finish']);
        $task->description = HTML::chars($input['description']);

        $task->save();

        if ($task->saved())
        {
            echo json_encode(array('success' => true));
        }
        else
        {
            echo json_encode(array('success' => false));
        }
    }

    public function action_delete()
    {
        $id = $this->request->param('id');

        if (!is_null($id))
        {
            ORM::factory('task')->where('id', '=', $id)->find()->delete();
            echo json_encode(array('success' => true));
        }
        else
        {
            echo json_encode(array('success' => false));
        }
    }

    protected function datetotime($str)
    {
        return strtotime(str_replace(".", "-", $str));
    }
}
