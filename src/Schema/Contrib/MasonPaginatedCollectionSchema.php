<?php
namespace Phonedotcom\Mason\Schema\Contrib;

use Phonedotcom\Mason\Schema\DocumentSchema;

class MasonPaginatedCollectionSchema extends MasonCollectionSchema
{
    public function __construct($properties = [])
    {
        parent::__construct($properties);

        $this
            ->setRequiredProperty('offset', 'integer', ['title' => 'Number of records skipped'])
            ->setRequiredProperty('limit', 'integer', ['title' => 'Maximum number of items displayed']);
    }
}
