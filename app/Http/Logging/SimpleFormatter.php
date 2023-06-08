<?php

namespace App\Logging;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;


class NewsItem extends Model
{
    use LogsActivity;
    protected $fillable = ['name','text'];
    public function getActivitylogOptions():LogOptions
    {
        return LogOptions::defaults()->logOnly(['name','text']);
    }
}



class SimpleFormatter
{
    public function __invoke($logger)
    {
        foreach($logger->getHandlers() as $handler){
            $handler->setFormatter(
                new LineFormatter('[%datetime%]: %message% %context%')
            );
        }
    }
}