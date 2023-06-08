use Illuminate\Support\Facades\Log;
 
$channel = Log::build([
  'driver' => 'single',
  'path' => storage_path('logs/custom.log'),
]);
 
Log::stack(['slack', $channel])->info('Something happened!');
