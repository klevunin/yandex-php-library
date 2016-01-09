<?php

namespace Yandex\Market\Content\Models;

use Yandex\Market\Content\Models\Base\PagedModel;

class ResponseVendorsListGet extends PagedModel
{
    protected $mappingClasses = array(
        'items' => 'Yandex\Market\Content\Models\Vendors'
    );

    protected $propNameMap = array(
        'vendor' => 'items'
    );

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data['vendorList']);
    }
}
