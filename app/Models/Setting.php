<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value'];

    /**
     * Get all settings as key-value array
     *
     * @return array
     */
    public static function getAllSettings()
    {
        $settings = [];
        $allSettings = self::all();

        foreach ($allSettings as $setting) {
            $settings[$setting->key] = $setting->value;
        }

        return $settings;
    }

    /**
     * Get setting value by key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function getSetting($key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Set setting value
     *
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public static function setSetting($key, $value)
    {
        $setting = self::firstOrNew(['key' => $key]);
        $setting->value = $value;
        return $setting->save();
    }
}
