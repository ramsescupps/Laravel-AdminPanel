<?php

namespace App\Http\Requests\Api\Application\DatabaseHosts;

use App\Models\DatabaseHost;

class UpdateDatabaseHostRequest extends StoreDatabaseHostRequest
{
    public function rules(array $rules = null): array
    {
        /** @var DatabaseHost $databaseHost */
        $databaseHost = $this->route()->parameter('database_host');

        return $rules ?? DatabaseHost::getRulesForUpdate($databaseHost->id);
    }
}
