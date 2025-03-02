<?php

namespace Dipokhalder\Settings\Repositories;

use Dipokhalder\Settings\Contracts\Repository as RepositoryContract;
use Dipokhalder\Settings\EntryFilter;

abstract class Repository implements RepositoryContract
{
    /**
     * Settings filter instance.
     */
    protected EntryFilter $entryFilter;

    /**
     * Set settings filter.
     */
    public function withFilter(EntryFilter $filter): Repository
    {
        $this->entryFilter = $filter;

        return $this;
    }
}
