<?php
namespace App\Controller;

use DateTime;

class Task  {

    private int $taskId;
    private string $title;
    private string $description;
    private int $projectId;
    private DateTime $dueDate;
    private bool $isCompleted;
    private int $priority;
    private bool $status;
    private int $recurrenceId;
    
    
    public function __construct(string $title)
    {
        if (!is_null($title)) {
            $this -> title = $title;
        }
    }

    /**
     * Get the value of taskId
     */
    public function getTaskId(): int
    {
        return $this->taskId;
    }

    /**
     * Set the value of taskId
     */
    public function setTaskId(int $taskId): self
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of projectId
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * Set the value of projectId
     */
    public function setProjectId(int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get the value of dueDate
     */
    public function getDueDate(): DateTime
    {
        return $this->dueDate;
    }

    /**
     * Set the value of dueDate
     */
    public function setDueDate(DateTime $dueDate): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get the value of isCompleted
     */
    public function isIsCompleted(): bool
    {
        return $this->isCompleted;
    }

    /**
     * Set the value of isCompleted
     */
    public function setIsCompleted(bool $isCompleted): self
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    /**
     * Get the value of priority
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * Set the value of priority
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of recurrenceId
     */
    public function getRecurrenceId(): int
    {
        return $this->recurrenceId;
    }

    /**
     * Set the value of recurrenceId
     */
    public function setRecurrenceId(int $recurrenceId): self
    {
        $this->recurrenceId = $recurrenceId;

        return $this;
    }
}