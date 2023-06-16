<?php 
namespace App\Services;

use App\ActivityLog;
use Jenssegers\Agent\Agent;

class ActivityService 
{
    protected $activityLog;
    public function __construct(ActivityLog $activityLog)
    {
        $this->activityLog = $activityLog;
    }

    public function enterActivity($user_activity,$email)
    {
        $agent = new Agent();
        $platform = $agent->platform();
        // Ubuntu, Windows, OS X,...
        $browser = $agent->browser();
        $this->activityLog->create([
            'ip_address' => \Request::ip(),
        ]);
    }
}