<?php
trait GetStatus
{
    public $status;

    public function setStatus($status)
    {
        $this->status = 'Tipo status: ' . $status ;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
