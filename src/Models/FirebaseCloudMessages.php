<?php

namespace Uasoft\Badaso\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class FirebaseCloudMessages extends Model
{
    use LogsActivity;

    protected $table = null;

    /**
     * Constructor for setting the table name dynamically.
     */
    public function __construct(array $attributes = [])
    {
        $prefix = config('badaso.database.prefix');
        $this->table = $prefix.'firebase_cloud_messages';
        parent::__construct($attributes);
    }

    protected $fillable = [
        'user_id',
        'token_get_message',
    ];

    protected static $logAttributes = true;
    protected static $logFillable = true;
    protected static $logName = self::class;

    public function getDescriptionForEvent(string $eventName): string
    {
        return "This model has been {$eventName}";
    }
}
