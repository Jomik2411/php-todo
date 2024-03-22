<?php

namespace App\Model;

require 'vendor/autoload.php';

USE App\Controller\Task;
use DateTime;
USE SQLite3;


class TaskModel extends SQLite3 {

    private string $sqlQuery;
    private Task $task;


    function __construct()
    {
        $this -> open('php-todo.db');
    }

    public function getAllTasks() : array {
        // renvoie la liste des taches de la table

        $array = array();
        $this -> sqlQuery = 
            <<<SQL
                SELECT * FROM tasks
                ORDER BY due_date DESC, priority ASC;
            SQL
        ;
        $statement = $this -> prepare($this -> sqlQuery);
        $result = $statement -> execute();
        while ($data = $result -> fetchArray(SQLITE3_ASSOC)) {
            $this -> task = new Task($data['title']);
            $this -> task -> setTaskId($data['task_id']);
            $this -> task -> setPriority($data['priority']);
            $this -> task -> setRecurrenceId($data['recurrence_id']);
            $this -> task -> setDueDate($data['due_date']);
            $this -> task -> setStatus($data['active']);
            $this -> task -> setIsCompleted($data['is_completed']);
            $this -> task -> setDescription($data['description']);
            array_push($array,$this -> task);
  
        }

        return $array;

    }

    public  function execQueries(string $query) : string|array {
        if ($this) {
            if(!is_null($query)){
    
            }else {
    
            }
        } else {
            die($this -> lastErrorMsg());
          
        }
        

    }

    public function getTask() : array|Task {
        // renvoie une tache en particulier ou un groupe de tache en fonction du critere de recherche fourni en parametre


    }

    public function getTaskById(int $id) : Task {
        // renvoie une liste de taches par ID

        $this -> sqlQuery =
            <<<SQL
                SELECT * 
                FROM tasks
                WHERE task_id =:task_id;
            SQL
        ;
        
    }

    public function getTasksByProject(int $id) : array {
        //renvoie la liste de toutes les taches d'un project
    }

    public function getTasksByPriority(int $priority) : Task {
        // renvoie toutes les taches en function d'une priorite
    }

    public function getTasksByDueDate(DateTime $date) : array {
        // renvoie les taches dont la due date est passee en parametre
    }

    public function getTasksByPeriod(DateTime $start,DateTime $end) :array {
        //renvoie les taches dues sur une periode de temps
    }

    public function getTaskByStatus(string $status) : array {
        // renvoie les taches eun function du status
    }

    public function deleteTask() : bool {
        //delete an existing task
    }

    public function updateTask() : bool {

        // update task
    }



}