<?php
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class NewsItem extends Model 
{
    use LogsActivity;

    protected $fillable = ['name','text'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::default()->logOnly(['name','text']);
    }
}


$newsItem = NewsItem::create([
    'name' => 'original name',
    'text' => 'Lorum',
]);

$activity = Activity::all()->last();

$activity->description;
$activity->subject;
$activity->changes;


$newsItem->name = "updated name";
$newsItem->save();

$activity = Activity::all()->last();

$activity->description;
$activity->subject;

$newsItem->delete();

$activity = Activity::all()->last();

$activity->description;
$activity->changes;


use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class NewsItem extends Model
{
    use LogsActivity

    //only the `deleted` event will get logged automatically
    protected static $recordEvents = ['deleted'];
}

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class NewsItem extends Model
{
    use LogsActivity;

    protected $fillable = ['name','text'];

    public function getActivitylogOptions()
    {
        return LogOptions::defaults()->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}");       
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

$newsItem = NewsItem::create([
    'name' => 'Title',
    'preferences' => [
        'notifications' => [
            'status' => 'on',
        ],
        'hero_url' => 'http://example.com/hero.png'
    ]
]);


$lastActivity = Activity::latest()->first();

$lastActivity->properties->toArray();


use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class NewsItem extends Model
{
    use LogsActivity;

    protected $fillable = ['name','text'];

    public function getActivitylogOptions()
    {
        return LogOptions::defaults()->logOnly(['text'])->logOnlyDirty()->dontSubmitEmptyLogs();
    }
}

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;

class NewsItem extends Model 
{
    use LogsActivity;

    public function tapActivity(Activity $activity,string $eventName)
    {
        $activity->description = "activity.logs.message.{$eventName}";
    }
}