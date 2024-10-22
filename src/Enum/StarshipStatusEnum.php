<?php

namespace App\Model;

enum StarshipStatusEnum: string
{
    case WAITING = 'Waiting';
    case IN_PROGRESS = 'In progress';
    case COMPLETED = 'Completed';
}